<?php 
// récupérer le contenu du fichier header.php
get_header(); ?>
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mt-5 animate__animated animate__backInLeft">
                    <h1 class="mb-5">Une brève présentation</h1>
                    <p class="mt-4">
                        <?php $post = get_post(217) ?>
                        <?php echo $post->post_content ?>
                    </p>
                    <a class="btn btn-secondary mt-5" href="http://localhost/wordpress/a-propos/">A propos</a>
                </div>
                <div class="col-12 col-md-6 d-flex align-item-center animate__animated animate__backInRight ">
                <!--    <img src="http://localhost/wordpress/wp-content/uploads/2023/11/vincent.png" alt=""> -->
                    <img  src="http://localhost/wordpress/wp-content/uploads/2023/11/vincent.png" alt="">         
                </div>
            </div>
        </div>
    </section>
    <!-- -->
    <section class="competences">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12 pt-3">
                    <h2>Compétences</h2>
                </div>
            </div>
            <div class="row pb-3">
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
    <section class="projet">
        <div class="container">
            <div class="row">
                <div class="col-12  mt-4 text-center">
                    <h2>Projet</h2>
                </div>
            </div>
            <div class="row pt-5 pb-5">
                <div class="col-12 col-md-4">
                <div class="card">
                    <img src="http://localhost/wordpress/wp-content/uploads/2023/11/carbon.jpg" class="card-img1-top" alt="John Bonham">
                    <div class="card-body">
                    <h5 class="card-title text-center">BRIEF 1</h5>                    
                    <a href="#" class="btn btn-secondary d-flex justify-content-center">Découvrir</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <img src="http://localhost/wordpress/wp-content/uploads/2023/11/carbon.jpg" class="card-img2-top" alt="reproduction d'un site">
                    <div class="card-body">
                    <h5 class="card-title text-center">Reproduction d'un site</h5>
                    <a href="#" class="btn btn-secondary d-flex justify-content-center">Découvrir</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <img src="http://localhost/wordpress/wp-content/uploads/2023/11/carbon.jpg" class="card-img3-top" alt="Portfolio">
                    <div class="card-body">
                    <h5 class="card-title text-center">Portfolio</h5>
                    <a href="#" class="btn btn-secondary d-flex justify-content-center">Découvrir</a>
                    </div>
                </div>
            </div>
    </section>
    <?php 
    //récupère le contenu du fichier footer.php
    get_footer(); ?>
  </body>
</html>