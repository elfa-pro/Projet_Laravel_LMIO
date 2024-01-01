<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Inscription</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body background="images/UIDT.jpg">
    <!-- form section start -->
    <section class="section-form">
        <h1>Inscription</h1>
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
                        <h2>Inscription</h2>
                        <p>Veuillez compléter tous case avec un (<font color="red">*</font>)</p>
                        <form action="/traitement/inscription" method="POST">
                            <?php echo csrf_field(); ?> <!--La directive du formulaire vers la base de donnees-->

                            <label>Prénom : <font color="red">*</font></label>
                            <input type="text" name="prenom" placeholder="Votre Prénom" required>

                            <label>Nom : <font color="red">*</font></label>
                            <input type="text" name="nom" placeholder="Votre Nom" required>

                            <label>Numéro Adresse : <font color="red">*</font></label>
                            <input type="text" name="adresse" placeholder="Entrer votre adresse" required>

                            <label>Téléphone : <font color="red">*</font></label>
                            <input type="text" name="telephone" placeholder="Entrer votre numéro de téléphone" required>

                            <label>Adresse E-mail : <font color="red">*</font></label>
                            <input type="email" name="email" placeholder="Entrer votre adresse e-mail" required>

                            <label>Mot de passe : <font color="red">*</font></label>
                            <input type="password" name="password" placeholder="Entrer votre mot de passe" required>

                            <button class="btn" type="submit">S'Inscrire</button>
                        </form>

                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
        <!-- copyright-->
        <div class="copyright text-center">
            <p class="copy-footer-29">© 2023 Athentification. Tous droits Reserves | Designed by <b>2N2F</b></p>
        </div>
        <!-- //copyright-->
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\wamp64\www\ProjetApp\resources\views/inscription.blade.php ENDPATH**/ ?>