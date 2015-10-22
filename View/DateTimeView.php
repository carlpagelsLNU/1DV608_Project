<?php

class DateTimeView {
	public function show() {
		$day = date("l, "); // The day printed in full
		$dayDate = date("d "); // The daydate
		$month = date("F "); // The month printed in full
		$year = date("Y, "); // The year
		$time = date("H:i:s "); // The time printed in 24h format
		return '<p>' . 'Tiden är ' . $time . '</p>';
	}
}