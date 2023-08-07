<?php
    abstract class Model {
        protected $db;
        function __construct()
        {
            $this->db = new Database();
        }
        abstract function getAll();
        abstract function getById($id);
        abstract function add($data);
        abstract function remove($id);
        abstract function edit($data);
    }
?>