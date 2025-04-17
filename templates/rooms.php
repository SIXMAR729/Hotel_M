<?php
session_start();

// Redirect if not logged in
if (!isset($_SESSION["__UUID"])) {
    header("Location: ./login.php");
    exit();
}

// Sample rooms and bookings (replace with DB in real app)
$rooms = [
    ['id' => 101, 'name' => 'ห้องประชุม A'],
    ['id' => 102, 'name' => 'ห้องสัมมนา B'],
];

$timeSlots = ['09:00-10:00', '10:00-11:00', '11:00-12:00'];

// Sample existing bookings
$existingBookings = [
    ['room_id' => 101, 'date' => '2025-04-08', 'slot' => '09:00-10:00']
];

$bookingMessage = '';
$qrCodeUrl = '';

// Handle form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $roomId = $_POST['room_id'] ?? '';
    $date = $_POST['booking_date'] ?? '';
    $slot = $_POST['time_slot'] ?? '';

    // Check if booked already
    $alreadyBooked = false;
    foreach ($existingBookings as $booking) {
        if ($booking['room_id'] == $roomId && $booking['date'] === $date && $booking['slot'] === $slot) {
            $alreadyBooked = true;
            break;
        }
    }

    if (!$roomId || !$date || !$slot) {
        $bookingMessage = 'กรุณากรอกข้อมูลให้ครบถ้วน ❌';
    } elseif ($alreadyBooked) {
        $bookingMessage = "ห้องนี้ถูกจองแล้วในช่วงเวลา $slot ของวันที่ $date ❌";
    } else {
        $bookingMessage = "จองห้องสำเร็จ ✅ วันที่ $date เวลา $slot";

        // Simulate booking insert (in real DB, you would insert it)

        // Generate QR code with Google API (or use PHP QR code lib)
        $qrData = "Room $roomId | Date: $date | Time: $slot";
        $qrCodeUrl = "https://api.qrserver.com/v1/create-qr-code/?data=" . urlencode($qrData) . "&size=200x200";
    }
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>จองห้อง</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50 min-h-screen p-6">
<div class="max-w-4xl mx-auto bg-white p-8 rounded shadow">
    <h1 class="text-2xl font-bold mb-6">ระบบจองห้องพัก</h1>

    <?php if (!empty($bookingMessage)): ?>
        <div class="mb-4 p-3 rounded text-white <?php echo str_contains($bookingMessage, 'สำเร็จ') ? 'bg-green-500' : 'bg-red-500'; ?>">
            <?php echo htmlspecialchars($bookingMessage); ?>
        </div>
    <?php endif; ?>

    <?php if ($qrCodeUrl): ?>
        <div class="mb-4 text-center">
            <p class="mb-2">QR Code สำหรับเช็คอิน:</p>
            <img src="<?php echo $qrCodeUrl; ?>" alt="QR Code" class="mx-auto">
        </div>
    <?php endif; ?>

    <form method="POST" class="space-y-4">
        <div>
            <label class="block text-gray-700 mb-1">เลือกห้อง</label>
            <select name="room_id" class="w-full border px-4 py-2 rounded" required>
                <option value="">-- กรุณาเลือกห้อง --</option>
                <?php foreach ($rooms as $room): ?>
                    <option value="<?= $room['id'] ?>"><?= $room['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div>
            <label class="block text-gray-700 mb-1">วันที่ต้องการจอง</label>
            <input type="date" name="booking_date" class="w-full border px-4 py-2 rounded" required>
        </div>

        <div>
            <label class="block text-gray-700 mb-1">ช่วงเวลา</label>
            <select name="time_slot" class="w-full border px-4 py-2 rounded" required>
                <option value="">-- กรุณาเลือกเวลา --</option>
                <?php foreach ($timeSlots as $slot): ?>
                    <option value="<?= $slot ?>"><?= $slot ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">จองห้อง</button>
    </form>

    <div class="mt-6">
        <a href="./dashboard.php" class="text-blue-600 hover:underline">← กลับสู่แดชบอร์ด</a>
    </div>
</div>
</body>
</html>
