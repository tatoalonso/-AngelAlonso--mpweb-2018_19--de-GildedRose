<?php

namespace GildedRose;

class DateChecker {

	const ALMOST_LAST_DAYS = 10;
	const LAST_DAYS = 5;
	const EVENT_DAY = 0;

	public function isOutOfDate($dateToCheck): bool {

		if ($dateToCheck <= self::EVENT_DAY) {

			return true;

		} else {

			return false;
		}

	}

	public function isOverAlmostLastDays($dateToCheck): bool {

		if ($dateToCheck > self::ALMOST_LAST_DAYS) {

			return true;

		} else {

			return false;
		}

	}

	public function isAlmostLastDays($dateToCheck): bool {

		if ($dateToCheck <= self::ALMOST_LAST_DAYS && $dateToCheck > self::LAST_DAYS) {

			return true;

		} else {

			return false;
		}

	}

	public function isLastDays($dateToCheck): bool {

		if ($dateToCheck <= self::LAST_DAYS && $dateToCheck >= self::EVENT_DAY) {

			return true;

		} else {

			return false;
		}

	}

}
