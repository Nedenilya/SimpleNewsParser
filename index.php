<?php 

use Sunra\PhpSimple\HtmlDomParser;

require "vendor/autoload.php";
require_once 'Parser.php';

header('Content-type: text/plain');

$parser  = new Parser();
$crl = $parser->get_content('https://iz.ru/rubric/mir');
$html = HtmlDomParser::str_get_html($crl);

$news = array();

$items = $html->find('.node__cart__item');
var_dump($items);
// foreach ($items as $item) {
// 	$image = $item->find('.node__cart__item__inside__photo', 0)->children(0)->src;

// var_dump($image);

	// $title = $item->find('.node__cart__item__inside__info__title', 0)->plaintext;
	// $description = $item->find('.node__cart__item__inside__info__description', 0)->plaintext;
	// $date = $item->find('time', 0)->plaintext;
	
	// $news[] = [
	// 	'img' => $image, 
	// 	'title' => $title, 
	// 	'desc' => $description, 
	// 	'date' => $date
	// ];
//}

// var_dump($news);
// foreach($news as $item) {
// 	echo $item['img'] . "\n\n";
// 	echo $item['title'] . "\n\n";
// 	echo $item['desc'] . "\n\n";
// 	echo $item['date'] . "\n\n";
// 	echo "=============================================================\n\n";
// } 

?>
