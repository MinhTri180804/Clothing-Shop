<div class="container mx-auto mt-8">
    <div class="flex justify-between items-center mb-[40px]">
        <div class="font-bold text-[30px] uppercase">Account User</div>
        <div class="p-[15px] bg-[green] uppercase font-medium border-[1px] border-[green] text-white cursor-pointer hover:opacity-[0.5]">
            <a href="<?php echo _WEB_ROOT ?>/index.php/admin/adduser">Thêm mới</a>
        </div>
    </div>
    <table class="table-auto w-full bg-white shadow-md">
        <thead>
            <tr>
                <th class="px-4 py-2">Username</th>
                <th class="px-4 py-2">Password</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Full Name</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($users as $user) {
                extract($user);
                echo '
                    
                    <tr>
                        <td class="border px-4 py-2">' . $username . '</td>
                        <td class="border px-4 py-2">' . $pass . '</td>
                        <td class="border px-4 py-2">' . $email . '</td>
                        <td class="border px-4 py-2">' . $fullname . '</td>
                        <td class="border px-4 py-2">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Edit</button>
                            <a href="' . _WEB_ROOT . '/index.php/admin/removeuser/' . $id . '">
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Remove</button>
                            </a>
                        </td>
                    </tr>

                    ';
            }
            ?>

            <!-- Add more rows here if needed -->
        </tbody>
    </table>
</div>