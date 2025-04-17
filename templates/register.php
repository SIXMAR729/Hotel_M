

<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <?php include("./base/navbar.php"); ?>

    <div class="w-full max-w-md p-6 bg-white shadow-md rounded">
        <div class="text-center mb-4">
            <h4 class="text-xl font-thai-bold">สมัครสมาชิก</h4>
        </div>
        <hr class="mb-4">

        <form id="register" method="POST" class="space-y-4">
            <div>
                <label for="username" class="block font-thai-regular mb-1"><i class="fas fa-user"></i> ชื่อผู้ใช้งาน</label>
                <input type="text" id="username" name="username" placeholder="Username" 
                       class="w-full border rounded px-3 py-2 font-thai-light focus:outline-none focus:ring" required>
            </div>

            <div>
                <label for="password" class="block font-thai-regular mb-1"><i class="fas fa-key"></i> รหัสผ่าน</label>
                <input type="password" id="password" name="password" placeholder="Password"
                       class="w-full border rounded px-3 py-2 font-thai-light focus:outline-none focus:ring" required>
            </div>

            <div>
                <label for="conpassword" class="block font-thai-regular mb-1"><i class="fas fa-key"></i> รหัสผ่านอีกครั้ง</label>
                <input type="password" id="conpassword" name="conpassword" placeholder="Confirm Password"
                       class="w-full border rounded px-3 py-2 font-thai-light focus:outline-none focus:ring" required>
            </div>

            <hr>

            <div>
                <label for="firstname" class="block font-thai-regular mb-1">ชื่อจริง</label>
                <input type="text" name="firstname" placeholder="First Name"
                       class="w-full border rounded px-3 py-2 font-thai-light focus:outline-none focus:ring" required>
            </div>

            <div>
                <label for="lastname" class="block font-thai-regular mb-1">นามสกุล</label>
                <input type="text" name="lastname" placeholder="Last Name"
                       class="w-full border rounded px-3 py-2 font-thai-light focus:outline-none focus:ring" required>
            </div>

            <div>
                <label for="gender" class="block font-thai-regular mb-1">เพศ</label>
                <select name="gender" class="w-full border rounded px-3 py-2 font-thai-light focus:outline-none focus:ring" required>
                    <option value="male">ชาย</option>
                    <option value="female">หญิง</option>
                </select>
            </div>

            <hr>

            <div>
                <label for="email" class="block font-thai-regular mb-1">อีเมล</label>
                <input type="email" name="email" placeholder="E-mail"
                       class="w-full border rounded px-3 py-2 font-thai-light focus:outline-none focus:ring" required>
            </div>

            <hr>

            <button type="submit"
                    class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded font-thai-light transition duration-200">
                <i class="fal fa-sign-in"></i> สมัครสมาชิก
            </button>
        </form>
    </div>
</div>

<?php include("./base/base.php"); ?> <!-- Replace with actual base include -->
