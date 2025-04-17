<?php
$navtitle = "Hotel Booking Management System"; // You can change this title to whatever you want
?>

<style>
    #navbar-toggle {
        transition: transform 0.2s ease-in;
    }
</style>

<nav class="bg-transparent py-3" id="mainNav">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
        <a class="flex items-center font-thai" href="/">
            <img src="/static/images/logo/logo.png" width="30" height="60" class="object-contain" alt="">
            <h4 class="ml-3 text-black text-xl"><?php echo htmlspecialchars($navtitle); ?></h4>
        </a>
        <div class="md:hidden">
            <button class="text-white focus:outline-none" id="navbar-toggle">
                <!-- Hamburger Icon -->
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <div class="hidden md:flex md:items-center space-x-4" id="navbar-menu">
            <?php if (isset($_SESSION["__UUID"])): ?>
                <div class="relative group">
                    <button class="text-black font-thai-regular focus:outline-none">
                        สวัสดีคุณ, <?php echo htmlspecialchars($profile['details']['firstname'] . ' ' . $profile['details']['lastname']); ?>
                        <svg class="inline-block w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="absolute right-0 mt-2 w-48 bg-white text-black rounded shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-200 z-50">
                        <a class="block px-4 py-2 font-thai-light hover:bg-gray-100" href="/profile"><i class="fas fa-edit"></i> ข้อมูลทั่วไป</a>
                        <a class="block px-4 py-2 font-thai-light hover:bg-gray-100" href="/rooms"><i class="fas fa-sticky-note"></i> ลิสจองห้องพัก</a>
                        <a class="block px-4 py-2 font-thai-light hover:bg-gray-100" href="/logout"><i class="fas fa-sign-out-alt"></i> ออกจากระบบ</a>
                    </div>
                </div>
            <?php else: ?>
                <a href="./login.php" class="border border-white text-black px-4 py-2 rounded font-thai-light hover:bg-white hover:text-black transition"><i class="fas fa-sign-in-alt"></i> เข้าสู่ระบบ / สมัครสมาชิก</a>
            <?php endif; ?>
        </div>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<script>
    // Simple toggle for mobile menu
    document.getElementById('navbar-toggle').addEventListener('click', function () {
        const menu = document.getElementById('navbar-menu');
        menu.classList.toggle('hidden');
    });

   
</script>
