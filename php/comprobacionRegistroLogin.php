<?php
session_start();
if (isset($_SESSION['user'])){
    header('location: ../php/preguntas.php');
}else{
    header('location: ../php/login.php');
}
