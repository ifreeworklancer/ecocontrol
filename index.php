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
                        foreach($intro as $item) {
                            echo 
                            '<div class="intro-slider-item">'
                                .'<div class="img" style="background-image: url(' . $item['image'] . ')"></div>'
                                .'<div class="content">'
                                    .'<h2 class="title">' . $item['title'] . '</h2>'
                                    .'<a href="#" class="btn btn-primary">Підтримати</a>'
                                .'</div>'
                            .'</div>';
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


<?php require_once('footer.php');?>