Title: Comment utiliser la forge aux PNJ.
Date: 2019-10-27 10:20
slug: tutorial02
status: hidden
lang: fr


# Créer un token


## Informations générale
![Forge PNJ]({filename}/images/tutonpcmaker/fr/forge_empty.jpg)

* Nom : Le texte du champs apparaît en bas sur le token quand il est afficher sur une carte.
* Couleur : Si vous n'avez pas d'image, le token sera composé de cette couleur.
* Commande d'initiative : La commande est éxecuté pour déterminer le score d'initiative du personnage. Il est possible d'utiliser des valeurs d'une propriété pour le jet de l'initiative.
* Valeur d'initiative : Si vous voulez définir une valeur fixe, vous pouvez. Sinon, laisser la valeur à 0, elle sera définie par le résultat du jet.
* Avatar : il s'agit de l'image principale du personnage.
* Taille : la taille en pixel, par défaut, elle est définie à 64, C'est un peu plus grand qu'un personnage joueur (50).
* La vie: la vie est définie par 3 valeurs: la min, la max et valeur courante.
Quand la vie courant vaut le max, la barre de vie sera pleine sur personnage dans une carte. Quand la valeur est égale à la valeur minimun, la barre de vie est entièrement vide.

À la fin la zone de vide permet de visualiser l'avatar du personnage.

Pour ce tutoriel, je vais créer un bandit qui se déguise en paysans.

![pnj]({filename}/images/tutonpcmaker/fr/info.jpg)


## Actions

![actions]({filename}/images/tutonpcmaker/fr/actions.jpg)

Il convient de définir les jets pour les différentes actions.
Dans l'exemple, j'ai mis les deux jets pour évaluer une attaque à l'arc ou à l'épée. Bien entendu, mettez toutes les actions qui vous semblent utiles:
La course, le baratin, la discrétion.
Il peut être intéressant de définir également des actions avec bonus. 

## Formes

![formes]({filename}/images/tutonpcmaker/fr/formes.jpg)

Une forme est consistuée d'un nom et d'une image. Cela permet de representer un personnage polymorphe, un déguisiment, une identité secret (super héros).
En pratique, cela change uniquement l'avatar.
Pour définir l'image, il convient de double clicker dans la colonne "URI".

## Propriétés

![propriétés]({filename}/images/tutonpcmaker/fr/proprietes.jpg)

Il est possible de définir autant de propriétés que vous le souhaiter. 
Une propriété est définie par une nom et une valeur. Ces propriétés sont très utiles pour reprenser le niveau du personnage.
Il convient de définir l'ensemble des caractérisques dont vous avez besoin pour calculer les actions.
Dans l'exemple, j'ai définie la valeur de compétence de tir et de corps à corps. Ces deux valeurs sont utilisés pour déterminer si un jet est un succès ou non. 

# Utiliser un token
## Afficher un Token sur une carte vectorial

Pour afficher un `rtok` dans une carte vectorielle, il suffit de glisser/déposer le fichier sur le plan.  Just drag and drop the rtok file from your system file browser to the vectorial.
`rtok` does not work on old rolisteam maps.

## Mettre à jour les points de vie

When the rtok is loaded, it appears on the vectorial map and it is listed inside the player/character list as a character of the localplayer (the player who add them).

## L'initiative

![menu]({filename}/images/tutonpcmaker/fr/menu_initiative.jpg)

**Initiative** can be rolled from the vectorial map contextual menu.
When character has initiative score it appears on the left-top corner of the token.
It is possible to unset the score (e.g at the end of the fight), or to hide them (`menu > view > map > show/hide initiative`)

## Les formes

![menu]({filename}/images/tutonpcmaker/fr/menu_formes.jpg)

Par le menu contextuel, il est possible de sélectionner à tout moment la forme. de votre personnage.
Si la forme ne possède pas d'image, le jeton du personnage s'affichera de sa couleur.
