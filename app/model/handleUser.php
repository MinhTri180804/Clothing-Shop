<?php
session_start();
ob_start();
function handleRegisterValue()
{
    if ((isset($_POST['btn-submit'])) && ($_POST['btn-submit'])) {
        $email = $_POST['email'];
        $username = $_POST['username'];
        $fullName = $_POST['fullName'];
        $password = $_POST['password'];
        $passwordCompleted = $_POST['passwordCompleted'];

        if ($email != "" && $username != "" && $password != "" && $passwordCompleted != "") {
            $_SESSION['register']['email'] = $email;
            $_SESSION['register']['username'] = $username;
            $_SESSION['register']['password'] = $password;
            $_SESSION['register']['fullName'] = $fullName;
            header('Location: login.php');
        } else {
            echo 'Thong tin ban nhap khong hop le';
        };
    };
};

function handleLoginValue()
{
    if ((isset($_POST['btn-submit'])) && ($_POST['btn-submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $isSuccess = false;
        if ($username != "" && $password != "") {
            if ($username == $_SESSION['register']['username'] && $password == $_SESSION['register']['password']) {
                $isSuccess = true;
                $_SESSION['login']['fullName'] = $_SESSION['register']['fullName'];
                header('Location: index.php');
            } else {
                $isSuccess = false;
                echo '
                <div class="font-bold text-[22px] py-[10px] px-[25px] border-2 border-[#000] outline-1 border-solid mt-[20px] flex justify-center items-center flex-col">
                    <p class="message-error text-[red] ">Tên đăng nhập hoặc mật khẩu không tồn tại</p>
                    <p class="text-black">bạn có thể đăng kí <a href="register.php" class="text-[blue] underline">tại đây</a></p>
                </div>';
            }
        }
    }

    return $isSuccess;
};

function handleLoginUser() {
    if(isset($_POST['btn-submit']) && $_POST['btn-submit']) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $isSuccess = false;
        if($username != '' && $password != '') {
            if($username == $_SESSION['register']['username'] && $password == $_SESSION['register']['password']) {
                $isSuccess = true;
                $_SESSION['login']['username'] = $_SESSION['register']['username'];
                $_SESSION['login']['password'] = $_SESSION['register']['password'];
                $_SESSION['login']['fullName'] = $_SESSION['register']['fullName'];
                header('Location : index.php');
            }else {
                
            }
        }
    }
}