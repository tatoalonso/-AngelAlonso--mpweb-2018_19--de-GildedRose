<?php
namespace Model;

class StandardUpdateQuality implements UpdateQuality {

	const QUALITYLIMIT = 0;

	public function updateQualityItem(int $quality, int $sellIn): int {

		if ($sellIn <= 0) {
			$quality = $quality - 2;
		} else {
			$quality = $quality - 1;
		}
		if ($quality < self::QUALITYLIMIT) {
			$quality = self::QUALITYLIMIT;
		}

		return $quality;
	}

}
