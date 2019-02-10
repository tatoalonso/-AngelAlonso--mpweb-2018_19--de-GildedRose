<?php

namespace GildedRose\Item;

use GildedRose\DateChecker;
use GildedRose\Item\AgedBrieUpdateQuality;
use GildedRose\Item\BackstageUpdateQuality;
use GildedRose\Item\ConjuredUpdateQuality;
use GildedRose\Item\ExtendedItem;
use GildedRose\Item\RegularUpdateSellIn;
use GildedRose\Item\StandardUpdateQuality;
use GildedRose\Item\SulfurasUpdateQuality;
use GildedRose\Item\SulfurasUpdateSellIn;

class FactoryItem {

	public static function createItemByType(Item $item, string $type): object {

		switch ($type) {

		case "Standard":

			return new ExtendedItem($item, new StandardUpdateQuality, new RegularUpdateSellIn, new DateChecker);

		case "Aged Brie":

			return new ExtendedItem($item, new AgedBrieUpdateQuality, new RegularUpdateSellIn, new DateChecker);

		case "Sulfuras":

			return new ExtendedItem($item, new SulfurasUpdateQuality, new SulfurasUpdateSellIn, new DateChecker);

		case "Backstage":

			return new ExtendedItem($item, new BackstageUpdateQuality, new RegularUpdateSellIn, new DateChecker);

		case "Conjured":

			return new ExtendedItem($item, new ConjuredUpdateQuality, new RegularUpdateSellIn, new DateChecker);

		}
	}

}
