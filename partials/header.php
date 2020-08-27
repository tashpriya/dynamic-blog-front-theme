<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo assets('/images/favicon.png'); ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo assets('/plugins/bootstrap/css/bootstrap.min.css'); ?>">

    <!-- FontAwesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="<?php echo assets('/styles/fonts.css'); ?>">
    <link rel="stylesheet" href="<?php echo assets('/styles/styles.css'); ?>">

    <title>Ash's Blog</title>
</head>
<body>

<header class="main-header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-3">
            <a class="navbar-brand" href="<?php echo url('/') ?>">
                <!--<h1>Ash's Blog</h1>-->
                <img src="<?php echo assets('/images/LOGO-colored.png'); ?>" alt="Ash's Blog" style="max-height: 45px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="mr-auto"></ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo url('/') ?>">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo url('/single.php?slug=post-title-1') ?>">Single Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo url('/about.php') ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo url('/contact.php') ?>">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
