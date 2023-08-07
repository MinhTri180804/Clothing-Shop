
<?php 
    extract($product);
    echo '

    <div class="container mx-auto mt-8">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h2 class="text-2xl font-bold mb-4">Add Product</h2>
        <form action="" method="post" novalidate>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" value="'.$name_product.'" type="text" placeholder="Enter product name" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Description:</label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="description" value="'.$description.'" id="description" rows="4" placeholder="Enter product description" required></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="tags">Tags:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="tags" id="tags" value="'.$tags.'" type="text" placeholder="Enter product tags (comma separated)">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="code">Code:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="code" id="code" type="text" value="'.$code_product.'" placeholder="Enter product code" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="color">Color:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="color" id="color" type="text" value="'.$colors.'" placeholder="Enter product color" required>
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
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="price" id="price" value="'.$price.'" type="number" step="0.01" placeholder="Enter product price" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="quantity">Quantity:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="quantity" id="quantity" value="'.$quality.'" type="number" placeholder="Enter product quantity" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="img">Image (as string):</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="img" id="img" value="'.$imgs.'" type="text" placeholder="Enter image URL as string" required>
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