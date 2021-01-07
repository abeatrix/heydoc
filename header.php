<?php
/**
 * The Header for Bee Theme.
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head();?>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body <?php body_class();?> >

<header class="navbar navbar-expand-lg sticky-top nevigation  p-3 justify-content-between">
    <a class="navbar-brand pl-5" href="/"><span class="nav-logo">heydoc<span class="nav-logo-dot">.</span></span></a>
    <div class="form-inline" id="navbarSupportedContent">
        <?php wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'navbar-nav mr-auto pr-5',
            )
        );?>
    </div>
</header>
