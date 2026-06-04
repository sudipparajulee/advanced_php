<?php include 'includes/header.php'; ?>
<div class="h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white p-4 rounded-lg shadow-md w-1/3">
        <h2 class="font-bold text-xl text-center mb-4">REGISTER</h2>
        <input type="text" class="w-full border p-2 block mb-4 rounded-lg" placeholder="Enter Full Name">
        <input type="text" class="w-full border p-2 block mb-4 rounded-lg" placeholder="Enter Username">
        <input type="password" class="w-full border p-2 block mb-4 rounded-lg" placeholder="Enter Password">
        <input type="password" class="w-full border p-2 block mb-4 rounded-lg" placeholder="Confirm Password">
        <div class="text-center">
            <input type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg cursor-pointer">
            <p class="mt-2 text-sm">Already have an account? <a href="login.php" class="text-blue-600">Login</a></p>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>