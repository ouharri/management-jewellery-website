<?php
class AdminController
{
    public function index()
    {
        $db = new product();
        $data['products'] = $db->getAllProducts();
        View::load('jewellery/admin/index', $data);
    }
    public function add()
    {
        View::load('jewellery/admin/add');
    }
    public function store()
    {
        if(isset($_POST['submit']))
        {
            extract($_POST);
            var_dump($name,$price,$qty,$categorie);
        }
    }

}