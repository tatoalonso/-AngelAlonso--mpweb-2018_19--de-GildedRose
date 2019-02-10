<?php
namespace GildedRose\Item;

class RegularUpdateSellIn implements UpdateSellIn {

	public function updateSellInItem(int $sellIn): int {

		return $sellIn - 1;

	}

}
