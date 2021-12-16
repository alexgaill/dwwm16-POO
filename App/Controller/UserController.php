<?php
namespace App\Controller;

use App\Traits\EmailTrait;
use Core\Interface\TestInterface;
use Core\Interface\UserInterface;
use Core\Model\DefaultModel;

class UserController extends DefaultModel implements UserInterface, TestInterface {
    use EmailTrait;

    public function signup()
    {
        $this->beautifyTemplate();
    }

    public function login()
    {

    }

    public function logout()
    {

    }

    public function eraseCredentials()
    {
        
    }
}