<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?= $app_title ?></title>

    <link href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" rel="stylesheet"/>
    <link rel="stylesheet" href="fonts/font.css">
    <link rel="stylesheet" href="dist/app.css">
</head>

<body>

<?php require_once('includes/partials/svgs.php'); ?>

<header id="app-header" class="header-secondary">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
            <div class="col-sm-5">
                <div class="site-nav d-flex align-items-center">
                    <div class="burger-menu position-relative d-flex flex-column justify-content-center align-items-center">
                        <div class="line line--top"></div>
                        <div class="line line--middle"></div>
                        <div class="line line--bottom"></div>
                    </div>
                    <ul>
                        <?php
                        foreach ($nav as $item) {
                            echo
                                '<li><a href="#">' . $item . '</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <a href="/" class="logo" style="background-image: url('images/icon/logo/logo-header.png')"></a>
            <div class="col-sm-5 col-lg-4 pr-sm-0 d-none d-md-block">
                <div class="social-nav d-flex justify-content-end align-items-center">
                    <ul class="social-list social-list--special">
                        <li class="social-list-item social-list-item--facebook">
                            <a href="#">
                                <svg width="20" height="20">
                                    <use xlink:href="#facebook-icon"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="social-list-item social-list-item--youtube">
                            <a href="#">
                                <svg width="20" height="20">
                                    <use xlink:href="#youtube-icon"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="social-list-item social-list-item--instagram">
                            <a href="#">
                                <svg width="20" height="20">
                                    <use xlink:href="#instagram-icon"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <ul class="languages-list">
                        <li>
                            RU
                        </li>
                    </ul>
                    <a href="page-help.php" class="btn btn-danger">
                        Підтримати
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="menu">
    <nav class="menu-nav">
        <ul class="menu-nav-list">
            <li>
                <a href="#">Екологічні катастрофи</a>
            </li>
            <li>
                <a href="archive-news.php">Екологічні новини</a>
            </li>
            <li>
                <a href="page-maps.php">Еко мапи</a>
            </li>
            <li>
                <a href="single.php">Технології</a>
            </li>
            <li>
                <a href="archive-calendar.php">Еко календар</a>
            </li>
            <li>
                <a href="archive-institute.php">Еко заклади</a>
            </li>
            <li>
                <a href="archive-held_events.php">Заходи ECOCONTROL</a>
            </li>
            <li>
                <a href="#">Цікаві факти</a>
            </li>
        </ul>
    </nav>
</div>


<main>

    <nav class="site-navigations">
        <div class="banner" style="background-image:url('images/content/secondary/banner/banner-item.jpg');"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item">Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </nav>