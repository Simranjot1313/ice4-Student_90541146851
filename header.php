<?php
    $current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div class="navbar">
        <div class="logo">
            <img src="images\Logo.jpeg" alt="Logo">
        </div>
        
    <title>Simranjot Kaur Php Website</title>
    <title>Contact Us</title>
    <title>Our Services</title>
    <link rel="stylesheet" href="css/style.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    </head>
<header>
    <nav>
        <ul>
            <li class="<?= ($current_page == 'index.php') ? 'active': ''; ?>"><a href="index.php">Home</a></li>
            <li class="<?= ($current_page == 'about.php') ? 'active': ''; ?>"><a href="about.php">About US</a></li>
            <li class="<?= ($current_page == 'Contact.php') ? 'active': ''; ?>"><a href="Contact.php">Contact</a></li>
            <div class="search-box">
                <input type="text" placeholder="Search">
                <button alt="Search"></button>
                <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
            </div>

        </ul>
    </nav>
</header>
