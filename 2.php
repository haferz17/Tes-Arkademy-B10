<?php
    function hari($awal,$akhir){
        $x = strtotime($awal);
        $y = strtotime($akhir);
        $v = $y-$x; 
        $diff = floor($v/(3600*24));
        $z=1;

        echo "'".$awal."',";
        for($a=1;$a<$diff;$a++){
            $add = $x+(3600*24)*$z;
            $ori = date("Y-m-d",$add);
            $z++;
            echo " '".$ori."',";
        }
        echo " '".$akhir."'";
    }
    hari('2019-02-27', '2019-03-05');
?>