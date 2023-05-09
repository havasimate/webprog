<?php
include('includes/config.inc.php');
$MAPPA = './images/';
$kepek = array();
$olvaso = opendir($MAPPA);
while (($fajl = readdir($olvaso)) !== false)
    if (is_file($MAPPA . $fajl)) {
        $vege = strtolower(substr($fajl, strlen($fajl) - 4));
        if (in_array($vege, $TIPUSOK))
            $kepek[$fajl] = filemtime($MAPPA . $fajl);
    }
closedir($olvaso);
?>
<style type="text/css">
        div#galeria {margin: 0 auto; width: 620px;}
        div.kep { display: inline-block; }
        div.kep img { width: 200px; }
    </style>

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
    <h1>Feltöltés a galériába:</h1>
    <?php
    if (!empty($uzenet)) {
        echo '<ul>';
        foreach ($uzenet as $u)
            echo "<li>$u</li>";
        echo '</ul>';
    }
    ?>
    <form action="logicals/feltolt.php" method="post" enctype="multipart/form-data">
        <label>Első:
            <input type="file" name="elso" required>
        </label>
        <input type="submit" name="kuld">
    </form>
    <div id="galeria">
    <h1>Galéria</h1>
    <?php
    arsort($kepek);
    foreach ($kepek as $fajl => $datum) {
    ?>
        <div class="kep">
            <a href="<?php echo $MAPPA . $fajl ?>">
                <img src="<?php echo $MAPPA . $fajl ?>">
            </a>
            <p>Név: <?php echo $fajl; ?></p>
            <p>Dátum: <?php echo date($DATUMFORMA, $datum); ?></p>
        </div>
    <?php
    }
    ?>
    </div>
</main>