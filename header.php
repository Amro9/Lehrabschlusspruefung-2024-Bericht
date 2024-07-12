<?php
include "navbar.php";
session_start(); // Start der Session
?>
<!DOCTYPE html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Myshop</title>
</head>

<body>
    
    <div class="container text-center my-5">
        <?php
        if (isset($_SESSION['errorMessage']) && !empty($_SESSION['errorMessage'])) {
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>' . $_SESSION['errorMessage']. '</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>';
            unset($_SESSION['errorMessage']);   // Nachricht aus der Session entfernen
        }
        
        if (isset($_SESSION['successMessage']) && !empty($_SESSION['successMessage'])) {
            echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>' . $_SESSION['successMessage']. '</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>';
            unset($_SESSION['successMessage']);   // Nachricht aus der Session entfernen
        }
        ?>
