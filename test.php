<?php
include("incl/config.php");
$title = "Test"; //changes page title (found in header.php)
$pageId = "test";
include("incl/header.php");
$path="incl/test/";

// Array hold all tests.
$testlist = array(
	'kmom01' => array(
		'1'=> array('text'=>'Mall',					'url'=>'mall',						'title' => 'Mallen för övriga exempel.'),
		'2'=> array('text'=>'Hello World!',			'url'=>'hello/hello.html',			'title' => 'Klassiska Hello World.'),
		'3'=> array('text'=>'Hello World2',			'url'=>'program/program.html',		'title' => 'Hello World 2.'),		
	    '4'=> array('text'=>'Run baddie run!',		'url'=>'run-baddie-run',			'title' => 'Lek runt med baddien Tux!'),
	    '5'=> array('text'=>'Morph it!', 			'url'=>'morph-baddie',	 			'title' => 'Få baddien Tux att göra konster!'),
	    '6'=> array('text'=>'Resize element',		'url'=>'resize-element',			'title' => 'Ändra storleken på en div.'),
	    '7'=> array('text'=>'Animate with timeout',	'url'=>'animate-using-setTimeout',	'title' => 'Animera en knapp med hjälp av setTimeout.')
    )
    // sätt ett komma efter ) ovan och fyll på med kmom02. menyn uppdateras automatiskt.
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
					echo '<li><a title="'.$test['title'].'" href="'.$path.$test['url'].'">'.$test['text'].'</a></li>';
			  	}	
			}   

			 ?>
		</ul>
	</article>
</div>
<?php include("incl/footer.php"); ?>