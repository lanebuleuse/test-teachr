### Comment j'ai procédé ?
1. J'ai installé symfony avec symfony new test-teachr
2. J'ai créé un controller LessonsController avec bin/console make:controller
3. Comme la page /my-lessons ne s'affichait pas dans mon navigateur j'ai compris qu'il manquait symfony/apache-pack que j'ai installé
4. J'ai installé bootstrap css
5. J'ai créé la page de la liste des cours avec un tableau en dur dans le controlleur
6. J'ai créé la page home avec un tableau en dur dans le controller
7. J'ai remplacer les dates en chaine par des datetime, ce qui à été difficile d'ensuite les afficher en francais dans twig
8. J'ai créé des entité pour récupérer les cours de la page "Mes cours" depuis la base
9. J'ai généré les migrations avec doctrine:migration:diff
10. J'ai éxécuté les migrations avec doctrine:migration:migrate
11. j'ai utilisé https://github.com/hautelook/AliceBundle pour les fixtures
12. J'ai exécuté les fixtures avec hautelook:fixtures:load
13. J'ai modifié le controlleur pour envoyer les entités à la place du tableau en dur dans la page mes cours
14. J'ai mis à jour le template en conséquence pour qu'il fonctionne désormait avec ces entités

### Comment installer le projet

1. Cloner le dépot
2. Lancer composer install
3. Créer la base de donneé avec bin/console doctrine:database:create
4. Lancer les migrations doctrine avec bin/console doctrine:migration:migrate
5. Lancer les fixtures avec bin/console hautelook:fixtures:load