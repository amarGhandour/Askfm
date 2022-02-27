<?php

namespace App;

use App\Models\User;

class App
{

    public function run(){

        while (true){
            echo 'Menu: ' . PHP_EOL;
            echo '1) Login' . PHP_EOL;
            echo '2) Signup' . PHP_EOL;

            fscanf(STDIN, '%d', $choice);
            
            if ($choice == 1)
                $this->login();
            elseif ($choice == 2)
                $this->signup();
            else
                echo 'Error: invalid input ... please try again';

        }
    }

    private function login()
    {
        $attributes = [];

        echo 'Enter name'. PHP_EOL;
        fscanf(STDIN, '%s', $attributes['name']);
        echo 'Enter email' . PHP_EOL;
        fscanf(STDIN, '%s', $attributes['email']);
        echo 'Enter password' . PHP_EOL;
        fscanf(STDIN, '%s', $attributes['password']);

        $user = User::create($attributes);

        $this->home($user);
    }

    private function signup()
    {
    }

    private function home(User $user)
    {
        echo "Welcome {$user->getName()}" . PHP_EOL;
    }
}