<?php

namespace PhpSession;

interface UserInterface
{
    public function getUserHash(): string;
    
    public function isLocked(): bool;
}

