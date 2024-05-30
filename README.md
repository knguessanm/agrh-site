# agrh-site
Les étapes d'installation de laravel sur ubuntu

1. `php -r "copy('https://getcomposer.org/installer','composer-setup.php');"`
2. sudo php composer-setup.php --filename=composer --install-dir=/usr/local/bin
3. php --version et composer --version
4. composer create-project --prefer-dist laravel/laravel virtual-femiWorld
5. cd nom-du-projet
6. php artisan serve

Les étapes à suivre pour cloner le projet

1. Run git clone <https://github.com/LoreLab/agrh.git>
2. Run composer install
3. Run cp .env.example .env 4. configurer le fichier .env en entrant le nom de la BD, mot de passe etc ...
4. Run php artisan key:generate
5. Run php artisan migrate
6. Run php artisan serve
7. Go to link localhost:8000

Start a project with filament

2. Etant dans le dossier du projet installer filament admin: composer require filament/filament:"^2.0"
3. Pour créer un admin filament : php artisan make:filament-user
4. php artisan storage:link pour stocker les images
5. Pour créer un model php artisan make:model Nom_model -m
6. Créer une ressources: php artisan make:filament-resource Formation --simple --generate

Different link utilisé

https://heroicons.com/

lance cette commande: php artisan storage:link pour stocker les images

Pour mettre en place les layouts
https://www.cloudways.com/blog/create-laravel-blade-layout/

Mettre le projet sur github

1. create account on github
2. create new repository
3. access youre project example using linux "cd Code/Youre_Project_here"
4. type here git init
5. git remote add origin https://github.com/LoreLab/agrh.git
6. git config --global user.name "username_on_github" 7.git config --global user.email "youre_email_on_github" 8.git add .
7. git commit -m "first commit"
8. git push -u origin master

create a new repository on the command line
echo "# agrh" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/LoreLab/agrh.git
git push -u origin main

push an existing repository from the command line
git remote add origin https://github.com/LoreLab/agrh.git
git branch -M main
git push -u origin main

Credentail admin
mail : agrh@admin.com
password: password

