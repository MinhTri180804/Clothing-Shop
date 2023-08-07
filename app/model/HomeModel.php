<?php
    class HomeModel extends Controller {
        protected $table = 'products';

        public function getList() {
            $data = $this->getData();
            return $data;
        }
    
        public function getItemID($id) {
            $data = $this->getData();
            $dataProduct = $data[$id];
            return $dataProduct;
        }
    }
