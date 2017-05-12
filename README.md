# OLibrary
Dépot du projet OLibrary

MONFOUGA Hugo
HANOTEL Guillaume
PITAULT Cyriaque
GARDIN Kélian


*réservation : un utilisateur réserve un livre si il n'y a plus d'exemplaires en stock -> livres présent dans la table emprunte avec is_reservation à 1*

*emprunt : un utilisateur emprunte un exemplaire d'un livre pour une période donnée -> livres présent dans la table emprunte avec is_reservation à 0*

## Espace perso utilisateur :

* Voir son nom, prénom, mail
* Modifier mail, mdp (nom, prénom ?)
* Voir les livres qu'il a emprunté 
* Voir à quelle date se fini chacun de ses emprunts (nom livre, dates, bouton rendre ?)
* Affichage d'un message d'alerte l'informant qu'il n'a pas rendu un livre à temps
* Voir les livres qu'il a réservés (bouton pour annuler la réservation)
* Suppression de son compte ?


## Espace admin

### Gestion des notices et des exemplaires

* Option pour trier la liste 
  * par auteur
  * par année
  * afficher tous les exemplaires d'un livre ou seulement une notice 
  * par collection 
  * par founisseur
  


### Gestion des Emprunteurs

* Liste des users qui ont empruntés (liste des livres empruntés, durées)
* Mise en avant des utilisateurs qui n'ont pas rendu à temps un livre
* Liste des users ayant fait des réservations( en attente qu'un exemplaire se libère( avec un compte à rebours ? ))




### Gestion des Autorités

* Vérifier l'input utilisateur / clean le controller

### Gestion/Circulation des Documents

* Liste des exemplaires empruntés et réservés



### Gestion des Utilisateurs

* Liste de tous utilisateurs
* Modif des users (nom/prénom/mdp/mail?/passer en admin)
* Delete user ?











