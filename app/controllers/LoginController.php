<?php

class LoginController
{
    public function index()
    {
        // echo $id;
        // echo 'hahahaha : '. __CLASS__. ' and .. is' . __METHOD__;
        $data = [];
        View::load('login', $data);
    }
}