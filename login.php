<?php include 'includes/header.php'; ?>
<div class="h-screen flex items-center justify-center bg-gray-100">
    <form action="auth.php" method="POST" class="bg-white p-4 rounded-lg shadow-md w-1/3">
        <h2 class="font-bold text-xl text-center mb-4">LOGIN</h2>
        <input type="text" name="username" class="w-full border p-2 block mb-4 rounded-lg" placeholder="Enter Username">
        <input type="password" name="password" class="w-full border p-2 block mb-4 rounded-lg" placeholder="Enter Password">
        <div class="text-center">
            <input type="submit" name="login" class="bg-blue-600 text-white px-4 py-2 rounded-lg cursor-pointer">
            <p class="mt-2 text-sm">Don't have an account? <a href="register.php" class="text-blue-600">Register</a></p>
        </div>
    </form>
</div>
<?php include 'includes/footer.php'; ?>