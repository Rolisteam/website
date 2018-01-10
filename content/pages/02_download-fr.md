Title: Téléchargement
Date: 2017-06-11 10:20
slug: download
lang: fr

## Dernière version stable : 1.8.2
### Sortie le 06/05/2017 - Nom de code: Chewb

https://youtu.be/Ly4H87hxbpw

[La playlist Youtube pour Rolisteam v1.8](https://www.youtube.com/watch?v=&list=PLBSt0cCTFfS4InklgvVlZZ1nW3RIrrj41) (in French)



### Les installeurs

* ![Icon]({filename}/iconfiles/thumbWinodw.png) Windows: [Rolisteam-1.8.2-v2-setup.exe](https://sourceforge.net/projects/rolisteam/files/1.8.2/Rolisteam-1.8.2-v2-setup.exe/download) (avec RCSE)
* ![Icon]({filename}/iconfiles/thumbapple.png) Mac Os X:  [rolisteam_v1.8.2-MacOsX_setup.dmg](http://sourceforge.net/projects/rolisteam/files/1.8.2/rolisteam_v1.8.2-MacOsX_setup.dmg/download)
* ![Icon]({filename}/iconfiles/thumbapple.png) Mac Os X:  [rcse_v1.0.3-MacOsX_setup.dmg](http://sourceforge.net/projects/rolisteam/files/1.8.2/rcse_v1.0.3-MacOsX_setup.dmg/download) 
* ![Icon]({filename}/iconfiles/thumbtar.png) Source (tarball): [rolisteam-1.8.2.tar.gz](http://sourceforge.net/projects/rolisteam/files/1.8.2/rolisteam-1.8.2.tar.gz/download) 
* ![Icon]({filename}/iconfiles/thumbzip.png) Source (zip): [rolisteam-1.8.2.zip](http://sourceforge.net/projects/rolisteam/files/1.8.2/rolisteam-1.8.2.zip/download) 
* ![Icon]({filename}/iconfiles/thumbtar.png) Source (tarball): [rcse-1.0.3.tar.gz](http://sourceforge.net/projects/rolisteam/files/1.8.2/rcse-1.0.3.tar.gz/download) 
* ![Icon]({filename}/iconfiles/thumbzip.png) Source (zip): [rcse-1.0.3.zip](http://sourceforge.net/projects/rolisteam/files/1.8.2/rcse-1.0.3.zip/download) 


### ![Icon]({filename}/iconfiles/thumbubuntu.png)  Ubuntu

    :::bash
    sudo add-apt-repository ppa:rolisteam/ppa
    sudo apt-get update
    sudo apt-get upgrade
    sudo apt-get install rolisteam rcse



### Arch Linux
[https://aur.archlinux.org/packages/rolisteam/](https://aur.archlinux.org/packages/rolisteam/)

## Les changements de la v1.8.2

* Bug: Les champs en page 2 ou plus était toujours en page 1. (#4)
* Bug: Fiche de personnage partagée avec tout le monde quand le serveur n’est pas le MJ (#62)

### Rolisteam

* Plans vectoriels
* Fiche de personnage
* Amélioration du système de dés
* Fenêtre de connexion
* Changelog complet (en dessous)

### RCSE

* Le menu New fonctionne
* Meilleure protection de la liste de choix.
* Affiche l’ensemble des erreurs en une fois.
* Supprimer une formule dans un personnage
* Possibilité de changer la police d’écriture.
* Support de l’UTF-8 dans les fiches de personnages
* Redéfini l’ensemble des id 
* Affiche message d’alerte quand deux images de fond n’ont pas la même taille. 
* Les formules acceptent tout type de caractère entre double quote.
* Bug: suppression de la première page seulement
* Ajout d’un selecteur de police
* Bug: ajuste le comportement du selecteur de bordure
* Amélioration de la mise à jour du model après modification

### Comment compiler et installer Rolisteam sur Linux:
Jetez un oeil à la documentation:  [Compilation sur Linux](http://wiki.rolisteam.org/index.php/CompilationLinux)

## Liste complète des changements pour la v1.8.0

### Plan Vectoriel

* Nouveau système de plan
* Les éléments peuvent être ajoutés, déplacés, supprimés.
* Les jetons personnages sont maintenant des images. 
* Il est possible d’ajouter des images sur le plan.
* Gestion d’ensemble d’éléments
* Brouillard de guerre
* Vision du personnage
* Gestion de la parenté entre éléments.
* Affichage de grille

## Fiche de personnage

* Gestion des fiches
* Editeur de fiche (RCSE)
* Prise en charge des formules (type feuille de calcul)
* Lancer les dés depuis la fiche
* Plusieurs types de champs sur les fiches.
* Rendu en QML
* Mise à jour des données via réseau
* Controle en écriture des données.
* Les fiches peuvent être sur plusieurs pages.
* Affichage de plusieurs pages en même temps.


## Système de dés

* Composition de condition booléenne par les opérateur ET, OU et OU exclusif.
* Meilleur gestion des erreurs de syntaxe.
* L’opérateur Liste accepte des intervalles ou probabilités.
* Cacher le lancer ou lanceur: #2d6
* Opérateur Fusion (m: merge)
* Opérateur filtre (f)
* Opérateur Si (i)
* Ajout du modulo dans les opérateurs supportés dans les «validateurs»
* Gestion des références vers des valeurs stockées dans la fiche de personnage.
* Ajout de l’opérateur différent (!=)
* La génération aléatoire utilise les nouvelles API du C++11
* Meilleur génération du schéma de l’arbre de génération

## Général

* États de personnage dynamique
* Alias de dés désactivables
* Signal de vie pour empêcher les déconnexions.
* Un générateur de nom
* Un convertisseur d’unités

## Fenêtre de connexion

* Gestion de plusieurs profils de connexion.

## Resources management

* Les ressources peuvent être assemblées dans des chapitres (dossiers)
* Gestion de l’état des ressources (Chargées, Ouvertes)

## Résolutions des bogues

Contournement #42 - Problème d’ajustement des grands plans.
Fix #41 - Mélange entre les droits du MJ et des Joueurs.
Fix #28 - Cacher les lancers de dés.
Fix #33 - Déconnexion
Fix #22 - Portrait de personnages sur les plans.
Fix #3 - Déplacement de zones de texte impossible sur les plans
Fix #8 -  Ajouter des images sur les plans.

## Traduction

* Français
* Anglais
* Portugais
* Hongrois
* Allemand
* Roumain
* Espagnol
* Turc (partielle)
* Néerlandais


## Anciennes Versions
[Anciennes versions]({filename}08_older-fr.md)

## Pour le futur ?

Dans le futur, nous prévoyons de faire:

* Un serveur séparé
* Un éditeur de note séparé
* Et plus encore
