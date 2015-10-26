<?php 

class HitCountController {

	private $mhc;
	
	public function __construct(ModelHitCounter $mhc) {
		$this->mhc = $mhc;
	}

	public function increaseViewers() {
		$this->mhc->increaseViewcount();
	}


}