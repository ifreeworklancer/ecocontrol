<?php

require_once('store.php');

require_once('header-secondary.php');

?>


    <!-- News -->
    <section id="archive-held-events">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-9 ml-auto">
                    <div class="content">
                        <div class="content-header mb-5">
                            <h2 class="section-title">
                                Проведені заходи
                            </h2>
                            <div class="subtitle">
                                Тут ви можете зареєструватися на будь-які заходи ECOCONTROL
                            </div>
                        </div>
                        <div class="content-body">
                            <div class="news-tabs">
                                <div class="news-tabs-header">
                                    <ul class="news-tabs-header-list">
                                        <?php
                                        foreach($archive_held_events['tabs_header'] as $item) {
                                            echo '<li class="news-tabs-header-list__item">' . $item['title'] . '</li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="news-tabs-body">
                                    <?php
                                    foreach($archive_held_events['tabs_body'] as $item) {
                                        echo
                                        '<div class="news-tabs-body-item">';
                                        foreach($item as $value) {
                                            echo
                                                '<div class="news-tabs-body-item-row">'
                                                .'<div class="content order-2 order-md-1">'
                                                .'<h5 class="title"><a href="#">' . $value['title'] . '</a></h5>'
                                                .'<div class="info">'
                                                .'<div class="d-flex align-items-center">'
                                                .'<div class="info__data">' . $value['data'] . '</div>'
                                                .'<div class="info__place">' . $value['place'] . '</div>'
                                                .'</div>'
                                                .'<div class="info__more"><a href="#">Детальніше</a></div>'
                                                .'</div>'
                                                .'<p class="text">' . $value['text'] . '</p>'
                                                .'</div>'
                                                .'<div class="img order-1 order-md-2" style="background-image: url(' . $value['image'] . ')"><a href="#" class="btn btn-primary">Взяти участь</a></div>'
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