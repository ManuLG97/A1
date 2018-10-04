<?php
//Programa para encontrar el primer carácter no repetido en una cadena dada.
 function find_non_repeat($word) {
  $chr = null;
  for ($i = 0; $i <= strlen($word); $i++) {
     if (substr_count($word, substr($word, $i, 1)) == 1) {
        return substr($word, $i, 1);
     }
  }
}

echo find_non_repeat("Green")."\n";
echo find_non_repeat("abcdea")."\n";
?>