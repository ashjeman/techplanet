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

## Project Screen Captured and Explanation
![image](https://user-images.githubusercontent.com/82203224/122252306-cd385180-cefd-11eb-9a88-1cf7fcd29be4.png)
This is our TECHPLANET homepage, you can here we display what item is new and hot in the market right now.

![image](https://user-images.githubusercontent.com/82203224/122252358-d9bcaa00-cefd-11eb-8069-43e2cbd54deb.png)
This is our store section, in here we include all category for the user to choose what category they want to browse. Once the click the category, it will bring the users to the specific page with the products display.

![image](https://user-images.githubusercontent.com/82203224/122252396-e3461200-cefd-11eb-872f-1e81c7b265e0.png)
This is about us section. Basically our group pictures and what we do.

![image](https://user-images.githubusercontent.com/82203224/122252449-ef31d400-cefd-11eb-9183-e9d78b1003b1.png)
This is the login page. At first when you enter TECHPLANET homepage, at the navigation bar right side which is called Account, you can find the login page. The users can login here.

![image](https://user-images.githubusercontent.com/82203224/122252474-f658e200-cefd-11eb-8ac7-f4c391359a62.png)
This is the register page, you can also find it at the homepage navigation bar on the right side on the Account, and register. The users can register themselves in this website.

![image](https://user-images.githubusercontent.com/82203224/122252511-fe188680-cefd-11eb-8d63-58d24bcaa9ff.png)
After you have click any category you want, for example laptop, it will bring to the laptop page. When you click on any laptops display here it will bring you to the item details page.

![image](https://user-images.githubusercontent.com/82203224/122252580-0bce0c00-cefe-11eb-8056-ee70e5644b7a.png)
Last one, this is the checkout form, after you have click buy now on the product. It will bring to this form where the users will need to fill in before they are able to pay.



### Challenge and Difficulties
- harder to comprehend from online learning
- difficult to work as a group because of no physical meeting
- slow internet can resort to hard communication
