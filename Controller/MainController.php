<?php

class MainController {

	private $pagelsLink = 'pagelsLink';
	private $vonSchantzLink = 'vonSchantzLink';
	private $orbackLink = 'orbackLink';
	private $loginLink = 'loginLink';
	private $editButton = 'editButton';
	private $saveButton = 'saveButton';
	private $messageView;
	
	public function getLinks() {
		if(isset($_SESSION['edit'])) {
			return "";
		}
		else {
			return "<li>" . $this->getWelcomeLink() . "</li>" . "<li>" . $this->getPagelsLink() ."</li>" . "<li>" . $this->getVonSchantzLink() 
				. "</li>" . "<li>" . $this->getOrbackLink() . "</li>". "<li>" .$this->getLoginLink() . "</li>";
		}
		
	}

	public function __construct(MessageView $messageView) {
		$this->messageView = $messageView;
	}

	public function isClicked() {
		if(isset($_GET['pagelsLink'])) {
			$this->messageView->setPagelsMessage();
			$_SESSION['message'] = "pagels";
		}
		if(isset($_GET['vonSchantzLink'])) {
			$this->messageView->setVonSchantzMessage();
			$_SESSION['message'] = "vonSchantz";
		}
		if(isset($_GET['orbackLink'])) {
			$this->messageView->setOrbackMessage();
			$_SESSION['message'] = "orback";
		}
		if(isset($_GET['loginLink'])) {
			$this->messageView->setLoginForm();
			$_SESSION['message'] = "login";
		}
		if(isset($_GET['welcomeLink'])) {
			$this->messageView->setWelcomeMessage();
			$_SESSION['message'] = "welcome";
		}
		if($_SESSION['message'] == "welcome") {
			$this->messageView->setNewWelcomeMessage();
		}
		if($_SESSION['message'] == "pagels") {
			$this->messageView->setNewPagelsMessage();
		}
		if($_SESSION['message'] == "vonSchantz") {
			$this->messageView->setNewVonSchantzMessage();
		}
		if($_SESSION['message'] == "orback") {
			$this->messageView->setNewOrbackMessage();
		}
			$this->messageView->writeComment();
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