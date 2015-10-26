<?php

class HitCounterView {

	private $modelHitCounter;
	private $hitCountController;

	public function __construct(HitCountController $hitCountController, ModelHitCounter $modelHitCounter) {
		$this->hitCountController = $hitCountController;
		$this->modelHitCounter = $modelHitCounter;
	}

	public function getHitCount() {
		$this->hitCountController->increaseViewers();
		return $this->modelHitCounter->getViewers();
	}
	
}