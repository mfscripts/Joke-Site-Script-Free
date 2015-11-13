<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php

if(!$ptitle)   $ptitle = $site_name;
if(!$selected) $selected = "HOME";

// main nav
$main_nav   = array();
$main_nav[] = array('pagecode'=>'HOME', 'title'=>'home', 'url'=>$site_path.'index.html');
$main_nav[] = array('pagecode'=>'CATEGORIES', 'title'=>'categories', 'url'=>$site_path.'categories.html');
$main_nav[] = array('pagecode'=>'BROWSE', 'title'=>'a to z browse', 'url'=>$site_path.'browse.html');
$main_nav[] = array('pagecode'=>'SEARCH', 'title'=>'search', 'url'=>$site_path.'search.html');
$main_nav[] = array('pagecode'=>'RANDOM', 'title'=>'random joke', 'url'=>$site_path.'random-joke.html');
$main_nav[] = array('pagecode'=>'SUBMIT', 'title'=>'submit joke', 'url'=>$site_path.'submit-joke.html');
$main_nav[] = array('pagecode'=>'CONTACT', 'title'=>'contact us', 'url'=>$site_path.'contact-us.html');

// 'JOKES' left menu contents
// this must be x items of less
$jokes_nav   = array();
$jokes_nav[] = array('title'=>'Random Joke', 'url'=>$site_path.'random-joke.html');
$jokes_nav[] = array('title'=>'Knock Knock', 'url'=>$site_path.'jokes_knock-knock-jokes.html');
$jokes_nav[] = array('title'=>'Music Jokes', 'url'=>$site_path.'jokes_music-jokes.html');
$jokes_nav[] = array('title'=>'Internet Jokes', 'url'=>$site_path.'jokes_internet-jokes.html');
$jokes_nav[] = array('title'=>'Lawyer Jokes', 'url'=>$site_path.'jokes_lawyer-jokes.html');
$jokes_nav[] = array('title'=>'Marriage Jokes', 'url'=>$site_path.'jokes_marriage-jokes.html');
$jokes_nav[] = array('title'=>'Yo Momma Jokes', 'url'=>$site_path.'jokes_yo-momma-jokes.html');
$jokes_nav[] = array('title'=>'Cowboy Jokes', 'url'=>$site_path.'jokes_cowboy-jokes.html');
$jokes_nav[] = array('title'=>'Accountant Jokes', 'url'=>$site_path.'jokes_accountant-jokes.html');
$jokes_nav[] = array('title'=>'Women Jokes', 'url'=>$site_path.'jokes_women-jokes.html');
$jokes_nav[] = array('title'=>'Men Jokes', 'url'=>$site_path.'jokes_men-jokes.html');
$jokes_nav[] = array('title'=>'More...', 'url'=>$site_path.'categories.html');

?>

<html>
<head>
<title><?php echo $ptitle; ?> - <?php echo $site_name; ?></title>
    <META http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <META NAME="keywords" CONTENT="<?php echo $meta_keys; ?>">
    <META NAME="description" CONTENT="<?php echo $meta_desc; ?>">
    <link rel="stylesheet" href="<?php echo $site_path; ?>styles.css">
</head>

<body style="background: #444444 url('<?php echo $site_path; ?>images/main-bg.jpg') repeat-x; margin:0px;">
<table width="759" cellpadding="0" cellspacing="0" align="center"><tr><td width="5" valign="top"><img src="<?php echo $site_path; ?>images/top-left.jpg" width="5" height="138"></td><td width="749" valign="top">

  <table width="100%" cellpadding="0" cellspacing="0">
    <tr>
	  <td style="background-image:url(<?php echo $site_path; ?>images/header.jpg);" height="138" width="749" valign="top">
	    <table width="100%" cellpadding="0" cellspacing="0">
		  <tr>
		    <td style="padding-top:83px;padding-left:88px;" class="slogan">
			  <?php echo $site_slogan; ?>
			</td>
		  </tr>
		  <tr>
		    <td style="padding-top:19px;padding-left:8px;">
			  <?php
			    $nav = "";
			    foreach($main_nav AS $this_nav) {
				  if($this_nav[pagecode] == $selected) $nav .= "<b>";
				  $nav .= "<a href='".$this_nav[url]."' class='mainnav'>".$this_nav[title]."</a>";
				  if($this_nav[pagecode] == $selected) $nav .= "</b>";
				  $nav .= "&nbsp;<font class='mainnavbreak'>|</font>&nbsp;";
				}
				$nav = substr($nav, 0, strlen($nav)-49);
				echo $nav;
			  ?>
			</td>
		  </tr>
		</table>
	  </td>
	</tr>
	<tr>
	  <td valign="top" style="background: #FFFFFF url('<?php echo $site_path; ?>images/body-bg.gif'); border:1px solid #FFFFFF;">
	  
	    <table width="100%" cellpadding="0" cellspacing="0">
		  <tr>
		    <td width="162" valign="top">
			
			  <table width="162" cellpadding="0" cellspacing="0">
				<tr>
				  <td colspan="2">
				    <img src="<?php echo $site_path; ?>images/spacer.gif" height="10">
				  </td>
				</tr>
				<tr>
				  <td width="10">
				    <img src="<?php echo $site_path; ?>images/spacer.gif" width="10">
				  </td>
				  <td width="152" valign="top" style="background: url('<?php echo $site_path; ?>images/menu-jokes.gif'); padding-left:8px;" width="152" height="245">
					<br class="smallBr"><br class="smallBr">
				    <font class="menuheader">JOKES ::</font>
					<br><br class="smallBr"><br class="smallBr"><br class="smallBr"><br class="smallBr">
					<table width="90%" cellpadding="0" cellspacing="0">
					<?php
					  $tracker = 0;
					  foreach($jokes_nav AS $this_item) {
					    echo "<tr><td width='11' style='padding-top:4px;' class='menuitem'><img src='".$site_path."images/menu-item-on.gif' width='6' height='6' name='img".$tracker."' id='img".$tracker."'></td><td style='padding-top:4px;' class='menuitem'><a href='".$this_item[url]."' class='menuitem' onMouseOver=\"img".$tracker.".src='".$site_path."images/menu-item-off.gif';\" onMouseOut=\"img".$tracker.".src='".$site_path."images/menu-item-on.gif';\">".strtoupper($this_item[title])."</a></td></tr>";
						$tracker++;
					  }
					?>
					</table>
				  </td>
				</tr>
			  </table>
			  
			  <table width="160" cellpadding="0" cellspacing="0">
				<tr>
				  <td colspan="2">
				    <img src="<?php echo $site_path; ?>images/spacer.gif" height="10">
				  </td>
				</tr>
				<tr>
				  <td width="10">
				    <img src="<?php echo $site_path; ?>images/spacer.gif" width="10">
				  </td>
				  <td width="150" valign="top" style="background: url('<?php echo $site_path; ?>images/menu-search.gif'); padding-left:8px;" width="150" height="93">
					<br class="smallBr"><br class="smallBr">
				    <font class="menuheader">SEARCH ::</font>
					<br><br class="smallBr"><br class="smallBr"><br class="smallBr"><br class="smallBr">
					<table width="90%" cellpadding="3" cellspacing="0">
					  <form method='POST' action='search.html'>
					  <tr><td width='30'><b>Find:</b></td><td><input name='c' type='text' class='smallform' style='width:60px; background-color: #F5DB8B;'></td></tr>
					  <tr><td></td><td><input name='submitme' type='submit' value='search' class='smallform'></td></tr>
					  </form>
					</table>
				  </td>
				</tr>
			  </table>
			
			  <br>
			
			</td>
			<td>
			  <img src="<?php echo $site_path; ?>images/spacer.gif" width="4">
			</td>
			<td valign="top">
			  <table width="570" cellpadding="6" cellspacing="0" style="background: #FFFFFF url('<?php echo $site_path; ?>images/body-bg-<?php echo strtolower($selected); ?>.jpg') no-repeat top right; border:1px solid #CCCCCC; margin-top:11px;" height="100%">
				<tr>
				  <td valign="top" width="100%" style="padding-top:6px;">