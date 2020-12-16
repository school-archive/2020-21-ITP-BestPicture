<?php
    session_start();
    require_once "php/contest.php";
    require_once "php/photo.php";
    require_once "php/user.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Best Picture</title>
    <link rel="stylesheet" href="https://use.typekit.net/hhh6sjk.css">
    <link rel="stylesheet" href="https://use.typekit.net/hhh6sjk.css">
    <link href="assets/styles/main.css" rel="stylesheet">
    <link href="assets/styles/navbar.css" rel="stylesheet">
    <link href="assets/styles/footer.css" rel="stylesheet">
    <link href="assets/styles/gallery.css" rel="stylesheet">
</head>
<body>
<div class="box-area">
    <header>
        <div class="wr">
            <a href="index.php"> <img class="logo" src="assets/images/Logo.png" alt="logo"></a>
            <nav>
                <a href="index.php">Home</a> <a href="login/login.html">Anmelden</a> <a href="upload/upload.html">Upload</a> <a
                    href="profil/index.php"> <img class="user" src="assets/images/user.png" alt="user"> </a>
            </nav>
        </div>
    </header>
    <div class="banner-area">
        <img class="bestpicture" src="assets/images/bestpicture.png" alt="bestpicture">
    </div>
    <div class="content-area">
        <h2>Best Picture </h2>
        <!--            <span class="year" style="font-style: italic">2020</span>-->
        <div class="container">
            <div class="item1">
                <p class="ue1">Fotowettbewerb HTL Rennweg</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, esse est iste magni reprehenderit
                    saepe sint! Assumenda consectetur fugit sit tempore. Architecto blanditiis deleniti, est fuga iusto
                    perspiciatis suscipit voluptatibus! </p>
            </div>
            <div class="item2">
                <p class="ue1">Teilnehmer:</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, esse est iste magni reprehenderit
                    saepe sint! Assumenda consectetur fugit sit tempore. Architecto blanditiis deleniti, est fuga iusto
                    perspiciatis suscipit voluptatibus! </p>
            </div>
        </div>
    </div>

    <div class="gallery-image">
        <?php
        $photos = get_all_photos_in_contest(get_current_contest_id());

        foreach ($photos as $photo) {

            $id = $photo['photo_id'];
            $path = substr($photo['path'], 4);
            $namePhoto = $photo['title'];
            $photografer = get_username_by_photo($photo['photo_id']);

            echo "<a href='comment/index.php?id=$id'>
                    <div class='img-box'>
                        <img src='$path' alt='$namePhoto'/>
                        <div class='transparent-box'>
                            <div class='caption'>
                                <p>$namePhoto</p>
                                <p class='opacity-low'>$photografer</p>
                            </div>
                        </div>
                    </div>
                   </a>";
        }
        ?>
    </div>
</div>
<footer>
    <p id="contact">Contact</p><br>
    <div class="emails">
        <p><a href="mailto:7046@htl.rennweg.at">Dietrich Kops</a></p>
        <p>●</p>
        <p><a href="mailto:7047@htl.rennweg.at">Johanna Kronfuß</a></p>
        <p>●</p>
        <p><a href="mailto:7055@htl.rennweg.at">Nils Schneider-Sturm</a></p>
        <p>●</p>
        <p><a href="mailto:7053@htl.rennweg.at">Nicoletta Sarzi Satori</a></p>
    </div>
    <img class="logofooter" src="assets/images/Logo.png" alt="logo"><br>
    <a href="rechte/rechte.html"><p class="agbs">Datenschutzerklärung | AGBs</p></a>
</footer>

</body>
</html>
