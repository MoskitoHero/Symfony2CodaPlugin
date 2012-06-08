#Symfony2 Coda Plugin
This is  a basic Coda2 plugin to ease the most common tasks when developing with [Symfony2](http://www.symfony.com) on Panic's [Coda](http://www.panic.com/coda/) app.

It also allows you to install Symfony2 right from within Coda2.

It has been tested on Coda 2. This is the 64 bits version of the plugin. If you want a version for Coda 1.7.x, download a version based on a 0.1.x tag.

##Installation Instructions
Download the zip file.  
Unzip.  
Double-click the Symfony2.codaplugin bundle, or drag and drop on Coda's icon.
Use it!

##Usage
This plugin requires you to have a Coda Site set up and opened.
It obviously requires you to have set up Symfony2 at the root of that Site.
###Cache Management
* **Clear Cache**  
`php app/console cache:clear`  

* **Warm Up Cache**  
`php app/console cache:clear`

###Doctrine
List of available commands:

* **Create Database**
* **Create Schema**
* **Force Update the Database**  
`php app/console doctrine:schema:update --force`
* **Clear Metadata cache**
* **Clear Query Cache**
* **Clear Result Cache**
* **Mapping Info**
* **Ensure Production Settings**
* **Drop Schema**

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

###Debug
* **Debug Container**
* **Debug Routes**

###ACL
* **Init**

###Other Commands
* **List commands**  
Shows up a list of available commands in the console.
* **Setup New Symfony App With Vendors**  
*This command requires that you have set up GIT on your machine.*  
It will fetch the latest Symfony2 version from GitHub into the Coda Site root, install the vendors, and perform an app/check. **This takes a while.** Count 2-5 minutes.  
For your information, the commands that are called up are :

		git clone http://github.com/symfony/symfony-standard.git
		mv symfony-standard/* .
		rm -rf .git
		rm -rf symfony-standard
		php app/check.php
		php bin/vendors install

* **Setup New Symfony App Without Vendors**  
*This command requires that you have set up GIT on your machine.*  
It will fetch the latest Symfony2 version from GitHub into the Coda Site root.  
For your information, the commands that are called up are :

		git clone http://github.com/symfony/symfony-standard.git
		mv symfony-standard/* .
		rm -rf .git
		rm -rf symfony-standard

More on [my website](http://cedric.delalande.me/).