<?php

namespace Model;

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