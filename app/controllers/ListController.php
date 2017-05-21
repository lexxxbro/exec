<?php

class ListController extends ControllerBase
{
    public function indexAction()
    {
      $users = Users::find();
      foreach ($users as $user) {
          echo $user->name, "\n";
      }
    }
    
}