<?php

class HitCounterView {

	private $modelHitCounter;
	private $maincontroller;

	public function __construct(MainController $maincontroller, ModelHitCounter $modelHitCounter) {
		$this->maincontroller = $maincontroller;
		$this->modelHitCounter = $modelHitCounter;
	}

	public function showHitCount() {
		$this->maincontroller->increaseViewers();
		return $this->modelHitCounter->getViewers();
	}
	
}