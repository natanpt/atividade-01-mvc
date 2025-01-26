<?php
    class HomeController {

        public function __construct() {}

        public function index() {
            header("Location: ./view/home/Homepage.php");
        }
    }
?>