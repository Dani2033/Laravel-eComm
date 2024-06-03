<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Project objective
- Create a simple e-commerce site in Laravel 9 to familiarise with the framework

## Project creation process
- First I created Master, header, footer and login views and created the routes
- Then I created the login module generating the migration and seeder files
  - All the login and register (redirects login) logic is inside the UserController. (check login values, encrypt pass, return errors)
  - Created middleware *convenient mechanism for inspecting and filtering HTTP requests entering your application* If already logged redirect to home page, as well as some must be logged in pages
  - Logout is managed in routes/web using Session::forget('user')
- After that created the product table and seed it with a couple of testing items
  - Created product view also known as home page
  - Created the model and filled the carousel with $data that is send through the index function in routes/web as well as the trending products
- Then I built the product detail view and detail function in product controller view detail page
- Then I created the cart table (id, product_id, user_id) so we can use joins is sql
  - ***improvements*** A better approach would be adding a quantity field so we don’t get repeated entries of items in our db or just check if we have repeated items and display them together. deeper expl. If we add the field we would have to check if an item id is already inside our cart so we can add 1 to quantity and we will have to check it when removing items as well as create a different interface so we can remove x quantity of items 
  - Form in add to cart button in detail page 
  - Add product to cart function addToCart function in product controller, use cart model in product controller
  - Display cart counter function cartItem in product controller, use product controller in header view and create variable for the total of products
- Now we want to see our cart items so I created a cartList view
  - Add cartList function in product controller, using a join to get the right data, pass data ($products) to the cartList view
- We need a remove item from cart
  - Add link in remove item from cart button in cartList view
  - Create removeFromCart function in product controller
  - ***improvements*** maybe removing an entry from db is a bit too aggressive, so adding a field to mark as deleted could be other approach like suitCRM does
- The last steps were to create the "Order now" functionality
  - Create orderNow function in product controller and add route to add up all prices from cart
  - Create ordernow view and pass all the data
  - Generate orders table with migration (id, product_id, user_id, status, payment_method,
payment_status, address)
  - Create ordernow view, orderplace/ordernow routes, order model
  - Create orderPlace function, gets all cart items entries that have same user_id as the session user id, creates a new order entry and deletes the entries in the cart table (***improvements*** same as the deleted discussed before)
- The last thing I did was the "show my orders list"
  - Add route
  - Add myOrders function in product controller that fetch data from database with join
  - ***improvements*** create baskets/order numbers so you can see everything you order each time instead of everything you have ever ordered. We will manage that by adding a new field to the orders table (orderNumber for example) and then assigning it to the orderPlace function

