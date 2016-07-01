<?php
namespace App\Heart\Dto;

class RandomUserDTO extends UserDTO
{
    public $password;

    public function __construct($id, $name, $email, $password, $createdAt)
    {
        parent::__construct($id, $name, $email, $createdAt);
        $this->password = $password;
    }
}
