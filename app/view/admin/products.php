<div class="container mt-8 box-border w-full mx-auto">
    <div class="bg-white shadow-md rounded px-[20px] w-full py-[20px]">
        <div class="flex justify-between items-center mb-[40px]">
            <div class="font-bold text-[30px] uppercase">Account User</div>
            <div class="p-[15px] bg-[green] uppercase font-medium border-[1px] border-[green] text-white cursor-pointer hover:opacity-[0.5]">
                <a href="<?php echo _WEB_ROOT ?>/index.php/admin/addProducts">Thêm mới</a>
            </div>
        </div>
        <table class="w-full table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2">Code</th>
                    <th class="px-4 py-2">Image</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Quantity</th>
                    <th class="px-4 py-2">Tags</th>
                    <th class="px-4 py-2">Price</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample data rows (you will fetch and loop through data from database) -->
                <?php
                foreach ($products as $product) {
                    extract($product);
                    echo '
                        <tr>
                        <td class="border px-4 py-2">' . $code_product . '</td>
                        <td class="border px-4 py-2">
                            <img src="' . $imgs . '" alt="Product Image" class="w-16 h-16">
                        </td>
                        <td class="border px-4 py-2">' . $name_product . '</td>
                        <td class="border px-4 py-2">' . $quality . ' cái</td>
                        <td class="border px-4 py-2">' . $tags . '</td>
                        <td class="border px-4 py-2">' . $price . ' VND</td>
                        <td class="border px-4 py-2">
                        <a href="' . _WEB_ROOT . '/index.php/admin/editProduct/' . $id . '">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mr-2">Edit</button>
                        </a>
                        <a href="' . _WEB_ROOT . '/index.php/admin/removeProduct/' . $id . '">
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Delete</button>
                        </a>
                        </td>
                        </tr>';
                }
                ?>

                <!-- More data rows go here -->
            </tbody>
        </table>
    </div>
</div>