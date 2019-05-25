<?php
    function ganti($str,$x,$y){
        $z=str_split($str);
        for($a=0;$a<count($z);$a++){
            if($z[$a]==$x){
                $z[$a]=$y;     
            }
        }
        for($a=0;$a<count($z);$a++){
            echo $z[$a];
        }
    }
    ganti("purwakarta",'a','o');
?>