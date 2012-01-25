#Symfony2 Coda Plugin
This is  a basic Coda plugin to ease the most common tasks when developing with [Symfony2](http://www.symfony.com) on Panic's [Coda](http://www.panic.com/coda/) app.

It is still pretty much bare, and many functionalities need to be added. Feel free to help, fork, etc.

It has been tested on Coda 1.7.4

##Installation Instructions
Download the zip file.  
Unzip.  
Double-click the Symfony2CodaPlugin.codaplugin bundle, or drag and drop on Coda's icon.
Use it!

##Usage
This plugin requires you to have a Coda Site set up and opened.
It obviously requires you to have set up Symfony2 at the root of that Site.
###Cache Management
* **Clear Cache**  
`php app/console cache:clear`  

* **Warm Up Cache**  
`hp app/console cache:clear`

###Doctrine
* **Force Update the Database**  
`php app/console doctrine:schema:update --force`

###Entities
* **Generate From File**  
Generates the entity you're currently editing in the src folder. For instance, calling this command while editing src/Acme/MyBundle/Entities/MyEntity.php will fire up :  
`php app/console doctrine:generate:entities Acme/MyBundle/Entity/MyEntity`  

* **Generate From Selected Text**
Generates the entity name you have selected. Selecting `\Acme\MyBundle\Entity\MyEntity` will generate :  
`app/console doctrine:generate:entities`  

* **Generate Bundle Entities**  
Generates all the entities of the bundle you're currently editing in the src folder. For instance, calling this command while editing src/Acme/MyBundle/Entities/MyEntity.php will fire up :  
`php app/console doctrine:generate:entities Acme/MyBundle`  
You need to be in the `Entity` folder.

###Other Commands
It's coming…

More on [my website](http://cedric.delalande.me/).