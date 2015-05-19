 <?php $title='9 små javascript-paket'; include(__DIR__ . '/../mall/header.php'); ?>

<div id='flash'>

<div id="box1" class="box">
	<div class='minimize' title='Miminize this box'>x</div>
	<img src="../../../img/giftbox.png" alt="" class="gift">
	<h1 class="gift">1.</h1>
	<span class="unwrapped">
		<h1>1. Jaha, här kan fixa en bakgrund dårå</h1>
		<p>Ett gäng stycken med totalt meningslös text. Ja, alltså - textens innebörd är meningslös. Den får betydelse enbart genom att ta upp yta.</p>  
		<p>Du kan nämligen klicka på ett stycke för att ändra dess bakgrund.</p>
		<p>Coolt va?</p>
		<p>Nja, kanske inte specielt. Men det ger det åtminstonde texten syfte. Inte fy skam för en text. </p>
	</span>
</div>
<div id="box2" class="box">
	<div class='minimize' title='Miminize this box'>x</div>
	<img src="../../../img/giftbox.png" alt="" class="gift">
	<h1 class="gift">2.</h1>
	<span class="unwrapped">
		<img src='../../../img/me2.jpg?w=200' alt='' />
		<h1>2. Bakgrund och bildstorlek</h1>
		<p>Kolla vad skoj!. I det här exemplet kan vi både byta bakgrundsfärg OCH ändra storlek på bilden!!!</p>  
	</span>
</div>
<div id="box3" class="box">
	<div class='minimize' title='Miminize this box'>x</div>
	<img src="../../../img/giftbox.png" alt="" class="gift">
	<h1 class="gift">3.</h1>
	<span class="unwrapped">
		<h1>3. Lägg till och ta bort element</h1>
		<p>Ok, så här är det va. Skriv in nån skön färkod i hex i rutan och klicka på knappen för att lägga till den i paletten. Klicka på färgen och det tas bort. Magiskt!</p>
		<label>Colorcode in hex (#eee or #5c5c5c): <input id='box3_color' type='text' name='color' /></label>
		<input id='box3_add' type='button' value='Add color' /> 
		</form></p>
		<p id='palette'>Color Palette:</p>
	</span>
</div>
<div id="box4" class="box">
	<div class='minimize' title='Miminize this box'>x</div>
	<img src="../../../img/giftbox.png" alt="" class="gift">
	<h1 class="gift">4.</h1>
	<span class="unwrapped">
		<img id='me-image-4' class='example' src='../../../img/me2.jpg?w=200' alt='' width='200px' height='254px' />
		<h1>4. Selecting items, hide, show and change their look</h1>
		<p>Aint it funny to be young. No worries here. I'm smiling :-D and I still have those shoes somewhere in the attic.</p>  
		<p><form>
		<input id='box4_dimensions' type='button' value='Get current dimensions wxh' /> <span id='box4_current'></span>
		<br/>
		<label>Width: </label>
		<input id='box4_width_incr' type='button' value='+' />
		<input id='box4_width_decr' type='button' value='-' />
		<br/>
		<label>Height: </label>
		<input id='box4_height_incr' type='button' value='+' />
		<input id='box4_height_decr' type='button' value='-' />
		</form></p>
	</span>
</div>
<div id="box5" class="box">
	<div class='minimize' title='Miminize this box'>x</div>
	<img src="../../../img/giftbox.png" alt="" class="gift">
	<h1 class="gift">5.</h1>
		<span class="unwrapped">
		<img id='me-image-5' class='example' src='../../../img/me2.jpg?w=200' alt='' width='200px' height='254px' />
		<h1>5. Animera mera!</h1>
		<p>Känn på dom här sköningarna. Web 2.0 - vår tids blinkande under construction ;-)</p>  
		<p><a id='fadeToggle' href=#>Fade</a></p>
		<p><a id='slideToggle' href=#>Slide</a></p>
	</span></p>
</div>
<div id="box6" class="box">
	<div class='minimize' title='Miminize this box'>x</div>
	<img src="../../../img/giftbox.png" alt="" class="gift">
	<h1 class="gift">6.</h1>
	<span class="unwrapped">
		<img class='lightbox' src='../../../img/me2.jpg' alt='' width='200px' />
		<h1>6. Lightbox</h1>
		<p>Klicka på bilden så får du en extra generöst stor version av mig.</p>
	</span>
</div>
<div id="box7" class="box">
	<div class='minimize' title='Miminize this box'>x</div>
	<img src="../../../img/giftbox.png" alt="" class="gift">
	<h1 class="gift">7.</h1>
		<span class="unwrapped">
		<h1>1. Selecting items, hide, show and change their look</h1>
		<p>Aint it funny to be young. No worries here. I'm smiling :-D and I still have those shoes somewhere in the attic.</p>  
		<p>This example is just to get going. You migh wonder how this box opens and closes? Its just a matter of hiding and showing the elements you want to display. The box minimizes itself when you click the x up in the right corner and you can open it up in full width by clicking the number or the wrapped giftbox.</p>
		<p>When you click on the text or images in this example it will shift (toggle) between dark and light color.</p>
		<p>Its all about using selectors and the eventhandlers.</p>
	</span>
</div>
<div id="box8" class="box">
	<div class='minimize' title='Miminize this box'>x</div>
	<img src="../../../img/giftbox.png" alt="" class="gift">
	<h1 class="gift">8.</h1>
		<span class="unwrapped">
		<h1>8. Slideshow</h1>
		<div class='slideshow'>
		  <img src1='../../../img/movieScreenshots/01.jpg' crop='0,200,0,300'/> 
		  <img src1='../../../img/movieScreenshots/02.jpg' crop='0,200,0,0'/>
		  <img src1='../../../img/movieScreenshots/03.jpg' crop='0,200,0,220'/>
		  <img src1='../../../img/movieScreenshots/04.jpg' crop='0,200,0,100'/>
		</div> <!-- end of slideshow -->
		<p>"This is not a slideshow" - Magritte 2.0</p>
	</span>
</div>
<div id='box9' class='box'>
<div class='minimize'>x</div>
<img class='gift' src='../../../img/giftbox.png' alt='' />
<h1 class='gift'>9.</h1>
<img class='example' src='/image/mikael-roos/me-8.jpg?w=200' alt='' width='200px' />
<h1 class= 'example'>A jquery plugin</h1>
<p>A wrapped present is always nice. Santa seems to be a nice person.</p>
<p>Lets wrap all this exercise together in a jQuery package, wrapped as a jQuery plugin which is a nice way of extending jQuery.</p>
<p>Here I have added two plugins. One that shifts the font each time you click on the text, its called <code>.shiftFont()</code>. Click around and watch it change. The plugin can be configured to use a defined set of fonts to shift between. The other plugin is called <code>.fadeInOut()</code> and will trigger when you click the image.</p>
</div>

<table class="data" id="celebs">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Occupation</th>
			<th>Location</th>
			<th>Price</th>
		</tr>
	</thead>
	<tr>
		<td>1</td>
		<td>Kalle</td>
		<td>Skådis</td>
		<td>Hemma</td>
		<td>$5000</td>
	</tr>
	<tr>
		<td>2</td>
		<td>Anka</td>
		<td>Regissör</td>
		<td>Jobbet</td>
		<td>$1000</td>
	</tr>
</table>


</div>

<?php $path=__DIR__; include(__DIR__ . '/../mall/footer.php'); ?>
