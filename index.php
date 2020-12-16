<?php
    session_start();
    require_once "php/contest.php";
    require_once "php/photo.php";
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
            <a href="index.html"> <img class="logo" src="assets/images/Logo.png" alt="logo"></a>
            <nav>
                <a href="index.html">Home</a> <a href="login/login.html">Anmelden</a> <a href="upload.html">Upload</a> <a
                    href="profil/index.html"> <img class="user" src="assets/images/user.png" alt="user"> </a>
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
                <p>Willkommen auf der unserer Webseite. Diese veranschaulicht im Zuge eines ITP-Projekts einen
                    Fottowettbewerb, welcher an userer Schule stattfindet </p>
            </div>
            <div class="item2">
                <p class="ue1">Teilnehmer:</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, esse est iste magni reprehenderit
                    saepe sint! Assumenda consectetur fugit sit tempore. Architecto blanditiis deleniti, est fuga iusto
                    perspiciatis suscipit voluptatibus! </p>
            </div>
        </div>
    </div>

    <?php
        $photos = get_all_photos_in_contest(1);
        echo $photos[0];
        foreach ($photos as $photo) {
            $path = substr($photo->path, 4);
            $namePhoto = $photo->name;
            $photografer = get_username_by_photo($photo->photo_id);

            echo "<a href='comment/index.php'>
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

    <div class="gallery-image">

        <a href="comment/index.html">
            <div class="img-box">
                <img src="assets/images/butterfl.png" alt=""/>
                <div class="transparent-box">
                    <div class="caption">
                        <p>Titel</p>
                        <p class="opacity-low">Photographer</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="comment/index.html">
            <div class="img-box">
                <img src="assets/images/img_1.png" alt=""/>
                <div class="transparent-box">
                    <div class="caption">
                        <p>Titel</p>
                        <p class="opacity-low">Photographer</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="comment/index.html">
            <div class="img-box">
                <img src="assets/images/img_3.jpg" alt=""/>
                <div class="transparent-box">
                    <div class="caption">
                        <p>Titel</p>
                        <p class="opacity-low">Photographer</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="comment/index.html">
            <div class="img-box">
                <img src="assets/images/img_4.jpg" alt=""/>
                <div class="transparent-box">
                    <div class="caption">
                        <p>Titel</p>
                        <p class="opacity-low">Photographer</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="comment/index.html">
            <div class="img-box">
                <img src="assets/images/img.png" alt=""/>
                <div class="transparent-box">
                    <div class="caption">
                        <p>Titel</p>
                        <p class="opacity-low">Photographer</p>
                    </div>
                </div>
            </div>
        </a>
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

    <img class="logofooter" src="assets/images/Logo.png" alt="logo">
    <p class="agbs">Datenschutzerklärung | AGBs</p>
</footer>

</body>
</html>
