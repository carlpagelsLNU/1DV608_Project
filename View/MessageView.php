<?php


class MessageView {
  private $loginView;
  private $hitCounterView;
  private $orbackView;
  private $pagelsView;
  private $vonSchantzView;
  private $welcomeView;
  private $message;

  public function __construct(LoginView $loginView, HitCounterView $hitCounterView, OrbackView $orbackView, 
    PagelsView $pagelsView, VonSchantzView $vonSchantzView, WelcomeView $welcomeView) {
    $this->loginView = $loginView;
    $this->hitCounterView = $hitCounterView;
    $this->orbackView = $orbackView;
    $this->pagelsView = $pagelsView;
    $this->vonSchantzView = $vonSchantzView;
    $this->welcomeView = $welcomeView;
    $message = $this->setWelcomeMessage();
  }

  public function showHitCount() {
    return $this->hitCounterView->getHitCount();
  }

  public function getMessage() {
    return $this->message;
  }
	
	public function setWelcomeMessage() {
		  $this->message = $this->welcomeView->getWelcomeMessage();
	}

	public function setOrbackMessage() {
      $this->message = $this->orbackView->getOrbackInfo();
	}

	public function setPagelsMessage() {
		$this->message = $this->pagelsView->getPagelsInfo();
	}

	public function setVonSchantzMessage() {
		$this->message = $this->vonSchantzView->getVonSchantzInfo();
	}

	public function setLoginForm() {
    $this->message = $this->loginView->getLoginForm();

	}

  public function getLinks() {
    $mainController = new MainController($this);
   return $mainController->getLinks();
  }

}