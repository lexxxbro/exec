<?php

use  Phalcon\Http\Response;

class LoginController extends ControllerBase
{
    public function indexAction()
    {
      
    }
    public function authorizeAction()
    {
      if ($this->request->isPost()) {
        // Get the data from the user
        $username = $this->request->getPost('usrnm');
        $password = $this->request->getPost('pswd');
        $user = Users::_findFirst($username, $password);
        if($user != false) {
          $this->session->set(
            'auth',
            array(
              'username' => $username
            )
          );
          $this->response->redirect("test");
        } else {
          $this->response->redirect("login?error");
        }
      }
    }
}