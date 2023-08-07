<?php
foreach ($files['full_path'] as $key => $value) {
    echo $value . ', ';
}

echo '

<div class="container mx-auto mt-8">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h2 class="text-2xl font-bold mb-4">Add Product</h2>
        <form action="" method="post" enctype="multipart/form-data" novalidate>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="text" placeholder="Enter product name" ' ?>
<?php if (!empty($name)) {
    echo 'value="' . $name . '"';
} ?> <?php echo
        ' required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Description:</label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="description" id="description" rows="4" placeholder="Enter product description"
required>
'
        ?>
<?php if (!empty($description)) {
    echo $description;
} ?> <?php echo
        '
</textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="tags">Tags:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="tags" id="tags" type="text" ' ?>
<?php if (!empty($tag)) {
    echo 'value="' . $tag . '"';
} ?> <?php echo
        ' placeholder="Enter product tags (comma separated)">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="code">Code:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="code" id="code" type="text" ' ?>
<?php if (!empty($code)) {
    echo 'value="' . $code . '"';
} ?> <?php echo
        ' placeholder="Enter product code" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="color">Color:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="color" id="color" type="text" ' ?>
<?php if (!empty($color)) {
    echo 'value="' . $color . '"';
} ?> <?php echo
        ' placeholder="Enter product color" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Size:</label>
                <div class="grid grid-cols-2 gap-4">
                    <label class="flex items-center">
                        <input type="checkbox" name="size[]" value="m" class="form-checkbox">
                        <span class="ml-2">M</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="size[]" value="l" class="form-checkbox">
                        <span class="ml-2">L</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="size[]" value="xl" class="form-checkbox">
                        <span class="ml-2">XL</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="size[]" value="xxl" class="form-checkbox">
                        <span class="ml-2">XXL</span>
                    </label>
                </div>
            </div>


            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="price">Price:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="price" id="price" type="number" ' ?>
<?php if (!empty($price)) {
    echo 'value="' . $price . '"';
} ?> <?php echo
        ' step="0.01" placeholder="Enter product price" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="quantity">Quantity:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="quantity" id="quantity" ' ?>
<?php if (!empty($quantity)) {
    echo 'value="' . $quantity . '"';
} ?> <?php echo
        ' type="number" placeholder="Enter product quantity" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="images">Images:</label>
                <div class="border-dashed border-2 border-gray-400 rounded-lg p-4">
                    <div class="relative">
                        <input class="absolute inset-0 z-50 opacity-0" name="images[]" id="images" type="file" 
                        value="" 
                        multiple required>
                        <div class="p-8 text-center">
                            <div class="mb-4">
                                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                            <p class="text-sm text-gray-600">Drag and drop your images here or</p>
                            <button type="button" class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Choose File
                            </button>
                        </div>
                    </div>
                </div>
                ' ?> <?php
                        $count = 0;
                        if (isset($messageErrors)) {
                            foreach ($messageErrors as $key => $error) {
                                foreach ($error as $key => $value) {
                                    echo '
                                        <p class="text-red-500 italic text-[18px]">' . $error[$key] . '</p>';
                                }
                            }
                        }
                        if (isset($messageSuccess)) {
                            foreach ($messageSuccess['upload'] as $success) {
                                echo '<p class="text-green-500 italic text-[18px]">' . $success . '</p>';
                            }
                        }
                        ?> <?php echo '
                </div>
<div class="flex items-center justify-between">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="btn-submit" value="submit">
        Add Product
    </button>
    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">Cancel</a>
</div>
</form>
</div>
</div>

'

                            ?>

