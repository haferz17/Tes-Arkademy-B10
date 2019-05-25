<?php
    function vokal($str){
        $a=str_split($str);
        $count=0;

        for($b=0;$b<count($a);$b++){
            if(preg_match('/^[aiueo]$/',$a[$b])){
                $count++;
            }
        }
        echo $count;
    }
    vokal('programmer');
?>