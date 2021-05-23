<?php

namespace App\Request;

use App\Entity\User;
use Symfony\Component\Validator\Constraints as Asset;

class RegisterRequest
{
    /**
     * @Assert\NotBlank(message="Cannot be blank")
     * @Assert\Length(min: 3; max: 32)
     */
    public $email;

    /**
     * @Assert\NotBlank(message="Cannot be blank")
     * @Assert\Length(min: 3; max: 32)
     */
    public $password;

    public static function toEntity(): User
    {
        $user = new User();

    }
}