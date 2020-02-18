Title: Download
Date: 2017-06-11 10:20
slug: download
lang: en

## Latest Stable Version : 1.9.2
### 1.9.2 - Released on 16/02/2020 - code name: DarkTed

We are glad to announce the release of Rolisteam v1.9.2.

## Localization:

* French
* English
* Spanish
* Portuguese (Brazil)
* Romanian
* Hungarian
* German
* Catalan
* Italian
* Dutch (partial)
* Turkish (partiel)

### Packages

#### Windows

* ![windows]({static}/iconfiles/thumbWinodw.png) Windows: [Rolisteam-1.9.2-setup.exe](https://sourceforge.net/projects/rolisteam/files/1.9.2/Rolisteam-1.9.2-setup.exe/download) (including rcse)

#### MacOS

* ![MacOs]({static}/iconfiles/thumbapple.png) Mac Os X:  [rolisteam_v1.9.2_MacOs.dmg](https://sourceforge.net/projects/rolisteam/files/1.9.2/rolisteam_v1.9.2_MacOs.dmg/download)
* ![MacOs RCSE]({static}/iconfiles/thumbapple.png) Mac Os X:  [rcse_v1.9.2_MacOs.dmg](http://sourceforge.net/projects/rolisteam/files/1.9.2/rcse_v1.9.2_MacOs.dmg/download)

#### Linux

* ![linux]({static}/iconfiles/thumblinux.png) RCSE - AppImage: [rcse-v1.9.2-x86_64.AppImage](http://sourceforge.net/projects/rolisteam/files/1.9.2/rcse-v1.9.2-x86_64.AppImage/download)
* ![linux]({static}/iconfiles/thumblinux.png) Rolisteam - AppImage: [Rolisteam_v1.9.2-x86_64.AppImage](http://sourceforge.net/projects/rolisteam/files/1.9.2/Rolisteam_1.9.2-x86_64.AppImage/download)

Those appimages have been made on Ubuntu 18.04 LTS.

##### Source
* ![tar rolisteam]({static}/iconfiles/thumbtar.png) Source (tarball): [rolisteam-1.9.2.tar.gz](http://sourceforge.net/projects/rolisteam/files/1.9.2/rolisteam-1.9.2.tar.gz/download)
* ![zip rolisteam]({static}/iconfiles/thumbzip.png) Source (zip): [rolisteam-1.9.2.zip](http://sourceforge.net/projects/rolisteam/files/1.9.2/rolisteam-1.9.2.zip/download)
* ![tar rcse]({static}/iconfiles/thumbtar.png) Source (tarball): [rcse-1.9.2.tar.gz](http://sourceforge.net/projects/rolisteam/files/1.9.2/rcse-1.9.2.tar.gz/download)
* ![zip rcse]({static}/iconfiles/thumbzip.png) Source (zip): [rcse-1.9.2.zip](http://sourceforge.net/projects/rolisteam/files/1.9.2/rcse-1.9.2.zip/download)



### ![Icon]({static}/iconfiles/thumbubuntu.png)  Ubuntu 19.04

    :::bash
    sudo add-apt-repository ppa:rolisteam/ppa
    sudo apt-get update
    sudo apt-get upgrade
    sudo apt-get install rolisteam rcse

### Arch Linux
[https://aur.archlinux.org/packages/rolisteam/](https://aur.archlinux.org/packages/rolisteam/)

### How To Compile and Install Rolisteam on Linux:
See documentation [Compilation on Linux](http://wiki.rolisteam.org/index.php/CompilationLinux)
Please pay attention that Rolisteam needs **Qt5.12** or higher.

## Full changelog v1.9.2

* Fix PDF viewer on Windows and MacOS.
* Fix crash near the player list.

## Full changelog v1.9.1

* Fix textarea behaviour
* Fix image loading into vmap from menu

## Full changelog v1.9.0

### New features

* Standalone multiroom Server
* Webpage
* PDF viewer and sharing
* Shared note (Fix #45)
* Undo/redo
* Dice bookmark
* NPC maker panel
* Management of Character Shape, Action and properties
* Tips of the day
* Shortcuts viewer

### Dice System      

* Split operator
* Occurence Count operator (o)
* Unique operator (u)
* Reroll until operator (R)
* Group operator (g)
* reroll if all dices are equal (t operator)
* Bind operator
* Add command comment
* Dynamic variables
* Several instructions support
* Advanced display system
* Add unique (u) option to D and L operators
* Preventing Alias replacement inside string
* List of values
* DiceParser's detection of endless loop
* K operator accepts negative number as parameter
* Fix #51 - Support for tunnels and trolls system
* Fix #4 - crash with a operator
* Fix #55 - Multiple success/failure level dice roll

### Charactersheet & RCSE  

* Add table item
* Add webpage item
* Add Next/Previous page button item
* Embedded images
* Item can be visible on one or all pages
* Add Print support
* Dice button can be drag and dropped to chat window to create dice bookmark
* Additional code at the beginning or the end of file or both
* Improvement of sheet properties (fixed scale)
* update to QtQuick.Controls 2.0 (instead of 1.0)
* Charactersheet can modify character properties
* Charactersheet can roll dice command internally
* Charactersheet can display text on global chat
* RCSE - Add Images tabs in RCSE to manage embedded images.
* RCSE - Global refactoring
* RCSE - show subset of columns (id columns, position columns, all columns …)
* RCSE - items with custom code are displayed with green background on the edit tab
* RCSE - Text Editor Improvements (Monospace font, tab are 4 spaces now)
* RCSE - Code panel and preview panel are side by side

### VMap     

* Scale accepts double value (not only interger)
* grid can be above the scene.
* Show animated marker to highlight position on map
* better selection highlight
* Add bucket tool
* show life bar
* Sticky edges
* Providing Collision

### Miscellaneous Improvements      

* Length limit for tabs title.          
* Change color for tab
* Rename all kinds of subwindow
* Color selector dialog does not go behind anymore
* NPC are saved inside scenario
* Resources manager shows loading mode of each media.
* Resources manager shows unreachable file in red
* Fullscreen Mode
* Clear chat
* drag and drop from resources manager to vmap
* alternative color in playlist viewer
* Unit Convertor: accept new units and new convertion rules
* First Chapter in resources is Chapter 1 (instead of chapter 0)
* 5 last loaded scenerio are loadable from the file menu
* Hide long dice command
* Export/import dice aliases    

### Refactoring     

* RCSE
* Scenario
* Charactersheet SDK use QtQuick.Controls 2.0
* QML generator
* DiceParser's detection of endless loop      

### Bug fixes  

* Fix #1 - headless server
* Fix #45 - Player/GM shared notes board
* Fix #48 - Rolisteam segfault
* Fix #55 - Field of view handles and layer interaction
* Fix #65 - renaming notes
* Fix #69 - Misunderstanding about the resources Manager behaviour
* Fix #81 - Charactersheet not saved while saving scenario
* Fix #82 - some Chat messages are missing
* Fix #83 - crash when cancel save scenario as
* Fix #90 - issue with resources titles
* Fix #97 - Crash on dice roll
* Dice Parser Fix #51 - Support for tunnels and trolls system
* Dice Parser Fix #4 - crash with a operator
* Dice Parser Fix #55 - Multiple success/failure level dice roll

### Unit Tests & QA  

* Dice parser: 163
* Rolisteam: 371
* RCSE and Charactersheet: 16430
* Fuzzer test for diceparser
* Fuzzer test for charactersheet formula

### Translation   

* add italian


## Older Versions
[Older versions]({static}./08_older.md)

## What next ?
In the future release, we plan to do:

* Mindmap editor
* Android client
* change instant messaging UI
* and more…
