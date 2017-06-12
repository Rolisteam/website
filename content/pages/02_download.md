Title: Download
Date: 2017-06-11 10:20
slug: download

## Latest Stable Version : 1.8.2
### Released on 06/05/2017 - code name: Chewb

In French:

https://www.youtube.com/watch?v=Ly4H87hxbpw

https://youtu.be/Ly4H87hxbpw

[Youtube Playlist about rolisteam v1.8](https://www.youtube.com/watch?v=&list=PLBSt0cCTFfS4InklgvVlZZ1nW3RIrrj41) (in French)



### Packages

* ![Icon]({attach}../icons/thumbWinodw.png) Windows: [Rolisteam-1.8.2-setup.exe](https://sourceforge.net/projects/rolisteam/files/1.8.2/Rolisteam-1.8.2-setup.exe/download) (including rcse)
* ![Icon]({attach}../icons/thumbapple.png) Mac Os X:  [rolisteam_v1.8.2-MacOsX_setup.dmg](http://sourceforge.net/projects/rolisteam/files/1.8.2/rolisteam_v1.8.2-MacOsX_setup.dmg/download)
* ![Icon]({attach}../icons/thumbapple.png) Mac Os X:  [rcse_v1.0.2-MacOsX_setup.dmg](http://sourceforge.net/projects/rolisteam/files/1.8.2/rcse_v1.0.2-MacOsX_setup.dmg/download) 
* ![Icon]({attach}../icons/thumbtar.png) Source (tarball): [rolisteam-1.8.2.tar.gz](http://sourceforge.net/projects/rolisteam/files/1.8.2/rolisteam-1.8.2.tar.gz/download) 
* ![Icon]({attach}../icons/thumbzip.png) Source (zip): [rolisteam-1.8.2.zip](http://sourceforge.net/projects/rolisteam/files/1.8.2/rolisteam-1.8.2.zip/download) 
* ![Icon]({attach}../icons/thumbtar.png) Source (tarball): [rcse-1.0.2.tar.gz](http://sourceforge.net/projects/rolisteam/files/1.8.2/rcse-1.0.2.tar.gz/download) 
* ![Icon]({attach}../icons/thumbzip.png) Source (zip): [rcse-1.0.2.zip](http://sourceforge.net/projects/rolisteam/files/1.8.2/rcse-1.0.2.zip/download) 


### ![Icon]({attach}../icons/thumbubuntu.png)  Ubuntu

    :::bash
    sudo add-apt-repository ppa:rolisteam/ppa
    sudo apt-get update
    sudo apt-get upgrade
    sudo apt-get install rolisteam rcse



### Arch Linux
[https://aur.archlinux.org/packages/rolisteam/](https://aur.archlinux.org/packages/rolisteam/)

## Changes in 1.8.2

* Allow user to display dice result inside string result
* When GM is not the server charactersheet are shared with everyone. (#62)
* RCSE multipage field problem (#61)
* RCSE can manage field after character creation (RCSE #4)

### Rolisteam

* Rotation of token (#56)
* add image to vectorial map from menu is working (#59)
* circle field of view position is fixed (#54)
* translation error (#49)
* crash on vectorial map (#48)
* improvement of unit convert (#51)
* New menu item is working
* Better protection on Select Type
* Display all QML error at once in rolisteam.
* Unset formula in character
* Add font support on field
* Add UTF-8 support in sheet
* Reset all id
* Display error message when user add two images with different resolution as background for pages
* formula accept every type of character between "
* fix removing first page issue
* Add font delegate
* Fix border delegate
* better improvement of model update
* Vectorial Map
* Charactersheet
* DiceParser Improvement
* Connection Dialog
* Full changelog (below)


### How To Compile and Install Rolisteam on Linux:
See documentation [Compilation on Linux](http://wiki.rolisteam.org/index.php/CompilationLinux)

## Full changelog v1.8.0
### Vectorial Map
* New map system using vectorial drawing
* Items can be modified, rotated, moved
* Avatar can be used as character token
* image can be added to the map
* management of layers
* fog of war
* Character vision
* size adaptation
* Parenthood relationship
* Grid (square or hexagon)
* Zoom level
## Character sheet
* Management of charactersheet
* Charactersheet editor
* Formula management
* Roll dice from the charactersheet
* Management of several kind of text field
* Character sheet in QML
* Update through network
* ReadOnly data
* Character sheet can have several pages
* Display several page at once
## DiceParser
* Validator with several condition and combination with logic operator (OR, AND and exclusive OR)
* Improved management of errors
* List operator accept range/probability
* Hide roll from the player but visible by everyone else (#2d6)
* Merge operator
* filter operator
* if operator
* Support modulo operator in validator
* Management of varible from the character sheet
* Support of different operator (!=)
* improve randomness by using C++11 API
* better generation for dot tree
## General
* Dynamic Management of state (add/remove)
* Dice alias can be disable
* heartbeat mechanism to prevent disconnection
* Name generator (GM Toolbox)
* Unit converter (GM Toolbox)
## Connection Dialog
- Management of several connection profile
- Define role (GM or Player), define connection mode (Host or Client), if player then define character (name, color, avatar)
## Resources management
* resources can be ordered into chapter 
* management of state of resources (open/loaded)
## Fixed Bug
* Workaround for #42 - How to auto-size Huge map
* Fix #41 - Mix between GM and player rights
* Fix #28 - hide Roll Dice from the roller enhancement
* Fix #33 - Disconnection
* Fix #22 - Characters portraits & tokens
* Fix #3 - It is not possible to move sheets around as if on a regular table
* Fix #8 - Add images into maps
## Translations
* French, English, Portuguese, Hungrian,German, Roumanian, Spanish, Turkish(partial), Dutch(partial)


## Older Versions
[Older versions]({filename}./older.md)

## What next ?
In the future release, we plan to do:
* Stand Alone server
* Shared note editor
* and more…


