# TECHPLANET
A platform with various hardware stores with computer components catalogue

## Group Name
Group D

## Group Members
NAME                 | MATRIC NO | USERNAME
-------------------- | --------- | ----
Mohammad Mu'izzuddin | 1918855   | @mohdmuiz11
Airil Afiq           | 1919241   | @airilafiq
Ahmad Thaqif         | 2010203   | @AhmadThaqif
Asyraf Azman         | 1917565   | @ashjeman

## Introduction
For our project, we decided that we are going to choose a computer's hardware store that sells computer components and accessories through the web application.
From this website, our customers can easily browse through the items and buy directly from the website.

## Objective
Our objective for this website is to make sure our customer have easy access to browse through catalogue components and items for computers, with friendly user interface.

## Features and functionalities
- User can login into the page
- User can easily browse through the items and stores
- User choose the quantity of items
- User can choose payment option
- User can choose courier option for shipping

## MVC Models
MODELS   |        VIEWS        | CONTROLLERS               | ROUTES
-------- | ------------------- | ------------------------- | ------
Store    | home                | HomeController            | /home -> HomeController
Item     | product.main        | ProductController         | /products -> ProductController
Category | product.category    | CheckoutPaymentController | /products/category -> ProductController
Order    | product.itemDetails |                           | /products/id -> ProductController
Courier  | checkout            |                           | /checkout -> CheckoutPaymentController
&nbsp;   | payment             |                           | /payment -> CheckoutPaymentController
&nbsp;   | about_us            |                           | /about us -> view about_us

## ERD
![ERD](https://i.ibb.co/x35GrF3/ERDNew.jpg)

## Sequence Diagram
![Sequence Diagram](https://i.ibb.co/HBLzSG7/Sequence-New.jpg)

## References
- https://www.phco.my/cart
- https://www.techhypermart.com/
- https://shopee.com.my/
