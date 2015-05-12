 <?php $title='Marvin citat'; include(__DIR__ . '/../mall/header.php'); ?>

<div id='flash'>
<div id='webshop'>
  <table>
    <tr><th id="col1">Image</th><th id="col2">Title</th><th id="col3">Price</th><th id="col4">Buy it</th></tr>
    <tr><td><img src="../../../img.php?src=hitchhikersguide.jpg&width=100"></td><td>The Hitchhikers Guide to the Galaxy</td><td>$7</td><td><button id='book1' class="purchase">Buy it</button></td></tr>
  	<tr><td><img src="../../../img.php?src=Den-stygga-flickans-rackartyg.jpg&width=100"></td><td>Den stygga flickans rackartyg</td><td>$8</td><td><button id='book2' class="purchase">Buy it</button></td></tr>
  </table>
</div>
</div>
<?php $path=__DIR__; include(__DIR__ . '/../mall/footer.php'); ?>
