<?php

error_reporting(0);

// site details
$site_name  = "Your Site Name";             	// site name/title
$site_path  = "http://www.yourdomain.com/";		// site url. Lowercase. Including the http://www. and the ending forward slash '/'. i.e. 'http://www.mysitename.com/'.
$site_email = "info@yourdomain.com";  			// site email address. This is used on the 'contact us' pages.

$site_slogan = "Nearly 10,000 funny jokes online now!";  // appears beneath the logo on all pages.

$perpage = 30;  // amount of results to display on the browsing/cat listing pages

// DO NOT MODIFY BELOW THIS LINE

// functions
function formatField($input) {
	$input = strip_tags($input);
	$input = str_replace(";", ":", $input);
	$input = mysql_real_escape_string($input);
	return trim($input);
}

function urlconvert($string) {
	$replace_values = array(" ", "'", "\"", "\\", "/", "?", "|", "@", "#", "~", "!", "£", "$", "%", "^", "&", "*", "(", ")", "[", "]", "{", "}", "+", "=", "-", ":", ";");
	$string = str_replace($replace_values, "_", $string);
	$string = str_replace(".", "", $string);
	$string = str_replace(",", "", $string);
	return strtolower($string);
}

function convert_number($number) { 
    if (($number < 0) || ($number > 999999999)) 
    { 
        return "$number"; 
    } 

    $Gn = floor($number / 1000000);  /* Millions (giga) */ 
    $number -= $Gn * 1000000; 
    $kn = floor($number / 1000);     /* Thousands (kilo) */ 
    $number -= $kn * 1000; 
    $Hn = floor($number / 100);      /* Hundreds (hecto) */ 
    $number -= $Hn * 100; 
    $Dn = floor($number / 10);       /* Tens (deca) */ 
    $n = $number % 10;               /* Ones */ 

    $res = ""; 

    if ($Gn) 
    { 
        $res .= convert_number($Gn) . " Million"; 
    } 

    if ($kn) 
    { 
        $res .= (empty($res) ? "" : " ") . 
            convert_number($kn) . " Thousand"; 
    } 

    if ($Hn) 
    { 
        $res .= (empty($res) ? "" : " ") . 
            convert_number($Hn) . " Hundred"; 
    } 

    $ones = array("", "One", "Two", "Three", "Four", "Five", "Six", 
        "Seven", "Eight", "Nine", "Ten", "Eleven", "Twelve", "Thirteen", 
        "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eightteen", 
        "Nineteen"); 
    $tens = array("", "", "Twenty", "Thirty", "Fourty", "Fifty", "Sixty", 
        "Seventy", "Eigthy", "Ninety"); 

    if ($Dn || $n) 
    { 
        if (!empty($res)) 
        { 
            $res .= " and "; 
        } 

        if ($Dn < 2) 
        { 
            $res .= $ones[$Dn * 10 + $n]; 
        } 
        else 
        { 
            $res .= $tens[$Dn]; 

            if ($n) 
            { 
                $res .= "-" . $ones[$n]; 
            } 
        } 
    } 

    if (empty($res)) 
    { 
        $res = "zero"; 
    } 

    return $res; 
} 

?>