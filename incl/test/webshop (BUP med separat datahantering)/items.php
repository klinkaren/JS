<?php
$items = array(
  'book1' => array('img' => 'hitchhikersguide.jpg', 				 'title' => 'The Hitchhikers Guide to the Galaxy',  'price' => 17),
  'book2' => array('img' => 'Den-stygga-flickans-rackartyg.jpg',     'title' => 'Den stygga flickans rackartyg',   		'price' => 19),
);

$html = '<table id="items"><tr><th id="col1">Image</th><th id="col2">Title</th><th id="col3">Price</th><th id="col3">Buy it</th></tr>';
foreach ($items as $key => $item) {
		$html .= '<tr>';
		$html .= '<td><img src="img/books/'.$item['img'].'?w=200&amp;h=100&amp;crop-to-fit"></td>';
		$html .= '<td>'.$item['title'].'</td>';
		$html .= '<td>$'.$item['price'].'</td>';
		$html .= '<td><button id="'.$key.'" class="purchase">Buy it</button></td>';
		$html .= '</tr>';
}

$html .= '</table>';
//echo $html;
header('Content-type: application/json');
echo json_encode($html);