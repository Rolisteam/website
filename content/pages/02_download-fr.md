Title: Téléchargement
Date: 2017-06-11 10:20
slug: download
lang: fr

# Dernière version stable : 1.9.2
## Sortie le 16/02/2020 - Nom de code: DarkTed

## Les installeurs

### Windows

* ![windows]({filename}/iconfiles/thumbWinodw.png) Windows: [Rolisteam-1.9.2-setup.exe](https://sourceforge.net/projects/rolisteam/files/1.9.2/Rolisteam-1.9.2-setup.exe/download) (comprenant RCSE)

### MacOS

* ![MacOs]({filename}/iconfiles/thumbapple.png) Mac Os X:  [rolisteam_v1.9.2-MacOsX.dmg](https://sourceforge.net/projects/rolisteam/files/1.9.2/rolisteam_v1.9.2_MacOs.dmg/download)
* ![MacOs RCSE]({filename}/iconfiles/thumbapple.png) Mac Os X:  [rcse_v1.9.2-MacOsX_setup.dmg](http://sourceforge.net/projects/rolisteam/files/1.9.2/rcse_v1.9.2_MacOs.dmg/download)

### Linux

Votre distribution propose peut-être des paquets de **Rolisteam**. Utilisez les s'ils existent.
Sinon, vous pouvez utilisez les AppImages.

* ![linux]({filename}/iconfiles/thumblinux.png) RCSE - AppImage: [rcse-v1.9.2-x86_64.AppImage](http://sourceforge.net/projects/rolisteam/files/1.9.2/rcse-v1.9.0-x86_64.AppImage/download)
* ![linux]({filename}/iconfiles/thumblinux.png) Rolisteam - AppImage: [Rolisteam_v1.9.2-x86_64.AppImage](http://sourceforge.net/projects/rolisteam/files/1.9.2/Rolisteam_1.9.2-x86_64.AppImage/download)

##### Source
* ![tar rolisteam]({filename}/iconfiles/thumbtar.png) Source (tarball): [rolisteam-1.9.2.tar.gz](http://sourceforge.net/projects/rolisteam/files/1.9.2/rolisteam-1.9.2.tar.gz/download)
* ![zip rolisteam]({filename}/iconfiles/thumbzip.png) Source (zip): [rolisteam-1.9.2.zip](http://sourceforge.net/projects/rolisteam/files/1.9.2/rolisteam-1.9.2.zip/download)
* ![tar rcse]({filename}/iconfiles/thumbtar.png) Source (tarball): [rcse-1.9.2.tar.gz](http://sourceforge.net/projects/rolisteam/files/1.9.2/rcse-1.9.2.tar.gz/download)
* ![zip rcse]({filename}/iconfiles/thumbzip.png) Source (zip): [rcse-1.9.2.zip](http://sourceforge.net/projects/rolisteam/files/1.9.2/rcse-1.9.2.zip/download)


### ![Icon]({filename}/iconfiles/thumbubuntu.png)  Ubuntu 19.04

    :::bash
    sudo add-apt-repository ppa:rolisteam/ppa
    sudo apt-get update
    sudo apt-get upgrade
    sudo apt-get install rolisteam rcse

### Arch Linux

[https://aur.archlinux.org/packages/rolisteam/](https://aur.archlinux.org/packages/rolisteam/)

## Liste complète des changements v1.9.1

* Correction du visionneur de PDF sur windows et MacOs
* Correction d'un crash sur la liste des joueurs/personnages.


## Liste complète des changements v1.9.1

* comportement des textarea dans les fiches
* chargement d'image sur une vmap depuis le menu


## Liste complète des changements v1.9.0

### Nouvelles fonctionnalités

* Application Serveur multicanal
* Navigateur Web
* Visionneur de PDF et partage
* Notes partagées (Fix #45)
* Annuler/refaire
* Système de raccourcis pour lancer les dés
* Une forge à PNJ (outil de création de pnj)
* Gestion des formes, des actions et de propriétés d'un personnage (PJ/PNJ)
* Astuce du jour
* Tableau des raccourcis claviers

### Le système de dés

* opérateur Split
* opérateur de compte des occurences (o)
* opérateur Unique (u)
* opérateur relance «tant que» (R)
* opérateur Group (g)
* opérateur relance si tous les dés sont égaux (t)
* opérateur Bind
* gestion des commentaires
* Variables dynamique
* Gestion de commandes à instructions multiples
* Personnalisation du texte en sortie de commande.
* Paramètre unique (u) pour les lanceur D et L
* Les alias ne s'appliquent pas sur les chaînes de sorties
* Liste de valeurs
* Amélioration de la détection de boucle infinie
* Operateur K accepte un nombre négatif comme paramètre
* Bug #51 - Support du système de «tunnels and trolls»
* Bug #4 - crash causé par l'opérateur A
* Bug #55 - Un résultat en chaîne par dé

### Fiches de personnages et RCSE

* Ajout de l'élément Table
* Ajout de l'élément PageWeb
* Ajout de boutons page suivante/précédente
* Gestion des images embarquées
* Élément sur une page ou toutes les pages
* Ajout du support de l'impression
* Les boutons de dés peuvent être glisser et déposer sur une fenêtre de tchat pour créer un raccourcis de dé
* Du code additionel peut être placé en début et en fin du fichier qml
* Amélioration des propriétés de la fiche (échelle fixe)
* Passage à QtQuick.Controls 2.0 (à la place de 1.0)
* Une fiche peut modifier les propriétes de son personnage (par code)
* Une fiche peut lancer des dés en interne (par code)
* Une fiche peut afficher du texte dans le tchat commun
* RCSE - Ajout d'un onglet Images pour gérer les images embarqués
* RCSE - Refonte complete du logiciel
* RCSE - montre/cache des sous ensemble de colonnes (colunne d'identifications, colonnes de position, toutes les colonnes …)
* RCSE - Les champs avec du code personnalisé sont affichés en vert dans la table champs.
* RCSE - La page d'aperçu et l'éditeur de code QML sont l'un à coté de l'autre.
* RCSE - Amélioration de l'éditeur de texte QML (font à chase fixe, les tabulations en 4 espaces…)

### Plans vectoriels     

* L'échelle est un nombre à virgule; plus un entier
* La grille peut être au dessus de la scène
* Des marqueurs animés peut être utiliser pour identifier des points sur un plan
* Meilleure mise en valeur de la sélection.
* Outil pot de peinture
* Barre de vie sur personnage
* Bordure collante
* Améliorations des collisions

### Améliorations diverses  

* Possibilité de limiter la longeur des titres en affichage onglet
* Changer la couleur des onglets
* Renommage des documents
* Les selecteurs de couleur apparaissent bien devant.
* Les PNJ peuvent être enregistré dans le scénario
* Le gestionnaire de resources affiche le mode de chargement
* Les ressources non-enregistrées ou indisponible sont marquées en rouge dans le gestionnaire de ressources
* Mode plein écran
* Les messages des tchats peuvent être effacés
* Glisser/déposer du gestionnaire de ressources vers une carte vectorielle
* Couleur alternante dans la liste de lecture
* Le convertisseur d'unités accepte de nouvelles unités et des nouvelles règles de conversion.
* La numérotation des chapitres dans le gestionnaire de ressources commence à 1
* Les 5 derniers scénario chargé sont en accès direct dans le menu fichier
* Les commandes de dés trop longues peuvent être cachées.
* Exportation/importation des alias de dés

### Refonte du code     

* RCSE
* Scenario
* Charactersheet SDK use QtQuick.Controls 2.0
* QML generator
* DiceParser's detection of endless loop      

### Résolution des Bugs

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

### Tests unitaires et Qualité

* Système de dés: 163
* Rolisteam: 371
* RCSE et les fiches de personnages: 16430
* Test Fuzzer pour diceparser
* Test Fuzzer pour les formules des fiches de personnages

### Traductions

* Ajout de l'italien et catalan

Rolisteam v1.9.0 est disponible dans les langues suivantes:

* Français
* Anglais
* Espagnol
* Portugais (Brézil)
* Roumain
* Hongrois
* Allemand
* Catalan
* Italien
* Néerlandais (partielle)
* Turc (partielle)

## Anciennes Versions
[Anciennes versions]({filename}08_older-fr.md)

## Pour le futur ?

Dans le futur, nous prévoyons de faire:

* Éditeur de carte mentale
* Client Android
* Refont de l'interface utilisateur pour le tchat
* et plus encore…
