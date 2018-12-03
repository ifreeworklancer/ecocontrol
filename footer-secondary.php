

<!-- Call -->
<section id="call">
    <div class="container">
        <div class="row justify-content-center call-row">
            <?php
            foreach ($call_card as $item) {
                echo
                    '<div class="col-sm-7 col-lg-4"">'
                    . '<div class="custom-card custom-card--primary custom-card--bg">'
                    . '<div class="custom-card-header">'
                    . '<h5 class="title">' . $item['title'] . '</h5>'
                    . '</div>'
                    . '<div class="custom-card-body">'
                    . '<a href="archive-news.php" class="btn btn-primary">читати</a>'
                    . '<div class="img img--big" style="background-image:url(' . $item['image'] . ');"></div>'
                    . '</div>'
                    . '</div>'
                    . '</div>';
            }
            ?>
        </div>
        <div class="row justify-content-between">
            <div class="col-sm-4">
                <a href="/" class="call-description mb-4 mb-sm-0">
                    <div class="logo logo--simple"
                         style="background-image:url('../images/icon/logo/logo-simple.png');"></div>
                    <div class="title">
                        Національний
                        Екологічний
                        Контроль
                    </div>
                </a>
            </div>
            <div class="col-auto d-flex flex-column mx-auto mx-sm-0 flex-sm-row ">
                <a href="page-subscribe.php" class="btn btn-primary mr-sm-5 mb-4 mb-sm-0">стати волонтером</a>
                <a href="page-help.php" class="btn btn-danger">підтримати</a>
            </div>
        </div>
    </div>
</section>

</main>

<footer id="app-footer">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-sm-6 col-lg-4 d-flex justify-content-center align-items-center">
                <div class="footer-item">
                    <h4 class="title">Контакти</h4>
                    <ul class="footer-list">
                        <li>
                            <a href="tel:+380954353555">+ 38 095 435 35 55</a>
                        </li>
                        <li>
                            <a href="mailto:info@ecocontrol.org.ua">info@ecocontrol.org.ua</a>
                        </li>
                        <li>
                            <a href="#">Проспект перемоги 7, Київ</a>
                        </li>
                    </ul>
                    <div class="footer-copyr">
                        © Ecocontrol 2018 Всі права захищені.
                    </div>
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
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 d-flex justify-content-center align-items-center">
                <div class="footer-item">
                    <h4 class="title">Останні новини</h4>
                    <ul class="footer-list">
                        <li>
                            <a href="single.php">Мешканці бродівщини ...</a>
                        </li>
                        <li>
                            <a href="single.php">Українські екологи ...</a>
                        </li>
                        <li>
                            <a href="single.php">Держпродспоживслужба ...</a>
                        </li>
                        <li>
                            <a href="single.php">Під кабміном активісти ...</a>
                        </li>
                        <li>
                            <a href="single.php">Використання нафтакоксу ...</a>
                        </li>
                        <li>
                            <a href="single.php">В україні зникає ліс ...</a>
                        </li>
                        <li>
                            <a href="single.php">"Квітуча" вода в Дніпрі ...</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4 d-flex justify-content-center align-items-center">
                <div class="footer-item">
                    <h4 class="title">Мапа сайту</h4>
                    <ul class="footer-list">
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
                            <a href="archive-held_events.php">Заходи ECOCONTROL</a>
                        </li>
                        <li>
                            <a href="#">Цікаві факти</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Script -->
<script src="https://unpkg.com/leaflet@1.0.1/dist/leaflet.js"></script>
<script src="dist/app.js"></script>
</body>
</html>