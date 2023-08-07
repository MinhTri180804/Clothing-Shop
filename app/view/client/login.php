

    <section class="w-[800px] m-auto py-[200px]">
        <h4 class="title-section text-center font-bold text-[30px] uppercase">
            Login
        </h4>

        <form action="" method="POST" onsubmit="return handleOnSubmit()">
            <label for="username">
                Username
            </label>
            <input id="username" name="username" type="text" placeholder="Enter username for you" class="block w-[100%] border-[1px] border-black p-[10px]">

            <label for="password" class="mt-[20px]">
                Password
            </label>
            <input id="password" name="password" type="password" placeholder="Enter password for you" class="block w-[100%] border-[1px] border-black p-[10px]">
            <div class="flex flex-col justify-center items-center">
                <input type="submit" name="btn-submit" class="btn-submit px-[20px] py-[10px] border-[1px] border-black font-medium text-[20px] uppercase hover:bg-black hover:text-white mt-[20px]" id="btn-submit" value="Login">
                <div class="mt-[15px] underline underline-offset-4">
                    <div class="mt-[15px] und    public function details()
    {
        echo 'Page home -> details';
        $itemDetail = $this->model_home->getItemID(2);
        echo '<pre>';
        echo $itemDetail;
        echo '</pre>';
    }
erline underline-offset-4">
                        <a href="<?php echo _WEB_ROOT ?>/index.php/register" class="text-[20px]">Register</a>
                    </div>
                </div>
        </form>

        <script>
            function handleOnSubmit() {
                let inputUsername = document.getElementById('username');
                let inputPassword = document.getElementById('password');
                let isSuccess = true;

                if (inputUsername.value.trim() === "") {
                    isSuccess = false;
                    alert("Username cannot be empty");
                    inputUsername.focus();
                } else {
                    isSuccess = true;
                }

                if (inputPassword.value.trim() === "") {
                    isSuccess = false;
                    alert("password cannot be empty");
                    inputPassword.focus();
                } else {
                    isSuccess = true;
                }

                return isSuccess;
            }
        </script>
    </section>