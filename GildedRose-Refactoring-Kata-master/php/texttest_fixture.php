<?php

use GildedRose\GildedRose;
use GildedRose\Item\FactoryItem;
use GildedRose\Item\Item;

require_once __DIR__ . '/vendor/autoload.php';

echo "OMGHAI!\n";

$items = array(
	FactoryItem::createItemByType((new Item('+5 Dexterity Vest', 10, 20)), 'Standard'),
	FactoryItem::createItemByType((new Item('Aged Brie', 2, 0)), 'Aged Brie'),
	FactoryItem::createItemByType((new Item('Elixir of the Mongoose', 5, 7)), 'Standard'),
	FactoryItem::createItemByType((new Item('Sulfuras, Hand of Ragnaros', 0, 80)), 'Sulfuras'),
	FactoryItem::createItemByType((new Item('Sulfuras, Hand of Ragnaros', -1, 80)), 'Sulfuras'),
	FactoryItem::createItemByType((new Item('Backstage passes to a TAFKAL80ETC concert', 15, 20)), 'Backstage'),
	FactoryItem::createItemByType((new Item('Backstage passes to a TAFKAL80ETC concert', 10, 49)), 'Backstage'),
	FactoryItem::createItemByType((new Item('Backstage passes to a TAFKAL80ETC concert', 5, 49)), 'Backstage'),
	FactoryItem::createItemByType((new Item('Conjured Mana Cake', 3, 6)), 'Conjured'),
);

$app = new GildedRose($items);

$days = 2;
if (count($argv) > 1) {
	$days = (int) $argv[1];
}

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
