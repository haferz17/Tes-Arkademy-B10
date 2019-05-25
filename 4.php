<?php
    function pola($p){
        if($p%2!=0){     
            for($a=0;$a<$p;$a++){
                for($b=0;$b<$p;$b++){
                    if($a==0||$a==$p-1||$b==($p-1)/2) echo "x";
                    else echo "=";
                    if($b!=$p-1) echo " ";
                }
                echo "<br/>";
            }   
        }
    }
    pola(5);
?>