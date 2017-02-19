<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Voiceatility client download section</title>
<style type="text/css" media="screen">
html, body {
	margin:0;
	padding:0;
	}
body {
	width:600px;
	margin:0 auto;
	font-family:Georgia, "Times New Roman", Times, serif;
	}
h1, h2 {
	color:#666;
	}
/*#mac, #pc {
	height:10%;
	width:10%;
	margin:0;
	}
*/
/*----------images-------------------*/
#pc {
	position:relative;
	left:520px;
	bottom:75px;
	margin-bottom:-55px;
	}
#mac {
	position:relative;
	left:360px;
	bottom:75px;
	margin-bottom:-55px;
	}
#logo {
	padding-left:60px;
	margin-bottom:-40px;
	}
p, a {
	line-height:1.4em;
	}
a:link {
	color:#FF0000;
	text-decoration:none;
	}
a:hover {
	border-bottom:2px solid #F00;
	margin-bottom:-2px;
	}
div {
	background-color:#F3DBDC;
	padding:5px;
	}
.italic {
	font-style:italic;
	}
</style>
</head>

<body>
<img src="../art/voiceatility_logo.jpg" alt="" id="logo" />
<h1>Voiceatility Client download section</h1>
<p>Below is a list of the current files available for download. In order start the download follow these instructions. Clicking on the link will simply cause the file to play rather than download.</p>
<h2>On a Windows PC using Internet Explorer</h2>
<img src="../art/ie-icon.gif" alt="" id="pc" />
<p>Right-click on the link and from the pop-up menu that appears click <br />"<span class="italic">Save Target As &hellip;</span>"</p>
<h2>On a Macintosh using Safari</h2>
<img src="../art/safari-icon.gif" alt="" id="mac" />
<p>Control click on the link and from the pop-up menu that appears select <br />"<span class="italic">Download Linked File As &hellip;</span>"</p>
<p>Please be patient as large files can take some time to download even with current broadband speeds.</p>
<div>
<?php
//Open voicefiles directory
$dir = opendir('../voicefiles');// this is the handle

if ($dir = opendir('.')) {
    while (false !== ($file = readdir($dir))) {
        if ($file != "." && $file != ".." && $file != "error_log" && $file != "test_list.php") {$count++;
            print("Voicefile no.".$count." - <a href=\"".$file."\" title=\"To download, right click and select Save Target As &hellip;\">".$file."</a><br />\n");
        }
    }
//echo '<br /><br /><a href="..">Return</a>';
    closedir($dir);
}

//Create an array of all the files

//List files in voicefiles directory
/*while (($file = readdir($dir)) !== false)

  {	
  	if ($file == "error_log") {
		echo '<p style="display:none;">'.$file.'</p>';
		} else {	
  echo "filename: " . $file . "<br />";
  }
}
closedir($dir);
*/?> 

</div>
</body>
</html>
