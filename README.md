# tpnote

## cardsTemplates

### La commande composer utilisée pour créer votre projet avec Symfony 4 :

composer create-project symfony/website-skeleton name_project 4.4.*

La commande à utiliser pour voir la version courante de Symfony pour votre projet

symfony --v

### La commande à utiliser pour voir les routes disponibles dans l'application :

php bin/console debug:router

### La commande à utiliser pour créer une entité :

php bin/console make:entity

### La commande à utiliser pour créer les données de tests (fixtures) dans la base de données :

php bin/console doctrine:fixtures:load

### Un texte justifiant l'organisation de vos classes de contrôleurs :

2 controleurs ont été mis en place car il était plsu logique de séparer les 
traitements des données et des calculsvu que les pages du site n'ont aucun
point en commun et donc afin de mieux compartimenter le projet.