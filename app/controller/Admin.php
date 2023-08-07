<?php
class Admin extends Controller
{
    public function index()
    {
        $dataModel['content'] = 'admin/index';
        $this->render('layout/admin_layout', $dataModel);
    }

    public function accountUser()
    {
        $model = $this->model('adminModel');
        $data = $model->getAllTable('user');
        $dataModel['content'] = 'admin/accountuser';
        $dataModel['sub_content']['users'] = $data;
        $this->render('layout/admin_layout', $dataModel);
    }

    public function products()
    {
        $model = $this->model('adminModel');
        $data = $model->getAllTable('products');
        $dataModel['sub_content']['products'] = $data;
        $dataModel['content'] = 'admin/products';
        $this->render('layout/admin_layout', $dataModel);
    }

    public function addProducts()
    {


        $a = 2;
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-submit']) && $_POST['btn-submit']) {
            $model = $this->model('adminModel');
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $files = $_FILES['images'];
            $quantity = $_POST['quantity'];
            $size = $_POST['size'];
            $color = $_POST['color'];
            $code = $_POST['code'];
            $tag = $_POST['tags'];
            $isSuccess = true;

            $sizeFormat = '';
            foreach ($size as $key => $value) {
                if ($key === count($size) - 1) {
                    $sizeFormat .= $value;
                } else {
                    $sizeFormat .= $value . ',';
                }
            };

            if ($files['name'][0] != '') {
                $filesName = $files['name'];
                $size_allow = 24;
                $ext_allow = ['png', 'jpeg', 'svg', 'webp', 'jpg'];
                $target_dir =  'upload/images/';

                if (!empty($filesName)) {

                    foreach ($filesName as $key => $fileName) {
                        $ext = end(explode('.', $fileName));
                        $new_file = md5(uniqid());
                        $new_file .= '.' . $ext;
                        $size_file =  $files['size'][$key] / 1024 / 1024;
                        $tmp_name = $files['tmp_name'][$key];
                        if (in_array($ext, $ext_allow)) {
                            if ($size_file <= $size_allow) {
                                $upload = @move_uploaded_file($tmp_name, $target_dir . $new_file);
                                if ($upload) {
                                    $message['success']['upload'][$key] = 'File ' . $fileName . ' Hop le';
                                } else {
                                    $isSuccess = false;
                                    $message['error']['upload'][$key] = 'Upload file ' . $fileName . ' that bai';
                                }
                            } else {
                                $isSuccess = false;
                                $message['error']['fileSize'][$key] = "Size file " . $fileName . "<= 24MB";
                            }
                        } else {
                            $isSuccess = false;
                            $message['error']['fileExt'][$key] = 'File ' . $fileName . " duoi " .  $ext . " khong hop le, chi gom (jpg, png, jpeg, svg, webp)";
                        }
                    }
                } else {
                    $isSuccess = false;
                    $message['error']['fileName'] = "FileName " . $filesName .  " khong ton tai";
                };
            } else {
                $isSuccess = false;
                $message['error']['upload'] = "Ban chua upload anh";
            }

            if ($isSuccess) {
                echo 'co the upload len database';
            } else {
                $this->reloadAddErrors($name, $price, $description, $quantity, $sizeFormat, $color, $code, $tag, $files, $message);
            }
        } else {
            $dataModel['content'] = 'admin/addproducts';
            $this->render('layout/admin_layout', $dataModel);
        }
    }

    public function reloadAddErrors($name, $price, $description, $quantity, $sizeFormat, $color, $code, $tag, $files, $messageErrors)
    {
        $dataModel['content'] = 'admin/addproducts';
        $dataModel['sub_content']['name'] = $name;
        $dataModel['sub_content']['price'] = $price;
        $dataModel['sub_content']['description'] = $description;
        $dataModel['sub_content']['quantity'] = $quantity;
        $dataModel['sub_content']['size'] = $sizeFormat;
        $dataModel['sub_content']['color'] = $color;
        $dataModel['sub_content']['code'] = $code;
        $dataModel['sub_content']['tag'] = $tag;
        $dataModel['sub_content']['files'] = $files;
        $dataModel['sub_content']['messageErrors'] = $messageErrors['error'];
        $dataModel['sub_content']['messageSuccess'] = $messageErrors['success'];
        $this->render('layout/admin_layout', $dataModel);
    }

    public function addUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-submit']) && $_POST['btn-submit']) {
            $model = $this->model('adminModel');
            $fullname = $_POST['fullname'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $isAdmin = 0;
            $model->addUser($fullname, $username, $password, $email, $isAdmin);
            exit;
        } else {
            $dataModel['content'] = 'admin/adduser';
            $this->render('layout/admin_layout', $dataModel);
        }
    }

    public function editProduct($id)
    {
        $model = $this->model('adminModel');
        $dataModel['sub_content']['product'] = $model->getById('products', $id);
        $dataModel['content'] = 'admin/editproduct';
        $this->render('layout/admin_layout', $dataModel);
    }

    public function removeUser($id)
    {
        $model = $this->model('adminModel');
        $model->remove('user', $id);
    }

    public function removeProduct($id)
    {
        $model = $this->model('adminModel');
        $model->remove('products', $id);
    }
}
