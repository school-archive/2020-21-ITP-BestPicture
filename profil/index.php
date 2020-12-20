<?php
session_start();
require_once "../php/user.php";
require_once "../php/photo.php";
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
    $user = get_signed_in_user();
    $userid = $user['user_id'];
    $name = $user['vorname'] .' ' .$user['nachname'];
    $email = $user['email'];
    $likes = get_count_likes_of_user($userid);
    $posts = get_count_photos_of_user($userid);
    ?>
    <header>
        <div class="wrapper">
        <a href="../index.php"> <img class="logo" src="../assets/images/Logo.png" alt="logo"></a>
        <nav>
            <a href="../index.php">Home</a> <a href="../login/abmelden.html">Abmelden</a> <a href="../upload/index.php">Upload</a> <a href="index.php"> <img class="user" src="../assets/images/user.png" alt="user"> </a>
        </nav>

    </div>
    </header>
    <main class="main">
        <section class="gallary-links">
            <article class="wrapper profil">
                <img class="bo boimg-1" src="../assets/images/Logo_light.jpg" alt="placehold">
                <div class="text">
                    <p id="h5"><?php echo $name ?></p>
                    <p class="acc"><span class="bold"><?php echo $email ?></span></p>
                    <p class="acc"><span class="bold"><?php echo $likes ?></span> Likes</p>
                    <p class="acc"><span class="bold"><?php echo $posts ?></span>  Posts</p>
                </div>
            </article>
            <div class="wrapper">
                <?php
                    $photos = get_all_photos_by_user($userid);
                    foreach ($photos as $photo) {
                        $path = substr($photo['path'], 1);
                        $photoid = $photo['photo_id'];
                        echo "<a href='../comment/index.php?id=$photoid' class='gallary-link'>
                                <img src='$path' class='content-picture'>
                              </a>";
                    }
                ?>
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
            <p><a href="mailto:7053@htl.rennweg.at">Nicoletta Sarzi Sartori</a></p>
        </div>

        <img class="logofooter" src="../assets/images/Logo.png" alt="logo">
        <p class="agbs">Datenschutzerklärung | AGBs</p>
    </footer>
<?php }
else{
    $url="needSignIn.html";
    header("Location: " . $url);
    exit();
}
?>
</body>
</html>