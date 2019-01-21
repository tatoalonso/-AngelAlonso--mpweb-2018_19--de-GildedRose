<?php

require_once 'gilded_rose.php';

echo "OMGHAI!\n";

$items = array(
	new StandardItem('+5 Dexterity Vest', 10, 20),
	new AgedBrieItem('Aged Brie', 2, 0),
	new StandardItem('Elixir of the Mongoose', 5, 7),
	new SulfurasItem('Sulfuras, Hand of Ragnaros', 0, 80),
	new SulfurasItem('Sulfuras, Hand of Ragnaros', -1, 80),
	new BackstageItem('Backstage passes to a TAFKAL80ETC concert', 15, 20),
	new BackstageItem('Backstage passes to a TAFKAL80ETC concert', 10, 49),
	new BackstageItem('Backstage passes to a TAFKAL80ETC concert', 5, 49),
	// this conjured item does not work properly yet
	new StandardItem('Conjured Mana Cake', 3, 6),
);

$app = new GildedRose($items);

$days = 2;
if (count($argv) > 1) {
	$days = (int) $argv[1];
}

$prueba = new StandardItem('+5 Dexterity Vest', 10, 20);

for ($i = 0; $i < $days; $i++) {
	echo ("-------- day $i --------\n");
	echo ("name, sellIn, quality\n");
	foreach ($items as $item) {
		echo $item . PHP_EOL;
	}
	echo PHP_EOL;
	$app->updateQuality();
	$app->updateSellIn();

}
