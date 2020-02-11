<?php
declare(strict_types=1);

namespace App\Lib\DB\Model;

class Admin
{
    private User $user;

    public function setUser(User $user)
    {
        $this->user = $user;
    }
}
