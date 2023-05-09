<?php include "functions.php"; session_start(); ?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Örökbefogadás</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="pics/favicon.png" type="image/x-icon">
</head>
<body>
<div class="wrapper">
    <header>
        <img src="pics/logo.png" alt="csacskamacska logo">
        <nav>
        <ul>
            <li><a href="about.php">Rólunk</a></li>
                <li><a class="actual" href="adopt.php">Örökbefogadás</a></li>
                <?php if(!isset($_SESSION["user"]) || empty($_SESSION["user"])) :?>
                    <li><a href="regist.php">Regisztráció</a></li>
                <?php else :?>
                    <li><a href="search.php">Macska kereső</a></li>
                    <li><a href="profile.php">Profil</a></li>
                <?php endif; ?>
                <li><a href="index.php">Főoldal</a></li>
        </ul>
        </nav>
    </header>
    <hr>
    <aside>
        <div style="display:none;width:10%;height:20%;position: fixed; left: 0;"><iframe src="https://giphy.com/embed/CqVNwrLt9KEDK" width="100" height="100" style="position:absolute" class="giphy-embed" allowFullScreen></iframe></div><p><a href="https://giphy.com/gifs/hallmarkecards-cute-hallmark-shoebox-BzyTuYCmvSORqs1ABM"></a></p>
        <div style="display:none;width:10%;height:20%;position: fixed; right: 0;"><iframe src="https://giphy.com/embed/CqVNwrLt9KEDK" width="100" height="100" style="position:absolute" class="giphy-embed" allowFullScreen></iframe></div><p><a href="https://giphy.com/gifs/hallmarkecards-cute-hallmark-shoebox-BzyTuYCmvSORqs1ABM"></a></p>
    </aside>
    <main>
    <div class="osszes">
        <div class="macska1">
            <h4>Cirmi</h4>
            <img src="pics/Cirmi1.jpg" alt="cirmi macska">
            <p>Cirmi egy igazi szerethető vörös kandúr. Gyakran képzeli magáról, hogy egy tigris, ahogy azt a képen is megfigyelhetjük.</p>
        </div>
        <div class="macska2">
            <h4>Dezső</h4>
            <img src="pics/Dezso1.jpg" alt="dezso macska">
            <p>Dezső egy roppant eszes, okos macska. Egy pszichológus cicája volt, szeret ülni és problémákat hallgatni.</p>
        </div>
        <div class="macska3">
            <h4>Gazsi</h4>
            <img src="pics/Gazsi1.jpg" alt="gazsi macska">
            <p>Gazsit egy fa tetején találták meg 2 hete. Kedvenc elfoglaltsága a fára mászás, nagyon nehezen lehet lekönyörögni esténként.</p>
                </div>
        <div class="macska4">
            <h4>Irénke</h4>
            <img src="pics/Irenke1.jpg" alt="irenke macska">
            <p>Irénkét az utcán találták, nagyon szereti a növényeket. Jelenleg csupán 4 hetes, de már bőszen gyomtalanítja a járdát.</p>
        </div>
        <div class="macska5">
            <h4>Juan</h4>
            <img src="pics/Juan1.jpg" alt="juan macska">
            <p>Juan Irénke testvére, ugyancsak növénybarát, bár gyakran fogyasztja kedvenc virágait egerek helyett, ugyanis Juan vegán.</p>
        </div>
        <div class="macska6">
            <h4>Dracula</h4>
            <img src="pics/Dracula1.jpg" alt="dracula macska">
            <p>Draculáról gyakran rebesgetik, hogy vámpír macska volt az apja. Szerintünk ez nem valós, de csak ilyen képet tudtunk lőni róla.</p>
        </div>
    </div>
    </main>
    <footer><strong>©A Csapat 2021</strong></footer>
</div>
</body>
</html>