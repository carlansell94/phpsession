<?php

namespace PhpSession;

class Login
{
    final public function __construct(private UserInterface $user) {}

    final public function checkCredentials(): bool
    {
        if (!isset($_POST['user']) || !isset($_POST['pass'])) {
            return false;
        }
        
        if (!$this->user) {
            return false;
        }
        
        if ($this->user->isLocked() === true) {
            return false;
        }
        
        if (!password_verify($_POST['pass'], $this->user->getUserHash())) {
            Session::failedLogin();
            return false;
        }
        
        return true;
    }
}

