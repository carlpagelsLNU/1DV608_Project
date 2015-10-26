<?php

class MainController {

	private $pagelsLink = 'pagelsLink';
	private $vonSchantzLink = 'vonSchantzLink';
	private $orbackLink = 'orbackLink';
	private $loginLink = 'loginLink';
	private $messageView;
	
	public function getLinks() {
		return "<li>" . $this->getWelcomeLink() . "</li>" . "<li>" . $this->getPagelsLink() ."</li>" . "<li>" . $this->getVonSchantzLink() 
				. "</li>" . "<li>" . $this->getOrbackLink() . "</li>". "<li>" .$this->getLoginLink() . "</li>";
	}

	public function __construct(MessageView $messageView) {
		$this->messageView = $messageView;
	}

	public function isClicked() {
		if(isset($_GET['pagelsLink'])) {
			$this->messageView->setPagelsMessage();
		}
		if(isset($_GET['vonSchantzLink'])) {
			$this->messageView->setVonSchantzMessage();
		}
		if(isset($_GET['orbackLink'])) {
			$this->messageView->setOrbackMessage();
		}
		if(isset($_GET['loginLink'])) {
			$this->messageView->setLoginForm();
		}
		if(isset($_GET['welcomeLink'])) {
			$this->messageView->setWelcomeMessage();
		}
	}

	public function getWelcomeLink() {
		return "<a href='?" . 'welcomeLink' . "'>Hem</a>";
	}
	public function getPagelsLink() {
		return "<a href='?" . 'pagelsLink' . "'>Pagels släktforskning</a>";
	}
	public function getVonSchantzLink() {
		return "<a href='?" . 'vonSchantzLink' . "'>von Schantz släktforskning</a>";
	}
	public function getOrbackLink() {
		return "<a href='?" . 'orbackLink' . "'>Information om Örbäck</a>";
	}
	public function getLoginLink() {
		return "<a href='?" . 'loginLink' . "'>Logga in</a>";
	}
	

}