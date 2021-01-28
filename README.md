# Générateur de CVs

briève description (taff de Killian)
tout ceci est extrêmement sujet a modification (le README bien entendu)

## Fonctionnement

Quand l'utilisateur se connecte sur la page du site faire en sorte qu'il aille directement soit sur une page connectée soit sur la page inscription du site.

Faire compléter les formulaires avec des champs obligatoires (*), si l'utilisateur quitte la page de l'inscription durant son inscription sauvegardée ce qu'il a fait via les cookies, comme ça dès qu'il se reconnecte ca lui remet où il en était.

Une fois enregistré l'amener sur les formulaires si les formulaires sont complets lui proposé un cv.

Si le formulaire n'est pas complet l'emmener sur la complétion du formulaire.

Une fois complété l'emmener sur la page cv.

(pour le moment) Lui proposer un template assez basique. 

(si on est en avance) Rajouter des templates de cv un peu plus complexe/design.

Générer le cv en fonction des inscriptions renseigné dans les formulaires.

## Cadre du Projet ou Autre

TODO

## Auteurs

Edrow-6 / Xander / Skyrex

### Ressources

[Editeur Markdown](https://stackedit.io/)<br>
[Visual Studio Code](https://code.visualstudio.com/)

[Docs TailwindCSS](https://tailwindcss.com/docs)<br>
[Alpine.js](https://github.com/alpinejs/alpine/)<br>

[Docs PHP](https://www.php.net/docs.php)
[Adaptation Blade (BladeOne)](https://github.com/EFTEC/BladeOne)<br>
[Extention BladeOne](https://github.com/EFTEC/bladeonehtml)<br>
[Docs Officielle Blade](https://laravel.com/docs/8.x/blade)

[PDO (Standalone)](https://github.com/EFTEC/PdoOne)<br>
[PHPDotEnv (Standalone)](https://github.com/vlucas/phpdotenv)

### Crédits

Cette Application a été créer à l'aide des ressources ci-dessus et des connaissances de l'équipe de développement.

### Commandes Utiles

Générer un tailwind.css par défaut :<br>
    > npx tailwindcss-cli@latest build -o public/assets/css/tailwind.css

Générer fichier de customisation de tailwind.css :<br>
    > npx tailwindcss-cli@latest init

Compiler le styles.css qui contient les modules de tailwind.css + styles perso :<br>
    > npx tailwindcss-cli@latest build public/assets/css/styles.css -o public/assets/css/tailwind.css

De même pour la production :<br>
    > NODE_ENV=production npx tailwindcss-cli@latest build public/assets/css/styles.css -o public/assets/css/tailwind.css
