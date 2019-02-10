<?php

namespace GildedRose\Item;

interface UpdateQuality {

	public function updateQualityItem(int $quality, int $sellIn, object $dateChecker): int;
};

?>
