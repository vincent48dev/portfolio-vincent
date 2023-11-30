<?php 
// récupérer le contenu du fichier header.php
get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>
    <section class="aboutme">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 col-md-6 animate__animated animate__backInLeft">
                    <h1 class="ap mb-4">A propos</h1>
                    <p>
                        <?php $post = get_post(215) ?>
                        <?php echo $post->post_content ?>
                    </p>
                    <a class="btn btn-secondary mt-5" href="http://localhost/wordpress/contact/">Contact</a>
                </div>
                <div class="col-12 col-md-6 animate__animated animate__backInRight">
                 <!--   <img src="http://localhost/wordpress/wp-content/uploads/2023/11/dev.jpg" alt="dev">-->
                    <img src="http://localhost/wordpress/wp-content/uploads/2023/11/dev.jpg" alt="dev">
                </div>
            </div>
        </div>
    </section>
    <section class="competences">
        <div class="container">
            <div class="row
             mt-5 d-flex justify-content-center">
                <div class="col-12 col-md-6 pt-2">
                    <h2>Parcours Professionnel</h2>
                </div>
            </div>
            <div class="row pb-2 parcours">
                <div class="col-12 col-md-6">
                    <ul class="comp mt-2 mb-2">
                        <li>Formation</li>
                        <p class="mt-3">BEP Vente<br>BAC Pro Commerce <br>BTS Force de Vente</p>
                    </ul>
                </div>
                <div class="col-12 col-md-6">
                    <ul class="comp mt-2">
                        <li>Expériences</li>
                        <p class="mt-3">Chargé de communication <br>Chef d'agence<br>Commercial</p>
                    </ul>
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