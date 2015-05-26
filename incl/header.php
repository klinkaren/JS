<!doctype html>
<html lang="sv">

<head>
  <meta charset="utf-8">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet/less" type="text/css" href="style/style.less">
  <script src="js/less.min.js"></script>
  <link rel="shortcut icon" href="favicon_js.ico">  
</head>

<!-- The body id helps with highlighting current menu choice -->
<body<?php if(isset($pageId)) echo " id='$pageId' "; ?>>

<div id="container">

  <!-- Top header with logo and navigation -->
  <header id="top">
      <img src="img/logo_js.png" alt="htmlphp logo">    
      <nav class="navmenu">
    		<a id="me-"      href="me.php">Me</a>
    		<a id="report-"  href="report.php">Redovisning</a>
    		<a id="test-" 	 href="test.php">Test</a>
        <a id="myshop-"  href="webshop.php">Webshop</a> 
        <a id="mychat-"  href="chat.php">Chat</a> 
      </nav>
   </header>