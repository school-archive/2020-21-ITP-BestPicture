<?php
session_start();
require_once "../php/comment.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BestPicture</title>
    <link rel="stylesheet" href="https://use.typekit.net/hhh6sjk.css">
    <link href="../assets/styles/navbar.css" rel="stylesheet">
    <link href="../assets/styles/footer.css" rel="stylesheet">
    <link href="../assets/styles/comment.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="wrapper">
            <a href="index.php"> <img class="logo" src="../assets/images/Logo.png" alt="logo"></a>
            <nav>
                <a href="../index.html">Home</a> <a href="#">Anmelden</a> <a href="../upload.html">Upload</a> <a href="../profil/index.php"> <img class="user" src="../assets/images/user.png" alt="user"> </a>
            </nav>

        </div>
    </header>

    <section>
        <section id="section_left">
            <article>
                <?php
                    $_GET[id];
                ?>
                <img src="../assets/images/uploads/la.jpg" id="upload" alt="Upload">
            </article>

            <article id="lesezeichen">
                <div id="lesezeichen_left">
                    <img src="../assets/images/heart.png" id="heart" alt="Herz">
                    <div id="likes">123</div>
                </div>
            </article>

            <article id="kommentar">
                <h3>Kommentare...</h3>
                <div class="myBox">
                    <div>
                        <div>Martin</div>
                        <div>wow very cool picture!</div>
                    </div>
                    <div>
                        <div>x107lol</div>
                        <div>amazing</div>
                    </div>
                    <div>
                        <div>x107lol</div>
                        <div>amazing</div>
                    </div>
                    <div>
                        <div>x107lol</div>
                        <div>amazing</div>
                    </div>
                </div>
                <form>
                    <input type="text" placeholder="Kommentar hinzufügen...">
                    <button value="submit">Posten</button>
                </form>
            </article>
        </section>

        <section id="section_right">
            <article id="nebeneinander">
                <div>
                    <div>Name des Bildes</div>
                    <div>Photograph</div>
                    <div>Datum</div>
                </div>

                <div>
                    <img src="../assets/images/fotograf.jpg" alt="Fotograf" id="profilbild">
                </div>
            </article>

            <article>
                <h1>Beschreibung des Bildes:</h1>
                <p id="beschreibung">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem eligendi ex illo quos ratione.
                    A amet, deleniti explicabo hic in ipsa, itaque laudantium natus necessitatibus nemo officia,
                    quaerat quibusdam quis sit totam unde voluptate? Dignissimos ea, eum illo iste optio pariatur saepe
                    soluta? Beatae minus nobis perferendis quidem quisquam tempora!
                </p>
            </article>
        </section>
    </section>

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

        <img class="logofooter" src="../assets/images/Logo.png" alt="logo">
        <p class="agbs">Datenschutzerklärung | AGBs</p>
    </footer>

</body>
</html>