<?php
class ProductController
{
    public function index()
    {
        $db = new product();
        $data['products'] = $db->getAllProducts();
        View::load('jewellery/jewellery', $data);
    }
}
