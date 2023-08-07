<?php

    class Product extends Controller{
        public $data = [];

        public function index() {
            $dataProducts = $this->getData();
            $this->data['sub_content']['productsList'] = $dataProducts;
            $this->data['content'] = 'products';
            $this->render('layout/client_layout', $this->data);
        }

        public function productmen($id) {
            $dataProducts = $this->getData();
            $this->data['sub_content']['productDetail'] = $dataProducts['product_men'][$id];
            $this->data['content'] = 'single-product';
            $this->render('layout/client_layout', $this->data);
        }

        public function productwomen($id) {
            $dataProducts = $this->getData();
            $this->data['sub_content']['productDetail'] = $dataProducts['product_women'][$id];
            $this->data['content'] = 'single-product';
            $this->render('layout/client_layout', $this->data);
        }

        public function productkids($id) {
            $dataProducts = $this->getData();
            $this->data['sub_content']['productDetail'] = $dataProducts['product_children'][$id];
            $this->data['content'] = 'single-product';
            $this->render('layout/client_layout', $this->data);
        }
    }

?>