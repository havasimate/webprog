<?php include "functions.php"; session_start(); ?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Rólunk</title>
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
                <li><a class="actual" href="about.php">Rólunk</a></li>
                <li><a href="adopt.php">Örökbefogadás</a></li>
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
        <div style="display:none;width:10%;height:20%;position: fixed; left: 0;"><iframe src="https://giphy.com/embed/jRlP4zbERYW5HoCLvX" width="100" height="100" style="position:absolute" class="giphy-embed" allowFullScreen></iframe></div><p><a href="https://giphy.com/gifs/hallmarkecards-cute-hallmark-shoebox-BzyTuYCmvSORqs1ABM"></a></p>
        <div style="display:none;width:10%;height:20%;position: fixed; right: 0;"><iframe src="https://giphy.com/embed/jRlP4zbERYW5HoCLvX" width="100" height="100" style="position:absolute" class="giphy-embed" allowFullScreen></iframe></div><p><a href="https://giphy.com/gifs/hallmarkecards-cute-hallmark-shoebox-BzyTuYCmvSORqs1ABM"></a></p>
    </aside>
    <main>
    <div class="intro">
        <h2>Rólunk</h2>
        <p>Alapítványunkat 2000-ben alapítottuk abból a célból, hogy minden
            az utcán élő vagy valamilyen okokból gazdátlan macskát befogadjunk.
            Alapítványunk vállal ideiglenes állatmegőrzést is, teljes körű ellátással.
            Kedvencének lehetősége van a többi macsekkal játszani és szocializálódni.
            Az árazás egyénileg történik, amit személyesen vagy a lent megadott
            elérhetőségeken lehet kérni. A hozzánk bekerülő macskákat muszáj
            ivartalanítanunk, mert sajnos az utóbbi időkben nagyon megszaporodtak
            az utcán élő macskák. Vannak olyan gondozásban lévő macskáink, akik rengeteg
            orvosi ellátást igényelnek, amiket mind mi fizetünk felajánlásokból,
            örökbefogadási díjakból. Utóbbira pontosan ezért van szükség.
            Amennyiben felkeltettük érdeklődésüket, keressenek minket bizalommal
            az elérhetőségeink egyikén.</p>
        <img src="pics/epulet.jpg" alt="epulet">
    </div>
    <div class="adoptation">
        <h2>Örökbefogadás</h2>
        <p>Az örökbefogadás egyik feltétele, hogy legyen megfelelő hely a macsekok
            számára, ezért nem tartjuk kizártnak a helyszíni megtekintést.
            Szervezetünknél létezik örökbefogadási díj, ami egyrészt a cicus addigi
            ellátásának egy jelképes kiegyenlítése, másrészt pedig az alapítvány 
            támogatásának egy formája. Az összes gondozottunk megkapott minden oltást,
            tehát oltási könyvvel és teljesen egészségesen kerülnek az új gazdikhoz.
            Vannak azonban különleges macskáink, akik különös figyelmet igényelnek,
            náluk méginkább megválogatjuk a gazdijelöltelek.
            Az örökbefogadónak be kell töltenie a 18. életévét és stabil jövedelemmel
            kell rendelkeznie, mindezeknek azért van hatalmas szerepük, hogy 
            a tőlünk kikerült állatoknak a lehető legkevesebb esélyük legyen 
            visszakerülni hozzánk.</p>
        <img src="pics/macskasneni.jpg" alt="neni ket macskaval">
    </div>
    <div class="adpotPrices">
        <table>
            <caption>Örökbefogadás költségei:</caption>
            <thead>
                <tr>
                    <th id="nev">Megnevezés</th>
                    <th id="ar">Ár(Ft)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td headers="nev">Kezelési hozzájárulás</td>
                    <td headers="ar">2000</td>
                </tr>
                <tr>
                    <td headers="nev">Egyszeri támogatás</td>
                    <td headers="ar">3000</td>
                </tr>
                <tr>
                    <td headers="nev">Oltási könyv</td>
                    <td headers="ar">1000</td>
                </tr>
                <tr>
                    <td headers="nev">Kellékek</td>
                    <td headers="ar">4000</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td headers="nev">Összesen</td>
                    <td headers="ar">10000</td>
                </tr>
            </tfoot>
        </table>
    </div>
        <div class="video">
            <video width="640" height="480" controls>
                <source src="video/catman.mp4" type="video/mp4">
            </video>
        </div>
    <div class="contact">
        <h5>E-mail:<a href="mailto:cats@csacskamacska.hu">  cats@csacskamacska.hu</a></h5>
        <h5>Telefonszám: +36333333333</h5>
        <h5>Telephelyünk: Catania, Catania megye, Olaszország</h5>
    </div>
    <div class="iframe">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25308.72998725514!2d15.065255705685953!3d37.54113165131979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1313e2dd761525b5%3A0x58fe876151c83cf0!2sCatania%2C%20Catania%20megye%2C%20Olaszorsz%C3%A1g!5e0!3m2!1shu!2shu!4v1615625277623!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    </main>
    <footer><strong>©A Csapat 2021</strong></footer>
</div>
</body>
</html>