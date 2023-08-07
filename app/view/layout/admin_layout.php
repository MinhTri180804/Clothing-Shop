<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<body>
    <div class="wrapper grid grid-cols-12">
        <div class="slide-bar col-span-2 w-full bg-[#3965CC] px-[10px]">
            <div class="logo color-white h-[60px] pb-[10px] border-b-[1px] border-[#ccc]">
                <div class="text-[30px] text-center leading-[60px] text-white font-bold">ADMIN</div>
            </div>

            <ul class="list__page">
                <li class="py-[20px] border-b-[1px] border-[#ccc] text-white text-[20px]">
                    <a href="<?php echo _WEB_ROOT; ?>/index.php/admin">Dashboard</a>
                </li>

                <li class="py-[20px] border-b-[1px] border-[#ccc] text-white text-[20px]">
                    <a href="<?php echo _WEB_ROOT; ?>/index.php/admin/products">Products</a>
                </li>

                <li class="py-[20px] border-b-[1px] border-[#ccc] text-white text-[20px]">
                    <a href="<?php echo _WEB_ROOT; ?>admin">Orders</a>
                </li>

                <li class="py-[20px] border-b-[1px] border-[#ccc] text-white text-[20px]">
                    <a href="<?php echo _WEB_ROOT; ?>/index.php/admin/accountuser">Accounts User</a>
                </li>

                <li class="py-[20px] border-b-[1px] border-[#ccc] text-white text-[20px]">
                    <a href="<?php echo _WEB_ROOT; ?>admin">Accounts Admin</a>
                </li>
            </ul>
        </div>

        <div class="content col-span-10">
            <header class="h-[60px] pb-[10px] border-b-[1px] border-[#ccc] drop-shadow-lg w-full">
                <div class="container px-[20px] grid grid-cols-4 mx-auto">
                    <div class="text-[30px] text-center leading-[60px] text-[#3965cc] font-bold col-span-3">DASHBOARD</div>
                    <div class="user flex justify-end items-center gap-4">
                        <div class="avartar">
                            <div class="w-[40px] h-[40px] rounded-[50%] bg-[#000]"></div>
                        </div>
                        <div class="name-user text-[#000] text-[20px] text-right leading-[60px]">
                            ADMIN - <span>Minh Tri</span>
                        </div>
                    </div>
                </div>
            </header>

            <main>
                <?php
                if (empty($sub_content)) {
                    $sub_content = [];
                }
                $this->render($content, $sub_content);
                ?>
            </main>

            <footer>

            </footer>
        </div>
    </div>

    <script>
        const fileInput = document.getElementById("images");
        const fileUploadText = document.getElementById("file-upload-text");

        fileInput.addEventListener("change", () => {
            if (fileInput.files.length === 1) {
                fileUploadText.textContent = fileInput.files[0].name;
            } else {
                fileUploadText.textContent = fileInput.files.length + " files selected";
            }
        });
    </script>
</body>

</html>