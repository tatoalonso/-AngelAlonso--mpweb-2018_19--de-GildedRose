<?php
namespace GildedRose\Item;

class ConjuredUpdateQuality implements UpdateQuality {

	const QUALITY_LIMIT = 0;

	public function updateQualityItem(int $quality, int $sellIn, object $dateChecker): int {

		if ($dateChecker->isOutofDate($sellIn)) {

			$quality = $quality - 4;

		} else {

			$quality = $quality - 2;

		}
		if ($quality < self::QUALITY_LIMIT) {

			$quality = self::QUALITY_LIMIT;
		}

		return $quality;
	}

}
