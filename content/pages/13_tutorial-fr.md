Title: Tutorial Rolisteam
Date: 2017-06-27 10:20
slug: tutorial01
status: hidden
lang: fr

# Rolisteam

![images]({filename}/images/logo_rolisteam.png)

**Rolisteam** est un **logiciel libre** de table virtuelle. Le jeu de rôle "papier" se pratique traditionnellement autour d'une table.  Pour pallier aux difficultés techniques (emploi du temps) 
et logistiques (trajets), il est plus pratique de se réunir autour d'une table virtuelle. 

C'est également une application libre, gratuite et multiplateforme (Windows, MacOS et Linux). Elle est téléchargeable à l'adresse : [http://www.rolisteam.org/download](http://www.rolisteam.org/download) et elle s'installe sur votre machine. L'application propose de nombreuses fonctionnalités pour faciliter le cour de la partie: Plans, images, lancer de dés, fiches de personnages. 

L'application est disponible en plusieurs langues: anglais, français,  espagnol, allemand, portugais, hongrois, néerlandais, roumain et partiellement en turc.

Maintenant, je vais tacher de vous expliquer au mieux son utilisation, à grand renfort de captures d’écran pour bien illustrer mes propos.

#I – Lancement et réglages

Au lancement, l'application apparaît avec au premier plan le panneau de connexion. Ce panneau vous permet de saisir les informations relatives à la connexion mais également à votre personnage. Ce panneau gère depuis la version 1.8, la création de profil de connexion. Ainsi, il est plus simple de conserver plusieurs informations de connexions en même temps.

![images]({filename}/images/tuto/04_connexion_mj_fr.jpg)

Vous pouvez éditer le profil par défaut ou en ajouter un. Pour vous y retrouvez, change le nom. Cela sera plus facile.  
Par exemple, j'ai l’habitude de jouer en MJ le mercredi et en joueur le lundi. Le nom de mes profils est tout simplement: Partie du lundi, Partie du mercredi.

Il existe quatre mode de connexion à **rolisteam**: 

* Maître du jeu et serveur
* Maître du jeu et client
* Joueur et serveur
* Joueur et client

La distinction entre **maître du jeu** et **joueur** est assez facile. Le maître du jeu a plus de pouvoir sur la partie. Il peut ajouter des plans, il contrôle la musique etc.

La distinction entre **client** et **serveur** peut-être plus obscure. Le "serveur" héberge la partie. Il est le centre des connexions. 
Si le serveur est coupé/fermé, l'ensemble des participants sera déconnecté en même temps.

## Maître du jeu ou joueur

La zone « Joueur » est faite pour vous décrire. Vous pouvez spécifier un nom (il apparaîtra chez les autres joueurs). Une couleur est également présente pour vous identifier. 
Il est préférable que chaque participant utilise une couleur distincte pour plus de clarté durant la partie.

Le dernier élément est une case à cocher «**Je suis le maître du jeu**». Il convient de cocher la case si vous êtes maître du jeu. 

Si vous êtes un joueur, vous pouvez décrire directement depuis la fenêtre de connexion le personnage à utiliser grâce à la zone « **Personnage** ».
Elle est affichée quand vous n'etes pas «**maître du jeu**». Cela vous permet de donner des détails sur votre personnage. 

Il y a un nom, une couleur et également un avatar. Il est préférable d'utiliser une image carrée comme avatar. 


## Serveur ou client 

### Serveur
Si vous souhaitez héberger la partie, vous êtes le serveur. Vous n'avez pas besoin de spécifier une adresse. Vous devez choisir un port et cocher la case « **Héberger la partie** ». 

Quand vous êtes sûr des réglages, vous pouvez appuyer sur le bouton «**Connexion**». Si tout se passe bien. La fenêtre de connexion disparaît et vous donne accès à l'application. Dans l'espace de notification (en haut à droite), Vous avez un rappel des informations à donner aux autres participants de la partie. 

![images]({filename}/images/tuto/14_notification_zone_fr.jpg)

Ici, l’adresse de connexion est *194.250.98.228*, et le port est *6661*. Par défaut, **Rolisteam** utilise le port *6660*. Vous pouvez utiliser celui que vous voulez. Il faut cependant être certain que le port ne soit pas déjà utilisé par un autre service.  

Le choix de serveur est important. Il est préférable de choisir une personne avec un PC stable et une connexion performante.  
Cela améliorera le confort de jeu. Une ligne ADSL classique suffit très facilement à héberger une partie **Rolisteam**. De plus, le serveur doit rester jusqu'à la fin sinon, tout le monde sera déconnecté. 

### Client
Si vous êtes client, il est nécessaire de donner une adresse pour rejoindre la partie. Cette adresse peut être une adresse Ip (exemple: *194.250.98.228*), ou un nom de domaine (rolisteam.org, games.trucmuche.com). Vous devez l'obtenir de la personne qui héberge la partie.

Pour le port, il doit lui aussi vous être communiqué par la personne gérant le serveur. Pensez ensuite à bien décocher la case «**héberger la partie**». 

Quand vous êtes sûr des réglages, vous pouvez appuyer sur le bouton «**Connexion**». Si tout se passe bien. La fenêtre de connexion disparaît et vous donne accès à l'application.

# Premier lancement

Une fois l'étape connexion réussie, vous devriez voir ceci (Le gros logo Rolisteam sera remplacé par une image de stylo et de dés).

![images]({filename}/images/tuto/05_global_fr.jpg)

Nous allons faire un peu le tour des différents panneaux et informations visibles.  

Vous pouvez voir différents panneaux sur les extérieurs de l'application. Ces panneaux sont déplaçables et empilables. Ainsi vous pouvez mettre au premier plan des panneaux importants et garder des zones secondaires accessibles par un simple clique si besoin. Il est également possible de fermer directement un panneau grâce à la croix en haut droite. Vous pouvez vous rendre dans le menu «**affichage**», pour les faire réapparaître.

![images]({filename}/images/tuto/09_menu_fenetre_fr.jpg)

## Vérifier mon statut de connexion

Pour connaître à tout moment le statut de connexion, il suffit de regarder la barre de titre de **rolisteam**.  
 Il y a le nom du scénario courant, la version du logiciel, le statut «**connecté**» ou «**déconnecté**», si vous êtes **client** ou **serveur** et en dernier le nom de l'application.

![images]({filename}/images/tuto/30_window_title_fr.jpg)

## Zone de notification

Comme nous l'avons vu, l'espace de notification est utile pour la personne hébergeant la partie car il y retrouve l'ensemble des informations qu'il doit communiquer aux autres joueurs.  
Cependant, cette zone est intéressante pour d'autres raisons.  
En effet, tous les événements sur le réseau sont visibles dans cet espace.  
La connexion ou déconnexion d'un joueur et un téléchargement en cours d'une donnée.  
Cela vous permet de savoir qu'un élément est en cours de réception.   

## La messagerie instantanée

Cette zone vous propose automatiquement un tchat commun accessible avec tous les participants et  également un tchat vers chaque participants (vous et lui uniquement). 

![images]({filename}/images/tuto/02_ChatList_fr.jpg)

Il est possible de créer un tchat et d'y ajouter les personnes de votre choix. Ainsi vous pouvez réfléchir une stratégie à plusieurs à l'abri du regard d'un ou plusieurs participants.

![images]({filename}/images/tuto/15_nouveauChat_fr.jpg)


## La liste des joueurs

Cette section affiche les joueurs connectés et leurs personnages. Vous pouvez réduire ou dérouler la liste des personnages pour chaque joueur. Les avatars des personnages sont visibles dans cette zone.   
Cette zone est importante quand vous utilisez des plans dans **Rolisteam**. Nous y reviendrons plus bas dans ce tutoriel. 
 
![images]({filename}/images/tuto/18_playerlist_fr.jpg)


## Les lecteurs de Musique 


**Rolisteam** contient trois lecteurs audio pour gérer trois pistes simultanément.  
Vous pouvez cachez des lecteurs si vous avait besoin de moins de trois pistes.  

![images]({filename}/images/tuto/24_music_player_fr.jpg) 

L'ensemble des commandes des lecteurs sont accessibles par un menu contextuel (clique droit de la souris).   
Vous pouvez charger une playlist, des fichiers ou encore des liens vers des flux ou fichiers distants.  

![images]({filename}/images/tuto/27_music_contextual_menu_fr.jpg)


## Le gestionnaire de ressources

Le gestionnaire de ressources permet de garder la trace de l'ensemble des fichiers chargés durant votre partie. 
Il permet également de classer vos ressources dans des dossiers.

![images]({filename}/images/tuto/23_resources_browser_fr.jpg) 



# Jouer avec Rolisteam

Maintenant que nous avons fait un tour rapide des différents panneaux de rolisteam. Nous allons nous concentrer plus en détails sur leur fonctionnalités.

## La messagerie instantanée


Pour ouvrir un tchat, rien de plus simple, il suffit de cocher la case correspondante. Il est utile d'ouvrir le «**commun**». Il rassemble tous les joueurs. 
Il existe aussi des tchats pour discuter individuellement avec un autre joueur.

![images]({filename}/images/tuto/02_ChatList_fr.jpg) 


Quand un tchat clignote entre rouge et vert, cela signifie qu'un message est arrivé.

Vous pouvez à tout moment créer un nouveau tchat et inclure qui vous voulez dedans.

##  Créer un nouveau tchat

En bas de la zone de messagerie instantanée, il y a un bouton pour *ajouter un tchat*. 

![images]({filename}/images/tuto/15_nouveauChat_fr.jpg)

Un tchat est défini par un nom, un propriétaire et une liste de participant. 
Le propriétaire sera automatiquement défini. Les autres éléments sont à votre convenance. 

Il suffit de cliquer sur Ok pour valider.  

### Qu'est-ce qu'on peut faire dans un tchat ? 


La première des fonctionnalités est bien sûr d'envoyer des messages textes vers d'autres personnes.   
Vous pouvez vous identifier dans le tchat comme votre personnage ou avec votre nom de joueur.  
C'est parfois utilisé pour faire la distinction entre les propos du personnage et les blagues HRP.  

Il est également possible de donner des liens http, ils seront transformés automatiquement en lien cliquable par **Rolisteam**.  

Vous pouvez décrire l'action de votre personnage grâce à la commande **/me** suivit de la description d'une action.  
_Exemple_:  
** * /me* sort les pop-corns et attend !*

Cela apparaîtra comme ceci:

![images]({filename}/images/tuto/25_tchat_commun_fr.jpg)

Il est possible de récupérer les textes envoyés grâce à l'historique de conversation. Pour cela, il suffit de naviguer avec les touches ```haut``` et ```bas``` de votre clavier.

### Fonctions accessibles par le menu contextuel 

![images]({filename}/images/tuto/08_menu_chat_fr.jpg)

Les fenêtres de tchat possèdent trois particularités:

* Il est possible de changer la couleur de fond individuellement, pour différencier les tchats. 
* Les fenêtres de tchats peuvent être sorties de **rolisteam**. Cela offre un meilleur contrôle de l'espace de travail. 
* Il est également possible d'afficher l'heure de réception des messages textes. 

## Lancer les dés

Le tchat est la zone de saisie des commandes de dés. 
**Rolisteam** possède un système de dés très puissant fonctionnant grâce à des opérateurs génériques.  
La combinaison de plusieurs opérateurs permet d’automatiser un maximum la gestion des jeux.

Si vous souhaitez lancer un dé à 6 faces, la commande est: **!1d6**

Le point d'exclamation est important, il indique à **rolisteam** que le texte est une commande de dés et non un simple message.  
Vous pouvez également utilisé le symbole **&**, pour lancer une commande secrète. Vous serez le seul à voir le résultat.  
Le caractère **#** permet aux joueurs d’envoyer le résultat au MJ uniquement (seul le MJ verra le résultat).  

Vous pouvez utiliser **rolisteam** pour lancer n'importe quel dé.

* Lancer un dé entre 0 et 9 : !1d[0-9]
* Lancer vingt dés à 100 faces : !20d100
* Lancer un dé à 20 face et y ajouter 4: !1d20+4
* Lancer un nombre de dés à 10 faces aléatoires: !(4d6)d10
* Lancer si dés à 10 faces, les 10 exploses et nous gardons les 3 meilleurs: !6d10e10k3
* Faire du calcul: !5-5\*5+5


Le résultat est affiché en rouge par soucis de lisibilité. 

**Rolisteam** gère de nombreux opérateurs,  vous pouvez trouver la liste complète sur cette [page](http://wiki.rolisteam.org/fr:dice) avec également des exemples.

![images]({filename}/images/tuto/31_dice_result_fr.jpg)

Vous pouvez partager vos commandes de dés sur le [forum](http://forum.rolisteam.org).

### Les alias de dés (ou comment simplifier la vie de tout le monde)

Si vous avez pris le temps de lire la documentation du système de dés et que vous avez réussi à écrire une commande qui automatise directement certains calculs pour votre jeu. Il est possible que cette commande soit un peu longue. 

Prenons par exemple la commande: !6d10e10k3  
C'est une commande pour le jeu «le livre des 5 anneaux».
Il peut être embêtant d'écrire cela tout le temps. Une version plus courte serait plus pratique.   
Le système d'alias est fait pour ça. Pour créer un alias intelligent, il faut identifier quelle partie est variable dans le jeu.  
Le nombre de dés peut-il changé ?  
La difficulté du jeu ?  
Le nombre de dés gardés ?  

Voilà les questions qu'il faut se poser.   
Dans le cas du système du «livre des 5 anneaux», le nombre de dés lancés et gardés peut changer.
Ainsi, il est possible de définir les alias dans les préférences.

Alias: G => d10e10k  
Utilisations:   

* !6G3 = !6d10e10k3  
* !8G4 = !8d10e10k4  

Cela applique un simple remplacement.
Il existe un mode encore plus puissant de substitution pour les alias. Il est bien décris dans la [documentation](http://wiki.rolisteam.org/index.php/Fr:preferences#Les_alias_de_d.C3.A9s).

![images]({filename}/images/tuto/00_alias_fr.jpg)

## Partager une image

Tout le monde peut partager une image avec la «table». Cette image apparaît chez les autres. Chaque joueur peut décider de cacher l’image en cliquant dans la barre de titre. Elle pourra être ré-affichée si besoin en passant par le menu affichage. 

Le MJ ou le propriétaire de l'image peuvent fermer l'image définitivement (menu `fichier > fermer`). 

Vous pouvez ouvrir une image de votre ordinateur en passant par le menu :  `Fichier > Ouvrir > Image` ou directement en drag and drop (glisser/déposer) sur la zone principale. 

Il est également possible de partager une image en ligne. 

### Cas particulier: Les images sur Internet

Il suffit de coller le lien dans la petite fenêtre accessible par `Fichier > Ouvrir > Image en ligne` 

![images]({filename}/images/tuto/07_load_image_from_internet2_fr.jpg)

## Les plans

**Rolisteam** offre depuis la version 1.8 deux formats de plans: Bipmap et vectoriel. 
Pour faire la distinction des deux, un plan "bipmap" les éléments sont peints dessus, sur un plan vectoriel les éléments sont posés dessus.

Seul le Maître du jeu peut créer et partager un plan.

### Les plans *bipmap*


Un nouveau plan peut-être ajouté vide, c'est à dire avec un fond de couleur. Vous avez la possibilité de mettre une image en fond. 

##### Un plan vide

Pour ouvrir un plan vide, il suffit d'aller dans `fichier > nouveau > Plan` ou de directement faire un `CTRL+M`. 


![images]({filename}/images/tuto/12_newMap_fr.jpg)

**Rolisteam** vous permet de définir plusieurs caractéristiques de votre plan. 

* le titre
* la couleur de fond
* la taille
* le mode de permission
* le format

Il est bon de faire un point sur les modes de permission. Il en existe trois: **Aucun, Personnage et tous**. 

* Le mode aucun signifie que les joueurs n'ont rien le droit de faire sur la carte.
* Personnage autorise les joueurs à déplacer les jetons représentant leur personnage. 
* le mode "Tous" donne les droits du meneur (MJ) aux joueurs.

#### Un plan avec fond

Pour ouvrir un plan avec une image de fond, il suffit de suivre ce chemin: **Fichier > Ouvrir > Plan**

![images]({filename}/images/tuto/16_openMap_fr.jpg)

Cette boite de dialogue permet de charger une image en fond du plan. 
Vous pouvez charger un plan (.pla) enregistré sur votre ordinateur. 

Vous avez ici la possibilité de spécifier quelques paramètres à propos du plan : titre, Mode de permission et caché. 

Cocher la case "Caché" recouvrira votre plan du brouillard de guerre. Cela permet de faire découvrir aux joueurs petit à petit leur environnement. 


#### Modifier un plan

Une fois le plan ouvert, vous avez la possibilité d'y apporter des modifications. 
Pour se faire, **rolisteam** propose une série d'outils. Ils sont regroupés dans un panneau.



[comment]:<>![images]({filename}/images/tuto/27_toolbox_thin_fr.jpg)


<table>
<tr>
<td>
<img src="/images/tuto/27_toolbox_thin_fr.jpg" alt="images"/>
</td>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;
</td>
<td>
1. La couleur courante <br/>
2. Les couleurs pré-définies <br/>
3. Les couleurs personnalisées<br/>
4. La  couleur d'effacement<br/>
5. La couleur de masquage (brouillard de guerre)<br/>
6. La couleur de démasquage (brouillard de guerre)<br/>
7. Le crayon<br/>
8. La ligne<br/>
9. Le rectangle vide<br/>
10. Le rectangle plein<br/>
11. L'ellipse vide<br/>
12. L'ellipse pleine<br/>
13. Outil texte<br/>
14. La main<br/>
15. Le champ texte<br/>
16. Épaisseur du trait<br/>
17. Déplacer un personnage<br/>
18. Modificateur d'état du personnage<br/>
19. Ajouter un PNJ<br/>
20. Supprimer un PNJ<br/>
21. Mise à zéro du compteur PNJ<br/>
22. Nom PNJ<br/>
23. Taille PNJ<br/>
</td>
</tr>
</table>

### FAQ des plans

#### 1. Les couleurs prédéfinies ne sont pas assez variées, comment puis-je en trouver d'autres ?

Il est possible de double cliquer sur la couleur courante pour faire apparaître un sélecteur de couleur. 

#### 2. Comment changer l'orientation de mon personnage ?

Quand vous utilisez l'outil 17 ou 18, il est possible par un clique droit de modifier l'orientation. Un petit trait blanc apparaît pour marquer la direction. 

#### 3. Comment changer l'état de mon personnage ?

Il suffit de sélectionner l'outil 18 et de clique plusieurs fois pour attendre l'état souhaité. 

* Noir = Sain
* Rose = Blessé léger
* Rouge = Blessé grave
* Gris = Mort
* Bleu = Endormi
* Vert = Ensorcelé

#### 4. A quoi sert l'outil main ? 

Il permet d'attraper le plan et le déplacer pour afficher une autre zone du plan. Très utile quand la fenêtre du plan est petite.
 
### Les plans *vectoriels*

Les plans vectoriels sont une fonctionnalité introduite depuis la version v1.8.  
C’est un changement majeur et il serait trop long de décrire en détails l’ensemble des possibilités que cela offre.  
Vous trouverez dans ce tutoriel le minimum pour réaliser un plan. Il est recommandé les plans vectoriels lors d’une session d’entraînement avec le logiciel.  
Il peut être un peu déroutant de découvrir la fonctionnalité au cours d’une partie.   
Un tutoriel sera écrit pour détailler les possibilités des plans vectoriels.  
Vous pouvez dès à présent, jeter un œil à la [documentation](http://wiki.rolisteam.org/index.php/Fr:vMaps).

#### Créer un plan vectoriel

Pour ouvrir un plan vectoriel vide, il suffit d'aller dans fichier, nouveau, Plan ou de directement faire un `CTRL+V`. 

![images]({filename}/images/tuto/13_newVMap_fr.jpg)

**Rolisteam** vous propose de définir plusieurs caractéristiques de votre plan. 

* Le titre
* La couleur de fond
* Le mode de permission
* Le mode de visibilité
* Le format de la grille

Quand vous avez rempli l'ensemble des éléments, il suffit de cliquer sur Ok pour faire apparaître le plan vectoriel.
Chose à savoir sur les plans vectoriel, ils n'ont pas de taille. Vous pouvez les considérer de taille infinie. 

#### Modifier un plan vectoriel

Une fois le plan ouvert, vous avez la possibilité d'y apporter des modifications. 
Elles peuvent être de deux types: aspect visuel ou contrôle d'accès.

Les modifications sur l'aspect visuel sont réalisés au moyen des outils de la barre d'outil ou du plan lui même.

[comment]:<>![images]({filename}/images/tuto/28_toolbox_vmap_fr.jpg)


<table>
<tr>
<td>
<img src="/images/tuto/28_toolbox_vmap_fr.jpg" alt="images"/>
</td>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;
</td>
<td>
1. La couleur courante<br/>
<br/>
Vous pouvez double-cliquer sur l'élément pour faire apparaître un sélecteur de couleur.<br/>
<br/>
2. Palette de couleurs<br/>
3. Sélecteur de luminosité<br/>
4. Mode d'édition<br/>
<br/>
Le mode **Normal** vous permet de dessiner sur le plan.<br/>
Le mode **Masqué** vous permet de masquer des éléments en dessinant sur le brouillard de guerre.<br/>
Le mode **démasqué** vous permet de faire apparaître les zones en dessinant sur le brouillard de guerre.<br/>
<br/>
5. Le crayon<br/>
6. La ligne<br/>
7. Le rectangle vide<br/>
8. Le rectangle plein<br/>
9. L'ellipse vide<br/>
10. L'ellipse pleine<br/>
11. Outil texte<br/>
12. La main<br/>
<br/>
Elle permet de sélectionner un objet et de le déplacer. Il est également possible de tourner l'objet ou encore de l'agrandir/réduire.<br/>
Pour le déplacer, il suffit de le saisir avec la main et de rester enfoncer sur le bouton gauche de la souris.<br/>
Pour l'agrandissement ou la réduction, vous devez saisir un carré gris sur les bords de l'élément.<br/>
Pour activer la rotation, il convient d'enfoncer la touche `MAJ` et de déplacer un carré gris.<br/>
Pour faire une sélection multiple, il convient de cliquer sur `CTRL` et de cliquer sur différents éléments.<br/>
<br/>
<br/>
13. La règle<br/>
14. Chemin<br/>
15. Ancre<br/>
<br/>
Vous pouvez lié un élément à un autre. Ainsi, si vous déplacez le parent tous les éléments liés se déplaceront en même temps. Très utile. <br/>
<br/>
16. Pipette<br/>
17. Épaisseur de trait<br/>
18. Ajouter un PNJ<br/>
19. Mise à zéro du compteur PNJ<br/>
20. Compteur de PNJ<br/>
21. Nom des PNJ<br/>
22. Opacité de l'élément courant<br/>
</td>
</tr>
</table><br/>




#### Sur le plan lui même

Vous pouvez faire apparaître des actions d'éditions sur le plan au moyen d'un menu contextuel.
Ce menu diffèrent selon votre sélection courante.

Si vous souhaitez obtenir la liste complète des fonctionnalités issue des menus, vous êtes invités à vous rendre sur la [documentation](http://wiki.rolisteam.org/index.php/Fr:vMaps#Menu_contextuel_.28clique-droit.29).



## La musique d'ambiance

Le maître du jeu peut diffuser de la musique. 

![images]({filename}/images/tuto/01_backgroundMusic_fr.jpg)

**Rolisteam** propose trois lecteurs audio. Les trois peuvent fonctionner en même temps. 
Chaque lecteur possède les fonctionnalités standards d'un lecteur.

Le contrôle de la lecteur par les boutons ```lecture```, ```pause```,```stop```.
Il est également possible de définir un mode de lecteur. Par défaut, les lecteurs lisent un morceau et passe au suivant. 
Vous pouvez configurer un lecteur pour qu'il s'arrête à la fin du fichier ou que le fichier tourne en boucle. 

### Ajouter des musiques

Le bouton marqué par le symbole ```+``` regroupe l'ensemble des fonctionnalités d'ajouts de fichier. 
Un clique simple sur le bouton ouvre un sélecteur de fichier. 
Un appuie long sur le bouton permet de faire apparaître des options supplémentaires. 

* Ajouter une chanson (par défaut)
* Ouvrir une liste de lecture
* Charger la liste de lecture TableTopAudio.com
* Ajouter un flux

### Supprimer des musiques

Le bouton - permet de supprimer une musique de la liste, un appui long permet d'attendre la fonction ```vider``` qui vide la playliste. 

L'ensemble des fonctions est accessible par le menu contextuel.


### Les fichiers audios

Si vous n'avez pas la possibilité de mettre en ligne vos fichiers ou d'utiliser des flux. 
Il est nécessaire que tous vos joueurs aient les fichiers sur leur ordinateur.
Des services de cloud et de partage peuvent vous faciliter la vie. 

La liste de lecture **TableTopAudio.com** ne nécessite aucun transfert préalable. 
 

## L’éditeur de notes

**Rolisteam** propose un éditeur de notes pour conserver les détails de vos parties: les indices, les personnages important etc.
Vous pouvez sauvegarder ces notes dans différents formats: **html**, **pdf** ou **.odt**.


##  Fiche de personnage

**Rolisteam** fournit depuis la version 1.8 un format de fiches de personnages. Les fiches peuvent être créer grâce à l'outil **RCSE** (téléchargeable sur le site).


### Créer une fiche

Si vous souhaitez créer une fiche, je vous conseille la vidéo suivante:

<iframe width="560" height="315" src="https://www.youtube.com/embed/Hnz9MCO5J_Q" frameborder="0" allowfullscreen></iframe>

Un tutoriel dédié à la création de fiche sera écrit plus tard.

### Utiliser les fiches dans rolisteam

L'utilisation dans **rolisteam** est simple. Le maître de jeu charge le document (.rcs) qui rassemble l'ensemble des personnages dont il a besoin. 
Il lui suffit de partager chaque personnage avec son joueur. 
Un joueur peut avoir plusieurs personnages mais un personnages n'est attribué qu'à un joueur à la fois.

### Trouver des fiches 

Nous avons commencé un sujet sur le forum. Nous comptons mettre en place une solution plus simple et visible pour soumettre des fiches.

[Topic Forum Officiel](http://forum.rolisteam.org/viewtopic.php?f=9&t=61)

## Le scénario - la session

Le scénario est un fichier rassemblant tous les documents ouverts. Les plans, les plans vectoriels, les images, les fiches de personnages, les listes de lecture et les notes sont gérés par le scénario. D'autres types de documents viendront s'ajouter dans l'avenir.

Ces documents sont accessibles grâce au gestionnaire de ressources. Ce gestionnaire vous permet de savoir quel document fait actuellement partie de votre scénario. 
L'état de vos documents est également conservé (Ouvert, chargé, ou déchargé). 

Il est important de comprendre le parcours d’un document. L’exemple facile est l’image. Si vous glisser une image dans **rolisteam**.
Celle-ci s’affiche chez tous les joueurs.
Elle est considérée comme chargée et ouverte. Si vous fermez le document en utilisant la croix, elle devient cachée pour vous mais reste visible chez les autres.
Pour l’afficher à nouveau, il suffit de cocher dans le menu fenêtre l’élément lui correspondant.
Dans ce mode, l’image est pour vous toujours chargée. 

Pour la fermer pour tout le monde, vous devez faire ```Fichier > Fermer (CTRL+ESC)```. Le fichier devient déchargé. Cependant, il est toujours visible dans le gestionnaire de ressources comme faisant partie de votre campagne. Vous pouvez le ranger dans un chapitre de votre campagne pour le retrouver plus facilement ou le supprimer, s’il n’y a pas besoin de le conserver dans l’historique de la campagne.

## Conclusion

Ce tutoriel est maintenant terminé. D’autres viendront par la suite. 
J’espère qu’il vous a été utile. Il me reste à vous souhaiter bonne partie avec **Rolisteam**.
