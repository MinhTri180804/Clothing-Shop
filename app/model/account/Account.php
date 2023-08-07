<?php
    class Account extends Model {
        function __construct()
        {
            parent::__construct();
        }
        function getAll()
        {
            $sql = "SELECT * FROM user";
            $result = $this->db->queryDatabase($sql);
            return $result;
        }
        function getById($id)
        {
            $sql = "SELECT * FROM user WHERE id = $id";
            $result = $this->db->select($sql);
            return $result;
        }
        function add($data)
        {
            $sql = "INSERT INTO user (name, email, password, phone, address, role) VALUES ('$data[name]', '$data[email]', '$data[password]', '$data[phone]', '$data[address]', '$data[role]')";
            $result = $this->db->insert($sql);
            return $result;
        }
        function remove($id)
        {
            $sql = "DELETE FROM user WHERE id = $id";
            $result = $this->db->delete($sql);
            return $result;
        }
        function edit($data)
        {
            $sql = "UPDATE user SET name = '$data[name]', email = '$data[email]', password = '$data[password]', phone = '$data[phone]', address = '$data[address]', role = '$data[role]' WHERE id = $data[id]";
            $result = $this->db->update($sql);
            return $result;
        }
    }
?>