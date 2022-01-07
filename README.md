# ebuy
## Steps:
* clone : https://github.com/shreejanjoshi/ebuy
* add vendor and var files in your folder.
* creat an account in https://mailtrap.io/ -> inbox -> SMTP setting -> integration click on symfony 5+ and copy the       Mailer_DNS
* Replace it in the env.
* write your database username and password to connect.
* After type this command : php bin/console doctrine:schema:update --force 

Ebay clone Ebuy with symfony 5.4
# scrum-project
### Team : 
- Lakneswaran ( backend)
- Binayak (backend)
- Christiaan (Backend)
- Shreejan (backend)
- Stefan (Backend)

- https://trello.com/b/0bUIkzxj/project-management


## Project : Recreate E-bay - deadline : 7th January 2022 (3 weeks)

## Languages: 

### Frontend : Html
### Stylesheet : Bootstrap  

## Backend : PHP / Symfony 5.4 

## Project description:

## We need to create a page for people who can sell/buy products.
* Page nav with products and categories of products and login and register.
* Without login they can’t sell or buy the products, but they can search and find information about the product.
* Requirement to sell: after clicking on Register form with username, password, email adress, and some information. Send.
* Go to main page where he/she can log in with that username/email adress and password.
* Go to their own page with their username. Example : www.ebay.com/Lakneswaran
* On that page he/she can put products to sell.
* When add product button clicked. A form with Name, price, quantities , category,  image of the product. Appear click ok.
* When click ok then the product, It add it on the database and from the database the browser pull the products. 
* then appear on the page of Lakneswaran.
* Each products on the page should have checkbox, delete, copy, edit  button.
* After you have selected the all products you want to sell click on the add button. 
* SO now the products ready to sell.

* Requirement for buy: After login in with your username and password you can buy products.
* When you select the quantities and clicked on add to cart. 
* It add to chart.
* When you clicked on chart logo => you go to the checkout page.
* On the checkout page you can see the products you want to buy and total price of each product and total.
* When you click on checkout => it goes to payment page. 


# Database example:


| Product name  |  Quatities | Catergory | Price | Date      | User id |
| ------------- | ---------- |---------- |------ |---------- | ------- |
|  Blue pen     |      20    |  Office   | €2.50 |20/12/2021 |Shreejan |
|  Blue pen     |      40    |  School   | €1.50 |18/12/2018 |Laknesh  |

<!--User ID depends on username who is adding the products on their page.  --> 

### What is Symfony? 

* Sympony is a PHP web application framework and a set of reuasable PHP components/libararies. => to creat Websites and web application.
* It’s also Open-souce, replace repetitive codingtext. Like laravell
* Folder structure => APP, Bin, src, var, vendor and web.
* App folder - configuration->Parameters, Resources ->frontend view folder create in this. 
* Bin - Console php command promt can be user here.
* src - controller and model(entity)
* var - cache -developing and Production; logs-performs stores here; session-Log in  and log out
* vendor - Third parties library like php excel,fdf,...
* web - app.php -> production app_dev.php -> development. 

### Symfony controllers

* Controller is responsible for handling each request that comes into symfony application. 
* User request -> controller response. 
* By default we get DefaultController class => “src/AppBundle/Controller 

<?php

Namespace appBundle/controller;
Use sympony\..\Controller;
Use ./response;
Class DefaultController extends Controller{} ?>

Base framework functionality. 

### Symfony - Routing

- Routing maps request to a specific controllers method. In URI has the following three parts

* Hostname segment => website name www.blac.com
* Path segment => what page ex. index
* Query segment => we are sending "data with URI.

### Symfony - View Engine

- A view layer is the presentation layer of the MVC application. It separates the application logic from the presentation logic. 

### App/resources/View/

- Symfony uses a powerful template language called twig. Twig allows you to write concise and readable templates in a very easy manner. Twig won’t process PHP tags. 

### Symfony - View engine 

- {{   }} - prints a variable 
- {% %} - Execute a function. If/for condition or to set variable.
- {# #} - comments

 ### What is Doctrine? 

- Doctrine 2 is an object-relational mapper (ORM) for PHP 71+ that provides transparent persistence for PHP objects. 
Php object code -> create table, database.

- Sympony - Doctrine ORM

- Database Model can creat with symfony doesn’t required to go phpmyadmin. 

- Symfony - configuare a Database

- In “app/config/parameters.yml” file config your username, password, mailer_transport. =>
- In console: php bin/console doctrine:database:create

# Symfony installation 

* Required tools:

- Composer -- A dependency manager for php
- php 7 or Above
- CMD promt

# Creat a symfony with basic folders

- composer create-project symfony/framework-standard-edition ebuyscrum - for version 3.4

- Or 

# Symfony new ScrumEbay & symfony serve

* “v4.27.3”
### After the installation it will ask:
- host : localhost
- port : 
- name : mysymfony
- user : root
- password, transport, host, user, secret :



- cls is clear

- Cd projectname

- php bin/console server:run -> the installed framework will start.

- Symfony serve

- Localhost:8000
- Sympony Routing and controller 

## How to create controller:

- symfony console make:controller CategoryController

### Explanation :
#### #[Route('/category', name: 'category')]
- URL path that we are calling.
- return $this->render(
- The page we are viewing in the front end returning. 




- $ symfony serve
- $ bin/console | grep doctrine
- $ bin/console make:entity


# Install symfony mailer component with

- $ composer require symfony/mailer

- Emails are delivered via a "transport". Out of the box, you can deliver emails over SMTP by configuring the DSN in your .env file:

- MAILER_DSN=smtp://user:pass@smtp.example.com:port

# Logbook : 
* Day 1 : Group separated, Spoken met Tom about the project. He wants to recreate Ebay to products selling and buying all over world(territories needs to be discussed ) with this webpage. Worked with Trello for split up tasks. repo created in Github. Database created with basic requirements in myphpadmin. Questions for Tom brainstorming and preparing for tomorrow.

* Day 2: - standup talk(live) What we have done yesterday a preview and review about it and brainstormed next tasks.
- Modified database,  everyone has access to database 
- Created dotenv file, DataLoader in model
- Created .env
- Product class - Stefan - Finished
- User Class - Sreejan - Finished
- Catagory Class - Lakneswaran - Finished
- Order Class - Binayak - Finished
- Mail to Tom question about the project - Christiaan
- Admin class - Lakneswaran - Finished
- Checked Class after pull request and merged.
- updated Day 2 log.

- We have talked about the github merging, pull request, env file, agreed cameelCase using entire project.

* Day 3

- Standup meeting : splited everyone to create their own controller for the class.
- Biniyak finished with Ordercontroller - working
- Full day - introduction of Symfony

* Day 4

* Stand up meeting:  we took decision to work with Symfony as Backend.
Pull request controlled and what we done till now are updated in Github.
Installation Composer and Symfony. 
* Sreejan and Christian are not doing well. He is doing further with the controller of userClass.
* Finished the controller
* Lakneswaran and Stefan encounter error’s in Database - fixed with installation HeidiSQL.
* Stefan and Binayak installed composer and symfony.
* Lakneswaran Finshed with CategoryLoder en tested database php - working.
* Standup meeting at the end of the Day: Rechanging workflow.

* Day 5

Stand up meeting: Talked with Sreejan about the changes of the workflow and Symfony.
* Category pushed in github - Controlled. Files of main up to date of everyone. 
* Sreejan and Lakneswaran Installed Symfony and composer. Error fiksed with the group.
* localhost:9003 (through xdebug.client_host/xdebug.client_port) :-( =>
* Solution : xdebug.log_level=0 was the solution for me. Go to the xampp ->php->php.ini paste it below and save. Then start with composer installation. Working. 
* Symfony experiment day. Requirement to finish after this weekend are need to share their experience with the group what they have learned about their own project. 
* New task updated on Trello.
* 28/12/2021 is deadline for basic requirement for Backend. Lakneswaran and Binayak will start on 03/01/2022 with the fontend. The rest will working with “nice to have” in Backend.
* The name Tom wants for this project doesn’t agree with the team. So planning to give a Better name. Finish on Next Monday.
* Stand up meeting at the end of day : 

Day 6

Standup meeting: creating own class and working with symfony. 
Everyone has own repo and worked with symfony created a class. + new repo for the project created
Missing files in the main branch, errors => vendor file added, ignored because of gitignore.
Day end stand up : tomorrow we’ll clone Sreejan repo and work on there. Need to fix classes and login + database upto date.
Link: https://github.com/christiaanvdw/symph, https://github.com/Lakneswaran/Symfonyproject,


Day 7:

- Standup meeting: 2 hour discussed for payment and order and product: Conclusion after must have add new table for payment/ order details.
- everyone clone from new repo and work on it
- error with missing folders-> vendorfolder is missing and error handshake -> symfony server:stop-> server:ca:uninstall->symfony server:ca:install -> sumfony server:start or symfony serve.
- error with the database: created a username in phpmyadmin
Then -> php bin/console doctrine:database:create
- php bin/console make:migration
- php bin/console doctrine:migrations:migrate

- Biniyak : worked on order class
- Stevan : error fixing and documentation reading
- Sreejan : worked with login and helped with database creeren
- Christian: Documentation reading, installed database

* “Today learned more about symfony and trying to understand how you guys setup the database and how to improve it. 
* Planning to do as stefan suggested working on methods for updating the db” -Chris

Day 8 

- Lakneswaran: 4h testing symfony is working, expect the database connection.
- sreejan working on the login
- biniyak on order
- Stevan with product

Day 9

- Lakneswaran: documentation find the solution for the connection between database founded and source control deleted tetsing project in github and local finding a solution to fix it. 
- Biniyak : order
- stevan : problem searching

Day 11

- Lakneswaran : Category finished and working on bootstrap
- Sreejan Login finished, working on reset
- Biniyak : Order finished, trying to fix bugs
- Stevan : Fixed with Products.
- Christian: Finished with Footer and contact us

Day 12

- Laknewaran : Finsihed with Go product and products page and trying to fix the footer and reda me update.
- Sreejan : Fixed reset
- Presentation.








