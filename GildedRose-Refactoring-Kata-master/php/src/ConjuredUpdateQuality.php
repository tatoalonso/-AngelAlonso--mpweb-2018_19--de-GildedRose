<?php
namespace Model;

class ConjuredUpdateQuality implements UpdateQuality {

	const QUALITYLIMIT = 0;

	public function updateQualityItem(int $quality, int $sellIn): int {

		if ($sellIn <= 0) {
			$quality = $quality - 4;
		} else {
			$quality = $quality - 2;
		}
		if ($quality < self::QUALITYLIMIT) {
			$quality = self::QUALITYLIMIT;
		}

		return $quality;
	}

}
