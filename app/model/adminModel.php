<?php
class adminModel
{
    private $db;
    function __construct()
    {
        $this->db = new Database();
    }

    public function getAllTable($table)
    {
        $sql = "SELECT * FROM . $table";
        $result = $this->db->queryDatabase($sql);
        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function getById($table, $id)
    {
        $sql = "SELECT * FROM $table WHERE id = $id";
        $result = $this->db->queryDatabase($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }
    public function addUser($fullname, $username, $password, $email, $isAdmin)
    {
        $sql = "INSERT INTO user (username, pass, email, fullname, isAdmin) VALUES ('$username', '$password', '$email', '$fullname', '$isAdmin')";
        $result = $this->db->queryDatabase($sql);
        if ($result === TRUE) {
            header('Location: ' . _WEB_ROOT . '/index.php/admin/accountUser');
        } else {
            echo "Error: " . $sql . "<br>" . $this->db->connectDatabase()->error;
        }
    }

    public function remove($table, $id)
    {
        $sql = "DELETE FROM $table WHERE id = $id";
        $result = $this->db->queryDatabase($sql);
        if ($result === TRUE) {
            if ($table == 'user') {
                header('Location: ' . _WEB_ROOT . '/index.php/admin/accountUser');
            } else if ($table == 'products') {
                header('Location: ' . _WEB_ROOT . '/index.php/admin/products');
            } else {
                echo 'Error';
            }
        } else {
            echo "Error: " . $sql . "<br>" . $this->db->connectDatabase()->error;
        }
    }

    public function addProduct($name, $price, $description, $image, $quantity, $size, $color, $code, $tag)
    {
        $sql = "INSERT INTO products (name_product, price, description, imgs, quality, size, colors, code_product, tags) VALUES ('$name', $price, '$description', '$image', '$quantity', '$size', '$color', '$code', '$tag')";
        $result = $this->db->queryDatabase($sql);
        if ($result === TRUE) {
            header('Location: ' . _WEB_ROOT . '/index.php/admin/products');
        } else {
            echo 'error';
        }
    }
}
