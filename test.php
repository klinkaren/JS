<?php
include("incl/config.php");
$title = "Test"; //changes page title (found in header.php)
$pageId = "test";
include("incl/header.php");
$path="incl/test/";

// Array hold all tests.
$testlist = array(
	'kmom01' => array(
		'1'=> array('text'=>'Mall',					'url'=>$path.'mall',									'title' => 'Mallen för övriga exempel.'),
		'2'=> array('text'=>'Hello World!',			'url'=>$path.'hello/hello.html',						'title' => 'Klassiska Hello World.'),
		'3'=> array('text'=>'Hello World2',			'url'=>$path.'program/program.html',					'title' => 'Hello World 2.'),		
	    '4'=> array('text'=>'Run baddie run!',		'url'=>$path.'run-baddie-run',							'title' => 'Lek runt med baddien Tux!'),
	    '5'=> array('text'=>'Morph it!', 			'url'=>$path.'morph-baddie',	 						'title' => 'Få baddien Tux att göra konster!'),
	    '6'=> array('text'=>'Resize element',		'url'=>$path.'resize-element',							'title' => 'Ändra storleken på en div.'),
	    '7'=> array('text'=>'Animate with timeout',	'url'=>$path.'animate-using-setTimeout',				'title' => 'Animera en knapp med hjälp av setTimeout.'),
	    '8'=> array('text'=>'JSFiddle',				'url'=>'http://jsfiddle.net/klinkaren/dvyu3xo3/',		'title' => 'Mall i JSFiddle.')
    ),
	'kmom02' => array(
		'1'=> array('text'=>'Literaler och dess typ',	 'url'=>$path.'literals-and-identifiers',			'title' => 'Testprogram som skriver ut literaler tillsammans med dess typ.'), 
		'2'=> array('text'=>'Nummer',					 'url'=>$path.'numbers',							'title' => 'Testprogram för tal.'),
		'3'=> array('text'=>'Strängar',					 'url'=>$path.'strings',							'title' => 'Testprogram för strängar.'),
		'4'=> array('text'=>'Tärningskast',				 'url'=>$path.'dice',								'title' => 'Testprogram där en tärning kastas och genomsnitt av kastserien visas.'),
		'5'=> array('text'=>'Knuffa bollen',			 'url'=>$path.'push-the-ball',						'title' => 'Testprogram där en boll knuffas runt.'),
		'6'=> array('text'=>'Boulder Dash'	,			 'url'=>$path.'boulder-dash',						'title' => 'Testprogram med inspiration från Boulder Dash.'),
		'7'=> array('text'=>'Roulette enligt Martingale','url'=>$path.'martingale',							'title' => 'Testprogram som spelar roulette enligt Martingale-systemet.')
	),
	'kmom03' => array(
		'1'=> array('text'=>'Test',	 'url'=>$path.'test',													'title' => 'Lekplats.'), 
		'2'=> array('text'=>'Nio paket',					 'url'=>$path.'nine-gifts',							'title' => 'Nio små javascript-paket.'),
	),
  )
?>

<!-- The actual content -->
<div id="content">	
	<article >
		<h1>Test-sida</h1>
		
			<?php
			$i=0;
			foreach($testlist as $headline) {
				$i++;
				echo '<h2>KMOM '.$i.'</h2>';
				echo '<ul class="test">';
				foreach($headline as $test) {
					echo '<li><a title="'.$test['title'].'" href="'.$test['url'].'">'.$test['text'].'</a></li>';
			  	}	
				echo '</ul>';
			}   

			 ?>
	</article>
</div>
<?php include("incl/footer.php"); ?>