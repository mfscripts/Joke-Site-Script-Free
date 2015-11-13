<?php

function preparedata($string) {
  $string = trim($string);
  $string = strip_tags($string);
  $string = mysql_real_escape_string($string);
  return $string;
}

?>