<?php
session_start();

// Hardcoded test user (replace with DB later)
$validUser = [
    'email' => 'admin@admin.com',
    'password' => '123456',
    'firstname' => 'Admin',
    'lastname' => 'John'
];

$error = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (empty($email) || empty($password)) {
        $error = 'กรุณากรอกอีเมลและรหัสผ่าน';
    } elseif ($email === $validUser['email'] && $password === $validUser['password']) {
        $_SESSION["__UUID"] = uniqid();
        $_SESSION["profile"] = [
            'details' => [
                'firstname' => $validUser['firstname'],
                'lastname' => $validUser['lastname']
            ]
        ];
        header('Location: ./dashboard.php');
        exit();
    } else {
        $error = 'อีเมลหรือรหัสผ่านไม่ถูกต้อง';
    }
}
?>

<!-- Tailwind fade-in style (include in your <head> or page style block) -->
<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: scale(0.95);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .fade-in {
        animation: fadeIn 0.3s ease-out forwards;
    }
</style>

<!-- Modal HTML -->
<div id="loginModal" class="fixed inset-0 z-50 bg-black/50 flex items-center justify-center hidden">
    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md relative fade-in">
        <button onclick="closeLogin()" class="absolute top-3 right-5 text-gray-500 hover:text-gray-700 text-4xl">&times;</button>

        <h1 class="text-2xl font-bold text-center mb-6 text-gray-800">Staff Login</h1>

        <?php if (!empty($error)): ?>
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                <?= htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>

        <form action="" method="post" class="space-y-5">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" id="email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
            </div>

            <button type="submit" class="w-full bg-[#c19a6b] hover:bg-[#a9845a] text-white py-2 rounded transition">Login</button>
        </form>

        <p class="text-sm text-center mt-4 text-gray-600">
            No Account? <a href="./register.php" class="text-blue-600 hover:underline">Register</a>
        </p>
    </div>
</div>

<!-- Modal toggle JS (put before </body> in home.php or inline) -->
<script>
    function openLogin() {
        document.getElementById('loginModal').classList.remove('hidden');
    }

    function closeLogin() {
        document.getElementById('loginModal').classList.add('hidden');
    }
  

    // Optional: Close on outside click
    document.addEventListener("click", function (e) {
        const modal = document.getElementById("loginModal");
        const box = modal.querySelector("form");
        if (!box.contains(e.target) && !e.target.closest('[onclick="openLogin()"]')) {
            modal.classList.add("hidden");
        }
    });
</script>
