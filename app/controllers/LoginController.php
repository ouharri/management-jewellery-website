<?php

class LoginController
{
    public function index()
    {
        $data = [];
        View::load('login', $data);
    }

    /**
     * @throws Exception
     */
    public function connect()
    {
        if (isset($_POST['user']) && $_POST['password'])
        {
            extract($_POST);
            $db = new users();
            $pr = new product();
            if ($db->getAlladmin($user, $password))
            {
                $data['user'] = $db->getAlladmin($user, $password);
                $_SESSION['login'] = $data['user'][0]['login'];
                $_SESSION['name'] = $data['user'][0]['name'];
                $data['success'] = "connected Successfully";
                redirect('admin/index',$data);
            } else
            {
                $data['error'] = "password or username is incorrect";
                view::load('login', $data);
            }
        }
    }
    public function deconnect()
    {
        unset($_SESSION['login']);
        unset($_SESSION['name']);
        session_destroy();
        redirect('');
    }
}