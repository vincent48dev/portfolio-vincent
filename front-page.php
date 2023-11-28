<?php 
// récupérer le contenu du fichier header.php
get_header(); ?>
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mt-5 animate__animated animate__backInLeft">
                    <h1 class="mb-5">Qui suis-je</h1>
                    <p class="mt-4">Agé de 44 ans, j'ai pendant de nombreuses années exercé dans des métiers liés au commerce et la communication. Dans un souci constant de progresser, j'ai intégré une formation de développeur web afin d'acquérir des connaissances techniques. Le but de cette reconvertion étant de combiner mes différentes connaissances au sein d'une agence de communication située en martinique.</p>
                    <a class="btn btn-secondary mt-5" href="#">A propos</a>
                </div>
                <div class="col-12 col-md-6 animate__animated animate__backInRight ">
                    <img src="http://localhost/wordpress/wp-content/uploads/2023/11/vincent.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="competences">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 pt-5">
                    <h2>Compétences</h2>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-md-6">
                    <ul class="comp">
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JS</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="comp">
                        <li>FIGMA</li>
                        <li>BOOTSTRAP</li>
                        <li>GITUP</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php 
    //récupère le contenu du fichier footer.php
    get_footer(); ?>
  </body>
</html>