# PhpSession

Simple session handling and login system for PHP.

Features:  
* Self contained login page
* Session timeout support
* Allows custom login failure messages to be set
* Uses PHP's built in password hashing functionality

To use this library, include the PhpSession namespace in your application.

You will need to create a class in your application which implements the UserInterface outlined in user_interface.php. This is currently a very simple interface, with functions to return a user's hashed password from your storage system of choice, and check if the user account is locked.

I created this library to provide an easy way to add admin/login functionality to my applications.

More features are planned for future versions.
