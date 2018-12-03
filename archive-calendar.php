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
                            Місяць події
                        </div>
                        <form>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="news-theme-checkbox">
                                <label class="custom-control-label" for="news-theme-checkbox">Січень</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" id="news-theme-checkbox-2" class="custom-control-input">
                                <label class="custom-control-label" for="news-theme-checkbox-2">Лютий</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="news-theme-checkbox-3">
                                <label class="custom-control-label" for="news-theme-checkbox-3">Березень</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="news-theme-checkbox-4">
                                <label class="custom-control-label" for="news-theme-checkbox-4">Квітень</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="news-theme-checkbox-5">
                                <label class="custom-control-label" for="news-theme-checkbox-5">Травень</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="news-theme-checkbox-6">
                                <label class="custom-control-label" for="news-theme-checkbox-6">Червень</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="news-theme-checkbox-7">
                                <label class="custom-control-label" for="news-theme-checkbox-7">Липень</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="news-theme-checkbox-8">
                                <label class="custom-control-label" for="news-theme-checkbox-8">Серпень</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="news-theme-checkbox-9">
                                <label class="custom-control-label" for="news-theme-checkbox-9">Вересень</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="news-theme-checkbox-10">
                                <label class="custom-control-label" for="news-theme-checkbox-10">Жовтень</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="news-theme-checkbox-11">
                                <label class="custom-control-label" for="news-theme-checkbox-11">Листопад</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="news-theme-checkbox-12">
                                <label class="custom-control-label" for="news-theme-checkbox-12">Грудень</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="news-theme-checkbox-13">
                                <label class="custom-control-label" for="news-theme-checkbox-13">Усі</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Calendar -->
    <section id="archive-calendar">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-10 ml-auto">
                    <div class="content">
                        <div class="content-header mb-5">
                            <h2 class="section-title">
                                ЕКО календар
                            </h2>
                        </div>
                        <div class="content-body">
                            <div class="d-flex flex-wrap justify-content-center align-items-start">
                                <?php
                                foreach($archive_calendar as $item) {
                                    echo
                                        '<div class="calendar-column"><div class="calendar-card">'
                                        .'<div class="calendar-card-header">'
                                        .'<div class="img" style="background-image: url(' . $item['image'] . ')"></div>'
                                        .'</div>'
                                        .'<div class="calendar-card-body">'
                                        .'<h6 class="title">' . $item['title'] . '</h6>'
                                        .'<p class="text">' . $item['text'] . '</p>'
                                        .'</div>'
                                        .'<div class="calendar-card-footer">'
                                        .'<div class="data">' . $item['data'] . '</div>'
                                        .'</div>'
                                        .'</div></div>';
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