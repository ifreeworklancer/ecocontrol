<?php
require_once('store.php');
require_once('header.php');
?>

    <!-- Intro -->
    <section id="intro">
        <div class="container-fluid p-0 h-100">
            <div class="row h-100">
                <div class="col-12 p-0 h-100">
                    <div class="intro-slider h-100">
                        <?php
                        foreach ($intro as $item) {
                            echo
                                '<div class="intro-slider-item">'
                                . '<div class="img" style="background-image: url(' . $item['image'] . ')"></div>'
                                . '<div class="content">'
                                . '<h2 class="title">' . $item['title'] . '</h2>'
                                . '<a href="#" class="btn btn-primary">підтримати</a>'
                                . '</div>'
                                . '</div>';
                        }
                        ?>
                    </div>
                    <div class="slider-arrow">
                        <div class="slider-arrow-item slider-arrow-item--next slider-arrow-item--next-intro">
                            <svg width="20" height="35">
                                <use xlink:href="#arrow-next-icon"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Target -->
    <section id="target">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6">
                    <div class="target-item">
                        <div class="img img--big" style="background-image:url('<?= $target['image_first']; ?>');">
                            <div class="progress-item progress-item-main progress-item--processing">
                                <div class="value">100 350</div>
                                <div class="description">
                                    Тон сміття перероблено
                                </div>
                            </div>
                        </div>
                        <div class="progress-outer">
                            <div class="progress-item progress-item-secondary progress-item--trees">
                                <div class="value">419 000</div>
                                <div class="description">
                                    Кількість гектар нелегально
                                    вирубаних лісів
                                </div>
                            </div>
                            <div class="progress-item progress-item-secondary progress-item--garbage">
                                <div class="value">4211</div>
                                <div class="description">
                                    Кількість сміттєзвалищ
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="target-item">
                        <p>
                            <?= $target['text']; ?>
                        </p>
                        <div class="img img--small"
                             style="background-image:url('<?= $target['image_second']; ?>'); ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Join -->
    <section id="join">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-description text-white text-center">
                        <h2 class="section-title text-white">
                            Ти потрібен природі
                        </h2>
                        <div class="section-subtitle">
                            Хочеш стати волонтером у своєму місті? <a href="#">Стати волонтером ECOCONTROOL</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php
                foreach ($join as $item) {
                    echo
                        '<div class="col-sm-7 col-lg-4"">'
                        . '<div class="custom-card custom-card--primary">'
                        . '<div class="custom-card-header">'
                        . '<h5 class="title">' . $item['title'] . '</h5>'
                        . '</div>'
                        . '<div class="custom-card-body">'
                        . '<a href="#" class="btn btn-primary">' . $item['btn_name'] . '</a>'
                        . '<div class="img img--big" style="background-image:url(' . $item['image'] . ');"></div>'
                        . '</div>'
                        . '</div>'
                        . '</div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Technology -->
    <section id="technology">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <?php
                echo
                    '<div class="col-sm-8 col-xl-5 mb-5 mb-xl-0">'
                    . '<h2 class="section-title text-white">' . $technology['item_top']['main_title'] . '</h2>'
                    . '</div>'
                    . '<div class="col-sm-11 col-lg-9 col-xl-7">'
                    . '<div class="technology-item">'
                    . '<div class="img" style="background-image:url(' . $technology['item_top']['image'] . ');"></div>'
                    . '<div class="content">'
                    . '<h4 class="title">' . $technology['item_top']['title'] . '</h4>'
                    . '<div class="subtitle">' . $technology['item_top']['subtitle'] . '</div>'
                    . '<a href="#" class="more-info">Читати далі</a>'
                    . '</div>'
                    . '</div>'
                    . '</div>';
                ?>
            </div>
            <div class="row">
                <?php
                echo
                    '<div class="col-sm-12 col-lg-9 col-xl-8">'
                    . '<div class="technology-item">'
                    . '<div class="img" style="background-image:url(' . $technology['item_middle_left']['image'] . ');"></div>'
                    . '<div class="content">'
                    . '<h4 class="title">' . $technology['item_middle_left']['title'] . '</h4>'
                    . '<div class="subtitle">' . $technology['item_middle_left']['subtitle'] . '</div>'
                    . '<a href="#" class="more-info">Читати далі</a>'
                    . '</div>'
                    . '</div>'
                    . '</div>';
                ?>
            </div>
            <div class="row justify-content-center">
                <?php
                echo
                    '<div class="col-sm-10 col-lg-9 col-xl-8">'
                    . '<div class="technology-item">'
                    . '<div class="img" style="background-image:url(' . $technology['item_middle_center']['image'] . ');"></div>'
                    . '<div class="content">'
                    . '<h4 class="title">' . $technology['item_middle_center']['title'] . '</h4>'
                    . '<div class="subtitle">' . $technology['item_middle_center']['subtitle'] . '</div>'
                    . '<a href="#" class="more-info">Читати далі</a>'
                    . '</div>'
                    . '</div>'
                    . '</div>';
                ?>
            </div>
            <div class="row">
                <?php
                echo
                    '<div class="col-sm-10 col-lg-9 col-xl-8">'
                    . '<div class="technology-item">'
                    . '<div class="img" style="background-image:url(' . $technology['item_bottom']['image'] . ');"></div>'
                    . '<div class="content">'
                    . '<h4 class="title">' . $technology['item_bottom']['title'] . '</h4>'
                    . '<div class="subtitle">' . $technology['item_bottom']['subtitle'] . '</div>'
                    . '<a href="#" class="more-info">Читати далі</a>'
                    . '</div>'
                    . '</div>'
                    . '</div>';
                ?>
            </div>
        </div>
    </section>

    <!-- Eco-nav -->
    <section id="eco-nav">
        <div class="container">
            <div class="row justify-content-center">
                <?php
                foreach ($eco_nav as $item) {
                    echo
                        '<div class="col-sm-7 col-lg-4"">'
                        . '<div class="custom-card custom-card--secondary custom-card--big-title">'
                        . '<div class="custom-card-header">'
                        . '<h5 class="title">' . $item['title'] . '</h5>'
                        . '</div>'
                        . '<div class="custom-card-body">'
                        . '<a href="#" class="btn btn-light">переглянути</a>'
                        . '<div class="img img--big" style="background-image:url(' . $item['image'] . ');"></div>'
                        . '</div>'
                        . '</div>'
                        . '</div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Help -->
    <section id="help">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-6">
                    <div class="help-item">
                        <div class="help-item-title">
                            <h4 class="title">
                                Розкажіть, і допоможе!
                            </h4>
                            <div class="logo logo--simple" style="background-image:url('../images/icon/logo/logo-simple.png');"></div>
                        </div>
                        <h6 class="subtitle">
                            Ми боремося за чистоту навколишнього середовища
                        </h6>
                        <p>
                            Залишайте свої екологічні пропозиції, заяви,
                            зауваження або скарги для нашого розгляду та
                            швидкого реагування.
                        </p>
                    </div>
                </div>
                <div class="col-auto mt-4 mt-sm-0">
                    <a href="#" class="btn btn-primary">
                        залишити
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- News -->
    <section id="news">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-description">
                        <h3 class="title">Екологічні новини України</h3>
                        <div class="subtitle">
                            Тут ми освітлюємо всі термінові події та ситуації в екологічній сфері
                        </div>
                        <a href="#" class="btn btn-primary">переглянути</a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php
                foreach ($news as $item) {
                    echo
                        '<div class="col-sm-7 col-lg-4">'
                        . '<div class="custom-post-prev custom-post-prev--news">'
                        . '<div class="img" style="background-image:url(' . $item['image'] . ');"></div>'
                        . '<div class="content">'
                        . '<h6 class="title"><a href="#">' . $item['title'] . '</a></h6>'
                        . '<div class="author">' . $item['author'] . '</div>'
                        . '</div>'
                        . '</div>'
                        . '</div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Events -->
    <section id="events">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="section-title">
                        Заходи <span>ECOCONTROL</span>
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php
                foreach ($events as $item) {
                    echo
                        '<div class="col-sm-7 col-lg-4">'
                        . '<div class="custom-post-prev custom-post-prev--events">'
                        . '<div class="img" style="background-image:url(' . $item['image'] . ');">'
                            .'<a href="#" class="btn btn-primary">взяти участь</a>'
                        .'</div>'
                        . '<div class="content">'
                        . '<h6 class="title"><a href="#">' . $item['title'] . '</a></h6>'
                        . '<div class="data">' . $item['data'] . '</div>'
                        . '<div class="place">' . $item['place'] . '</div>'
                        . '</div>'
                        . '</div>'
                        . '</div>';
                }
                ?>
            </div>
        </div>
    </section>


<?php require_once('footer.php'); ?>