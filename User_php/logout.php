<?php

@include 'confiq.php';

session_start();
session_unset();
session_destroy();

header('location:http://127.0.0.1:5500/Vaksin-main/Vaksin/Tes.html#home');

?>