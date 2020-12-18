<?php
session_start();
require_once "../php/user.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="../assets/styles/profil.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>BestPicture</title>
</head>
<body>
<?php
if(get_signed_in_user_id()!=-1){
    echo ' <header>
        <div class="wrapper">
        <a href="../index.php"> <img class="logo" src="../assets/images/Logo.png" alt="logo"></a>
        <nav>
            <a href="../index.php">Home</a> <a href="#">Anmelden</a> <a href="../upload/index.php">Upload</a> <a href="index.php"> <img class="user" src="../assets/images/user.png" alt="user"> </a>
        </nav>

    </div>
    </header>
    <main class="main">
        <section class="gallary-links">
            <article class="wrapper profil">
                <img class="bo boimg-1" src="../assets/images/butterfly.jpg" alt="placehold">
                <div class="text">
                    <p id="h5">Sandra Müller</p>
                    <p class="acc"><span class="bold">7047@htl.rennweg.at</span></p>
                    <p class="acc"><span class="bold">300</span> Likes</p>
                    <p class="acc"><span class="bold">50</span>  Posts</p>
                </div>
            </article>
            <div class="wrapper">
                <div class="gallary-link">
                    <img src="../assets/images/butterfly.jpg" class="content-picture">
                </div>
                <div class="gallary-link">
                    <img src="../assets/images/butterfly.jpg" class="content-picture">
                </div>
                <div class="gallary-link">
                    <img src="../assets/images/butterfly.jpg" class="content-picture">
                </div>
                <div class="gallary-link">
                    <img src="../assets/images/butterfly.jpg" class="content-picture">
                </div>
                <div class="gallary-link">
                    <img src="../assets/images/butterfly.jpg" class="content-picture">
                </div>
            </div>
        </section>
    </main>
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
    </footer>';}
else{
    $url="needSignIn.html";
    header("Location: " . $url);
    exit();
}
?>
</body>
</html>