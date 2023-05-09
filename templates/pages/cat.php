<?php


Class Cat {
    public $nev;
    public $kor;
    public $nem;
    public $szin;

    public function __construct(String $nev, String $kor, String $nem, String $szin){
        $this->nev = $nev;
        $this->kor = $kor;
        $this->nem = $nem;
        $this->szin = $szin;
    }
}
    $macskak = [
    $cirmi = new Cat("Cirmi", 2, 2, 3),
    $dezso = new Cat("Dezso", 3, 1, 4),
    $gazsi = new Cat("Gazsi", 1, 1, 1),
    $irenke = new Cat("Irenke", 1, 2, 2),
    $juan = new Cat("Juan", 1, 1, 4),
    $dracula = new Cat("Dracula", 5, 1, 3)
    ];

    function idealisCicus($macskaKora,$macskaNeme, $macskaSzine){
        $idealis = [];
        foreach($GLOBALS["macskak"] as $macska){
            if($macska->kor === $macskaKora && $macska->nem === $macskaNeme && $macska->szin === $macskaSzine){
            $idealis[] = $macska->nev;
            }
        }
        if(count($idealis) !== 0){
            foreach($idealis as $ideal){
                echo $ideal;
                return true;
            }
        } else {
            echo "Sajnos nincs ilyen cicus. :(((";
            return false;
        }
    }

?>