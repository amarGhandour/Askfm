<?php

namespace App\Models;

class User
{
    private string $name;
    private string $email;
    private string $password;

    public function __construct()
    {
    }

    public static function create(array $attributes): User{
        $user = new User();

        foreach ($attributes as $key => $value){
            $user->$key = $value;
        }
        return $user;
    }


    public function getName(): string
    {
        return $this->name;
    }


    public function setName(string $name): void
    {
        $this->name = $name;
    }


    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string{
        return $this->password;
    }


}