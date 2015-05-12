<?php
$books = array(
  'book1' => array('img' => 'hitchhikersguide.jpg', 						 'title' => 'The Hitchhikers Guide to the Galaxy',  'price' => 17),
  'book2' => array('img' => 'img/books/javascript-the-good-parts.jpg',       'title' => 'JavaScript The Good Parts',       		'price' => 19),
);

$html = '<table id="items"><tr><th id="col1">Image</th><th id="col2">Title</th><th id="col3">Price</th><th id="col3">Buy it</th></tr>';
foreach ($books as $key => $book) {
		$html .= '<tr>';
		$html .= '<td><img src="img/books/'.$book['img'].'?w=200&amp;h=100&amp;crop-to-fit"></td>';
		$html .= '<td>'.$book['title'].'</td>';
		$html .= '<td>$'.$book['price'].'</td>';
		$html .= '<td><button id="'.$key.'" class="purchase">Buy it</button></td>';
		$html .= '</tr>';
}

$html .= '</table>';
//echo $html;
header('Content-type: application/json');
echo json_encode($html);