Welcome to my Social Media Web Portal.

I am using this poject to show off my knowledge with the below Stacks;
1) HTML - Hyper Text Markup Languae
2) Cascading Style Sheet
3) PHP - Hypertext Prepropcessor
4) MySQL - MySerial Querried Language
5) Javascript

In this version, below are the steps I took.
1) Created the PHP index page to display just a name
2) Register/Sign Up form: Added the PHP file for users registration or sign up. The idea of the form is to get users details and send it to the database, check that the correct  emails are matched. The databse was created with the users table for storing these values. However, the form also has the below functionalities; checking that the email entered by the new user has not already been used, validating all the remaining users input/values, storing all the users input in individual session variables, checking for all possible error messages and storing in them in one variable in form of array, displaying each error message from the variable once the user violates each rules, also generating each unique username, giving each registered user a random profile picture, andinserting all the sers values into our dataase.
3) The Login Form: I added only two extra lines of code to improve efficiecyin the same registration form. See the below functions; I created a seperate file for the login handler (login_handle.php) same as the registeration handler(register_handler.php) all included in the registration form, also handled login errors. and aso reopening a closed account.
