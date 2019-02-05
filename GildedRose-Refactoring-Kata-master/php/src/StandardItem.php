<?php
namespace Model;

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
