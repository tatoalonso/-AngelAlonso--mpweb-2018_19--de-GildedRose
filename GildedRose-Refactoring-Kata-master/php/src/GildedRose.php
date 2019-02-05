<?php

namespace Model;

class GildedRose {

	private $items;

	function __construct($items) {
		$this->items = $items;
	}

	function updateQuality() {
		foreach ($this->items as $item) {
			$item->updateQualityItem();
		}
	}
	function updateSellIn() {
		foreach ($this->items as $item) {
			$item->updateSellInItem();
		}
	}
}

function isOutOfDate($sellDate) {
	if ($sellDate <= 0) {
		return true;
	} else {
		return false;
	}
}