<?php
namespace App\Heart\Facade\Assembler;

use App\Heart\Dto\UserDTO;
use App\Heart\Dto\RandomUserDTO;

class UserDTOAssembler
{
    public function toDTO($user)
    {
        $userDTO = new UserDTO($user->id, $user->name, $user->email,
            $user->created_at->timestamp);
        return $userDTO;
    }

    public function toRandomUserDTO($user, $password)
    {
        $randomUserDTO = new RandomUserDTO($user->id, $user->name, $user->email,
            $password, $user->created_at->timestamp);
        return $randomUserDTO;
    }
}
