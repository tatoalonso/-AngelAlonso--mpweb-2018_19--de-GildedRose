<?php
namespace Model;

class ExtendedItem {

	private $item;
	private $qualitySellIn;
	private $dateCheker;

	public function __construct(Item $item, UpdateQuality $updaterQuality, UpdateSellIn $updaterSellIn) {

		$this->item = $item;
		$this->updaterQuality = $updaterQuality;
		$this->updaterSellIn = $updaterSellIn;

	}
	public function __toString(): string {
		return $this->item->__toString();
	}
	public function updateQualityItem(): void{
		$this->item->quality = $this->updaterQuality->updateQualityItem($this->item->quality, $this->item->sell_in);

	}
	public function updateSellInItem(): void{
		$this->item->sell_in = $this->updaterSellIn->updateSellInItem($this->item->sell_in);

	}

}
