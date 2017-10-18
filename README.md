# responsee

Thème responsive pour PluXml, testé avec Firefox (firefox android) chrome.

* Basé sur Responsee IV : http://www.myresponsee.com/
* Demo : https://www.blogoflip.fr
* Support : http://forum.pluxml.org/viewtopic.php?id=4785

## Installation
Décompresser le fichier responsivee.zip dans le répertoire theme/ de votre installation PluXml

## Template pour les plugins
Le dossiers responsee/plugins contient les fichiers php pour pouvoir intégrer les plugins à la structure du thème responsee. Pour les installer copier le fichier php dans le répertoire du plugins.

Par exemple pour le plugin plxMyContact copier le fichier form.contact.php dans le dossier plugins/plxMyContact.

* form.contact.php : template pour plxMyContact

## BlogRoll
Ce plugin permet d'afficher une liste de liens que vous gérez depuis la page d'administration. J'ai modifié la version original pour permettre le choix de l'icône qui sera affiché côté public. Pour l'installer copier le répertoire plugins/Blogroll du thème dans le répertoire plugins de votre pluxml.

## CHANGELOG
2017/10/18 - 7.1
- [UPDATE] Mise à jour pour PluXml 5.6 https://github.com/Philippe-M/responsee/issues/28
- [ADD] Bouton pour remonter en haut de la page https://github.com/Philippe-M/responsee/issues/18
- [ADD] Ajout des balises og:type https://github.com/Philippe-M/responsee/issues/20
- [ADD] Ajout de la balis og:images https://github.com/Philippe-M/responsee/issues/21
- [ADD] minification css https://github.com/Philippe-M/responsee/issues/22
- [ADD] Ajout des balises title et alt au slideshow https://github.com/Philippe-M/responsee/issues/23
- [ADD] Ajout des balises title et alt au background https://github.com/Philippe-M/responsee/issues/24
- [BUG] Ajout de la traduction "ARTICLES_DATE_UPDATE", merci ouafnico, https://github.com/Philippe-M/responsee/issues/25
- [BUG] Erreur de redirection http vers https https://github.com/Philippe-M/responsee/issues/27
- [BUG] Mise à jour du @ https://github.com/Philippe-M/responsee/issues/29

2016/09/13 - 7.0
- [ADD] Migration du framework css Myresponsee 2 vers la version 4 https://github.com/Philippe-M/responsee/issues/2
- [ADD] Ajout d'un menu repliable pour les écrans small et medium https://github.com/Philippe-M/responsee/issues/14
- [BUG] Correction de l'affichage des articles sur une page categorie https://github.com/Philippe-M/responsee/issues/15
- [BUG] Correction de l'affichage des tags dans la sidebar https://github.com/Philippe-M/responsee/issues/16
- [ADD] Integration du plugin Blogroll https://github.com/Philippe-M/responsee/issues/17

2016/07/24 - 6.4
- [ADD] Ajout de la fonction de réponse aux commentaires depuis un article https://github.com/Philippe-M/responsee/issues/9
- [ADD] Lien pour accéder directement aux commentaires depuis l'entête des articles https://github.com/Philippe-M/responsee/issues/10
- [ADD] Le titre de l'article non cliquable lorsqu'on est sur un article https://github.com/Philippe-M/responsee/issues/11
- [ADD] Ajout d'icônes dans les commentaires pour les informations (date, auteur...) https://github.com/Philippe-M/responsee/issues/12

2016/06/09 - 6.3
- [BUG] Corrige le bug d'affichage sur la page archive, l'auteur était affiché plusieurs fois https://github.com/Philippe-M/responsee/issues/4
- [BUG] Ajout pour de vrai des fichiers infos.xml et preview.png https://github.com/Philippe-M/responsee/issues/3

2016/05/15 - 6.2
- [UPDATE] la taglist passe du trie alpha à random http://forum.pluxml.org/viewtopic.php?pid=48859#p48859
- [UPDATE] affichage de 30 tags au lieu de 20 dans la sidebar
- [UPDATE] intégration de la police Abel et suppression de @import dans css/template-styles.css
- [UPDATE] ajout du fichier preview.jpg et infos.xml

2016/04/12 - 6.1
- [BUG] Color de la tagline

2016/04/03 - 6.0
- [UPDATE] Update to pluxml 5.5
- [BUG] Liste des tags après clic sur un tag dans le menu de gauche
- [ADD] Marqueur AMP pour le référencement
