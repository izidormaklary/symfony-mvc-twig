# Symfony intro

Symfony assignments tackled in a single a repo.

## 1. MVC & routing

### Learning objectives:
    Install Symfony
     Learn about the lifecycle of software
     Learn to use the MVC layer of Symfony
     Learn to use the routing component
     Learn the basics of twig
### Steps:

1. [x] Install Symfony
2. [x] Use the MVC
3. [x] Functionality: 
    * Showing name
    * Changing name
4. [x] About me page
5. [x] Change name of the route /about-{name}

## 2. Twig

### Learning objectives: 
      Formatting html templates

### Must have features:

* [x] Footer
* [x] Menu
* [x] About me page: 
   * displaying the Date in 3 different formats inside the menu
   * formatting should happen inside the twig file
* [x] Homepage : Showing the name Capitalized
* [x] Creating a custom twig helper


## Getting started

_if you want to run the project locally..._

Requirements: 
    * have composer installed
    * have symfony installed

1. in the project folder (MVC_TWIG_PROJECT/) run the composer installation

```bash
composer install
```

2. edit the .env file inside the project folder

```
# fill in your database connection
DATABASE_URL="mysql://userName:password@127.0.0.1:3306/databaseName?serverVersion=5.7"
# you can decide between running it in production or developement mode
APP_ENV=prod/dev 
```

3. you are ready to host it!
    * set up your own localhost
    * or run the following command in the project folder

```bash
symfony serve
```
