<?php include 'header.php'; ?>
    <h2 class="text-2xl font-bold">Categories</h2>
    <hr class="h-1 bg-red-500">
    <div class="my-3 flex justify-end">
        <a href="createcategory.php" class="bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded-lg">Add Category</a>
    </div>
    <table class="w-full">
        <tr>
            <th class="border p-2 bg-blue-600 text-white">Order</th>
            <th class="border p-2 bg-blue-600 text-white">Category Name</th>
            <th class="border p-2 bg-blue-600 text-white">Action</th>
        </tr>
        <tr class="text-center">
            <td class="border p-2">1</td>
            <td class="border p-2">National</td>
            <td class="border p-2">
                <a href="" class="bg-blue-500 text-white rounded-lg px-2 py-1">Edit</a>
                <a href="" class="bg-red-500 text-white rounded-lg px-2 py-1">Delete</a>
            </td>
        </tr>
        <tr class="text-center">
            <td class="border p-2">2</td>
            <td class="border p-2">International</td>
            <td class="border p-2">
                <a href="" class="bg-blue-500 text-white rounded-lg px-2 py-1">Edit</a>
                <a href="" class="bg-red-500 text-white rounded-lg px-2 py-1">Delete</a>
            </td>
        </tr>
    </table>
<?php include 'footer.php'; ?>