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
                            Місто
                        </div>
                        <form>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="news-theme-checkbox">
                                <label class="custom-control-label" for="news-theme-checkbox">Київ</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" id="news-theme-checkbox-2" class="custom-control-input">
                                <label class="custom-control-label" for="news-theme-checkbox-2">Харків</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="news-theme-checkbox-3">
                                <label class="custom-control-label" for="news-theme-checkbox-3">Львів</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="news-theme-checkbox-4">
                                <label class="custom-control-label" for="news-theme-checkbox-4">Дніпро</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="news-theme-checkbox-5">
                                <label class="custom-control-label" for="news-theme-checkbox-5">Одесса</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="news-theme-checkbox-6">
                                <label class="custom-control-label" for="news-theme-checkbox-6">Віниця</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="news-theme-checkbox-7">
                                <label class="custom-control-label" for="news-theme-checkbox-7">Черкаси</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- News -->
    <section id="archive-institute">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-9 ml-auto">
                    <div class="content">
                        <div class="content-header mb-5">
                            <div class="quote">
                                <h4 class="quote__text">Чим більше дров, тим далі ліс</h4>
                                <div class="quote__author">Олександр Жуков</div>
                            </div>
                            <h2 class="section-title">
                                ЕКО заклади
                            </h2>
                            <div class="subtitle">
                                Перелік вищих навчальних закладів екологічного напрямку
                            </div>
                        </div>
                        <div class="content-body">
                            <?php
                                foreach ($archive_institute as $item) {
                                    echo
                                        '<div class="single-card">'
                                        . '<div class="content order-2 order-md-1">'
                                        . '<h5 class="title"><a href="#">' . $item['title'] . '</a></h5>'
                                        . '<div class="info">'
                                        . '<div class="info__faculty mb-1">' . $item['faculty'] . '</div>'
                                        . '<div class="d-flex align-items-center">'
                                        . '<div class="info__data">' . $item['data'] . '</div>'
                                        . '<div class="info__place">' . $item['place'] . '</div>'
                                        . '</div>'
                                        . '</div>'
                                        . '<p class="text">' . $item['text'] . '</p>'
                                        . '</div>'
                                        . '<div class="img order-1 order-md-2" style="background-image: url(' . $item['image'] . ')"></div>'
                                        . '</div>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

<?php
require_once('footer-secondary.php');