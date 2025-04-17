<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rooms & Suites</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html { scroll-behavior: smooth; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Navbar  -->

    <?php include 'base/_navbar.php'; ?>
  

    <!-- Rooms & Suites Section -->
    <?php
    // Room data array (can later be fetched from a DB)
    $rooms = [
        [
            "title" => "Deluxe Room",
            "price" => "$320/night",
            "image" => "https://images.unsplash.com/photo-1596394516093-501ba68a0ba6?auto=format&fit=crop&w=1470&q=80",
            "description" => "Spacious 45 sqm room with elegant decor, king-size bed, and panoramic city views.",
            "features" => ["King Bed", "City View", "Free WiFi"]
        ],
        [
            "title" => "Premier Suite",
            "price" => "$550/night",
            "image" => "https://images.unsplash.com/photo-1566669437683-c2c3c5c28559?auto=format&fit=crop&w=1374&q=80",
            "description" => "75 sqm suite featuring separate living area, marble bathroom, and breathtaking skyline views.",
            "features" => ["King Bed", "Panoramic View", "Butler Service"]
        ],
        [
            "title" => "Executive Suite",
            "price" => "$680/night",
            "image" => "https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1470&q=80",
            "description" => "Luxury suite with full kitchen, workspace, jacuzzi tub, and 180° skyline views.",
            "features" => ["Jacuzzi", "Workspace", "Kitchen"]
        ],
        [
            "title" => "Deluxe Room",
            "price" => "$320/night",
            "image" => "https://images.unsplash.com/photo-1596394516093-501ba68a0ba6?auto=format&fit=crop&w=1470&q=80",
            "description" => "Spacious 45 sqm room with elegant decor, king-size bed, and panoramic city views.",
            "features" => ["King Bed", "City View", "Free WiFi"]
        ],
        [
            "title" => "Premier Suite",
            "price" => "$550/night",
            "image" => "https://images.unsplash.com/photo-1566669437683-c2c3c5c28559?auto=format&fit=crop&w=1374&q=80",
            "description" => "75 sqm suite featuring separate living area, marble bathroom, and breathtaking skyline views.",
            "features" => ["King Bed", "Panoramic View", "Butler Service"]
        ],
        [
            "title" => "Executive Suite",
            "price" => "$680/night",
            "image" => "https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1470&q=80",
            "description" => "Luxury suite with full kitchen, workspace, jacuzzi tub, and 180° skyline views.",
            "features" => ["Jacuzzi", "Workspace", "Kitchen"]
        ]
    ];
    ?>

    <section id="rooms" class="py-20">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Rooms & Suites</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Exquisite accommodations designed for your comfort</p>
                <div class="w-20 h-1 bg-[#c19a6b] mt-8 mx-auto rounded"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($rooms as $room): ?>
                    <div class="bg-white rounded-xl overflow-hidden shadow-md transition duration-300">
                        <div class="h-64 overflow-hidden">
                            <img src="<?= $room['image'] ?>" alt="<?= $room['title'] ?>" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-2xl font-semibold"><?= $room['title'] ?></h3>
                                <span class="text-[#c19a6b] font-bold"><?= $room['price'] ?></span>
                            </div>
                            <p class="text-gray-600 mb-4"><?= $room['description'] ?></p>
                            <div class="flex flex-wrap gap-2 mb-6">
                                <?php foreach ($room['features'] as $feature): ?>
                                    <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded"><?= $feature ?></span>
                                <?php endforeach; ?>
                            </div>
                            <a href="#" class="block text-center bg-[#c19a6b] hover:bg-[#a9845a] text-white px-4 py-2 rounded-md font-medium transition duration-300">Book Now</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</body>
</html>
