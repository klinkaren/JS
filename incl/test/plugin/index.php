 <?php $title='Tooltip plugin'; include(__DIR__ . '/../mall/header.php'); ?>

<div id='flash'>

<div>
	<img src="../../../img/giftbox.png" alt="Undra vad man kan hitta för spännande present här inne? Jag har alltid önskat mig en robot. Skulle det kunna vara en robot? Kanske en väldigt liten robot?" class="showTooltip" title="Paket 1">
	<img src="../../../img/giftbox.png" alt="" title="Paket 2" class="showTooltip">
	<img src="../../../img/giftbox.png" alt="Lorum ipsum? Lorem? Ipsum!" title="Paket 2" class="showTooltip">
	A text with a <a class="showTooltip" href="#" title="Fantastiskt viktig text">tooltip</a>. Another text with a <a class="showTooltip" href="#" title="Ännu viktigare!">tooltip</a>
</div>

</div>

<?php $path=__DIR__; include(__DIR__ . '/../mall/footer.php'); ?>
