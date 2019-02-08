<?php
namespace Model;

class RegularUpdateSellIn implements UpdateSellIn {

	public function updateSellInItem(int $sellIn): int {
		return $sellIn - 1;

	}

}
