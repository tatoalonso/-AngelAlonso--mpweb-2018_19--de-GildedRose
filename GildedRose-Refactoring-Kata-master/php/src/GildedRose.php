<?php

namespace Model;

class GildedRose {

	private $items;

	public function __construct(array $items) {
		$this->items = $items;
	}

	public function updateQuality() {
		foreach ($this->items as $item) {
			$item->updateQualityItem();
		}
	}
	public function updateSellIn() {
		foreach ($this->items as $item) {
			$item->updateSellInItem();
		}
	}
}
