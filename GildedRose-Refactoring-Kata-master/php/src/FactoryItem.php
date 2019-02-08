<?php

namespace Model;

use Model\AgedBrieUpdateQuality;
use Model\BackstageUpdateQuality;
use Model\ConjuredUpdateQuality;
use Model\ExtendedItem;
use Model\RegularUpdateSellIn;
use Model\StandardUpdateQuality;
use Model\SulfurasUpdateQuality;
use Model\SulfurasUpdateSellIn;

class FactoryItem {

	public static function createItemByType(Item $item, string $type): object {
		switch ($type) {
		case "Standard":
			return new ExtendedItem($item, new StandardUpdateQuality, new RegularUpdateSellIn);
		case "Aged Brie":
			return new ExtendedItem($item, new AgedBrieUpdateQuality, new RegularUpdateSellIn);
		case "Sulfuras":
			return new ExtendedItem($item, new SulfurasUpdateQuality, new SulfurasUpdateSellIn);
		case "Backstage":
			return new ExtendedItem($item, new BackstageUpdateQuality, new RegularUpdateSellIn);
		case "Conjured":
			return new ExtendedItem($item, new ConjuredUpdateQuality, new RegularUpdateSellIn);

		}
	}

}
