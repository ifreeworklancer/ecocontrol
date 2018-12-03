<?php

require_once('store.php');

require_once('header-light.php');

?>

    <!-- Maps -->
    <div id="eco-maps-intro" style="background-image: url('../../images/content/secondary/page-maps/maps-item.jpg')"></div>
    <section id="appeal-maps">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-sm-6 col-lg-5 col-xl-4">
                    <div class="appeal-maps-item">
                        <div class="appeal-maps-item-title">
                            <h5 class="title text-white font-weight-normal">
                                <?= $page_eco_maps['title']?>
                            </h5>
                        </div>
                        <div class="appeal-maps-item__subtitle text-white">
                            <?= $page_eco_maps['subtitle']?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 mt-4 mt-sm-0">
                    <a href="#" class="btn btn-primary">залишити</a>
                </div>
            </div>
        </div>
    </section>

    <section id="appeal-maps-items">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php
                    foreach($page_eco_maps['items'] as $item) {
                        echo
                            '<div class="appeal-maps-slider-title"><h4 class="title">' . $item['title'] . '</h4></div>'
                            .'<div class="appeal-maps-slider appeal-maps-slider--' . $item['name'] . '">'
                            .'<div class="d-flex align-items-start">';
                        foreach($item['card'] as $value) {
                            echo
                                '<div class="appeal-maps-slider-col"><a href="#" class="appeal-maps-slider-item">'
                                .'<div class="img" style="background-image: url(' . $value['image'] . ')"></div>'
                                .'<div class="data"><div class="data__item">' . $value['data'] . '</div></div>'
                                .'</a></div>';
                        }
                        echo '</div></div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>


<?php
require_once('footer.php');