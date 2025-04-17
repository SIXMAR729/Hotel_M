<?php
session_start();

// Hardcoded test user (replace with DB logic later)
$validUser = [
    'email' => 'user@example.com',
    'password' => '123456', // In real apps, hash passwords!
    'firstname' => 'สมชาย',
    'lastname' => 'ใจดี'
];

$error = '';

// Form submission logic
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // Validate fields
    if (empty($email) || empty($password)) {
        $error = 'กรุณากรอกอีเมลและรหัสผ่าน';
    } elseif ($email === $validUser['email'] && $password === $validUser['password']) {
        // Login success: set session
        $_SESSION["__UUID"] = uniqid();
        $_SESSION["profile"] = [
            'details' => [
                'firstname' => $validUser['firstname'],
                'lastname' => $validUser['lastname']
            ]
        ];
        // Redirect to homepage
        header('Location: ./dashboard.php');
        exit();
    } else {
        $error = 'อีเมลหรือรหัสผ่านไม่ถูกต้อง';
    }
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>เข้าสู่ระบบ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gradient-to-br from-blue-100 to-blue-300 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold text-center mb-6 text-gray-800">เข้าสู่ระบบ</h1>

        <?php if (!empty($error)): ?>
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>

        <form action="login.php" method="post" class="space-y-5">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">อีเมล</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">รหัสผ่าน</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">เข้าสู่ระบบ</button>
        </form>

        <p class="text-sm text-center mt-4 text-gray-600">
            ยังไม่มีบัญชี? <a href="./register.php" class="text-blue-600 hover:underline">สมัครสมาชิก</a>
        </p>
    </div>

</body>
</html>
