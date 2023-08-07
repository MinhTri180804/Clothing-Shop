
    <section class="w-[800px] m-auto py-[200px]">
        <h4 class="title-section text-center font-bold text-[30px] uppercase">
            Register
        </h4>

        <form action="register.php" method="POST" onsubmit="return handleOnSubmit()">
            <label for="email" class="mt-[20px]">
                Email
            </label>
            <input id="email" name="email" type="email" placeholder="Enter email for you" class="block w-[100%] border-[1px] border-black p-[10px]">
            <p class="message-error"></p>

            <label for="fullName" class="mt-[20px]">
                FullName
            </label>
            <input id="fullName" name="fullName" type="text" placeholder="Enter FullName for you" class="block w-[100%] border-[1px] border-black p-[10px]">
            <p class="message-error"></p>

            <label for="username" class="mt-[20px]">
                Username
            </label>
            <input id="username" name="username" type="text" placeholder="Enter username for you" class="block w-[100%] border-[1px] border-black p-[10px]">
            <p class="message-error"></p>

            <label for="password" class="mt-[20px]">
                Password
            </label>
            <input id="password" name="password" type="password" placeholder="Enter password for you" class="block w-[100%] border-[1px] border-black p-[10px]">
            <p class="message-error"></p>

            <label for="passwordCompleted" class="mt-[20px]">
                Password Completed
            </label>
            <input id="passwordCompleted" name="passwordCompleted" type="password" placeholder="Enter password completed for you" class="block w-[100%] border-[1px] border-black p-[10px]">
            <p class="message-error"></p>

            <div class="flex flex-col justify-center items-center">
                <input type="submit" name="btn-submit" class="btn-submit px-[20px] py-[10px] border-[1px] border-black font-medium text-[20px] uppercase hover:bg-black hover:text-white mt-[20px]" id="btn-submit" value="Register">
                <div class="mt-[15px] underline underline-offset-4">
                    <a href="login.php" class="text-[20px]">Login</a>
                </div>
            </div>
        </form>

        <script>
            function handleOnSubmit() {
                let btnSubmit = document.getElementById('btn-submit');
                let inputUsername = document.getElementById('username');
                let inputFullName = document.getElementById('fullName');
                let inputEmail = document.getElementById('email');
                let inputPassword = document.getElementById('password');
                let inputPasswordCompleted = document.getElementById('passwordCompleted');
                let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                let isSuccess = true;

                if (regexEmail.test(inputEmail.value) == true) {
                    isSuccess = true;
                } else if (regexEmail.test(inputEmail.value) == false || inputEmail.value.trim() === '') {
                    isSuccess = false;
                    alert("Email khong hop le")
                    inputEmail.focus();
                }

                if (inputUsername.value.trim() === "") {
                    isSuccess = false;
                    alert("Username cannot be empty");
                    inputUsername.focus();
                } else {
                    isSuccess = true;
                }

                if (inputFullName.value.trim() === "") {
                    isSuccess = false;
                    alert("FullName cannot be empty");
                    inputUsername.focus();
                } else {
                    isSuccess = true;
                }

                if (inputPassword.value.trim() === "") {
                    isSuccess = false;
                    alert("password cannot be empty");
                    inputPassword.focus();
                }else if(inputPassword.value.length < 8) {
                    alert("password length >= 8");
                    inputPassword.focus();
                }else {
                    isSuccess = true;
                } 
                
                if (inputPasswordCompleted.value.trim === "" || inputPasswordCompleted.value != inputPassword.value) {
                    isSuccess = false;
                    alert("Username Completed khong hop le !");
                    inputPasswordCompleted.focus();
                } else {
                    isSuccess = true;
                }
                return isSuccess;

            }
        </script>

    </section>
