<?php


class MessageView {
  private $pagelsLink = 'pagelsLink';
  private $vonSchantzLink = 'vonSchantzLink';
  private $orbackLink = 'orbackLink';
  private $loginLink = 'loginLink';
  private $editButton = 'editButton';
  private $saveButton = 'saveButton';
  private $loginView;
  private $hitCounterView;
  private $orbackView;
  private $pagelsView;
  private $vonSchantzView;
  private $welcomeView;
  private $message;
  private $commentView;

  public function __construct(LoginView $loginView, HitCounterView $hitCounterView, OrbackView $orbackView, 
    PagelsView $pagelsView, VonSchantzView $vonSchantzView, WelcomeView $welcomeView, CommentView $commentView) {
    $this->loginView = $loginView;
    $this->hitCounterView = $hitCounterView;
    $this->orbackView = $orbackView;
    $this->pagelsView = $pagelsView;
    $this->vonSchantzView = $vonSchantzView;
    $this->welcomeView = $welcomeView;
    $this->commentView = $commentView;
    $message = $this->setWelcomeMessage();
  }

  public function showHitCount() {
    return $this->hitCounterView->getHitCount();
  }

  #Check if messages are set

  public function isPagelsSet() {
    if(isset($_GET['pagelsLink']))
      return true;
    return false;
  }
  public function isVonSchantzSet() {
    if(isset($_GET['vonSchantzLink']))
      return true;
    return false;
  } 
  public function isOrbackSet() {
    if(isset($_GET['orbackLink']))
      return true;
    return false;
  } 
  public function isLoginSet() {
    if(isset($_GET['loginLink']))
      return true;
    return false;
  }

  public function getMessage() {
    return $this->message;
  }
	   //Set message when not logged in
	public function setWelcomeMessage() {
		  $this->message = $this->welcomeView->getWelcomeMessage();
	}
     //Set edited message
  public function setNewWelcomeMessage() {
    $this->welcomeView->setNewWelcomeMessage();
  }
    //Set message when not logged in
	public function setOrbackMessage() {
      $this->message = $this->orbackView->getOrbackMessage();
	}
  public function setnewOrbackMessage() {
      $this->orbackView->setNewOrbackMessage();
  }
      //Set message when not logged in
	public function setPagelsMessage() {
		$this->message = $this->pagelsView->getPagelsMessage();
	}
     //Set edited message
   public function setNewPagelsMessage() {
    $this->pagelsView->setNewPagelsMessage();
  }
     //Set message when not logged in
	public function setVonSchantzMessage() {
		$this->message = $this->vonSchantzView->getVonSchantzMessage();
	}
     //Set edited message
   public function setNewVonSchantzMessage() {
    $this->vonSchantzView->setNewVonSchantzMessage();
  }
	public function setLoginForm() {
    $this->message = $this->loginView->getLoginForm();

	}
  public function getCommentName() {
    return $this->commentView->getCommentName();
  }
  public function getCommentContent() {
    return $this->commentView->getCommentContent();
  }
  public function writeComment() {
    $this->commentView->writeComment();
  }
    public function getLinks() {
    if(isset($_SESSION['edit'])) {
      return "";
    }
    else {
      return "<li>" . $this->getWelcomeLink() . "</li>" . "<li>" . $this->getPagelsLink() ."</li>" . "<li>" . $this->getVonSchantzLink() 
        . "</li>" . "<li>" . $this->getOrbackLink() . "</li>". "<li>" .$this->getLoginLink() . "</li>";
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