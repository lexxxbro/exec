<?php
use Phalcon\Mvc\Collection;

class SignupController extends \Phalcon\Mvc\Controller
{
	    public function indexAction()
	    {
	    }

	    public function registerAction()
	    {
	        //Request variables from html form
	        $name = $this->request->getPost("name", "string");
	        $email = $this->request->getPost("email", "email");

	        $user = new Users();
	        $user->name = $name;
	        $user->email = $email;

	        //Store and check for errors
	        if ($user->save()) 
	        {
	            echo "Thanks for register!";
	        }
	        else
	        {
	            echo "Sorry, the following problems were generated: ";
	            foreach ($user->getMessages() as $message)
	            {
	                echo $message->getMessage(), "<br/>";
	            }
	        }
	    }
	
}