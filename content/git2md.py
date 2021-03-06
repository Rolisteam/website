#!/usr/bin/python3

import shutil
import os
import tempfile
from git import Repo
from datetime import datetime

def cleanUp(homedir):
    shutil.rmtree(homedir, ignore_errors=True)

#def cleanUp(homedir,langs):
#    for lang in langs:
 #        shutil.rmtree("{}{}".format(homedir,lang), ignore_errors=True)

def clone(url, dirroot):
    return Repo.clone_from(url, dirroot)

def mkContent(homedir, lang, tag):
    path="{}/{}/{}".format(homedir,lang,tag)
    os.makedirs(path, exist_ok=True)
    return path

def commit(repo, tag):
    repo.commit(tag)

def sheetDir(lang, tag, workdir):
   return "{}/charactersheets/{}".format(workdir,lang)

def themeDir(tag, workdir):
   return "{}/themes".format(workdir)

def buildArchives(lang, tag, destination, workdir):

    themes=[]
    sheets=[]
    root = sheetDir(lang, tag,workdir)
    subfolders = [f.path for f in os.scandir(root) if f.is_dir() ]
    for folder in subfolders:
        path="{}/{}_cs".format(destination,os.path.basename(os.path.normpath(folder)))
        shutil.make_archive(path,'zip', folder)
        sheets.append("{}.zip".format(path))

    root = themeDir(tag,workdir)
    subfolders = [f.path for f in os.scandir(root) if f.is_dir() ]
    for folder in subfolders:
        path="{}/{}_theme".format(destination,os.path.basename(os.path.normpath(folder)))
        shutil.make_archive(path,'zip', folder)
        themes.append("{}.zip".format(path))

    return [sheets,themes]

def buildPage(paths, lang, tag, homedir, workdir):
    """ Title: How to use NPC Maker
        Date: 2017-06-27 10:20
        slug: tutorial02
        status: hidden
        lang: en"""

    fr={"sheettitle":"Fiche de personnage","themetitle":"Themes"}
    en={"sheettitle":"Charactersheete","themetitle":"Themes"}

    trad=en
    if(lang=='fr'):
        trad=fr

    sheets=paths[0]
    themes=paths[1]

    f = open("pages/community/community_{}_{}.md".format(lang,tag),"a")
    f.write("title: Content\ndate: {}\nslug: community{}\nstatus: hidden\nlang: {}\n\n".format(datetime.now().isoformat(' ',timespec='minutes'),tag,lang))


    f.write("\n# {}\n".format(trad["sheettitle"]))

    for sheet in sheets:
        f.write("\n* [{}]({{static}}{})".format(os.path.basename(os.path.normpath(sheet)),sheet.replace(homedir+"/","")))

    f.write("\n\n# {}\n".format(trad["themetitle"]))
    
    for theme in themes:
        f.write("\n* [{}]({{static}}{})".format(os.path.basename(os.path.normpath(theme)),theme.replace(homedir+"/","")))
        
def buildIndexPage(langs, tags, homedir):

    for lang in langs:
        f = open("pages/community/index_{}.md".format(lang),"a")
        f.write("Title: Community Content\nDate: {}\nslug: contentindex\nlang: {}\n\n".format(datetime.now().isoformat(' ',timespec='minutes'),lang))
        f.write("## Content\n")
        for tag in tags:
            f.write("[Community data for {}]({{filename}}community_{}_{}.md)  \n".format(tag,lang,tag))



def processConfig(lang, tag, homedir, workdir, repo):    
    commit(repo,tag)
    path=mkContent(homedir,lang,tag)
    paths=buildArchives(lang,tag,path,workdir)
    buildPage(paths,lang, tag,homedir,workdir)


def main():
    workdir=tempfile.mkdtemp()
    homedir="/home/renaud/www/rolisteam/content/pages/community"
    gitrepo="https://invent.kde.org/kde/rolisteam-community-data.git"
    langs=['fr','en']
    tags=['v1.8','v1.9']


    print("homedir {}".format(homedir))
    print("Workdir {}".format(workdir))

    print("clean up")
    cleanUp(homedir)

    print("clone repository")
    repo=clone(gitrepo, workdir)


    print("Start process")
    for lang in langs:
        for tag in tags:
            print("Processing lang:{} - tag:{}".format(lang,tag))
            processConfig(lang,tag, homedir, workdir, repo)

    print("build index page")
    buildIndexPage(langs,tags,homedir)
    shutil.rmtree(workdir)


if __name__== "__main__":
    main()






