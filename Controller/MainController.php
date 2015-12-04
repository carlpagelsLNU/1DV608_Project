<?php

class MainController {

	private $pagelsLink = 'pagelsLink';
	private $vonSchantzLink = 'vonSchantzLink';
	private $orbackLink = 'orbackLink';
	private $loginLink = 'loginLink';
	private $editButton = 'editButton';
	private $saveButton = 'saveButton';
	private $messageView;

	public function __construct(MessageView $messageView) {
		$this->messageView = $messageView;
	}

	public function isClicked() {

		if($this->messageView->isPagelsSet()) {
			$this->messageView->setPagelsMessage();
		}

		if($this->messageView->isVonSchantzSet()) {
			$this->messageView->setVonSchantzMessage();
		}

		if($this->messageView->isOrbackSet()) {
			$this->messageView->setOrbackMessage();
		}

		if($this->messageView->isLoginSet()) {
			$this->messageView->setLoginForm();
		}

		if($this->messageView->isOrbackSet()) {
			$this->messageView->setOrbackMessage();
		}
			$this->messageView->writeComment();
	}
}