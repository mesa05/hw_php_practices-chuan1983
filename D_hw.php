<?php

for($q = 1; $q <= 9; $q++){
    for($w = 0; $w <= 9; $w++){
      for($e = 0; $e <= 9; $e++){
        if($q*$q*$q + $w*$w*$w + $e*$e*$e ==
         100*$q + 10*$w + $e){
           echo "$q $w $e "."<p>";
        }
      }
    }
}




?>