<?php

namespace Model;

final class SulfurasUpdateQuality implements UpdateQuality {

	const QUALITY = 80;

	public function updateQualityItem(int $quality, int $sellIn): int {

		return $quality = self::QUALITY;

	}

}