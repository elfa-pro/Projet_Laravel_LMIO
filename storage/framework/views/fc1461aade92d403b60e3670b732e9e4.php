<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Bienvenue</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="website icon" type="png" href="<?php echo e(asset('images/UIDT.JPEG')); ?>">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        .about-section {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px;
            background-color: #f4f4f4;
            margin-top: 180px;
        }

        .about-text {
            flex: 1;
            padding: 20px;
            font-size: 18px;
            line-height: 1.6;
        }

        .about-photo {
            flex: 0 0 200px; /* Fixe la largeur de la photo */
            height: 200px;
            overflow: hidden;
            border-radius: 50%; /* Pour une photo ronde */
            margin-right: 20px;
        }

        .about-photo img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body background="<?php echo e(asset('images/UIDT.jpg')); ?>">
    <!--Début nav-->
        <nav class="menu">
            <img src="images/UIDT.jpeg" alt="">
            <ul>
                <li class="btn"><a href="#"><font color="#659BE5"><i class="fa-solid fa-house-user"></i></font> Accueil</a></li>
                <li class="btn"><a href="/propos"><font color="#659BE5"><i class="fas fa-info-circle"></i></font> A Propos</a></li>
                <li class="btn"><a href="/services"><font color="#659BE5"><i class="fa fa-wrench" aria-hidden="true"></i></font> Services</a></li>
                <li class="btn"><a href="/contacts"><font color="#659BE5"><i class="fa-solid fa-phone"></i></font> Contacts</a></li>
                <li class="btn"><a href="/connexion"><font color="#659BE5"><i class="fa-solid fa-user"></i></font> Connexion</a></li>
                <li class="btn"><a href="/inscription"><font color="#659BE5"><i class="fas fa-user-plus"></i></font> Inscription</a></li>
            </ul>
        </nav>
    <!--Fin nav-->

    <!--Début présentation-->
    <div class="about-section">
        <div class="about-photo">
            <img src="<?php echo e(asset('images/mame_iba.jpg')); ?>" alt="image">
        </div>
        <div class="about-text">
            <h2>BIENVENUE !</h2>
            <p>
                C'est votre première fois ici . Veuillez vous inscrire <br> ou vous connectez si vous avez déjà un compte.
            </p>
            <!-- Ajoutez plus de texte si nécessaire -->
        </div>
    </div>
    <!--Fin presentation-->

    <!--debut footer-->
    <div class="copyright">
        <p class="copy-footer-29">© 2023 Tous droits Reservés | Designed by <b>2N2F</b></p>
    </div>
    <!--Fin footer-->
</body>
</html>
<?php /**PATH C:\wamp64\www\ProjetApp\resources\views/index.blade.php ENDPATH**/ ?>