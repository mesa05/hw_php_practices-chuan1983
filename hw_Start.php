<?php
$s = "";
for ($i = 0; $i < 9; $i++) {
     $s .= "* ";
     echo $s . "<br />";
}
        
echo "<hr>";

for($x = 1; $x <= 9; $x++){
  for($y = $x; $y <= 9; $y++){
      echo "* ";
  }
      echo "<br />";
}

?>