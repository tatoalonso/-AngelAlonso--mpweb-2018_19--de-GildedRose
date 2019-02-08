<?php

namespace Model;

class BackstageUpdateQuality implements UpdateQuality {

	const QUALITYLIMIT = 50;
	const ALMOSTLASTDAYS = 10;
	const LASTDAYS = 5;
	const CONCERTDAY = 0;

	public function updateQualityItem(int $quality, int $sellIn): int {

		if ($sellIn > self::ALMOSTLASTDAYS) {
			$quality = $quality + 1;

		} elseif ($sellIn <= self::ALMOSTLASTDAYS && $sellIn > self::LASTDAYS) {
			$quality = $quality + 2;

		} elseif ($sellIn <= self::LASTDAYS && $sellIn >= self::CONCERTDAY) {
			$quality = $quality + 3;

		}

		if ($sellIn <= self::CONCERTDAY) {
			$quality = 0;

		}

		if ($quality > self::QUALITYLIMIT) {
			$quality = self::QUALITYLIMIT;

		}

		return $quality;

	}

}