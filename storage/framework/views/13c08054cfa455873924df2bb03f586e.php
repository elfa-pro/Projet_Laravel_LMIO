<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Connexion</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body background="images/UIDT.jpg">
    <!-- form section start -->
    <section class="section-form">
        <h1>Authentification</h1>
        <div class="container">
            <!-- /form -->
            <div>
                <div class="maquette-principale">
                    <div class="alert-close">
                        <span class="fa fa-close"></span>
                    </div>
                    <div class="image_form align-self">
                        <div class="left_grid_info">
                            <img src="images/image.svg" alt="">
                        </div>
                    </div>
                    <div class="content-form">
                        <!--Affichage du message de reussi-->
                        <?php if(session('message')): ?>
                           <div class="alert-success"><?php echo e(session('message')); ?></div>
                        <?php endif; ?>
                        <h2>Connexion</h2>
                        <p>Benvenue Chers Etudiants, Veuillez-vous connecter</p>
                        <form action="/traitement/connexion" method="POST">
                            <?php echo csrf_field(); ?> <!--La directive du formulaire vers la base de donnees-->

                            <label>Adresse E-mail : <font color="red">*</font></label>
                            <input type="email" class="email" name="email" placeholder="Entrer votre adresse e-mail" required>

                            <label>Mot de passe : <font color="red">*</font></label>
                            <input type="password" class="password" name="password" placeholder="Entrer votre mot de passe" required>

                            <button class="btn" type="submit">Connexion</button>
                        </form>
                        <div clas="inscription">
                            <p>Vous êtes nouveau ici ? Créer un Compte.</p>
                            <button class="btn"><a href="/inscription">Inscription</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>

        <!-- copyright-->
        <div class="copyright">
            <p class="copy-footer-29">© 2023 Athentification. Tous droits Reservés | Designed by <b>2N2F</b></p>
        </div>
        <!-- //copyright-->
    </section>
    <!-- //form section start -->
</body>
</html>
<?php /**PATH C:\wamp64\www\ProjetApp\resources\views/connexion.blade.php ENDPATH**/ ?>