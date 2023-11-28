<?php 
// récupérer le contenu du fichier header.php
get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h3><?php the_title(); ?></h3>
    <?php the_content(); ?>
    <section class="aboutme">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 col-md-6 animate__animated animate__backInLeft">
                    <h1 class="ap mb-5">A propos</h1>
                    <p>Agé de 44 ans, j'ai pendant de nombreuses années exercé dans des métiers liés au commerce et la communication. Dans un souci constant de progresser, j'ai intégré une formation de développeur web afin d'acquérir des connaissances techniques. Le but de cette reconvertion étant de combiner mes différentes connaissances au sein d'une agence de communication située en martinique. Passionné de musique, je suis batteur depuis de nombreuses années. J'ai eu la chance d'enregistrer en studio et de jouer en formation. Je pratique également la moto, le snowboard et le tennis en club. Papa de deux enfants, je souhaite leur transmettre le goût pour la curiosité et cette envie d'apprendre qui ne doit jamais cesser tout au long de son existence.</p>
                    <a class="btn btn-secondary mt-5" href="contact.html">Contact</a>
                </div>
                <div class="col-12 col-md-6 animate__animated animate__backInRight">
                    <img src="http://localhost/wordpress/wp-content/uploads/2023/11/dev.jpg" alt="dev">
                </div>
            </div>
        </div>
    </section>
    <section class="competences">
        <div class="container">
            <div class="row mt-5 d-flex justify-content-center">
                <div class="col-12 col-md-6 pt-5">
                    <h2>Parcours Professionnel</h2>
                </div>
            </div>
            <div class="row pb-5 parcours">
                <div class="col-12 col-md-6">
                    <ul class="comp mt-5 mb-5">
                        <li>Formation</li>
                        <p class="mt-4">BEP Vente<br>BAC Pro Commerce <br>BTS Force de Vente</p>
                    </ul>
                </div>
                <div class="col-12 col-md-6">
                    <ul class="comp mt-5">
                        <li>Expériences</li>
                        <p class="mt-4">Chargé de communication <br>Chef d'agence<br>Commercial</p>
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