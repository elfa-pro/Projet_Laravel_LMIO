<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Accueil</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="website icon" type="png" href="img/photo.png">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body background="images/Bibliotheque.jpg">
    <!--Début nav-->
        <nav class="menu">
            <img src="images/UIDT.jpeg" alt="">
            <ul>
                <li class="btn"><a href="/"><font color="#659BE5"><i class="fa-solid fa-house-user"></i></font> Accueil</a></li>
                <li class="btn"><a href="/propos"><font color="#659BE5"><i class="fas fa-info-circle"></i></font> A Propos</a></li>
                <li class="btn"><a href="/services"><font color="#659BE5"><i class="fa fa-wrench" aria-hidden="true"></i></font> Services</a></li>
                <li class="btn"><a href="/contacts"><font color="#659BE5"><i class="fa-solid fa-phone"></i></font> Contacts</a></li>
                <li class="btn"><a href="/"><font color="#659BE5"><i class="fa fa-sign-out" aria-hidden="true"></i></font> Déconnexion</a></li>
            </ul>
        </nav>
    <!--Fin nav-->

    <!--Affichage du message de reussi-->
    <?php if(session('message')): ?>
        <div class="alert-success"><?php echo e(session('message')); ?></div>
    <?php endif; ?>
    <!--Début présentation-->
    <div class="membre">
        <img src="<?php echo e(asset('images/bien.jpg')); ?>" alt="">
        <h3>Prénom et Nom des membres du groupe.</h3>
        <ol>
            <li>Fallou NIANG</li>
            <li>Coly FAYE</li>
            <li>Mamadou Barry FALL</li>
            <li>Alioune NDAW</li>
        </ol>
    </div>
    <!--Fin presentation-->

    <!--debut footer-->
    <div class="copyright">
        <p class="copy-footer-29">© 2023 Accueil. Tous droits Reservés | Designed by <b>2N2F</b></p>
    </div>
    <!--Fin footer-->
</body>
</html>
<?php /**PATH C:\wamp64\www\ProjetApp\resources\views/accueil.blade.php ENDPATH**/ ?>