<?php

namespace GildedRose\Item;

final class SulfurasUpdateQuality implements UpdateQuality {

	const QUALITY = 80;

	public function updateQualityItem(int $quality, int $sellIn, object $dateChecker): int {

		return $quality = self::QUALITY;

	}

}