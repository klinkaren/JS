<?php
$items = array(
  'book1' => array('img' => 'hitchhikersguide.jpg', 				 'title' => 'The Hitchhikers Guide to the Galaxy',  'price' => 17),
  'book2' => array('img' => 'Den-stygga-flickans-rackartyg.jpg',     'title' => 'Den stygga flickans rackartyg',   		'price' => 19),
);
//echo $html;
header('Content-type: application/json');
echo json_encode($items);