<?php
// included header file which also inserts meta tags
// the functions and constants files are also required
require_once INCPATH.'constants.php';
require_once INCPATH.'functions.php';

$filename = basename($_SERVER['SCRIPT_FILENAME'],".php");
include_once DATAPATH.'meta_tags.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=8" />
	
	<meta name="verify-v1" content="z8gP/uWSIAukHasv15C6484cJxXCNzDUXhCfimrjgUs=" />
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	
	<meta name="description" content="<?php echo ${$filename}['description']; ?>" />
	<meta name="keywords" content="<?php echo ${$filename}['keywords']; ?>" />

	<title><?php echo ${$filename}['title']; ?></title>
	<link rel="stylesheet" href="<?php echo CSSPATH.'voice.css'; ?>" type="text/css" media="screen" />
	<link rel="shortcut icon" href="<?php echo IMGPATH.'favicon.ico'; ?>" type="image/x-icon" />
	<!--[if lt IE 7]>
	<link rel="stylesheet" href="<?php echo CSSPATH.'voice_ie.css'; ?>" type="text/css" media="screen" />	
	<![endif]-->
	<!--[if IE 7]>
	<link rel="stylesheet" href="<?php echo CSSPATH.'voice_ie7.css'; ?>" type="text/css" media="screen" />	
	<![endif]-->
	<!--[if IE 8]>
	<link rel="stylesheet" href="<?php echo CSSPATH.'voice_ie8.css'; ?>" type="text/css" media="screen" />	
	<![endif]-->
	<?php 
	if ($filename == 'samples_client_list'){
		echo '<script type="text/javascript">var YMPParams = { autoadvance:false }</script> ';
		echo '<script type="text/javascript" src="http://mediaplayer.yahoo.com/js"></script>';
	} ?>
</head>
<body id="<?php echo $filename; ?>">
	<div id="wrap">
	<h1>Voice<span>atility</span></h1>
	<h2 id="subheading">Voice&#45;overs&nbsp;&nbsp;&nbsp;music audio&nbsp;<span id="prod">production</span></h2>