<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class GreetingController extends AbstractActionController {

    public function indexAction() {
        return new ViewModel();
    }

    public function peopleAction() {
        $who = $this->params()->fromQuery('who');
        return new ViewModel(array('toWho' => $who));
    }

}
