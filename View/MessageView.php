<?php


class MessageView {
  private $loginView;
  private $hitCounterView;
  private $orbackView;
  private $pagelsView;
  private $vonSchantzView;
  private $welcomeView;

  public function __construct(LoginView $loginView, HitCounterView $hitCounterView, OrbackView $orbackView, PagelsView $pagelsView, VonSchantzView $vonSchantzView, WelcomeView $welcomeView) {
    $this->loginView = $loginView;
    $this->hitCounterView = $hitCounterView;
    $this->orbackView = $orbackView;
    $this->pagelsView = $pagelsView;
    $this->vonScahntzView = $vonSchantzView;
    $this->welcomeView = $welcomeView;
  }

  public function showHitCount() {
    return $this->hitCounterView->getHitCount();
  }
	
	public function showWelcomeMessage() {
		return $this->welcomeView->getWelcomeMessage();
	}

	public function showOrbackMessage() {
      return $this->orbackView->getOrbackInfo();
	}

	public function showPagelsMessage() {
		return $this->pagelsView->getPagelsInfo();
	}

	public function showVonSchantzMessage() {
		return $this->vonSchantzView->getVonSchantzInfo();
	}

	public function showLoginForm() {
    return $this->loginView->getLoginForm();

	}

}