<?php $title='Asteroids'; include(__DIR__ . '/../mall/header.php'); ?>
<div id='flash'>
<h1>aSteroids</h1>

	<canvas id='canvas1' width='600' height='600'>
	  Your browser does not support the element HTML5 Canvas.
	</canvas>
	<div id="board">	
		<div id="info">
			<h1>How to play:</h1>
			<p>Some rules...</p>
		</div>
		<button id='btnGame' type="button" value="start" name="btnGame">Play again</button>
	</div>
</div>
<?php $path=__DIR__; include(__DIR__ . '/../mall/footer.php'); ?>
