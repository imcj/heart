<?php
namespace App\Heart\Facade;

use App\User;
use App\Heart\Facade\Assembler\UserDTOAssembler;

class UserServiceFacade
{
    public function __construct(UserDTOAssembler $userDTOAssembler)
    {
        $this->userDTOAssembler = $userDTOAssembler;
    }

    public function newUser($username, $email, $password)
    {
        $user = User::create([
            'name' => $username,
            'email' => $email,
            'password' => bcrypt($password),
        ]);

        $userDTO = $this->userDTOAssembler->toDTO($user);
        return $userDTO;
    }

    public function newRandomUser()
    {
        $username = (string)rand();
        $email = sprintf("%s@random", $username);
        $password = (string)rand();
        $user = User::create([
            'name' => $username,
            'email' => $email,
            'password' => bcrypt($password),
        ]);
        $userDTO = $this->userDTOAssembler->toRandomUserDTO($user, $password);
        return $userDTO;
    }
}
