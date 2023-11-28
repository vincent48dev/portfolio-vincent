<?php 
// récupérer le contenu du fichier header.php
get_header(); ?>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h3><?php the_title(); ?></h3>
    <?php the_content(); ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center titre animate__animated animate__backInDown">
                    <h1 class="question">Une question, un projet, rentrons en contact!!</h1>
                </div>
            </div>
        </div>
    
        <div class="container formulaire"> 
            <div class="row marge">
                <div class="col-12 col-md-6">
                    <div class="mb-3">
                        <label for="Nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" aria-describedby="NomHelp">
                    </div>
                    <div class="erreurnom"></div>
                </div>
                <div class="col-12 col-md-6 ">
                    <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="prenom" aria-describedby="prenomHelp">
                </div>
                <div class="erreurprenom"></div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="mb-3 mt-5">
                        <label for="telephone" class="form-label">Téléphone</label>
                        <input type="text" class="form-control" id="telephone" aria-describedby="telephoneHelp">
                    </div>
                    <div class="erreurtelephone"></div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="mb-3 mt-5">
                        <label for="mail" class="form-label">E-mail</label>
                        <input type="Mail" class="form-control" id="mail" aria-describedby="emailHelp">
                    </div> 
                    <div class="erreurmail"></div>
            </div>
            <div class="row text-center">
                <div class="col-12 col-md-12">
                    <div class="mb-3 mt-5">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="3"></textarea>
                        <div class="erreurmessage"></div>
                        <button  class="btn border border-radius-5 mt-5" onclick="verify()">GO</button>
                      </div>
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
    