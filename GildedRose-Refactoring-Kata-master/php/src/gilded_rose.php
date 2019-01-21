<?php

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

class Item {

	public $name;
	public $sell_in;
	public $quality;

	function __construct($name, $sell_in, $quality) {
		$this->name = $name;
		$this->sell_in = $sell_in;
		$this->quality = $quality;
	}

	public function __toString() {
		return "{$this->name}, {$this->sell_in}, {$this->quality}";
	}

}

final class StandardItem extends Item {

	const QUALITYLIMIT = 0;

	public function updateQualityItem() {
		if (isOutOfDate($this->sell_in)) {
			$this->quality = $this->quality - 2;
		} else {
			$this->quality = $this->quality - 1;
		}
		if ($this->quality < self::QUALITYLIMIT) {
			$this->quality = self::QUALITYLIMIT;
		}

	}
	public function updateSellInItem() {
		$this->sell_in = $this->sell_in - 1;

	}

}

final class AgedBrieItem extends Item {

	const QUALITYLIMIT = 50;

	public function updateQualityItem() {
		if (isOutOfDate($this->sell_in)) {
			$this->quality = $this->quality + 2;
		} else {
			$this->quality = $this->quality + 1;
		}
		if ($this->quality > self::QUALITYLIMIT) {
			$this->quality = self::QUALITYLIMIT;
		}

	}
	public function updateSellInItem() {
		$this->sell_in = $this->sell_in - 1;

	}

}

final class SulfurasItem extends Item {

	const QUALITYLIMIT = 80;

	public function updateQualityItem() {

		$this->quality = self::QUALITYLIMIT;

	}
	public function updateSellInItem() {
		$this->sell_in = $this->sell_in;

	}

}

final class BackstageItem extends Item {

	const QUALITYLIMIT = 50;
	const ALMOSTLASTDAYS = 10;
	const LASTDAYS = 5;
	const CONCERTDAY = 0;

	public function updateQualityItem() {

		if ($this->sell_in > self::ALMOSTLASTDAYS) {
			$this->quality = $this->quality + 1;

		} elseif ($this->sell_in <= self::ALMOSTLASTDAYS && $this->sell_in > self::LASTDAYS) {
			$this->quality = $this->quality + 2;

		} elseif ($this->sell_in <= self::LASTDAYS && $this->sell_in >= self::CONCERTDAY) {
			$this->quality = $this->quality + 3;

		}

		if ($this->sell_in < self::CONCERTDAY) {
			$this->quality = 0;

		}

		if ($this->quality > self::QUALITYLIMIT) {
			$this->quality = self::QUALITYLIMIT;

		}

	}
	public function updateSellInItem() {
		$this->sell_in = $this->sell_in - 1;

	}

}

function isOutOfDate($sellDate) {
	if ($sellDate <= 0) {
		return true;
	} else {
		return false;
	}
}