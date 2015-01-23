 <?php $title='Resize element'; include(__DIR__ . '/../mall/header.php'); ?>

<div id='flash'>
<form id='size'>
<p>
  <label>Width: <input id='width' type='number' /></label> 
  <label>Height: <input id='height' type='number' /></label> 
  <input id='resize' type='button' value='Resize' />
</p>
Original values are clientWidth/Height or offsetWidth/Height?
</div>

<?php $path=__DIR__; include(__DIR__ . '/../mall/footer.php'); ?>
