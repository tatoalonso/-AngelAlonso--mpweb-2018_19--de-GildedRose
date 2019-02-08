<?php

namespace Model;

interface UpdateQuality {
	public function updateQualityItem(int $quality, int $sellIn): int;
};

?>
