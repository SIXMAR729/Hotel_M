<?php
session_start();

// Redirect to login if not logged in
if (!isset($_SESSION["__UUID"])) {
    header("Location: /login.php");
    exit();
}

// Get user data
$firstname = $_SESSION["profile"]["details"]["firstname"] ?? 'ผู้ใช้';
$lastname = $_SESSION["profile"]["details"]["lastname"] ?? '';
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>แดชบอร์ด</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded shadow-md w-full max-w-xl text-center">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">ยินดีต้อนรับสู่แดชบอร์ด</h1>
        <p class="text-lg text-gray-700 mb-6">สวัสดีคุณ <?php echo htmlspecialchars($firstname . ' ' . $lastname); ?> 👋</p>

        <div class="space-x-2">
            <a href="./profile.php" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">ข้อมูลส่วนตัว</a>
            <a href="./rooms.php" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">การจองห้อง</a>
            <a href="./home.php" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">ออกจากระบบ</a>
        </div>
    </div>

</body>
</html>
