<?php
namespace App\Heart\Dto;

class UserDTO
{
    public function __construct($id, $name, $email, $createdAt)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->createdAt = $createdAt;
    }
}
