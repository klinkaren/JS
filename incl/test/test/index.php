 <?php $title='Literals and identifiers'; include(__DIR__ . '/../mall/header.php'); ?>

<div id='flash'>

<!--Sample meny-->
<ul class=menu>
	<li><a href="#">Hem</a></li>
	<li><a href="#">Bort</a></li>
	<li><a href="#">Hit</a></li>
	<li><a href="#">Dit</a></li>
</ul>
<br>

<!--
<input type="button" id="toggleButton" value="Hide" />
-->
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
<!--
<input type="button" id="hideButton" value="hide" />
<input type="button" id="showButton" value="show" />
-->
	


<!--Sample page-->
<HR>
<a href="http://somegreatsite.com">Link Name</a>
is a link to another nifty site
<H1>This is a Header</H1>
<H2>This is a Medium Header</H2>
Send me mail at <a href="mailto:support@yourcompany.com">
support@yourcompany.com</a>.
<P> This is a new paragraph!
<P> <B>This is a new paragraph!</B>
<BR> <B><I>This is a new sentence without a paragraph break, in bold italics.</I></B>
<HR>

</div>

<?php $path=__DIR__; include(__DIR__ . '/../mall/footer.php'); ?>
