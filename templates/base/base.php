<?php
// Set up your variables, ideally passed from a controller or included above.
$title = "Hotel Management System";
$page = "Home";
$fb = "Hotel Booking Management System@Facebook";
$fb_url = "https://facebook.com/yourpage";
$ig = "Hotel Booking Management System@IG";
$ig_url = "https://instagram.com/yourhandle";
$phone = "012-345-6789";
$phone_format = "0123456789"; // for tel link
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Tailwind CSS (via CDN or your compiled CSS) -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

  <link rel="stylesheet" type="text/css" href="/static/vendor/style.css">

  <title><?= htmlspecialchars($title) ?> | <?= htmlspecialchars($page) ?></title>
</head>

<?php
require_once("helpers.php");

echo setStatus("True");
echo formatDate(new DateTime(), true);
echo setStatusPayment("WAITINGPAYMENT");
echo formatGender("male");
?>


<body class="bg-gray-900 text-white">
  <div class="img">

  </div>

  <!-- Footer -->
  <footer class="bg-gray-800 py-8">
    <div class="max-w-screen-xl mx-auto px-4">
      <div class="grid md:grid-cols-2 gap-6">
        <div>
          <h6 class="text-lg font-semibold mb-2">ติดต่อ</h6>
          <ul class="space-y-2">
            <li class="flex items-center gap-2">
              <a href="<?= $fb_url ?>" class="hover:text-blue-400"><i class="fab fa-facebook"></i></a>
              <span>Facebook : <?= htmlspecialchars($fb) ?></span>
            </li>
            <li class="flex items-center gap-2">
              <a href="<?= $ig_url ?>" class="hover:text-pink-400"><i class="fab fa-instagram"></i></a>
              <span>Instagram : <?= htmlspecialchars($ig) ?></span>
            </li>
            <li class="flex items-center gap-2">
              <a href="tel:+<?= $phone_format ?>" class="hover:text-green-400"><i class="fas fa-phone"></i></a>
              <span>Phone : <?= htmlspecialchars($phone) ?></span>
            </li>
          </ul>
        </div>
      </div>
      <hr class="my-6 border-gray-700">
      <div class="text-sm text-gray-400">
        &copy; 2025 <?= htmlspecialchars($title) ?>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://momentjs.com/downloads/moment.js"></script>
  <script src="/static/vendor/app.js"></script>

  <!-- Optional additional scripts -->
  <script id="selectroomjs"></script>
</body>
</html>
