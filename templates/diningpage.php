<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dining Experiences | Royal Palm Grand</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script> <!-- Replace with your own -->
    <style>
        html { scroll-behavior: smooth; }
        .heading-font { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="bg-white text-gray-800">
    
    <?php include 'base/_navbar.php'; ?>

    <!-- Dining Page Content -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 fade-in">
                <h1 class="text-4xl font-bold mb-4 heading-font">Dining Experiences</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Culinary excellence in every bite</p>
                <div class="w-20 h-1 bg-[#c19a6b] mt-8 mx-auto rounded"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php
                $diningOptions = [
                    [
                        'name' => 'The Grand Restaurant',
                        'description' => 'International gourmet cuisine in an elegant setting with live music',
                        'image' => 'https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=1374&q=80',
                        'link' => '#'
                    ],
                    [
                        'name' => 'Sky Lounge',
                        'description' => 'Rooftop bar with signature cocktails and panoramic city views',
                        'image' => 'https://images.unsplash.com/photo-1514933651103-005eec06c04b?auto=format&fit=crop&w=1374&q=80',
                        'link' => '#'
                    ],
                    [
                        'name' => 'La Terrazza',
                        'description' => 'Authentic Italian cuisine in our romantic garden terrace',
                        'image' => 'https://images.unsplash.com/photo-1600891964092-4316c288032e?auto=format&fit=crop&w=1470&q=80',
                        'link' => '#'
                    ]
                ];

                foreach ($diningOptions as $index => $restaurant):
                ?>
                    <div class="relative rounded-xl overflow-hidden shadow-lg h-96 fade-in delay-<?= $index + 1 ?>">
                        <img src="<?= $restaurant['image'] ?>" alt="<?= $restaurant['name'] ?>" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent flex items-end p-6">
                            <div>
                                <h3 class="text-2xl font-bold text-white mb-2 heading-font"><?= $restaurant['name'] ?></h3>
                                <p class="text-white/90 mb-4"><?= $restaurant['description'] ?></p>
                                <a href="<?= $restaurant['link'] ?>" class="text-[#c19a6b] font-medium flex items-center">
                                    Learn More <i class="fas fa-chevron-right ml-2 text-sm"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</body>
</html>
