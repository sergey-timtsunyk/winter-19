<?php

namespace DB\Model;

use Manager\User;

class Admin
{
    private $user;

    /**
     * @param mixed $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }
}