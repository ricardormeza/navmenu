<?php 
    get_header();
?>
<main class="contenedor seccion">
        <?php
            while( have_posts() ): the_post();
            
            the_title('<h1>','</h1>');
            
            the_content();
            
            endwhile;
        ?>

</main>
<section>
    <div class="contenedor swiper">
        <h2>swiper</h2>
    </div>
</section>

    <?php 
    get_footer();
?>