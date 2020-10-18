### Comment j'ai procédé ?
1. J'ai installé symfony avec symfony new test-teachr
2. J'ai créé un controller LessonsController avec bin/console make:controller
3. Comme la page /my-lessons ne s'affichait pas dans mon navigateur j'ai compris qu'il manquait symfony/apache-pack que j'ai installé
4. J'ai installé bootstrap css
5. J'ai créé la page de la liste des cours avec un tableau en dur dans le controlleur
6. J'ai créé la page home avec un tableau en dur dans le controller
7. J'ai remplacer les dates en chaine par des datetime, ce qui à été difficile d'ensuite les afficher en francais dans twig
8. J'ai créé des entité pour récupérer les cours de la page "Mes cours" depuis la base

