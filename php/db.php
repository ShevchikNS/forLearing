<?php
require "rb.php";
R::setup( 'mysql:host=localhost;dbname=portal',
    'root', '' ); //for both mysql or mariaDB
session_start();