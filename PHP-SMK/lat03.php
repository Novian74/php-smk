<?php 

    function belajar(){
        echo "saya belajar PHP";
    }

    function luaspersegi($p =5,$i =3){
        $luas = $p * $i;
    
        echo $luas;
    }

    function luas($p =5,$i =3){
        $luas = $p * $i;
        return $luas;
    }

    function output(){
        return "Belajar Function";
    }

    echo luas(100,3)*5;
?>