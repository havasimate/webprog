<?php

    function load($filename){
        $felhasznalok = [];

        $file = fopen($filename, "r");

        while(($line = fgets($file)) !== false){
            $felhasznalok[] = unserialize($line);
        }

        fclose($file);
        return $felhasznalok;
    }

    function save($filename, $user){
        $file = fopen($filename, "a");
        
        fwrite($file, serialize($user) . "\n");

        fclose($file);
    }
?>