<?php
include("incl/config.php");
$title = "Webshop";
$pageId = "myshop";
include("incl/header.php");?>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/shop.js"></script>
	<div id='webshop'>
	  <table>
	    <tr><th id="col1">Image</th><th id="col2">Title</th><th id="col3">Price</th><th id="col4">Buy it</th></tr>
	    <tr><td><img src="img.php?src=hitchhikersguide.jpg&width=100"></td><td>The Hitchhikers Guide to the Galaxy</td><td>$7</td><td><button id='book1' class="purchase">Buy it</button></td></tr>
	  	<tr><td><img src="img.php?src=Den-stygga-flickans-rackartyg.jpg&width=100"></td><td>Den stygga flickans rackartyg</td><td>$8</td><td><button id='book2' class="purchase">Buy it</button></td></tr>
	  </table>
	</div>

<?php include("incl/footer.php"); ?>
