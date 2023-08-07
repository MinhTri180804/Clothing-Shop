<?php

class Home extends Controller
{
    public $model_home, $data_model = [], $data_products = [];

    public function __construct()
    {
        $this->model_home = $this->model('HomeModel');
        $this->data_products = $this->getData();
    }

    public function index()
    {
        $dataModel['sub_content']['productsList'] = $this->data_products;
        $dataModel['content'] = 'client/index';
        $this->render('layout/client_layout', $dataModel);
    }

    public function product($id) {
        $dataProduct = $this->data_products;
        echo '<pre>';
        print_r($dataProduct);
        echo '</pre>';
    }
}
