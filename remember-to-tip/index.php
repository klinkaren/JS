<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Remember to tip!</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Remember to tip!</h1>
	<p>A jQuery tooltip</p>
	<h2>What it does</h2>
	<p>Shows a tooltip when hovering an object. <a class="showTooltip" href="#" title="It will have a title" alt="...and some text...">Hover me for a demo!</a><p>
	<p>It also works for images!</p>
	<img src="img/tipjar.png" alt="Some informative text" class="showTooltip" title="Jar 1">
	<img src="img/tipjar.png" alt="Some other text..." title="Jar 2" class="showTooltip">
	<img src="img/tipjar.png" alt="Lorum ipsum? Lorem? Ipsum!" title="Jar 3" class="showTooltip">
	<img src="img/tipjar.png" alt="This text should be to the left of your cursor." class="showTooltip right" title="Jar 4">
	<p>If an object is too close to the right side to show the tooltip on the right of the pointer, the tooltip will be displayed to the left instead.</p>
	<h2>How to use it</h2>
	<ol>
		<li><a href="remember-to-tip.rar" class="showTooltip" title="Download" alt="This is all you need to get going.">Download</a> and extract into your project</li>
		<li>Include the main.js and jquery.js (found in src folder) files in your project.</li>
		<li>Use the class showTooltip to show a tooltip. Set attributes title and alt. These will be the headline and the paragraph text in the tooltip.</li>
	</ol>
	<h2>How to style</h2>
	<p>Open main.js<br/>
	In the third row the plugin toolTip is added to the class showTooltip. Here you can pass along 4 variables if you want to (background color, text color, width and border radius).</p>
	<img src="info/variables.png" alt="Change these variables to your liking." class="showTooltip" title="Variables">
	</p>
	<div id="madeBy" class="right">&copy; Viktor Kjellberg 2015. <a href="www.viktorkjellberg.com">www.viktorkjellberg.com</a></div>
</body>
<script src="src/jquery.js"></script>
<script src="main.js"></script>
</html>
