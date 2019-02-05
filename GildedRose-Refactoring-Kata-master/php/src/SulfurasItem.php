<?php

namespace Model;

final class SulfurasItem extends Item {

	const QUALITYLIMIT = 80;

	public function updateQualityItem() {

		$this->quality = self::QUALITYLIMIT;

	}
	public function updateSellInItem() {
		$this->sell_in = $this->sell_in;

	}

}