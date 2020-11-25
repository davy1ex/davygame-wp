<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAVYGAME</title>

    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Lato&family=Roboto:wght@700&display=swap" rel="stylesheet">     -->
</head>
<body>
    <div class="banner" style="background-image: url(<?php the_field('banner') ?>)">
        <header>
            <div class="wrapper-header">
                <div class="logo">DAVYGAME</div>
                <div class="nav-menu">
                    <div class="header_item">HOME</div>
                    <div class="header_item">EVENTS</div>
                    <div class="header_item">SCHEDULE</div>
                    <!-- <div class="header_item">CONTACTS</div>             -->
                    <div class="btn">SIGN UP</div>
                </div>
            </div>
        </header>

        <?php wp_head() ?>