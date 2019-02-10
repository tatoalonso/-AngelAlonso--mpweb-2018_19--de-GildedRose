<?php

namespace GildedRose\Item;

class BackstageUpdateQuality implements UpdateQuality {

	const QUALITY_LIMIT = 50;

	public function updateQualityItem(int $quality, int $sellIn, object $dateChecker): int {

		if ($dateChecker->isOverAlmostLastDays($sellIn)) {

			$quality = $quality + 1;

		} elseif ($dateChecker->isAlmostLastDays($sellIn)) {

			$quality = $quality + 2;

		} elseif ($dateChecker->isLastDays($sellIn)) {

			$quality = $quality + 3;

		}

		if ($dateChecker->isOutofDate($sellIn)) {

			$quality = 0;

		}

		if ($quality > self::QUALITY_LIMIT) {

			$quality = self::QUALITY_LIMIT;

		}

		return $quality;

	}

}