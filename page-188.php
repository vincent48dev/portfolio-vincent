<?php 
// récupérer le contenu du fichier header.php
get_header(); ?>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center titre animate__animated animate__backInDown">
                    <h1 class="question mb-5">Une question, un projet, rentrons en contact!!</h1>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>   
</section>
    <?php wp_link_pages(); ?>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php 
    //récupère le contenu du fichier footer.php
    get_footer(); ?>
  </body>
</html>
    