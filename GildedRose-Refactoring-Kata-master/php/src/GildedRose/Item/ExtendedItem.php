<?php
namespace GildedRose\Item;

class ExtendedItem {

	private $item;
	private $updaterQuality;
	private $updaterSellIn;
	private $dataCheker;

	public function __construct(Item $item, UpdateQuality $updaterQuality, UpdateSellIn $updaterSellIn, object $dateCheker) {

		$this->item = $item;
		$this->updaterQuality = $updaterQuality;
		$this->updaterSellIn = $updaterSellIn;
		$this->dateCheker = $dateCheker;

	}
	public function __toString(): string {

		return $this->item->__toString();
	}
	public function updateQualityItem(): void{

		$this->item->quality = $this->updaterQuality->updateQualityItem($this->item->quality, $this->item->sell_in, $this->dateCheker);

	}
	public function updateSellInItem(): void{

		$this->item->sell_in = $this->updaterSellIn->updateSellInItem($this->item->sell_in);

	}

}
