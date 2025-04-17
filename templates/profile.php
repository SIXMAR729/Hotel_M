<?php
require_once("./base/helpers.php");

// Sample data (you should replace this with actual data from your backend)
$profile = [
    "username" => "demoUser",
    "details" => [
        "firstname" => "สมชาย",
        "lastname" => "ใจดี",
        "gender" => "male"
    ]
];
?>

<div class="overlay bg-white bg-opacity-60 min-h-screen">
    <?php include './base/navbar.php'; ?>

    <div class="container mx-auto px-4 py-12 flex justify-center items-center min-h-[70vh]">
        <div class="w-full md:w-2/3 lg:w-1/2">
            <div class="bg-white bg-opacity-90 shadow-lg rounded-none p-6">
                <h4 class="font-thai-bold text-lg mb-2"><i class="fas fa-user"></i> ข้อมูลผู้ใช้งาน</h4>
                <hr class="my-4">

                <div class="mb-4">
                    <label class="block font-thai-regular mb-1">ชื่อผู้ใช้งาน</label>
                    <input type="text" class="w-full border p-2 font-thai-light" value="<?= htmlspecialchars($profile['username']) ?>" disabled>
                </div>
                <hr class="my-4">
                <div class="mb-4">
                    <label class="block font-thai-regular mb-1">ชื่อจริง</label>
                    <input type="text" class="w-full border p-2 font-thai-light" value="<?= htmlspecialchars($profile['details']['firstname']) ?>" disabled>
                </div>
                <div class="mb-4">
                    <label class="block font-thai-regular mb-1">นามสกุล</label>
                    <input type="text" class="w-full border p-2 font-thai-light" value="<?= htmlspecialchars($profile['details']['lastname']) ?>" disabled>
                </div>
                <div class="mb-6">
                    <label class="block font-thai-regular mb-1">เพศ</label>
                    <input type="text" class="w-full border p-2 font-thai-light" value="<?= formatGender($profile['details']['gender']) ?>" disabled>
                </div>

                <button class="w-full bg-green-500 text-white font-thai-regular py-2 rounded mb-2 changeprofile">
                    <i class="fas fa-edit"></i> แก้ไขข้อมูล
                </button>
                <button class="w-full bg-blue-600 text-white font-thai-regular py-2 rounded password">
                    <i class="fas fa-key"></i> เปลี่ยนรหัสผ่าน
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal: แก้ไขข้อมูล -->
<div class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50" id="editprofile">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-md">
        <div class="flex justify-between items-center border-b p-4">
            <h5 class="font-thai-bold">แก้ไขข้อมูล</h5>
            <button class="text-gray-500 close-modal" data-target="#editprofile">&times;</button>
        </div>
        <form id="profile-change" method="POST" class="p-4">
            <input type="hidden" name="action" value="editprofile">
            <div class="mb-4">
                <label class="font-thai-regular block">ชื่อจริง</label>
                <input type="text" name="firstname" class="w-full border p-2 font-thai-light" value="<?= htmlspecialchars($profile['details']['firstname']) ?>" required>
            </div>
            <div class="mb-4">
                <label class="font-thai-regular block">นามสกุล</label>
                <input type="text" name="lastname" class="w-full border p-2 font-thai-light" value="<?= htmlspecialchars($profile['details']['lastname']) ?>" required>
            </div>
            <div class="mb-4">
                <label class="font-thai-regular block">เพศ</label>
                <select name="gender" class="w-full border p-2 font-thai-light" required>
                    <option value="male" <?= $profile['details']['gender'] === 'male' ? 'selected' : '' ?>>ชาย</option>
                    <option value="female" <?= $profile['details']['gender'] === 'female' ? 'selected' : '' ?>>หญิง</option>
                </select>
            </div>
            <button type="submit" class="w-full bg-green-500 text-white py-2 rounded font-thai-regular profilechange">แก้ไขข้อมูล</button>
        </form>
        <div class="p-4 border-t text-right">
            <button class="btn btn-secondary close-modal font-thai-regular" data-target="#editprofile">ปิดหน้าต่าง</button>
        </div>
    </div>
</div>

<!-- Modal: เปลี่ยนรหัสผ่าน -->
<div class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50" id="mchangepassowrd">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-md">
        <div class="flex justify-between items-center border-b p-4">
            <h5 class="font-thai-bold">เปลี่ยนรหัสผ่าน</h5>
            <button class="text-gray-500 close-modal" data-target="#mchangepassowrd">&times;</button>
        </div>
        <form id="passwordchange" method="POST" class="p-4">
            <input type="hidden" name="action" value="changepassowrd">
            <div class="mb-4">
                <label class="font-thai-regular block">รหัสผ่านใหม่</label>
                <input type="password" name="password" class="w-full border p-2 font-thai-light" placeholder="Password">
            </div>
            <div class="mb-4">
                <label class="font-thai-regular block">รหัสผ่านอีกครั้ง</label>
                <input type="password" name="conpassword" class="w-full border p-2 font-thai-light" placeholder="Confirm Password" required>
            </div>
            <button type="submit" class="w-full bg-green-500 text-white py-2 rounded font-thai-regular passwd">เปลี่ยนรหัสผ่าน</button>
        </form>
        <div class="p-4 border-t text-right">
            <button class="btn btn-secondary close-modal font-thai-regular" data-target="#mchangepassowrd">ปิดหน้าต่าง</button>
        </div>
    </div>
</div>

<script src="/static/vendor/app.profile.js"></script>
<script>
    // Simple modal open/close logic
    document.querySelectorAll('.changeprofile').forEach(btn => {
        btn.addEventListener('click', () => {
            document.getElementById('editprofile').classList.remove('hidden');
            document.getElementById('editprofile').classList.add('flex');
        });
    });

    document.querySelectorAll('.password').forEach(btn => {
        btn.addEventListener('click', () => {
            document.getElementById('mchangepassowrd').classList.remove('hidden');
            document.getElementById('mchangepassowrd').classList.add('flex');
        });
    });

    document.querySelectorAll('.close-modal').forEach(btn => {
        btn.addEventListener('click', () => {
            const target = btn.dataset.target;
            document.querySelector(target).classList.remove('flex');
            document.querySelector(target).classList.add('hidden');
        });
    });
</script>
