#!/usr/bin/env python
# -*- coding: utf-8 -*- #
from __future__ import unicode_literals

AUTHOR = u''
SITENAME = u'Rolisteam'
SITEURL = 'http://ww2.rolisteam.org'

PATH = 'content'
STATIC_PATHS = ['icons']

TIMEZONE = 'Europe/Paris'

DEFAULT_LANG = u'en'

THEME = "/home/renaud/www/pelican-themes/rolisteam_theme"
#bootstrap*
#bricks* red to blue
# Flex
#gum
#notebook
# notmyidea-cms
# pelican-blue
#plumage
#tuxlite_tbs

# Feed generation is usually not desired when developing
FEED_ALL_ATOM = None
CATEGORY_FEED_ATOM = None
TRANSLATION_FEED_ATOM = None
AUTHOR_FEED_ATOM = None
AUTHOR_FEED_RSS = None

INDEX_SAVE_AS = 'blog/index.html'
INDEX_URL = 'blog/'

PAGE_SAVE_AS = '{slug}.html'
PAGE_URL = '{slug}.html'

# Blogroll
LINKS = (('Screenshots', '/screenshots.html'),
         ('Contact', '/contact.html'),
         ('References', '/references.html'),
         ('Roll on Discord', '/discord.html'),
         ('Roll on twitter', '/twitter.html'),)

# Social widget
SOCIAL = (('Github', 'http://github.com/Rolisteam'),
	      ('Facebook', 'https://www.facebook.com/rolisteam'),
          ('Twitter', 'https://twitter.com/rolisteam'),
          ('Discord', 'https://discord.gg/MrMrQwX'),
          ('Liberapay', 'https://liberapay.com/rolisteam/donate'),)

DEFAULT_PAGINATION = 10

# Uncomment following line if you want document-relative URLs when developing
#RELATIVE_URLS = True

MARKDOWN = {
    'extension_configs': {
        # https://pythonhosted.org/Markdown/extensions/index.html#officially-supported-extensions
        'markdown.extensions.codehilite': {'css_class': 'highlight'},
        'markdown.extensions.meta': {},
        'markdown.extensions.sane_lists': {},
        'markdown.extensions.smarty': {},
  #      'markdown.extensions.toc': {'permalink': True},
        'mdx_video': {},
    },
    'output_format': 'html5',
    # Allow numbered lists to not start with 1. Used in following article:
    # https://kevin.deldycke.com/2016/12/falsehoods-programmers-believe-about-falsehoods-lists/
    # See: https://pythonhosted.org/Markdown/reference.html#lazy_ol
    'lazy_ol': False,
}

MENUITEMS = (
    ('Documentation', 'http://wiki.rolisteam.org/'),
    ('Forum', 'http://forum.rolisteam.org'),
)
