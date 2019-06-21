<?php
class ini {    

    public $_login;

    public function __construct()
    {   
        require 'views/required/meta.php';
        require 'views/required/header.php';
        require 'views/required/footer.php';
        require 'main/login.php';

        $this->_login = new Login();
    }

    function main() {
        include 'views/required/body.php';
    }

    function bookings() {
        include 'main/bookings.php';
        new Bookings();
        /* do bookings here */
    }

    function Contact() {
        include 'main/contact.php';
        new Contact();
    }

    function Login() {
        $_login->login();
    }

    function Register() {
        $_login->register();
    }
}
?>