<?php

get_header();
?>
<!-- CONTENT -->
<main class="content">
    <div class="hero">
        <div class="hero__slider hero-slider_js">
        	<?php $slides = ot_get_option( 'slider', array() );
        	foreach ($slides as $slide) {
         	?>
            <div class="hero__item" data-background="<?php echo $slide['nuotraukos_spalva']; ?>" style="background-image: url(<?php echo $slide['upload_slider_image']?>);">
                <div id="slider-change-menu-color" class="hero__container">
                    <div class="container">
                        <div class="hero__content">
                        	<?php if ((!empty($slide['pirmas_slider_mygtukas_tekstas'])) || (!empty($slide['antras_slider_mygtukas_tekstas']))) {?>
                            <div class="hero__tags">
                                <a href="#" class="hero__tag">
                                    <?php echo $slide['pirmas_slider_mygtukas_tekstas']; ?>
                                </a>
                                <a href="#" class="hero__tag">
                                    <?php echo $slide['antras_slider_mygtukas_tekstas']; ?>
                                </a>
                            </div>
                            <?php } 
                            if (!empty($slide['title'])) {
                            ?>
                            <div class="hero__title">
                                <?php echo $slide['title']; ?>
                            </div>
                            <?php
                        }
                        if (!empty($slide['data'])) {
                        	?>
                            <div class="hero__date">
                                <?php echo $slide['data']; ?>
                            </div>
                            <?php } ?>
                            <div class="hero__bottom">
                            	<?php if(!empty($slide['apatinio_mygtuko_tekstas'])) { ?>
                                <div class="hero__action">
                                    <a href="#" class="btn btn_red hero__btn">
                                        <span><?php echo $slide['apatinio_mygtuko_tekstas']; ?></span>
                                    </a>
                                </div>
                                <?php } ?>
                                <div class="hero__sponsor">
                                    <div class="sponsor">
                                        <div class="sponsor__text">REMĖJAI:</div>
                                        <div class="sponsor__list">
                                        	<?php $remejai = ot_get_option( 'remejai', array() ); 
                                        	foreach ($remejai as $remejas) { ?>
                                            <a href="<?php echo $remejas['nuoroda']; ?>" class="sponsor__item">
                                                <img src="<?php echo $remejas['logotipas']; ?>" alt="">
                                            </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
        </div>
        <div class="hero__copy">
            <div class="container">
                Copyright 2017 Mo All Rights Reserved.
            </div>
        </div>
    </div>
</main>
<!-- CONTENT END -->
<script src="<?php echo get_template_directory_uri(); ?>/js/main.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vp.js"></script>
</body>

</html>