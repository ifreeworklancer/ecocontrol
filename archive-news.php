<?php

require_once('store.php');

require_once('header-secondary.php');

?>

    <nav class="archive-nav">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="archive-nav-outer">
                        <div class="news-theme-nav__title mb-3">
                            Тема
                        </div>
                        <form>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="news-theme-checkbox">
                                <label class="custom-control-label" for="news-theme-checkbox">Нелегальна вирубка лісу</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" id="news-theme-checkbox-2" class="custom-control-input">
                                <label class="custom-control-label" for="news-theme-checkbox-2">Забруднення водойм</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="news-theme-checkbox-3">
                                <label class="custom-control-label" for="news-theme-checkbox-3">Лісові пожежі</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="news-theme-checkbox-4">
                                <label class="custom-control-label" for="news-theme-checkbox-4">Забруднення повітря</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="news-theme-checkbox-5">
                                <label class="custom-control-label" for="news-theme-checkbox-5">Браконьєрство</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="news-theme-checkbox-6">
                                <label class="custom-control-label" for="news-theme-checkbox-6">Мітинги</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="news-theme-checkbox-7">
                                <label class="custom-control-label" for="news-theme-checkbox-7">Інші</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- News -->
    <section id="archive-news">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-9 ml-auto">
                    <div class="content">
                        <div class="content-header">
                            <h2 class="section-title mb-4">
                                ЕКО новини
                            </h2>
                        </div>
                        <div class="content-body">
                            <div class="news-tabs">
                                <div class="news-tabs-header">
                                    <ul class="news-tabs-header-list">
                                        <?php
                                        foreach($archive_news['tabs_header'] as $item) {
                                            echo '<li class="news-tabs-header-list__item">' . $item['title'] . '</li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="news-tabs-body">
                                    <?php
                                    foreach($archive_news['tabs_body'] as $item) {
                                        echo
                                        '<div class="news-tabs-body-item">';
                                        foreach($item as $value) {
                                            echo
                                                '<div class="news-tabs-body-item-row">'
                                                .'<div class="content order-2 order-lg-1">'
                                                .'<h5 class="title"><a href="#">' . $value['title'] . '</a></h5>'
                                                .'<div class="info d-flex align-items-center">'
                                                .'<div class="info__data">' . $value['data'] . '</div>'
                                                .'<div class="info__author">' . $value['author'] . '</div>'
                                                .'</div>'
                                                .'<p class="text">' . $value['text'] . '</p>'
                                                .'</div>'
                                                .'<div class="img order-1 order-lg-2" style="background-image: url(' . $value['image'] . ')"></div>'
                                                .'</div>';
                                        }
                                        echo '</div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('footer-secondary.php');