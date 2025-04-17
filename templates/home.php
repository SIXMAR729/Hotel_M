<? php
<html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Palm Grand | Luxury Five-Star Hotel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./static/css/style.css">
</head>
<body class="text-gray-800 bg-gray-50">
    <!-- Navigation -->
    <nav class="navbar fixed w-full bg-white/90 backdrop-blur-sm z-50 shadow-sm">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-3xl font-bold text-gray-800 heading-font">Royal Palm Grand</a>
            <div class="hidden md:flex space-x-8">
                <a href="#home" class="nav-link active-nav">Home</a>
                <a href="#rooms" class="nav-link">Rooms & Suites</a>
                <a href="#dining" class="nav-link">Dining</a>
                <a href="#amenities" class="nav-link">Amenities</a>
                <a href="#gallery" class="nav-link">Gallery</a>
                <a href="#contact" class="nav-link">Contact</a>
                <a href="#booking" class="bg-[#c19a6b] hover:bg-[#a9845a] text-white px-4 py-2 rounded-md font-medium transition duration-300">Book Now</a>
            </div>
            <button id="mobile-menu-button" class="md:hidden focus:outline-none">
                <i class="fas fa-bars text-2xl text-gray-800"></i>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white px-6 py-3 border-t">
            <div class="flex flex-col space-y-4">
                <a href="#home" class="nav-link active-nav">Home</a>
                <a href="#rooms" class="nav-link">Rooms & Suites</a>
                <a href="#dining" class="nav-link">Dining</a>
                <a href="#amenities" class="nav-link">Amenities</a>
                <a href="#gallery" class="nav-link">Gallery</a>
                <a href="#contact" class="nav-link">Contact</a>
                <a href="#booking" class="bg-[#c19a6b] hover:bg-[#a9845a] text-white px-4 py-2 rounded-md font-medium text-center transition duration-300">Book Now</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-image h-screen flex items-center pt-20">
        <div class="container mx-auto px-6 text-white text-center fade-in">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 heading-font">Experience Unparalleled Luxury</h1>
                <p class="text-xl md:text-2xl mb-8">Where timeless elegance meets contemporary comfort in the heart of the city</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#booking" class="bg-[#c19a6b] hover:bg-[#a9845a] text-white px-8 py-4 rounded-md font-medium transition duration-300">Book Your Stay</a>
                    <a href="#rooms" class="bg-transparent border-2 border-white hover:bg-white/20 px-8 py-4 rounded-md font-medium transition duration-300">Explore Rooms</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Widget -->
    <section id="booking" class="bg-white py-8 shadow-lg -mt-16 relative z-10 mx-6 rounded-lg fade-in delay-1">
        <div class="container mx-auto px-6">
            <form class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div>
                    <label class="block text-gray-700 mb-2">Check In</label>
                    <input type="date" class="w-full px-4 py-3 border border-gray-300 rounded-md date-input">
                </div>
                <div>
                    <label class="block text-gray-700 mb-2">Check Out</label>
                    <input type="date" class="w-full px-4 py-3 border border-gray-300 rounded-md date-input">
                </div>
                <div>
                    <label class="block text-gray-700 mb-2">Guests</label>
                    <select class="w-full px-4 py-3 border border-gray-300 rounded-md">
                        <option>1 Adult</option>
                        <option>2 Adults</option>
                        <option>3 Adults</option>
                        <option>4 Adults</option>
                        <option>Family (2+2)</option>
                    </select>
                </div>
                <div class="flex items-end">
                    <button type="submit" class="w-full bg-[#c19a6b] hover:bg-[#a9845a] text-white px-6 py-3 rounded-md font-medium transition duration-300">Check Availability</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Welcome Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-4xl font-bold mb-4 heading-font">Welcome to Royal Palm Grand</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">A sanctuary of tranquility and indulgence in the heart of the city</p>
                <div class="section-divider pt-8"></div>
            </div>
            
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2 fade-in delay-1">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             alt="Hotel Lobby" class="w-full h-auto rounded-lg shadow-lg">
                        <div class="absolute -bottom-6 -right-6 bg-[#c19a6b] p-4 rounded-lg shadow-lg hidden md:block">
                            <div class="text-white text-center">
                                <p class="text-4xl font-bold heading-font">25+</p>
                                <p class="text-sm">Years of Excellence</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 fade-in delay-2">
                    <h3 class="text-2xl font-semibold mb-4 heading-font">A Legacy of Luxury Hospitality</h3>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        Established in 1998, Royal Palm Grand has been the epitome of luxury hospitality, offering guests an unforgettable experience blending timeless elegance with modern comforts. Our dedicated staff provides impeccable service to ensure every stay is nothing short of perfection.
                    </p>
                    <p class="text-gray-700 mb-8 leading-relaxed">
                        Nestled in the city center yet offering a serene oasis, our five-star hotel features 200 lavishly appointed rooms and suites, world-class dining, a full-service spa, and state-of-the-art meeting facilities.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-[#c19a6b] mr-2"></i>
                            <span>24/7 Personalized Service</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-[#c19a6b] mr-2"></i>
                            <span>Award-winning Cuisine</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-[#c19a6b] mr-2"></i>
                            <span>Luxury Spa Facilities</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rooms & Suites -->
    <section id="rooms" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-4xl font-bold mb-4 heading-font">Rooms & Suites</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Exquisite accommodations designed for your comfort</p>
                <div class="section-divider pt-8"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Deluxe Room -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md room-card transition duration-300 fade-in delay-1">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1596394516093-501ba68a0ba6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             alt="Deluxe Room" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-2xl font-semibold heading-font">Deluxe Room</h3>
                            <span class="text-[#c19a6b] font-bold">$320/night</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Spacious 45 sqm room with elegant decor, king-size bed, and panoramic city views.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">King Bed</span>
                            <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">City View</span>
                            <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">Free WiFi</span>
                        </div>
                        <a href="#" class="block text-center bg-[#c19a6b] hover:bg-[#a9845a] text-white px-4 py-2 rounded-md font-medium transition duration-300">Book Now</a>
                    </div>
                </div>
                
                <!-- Premier Suite -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md room-card transition duration-300 fade-in delay-2">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1566669437683-c2c3c5c28559?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" 
                             alt="Premier Suite" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-2xl font-semibold heading-font">Premier Suite</h3>
                            <span class="text-[#c19a6b] font-bold">$550/night</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            75 sqm suite featuring separate living area, marble bathroom, and breathtaking city skyline views.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">King Bed</span>
                            <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">Panoramic View</span>
                            <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">Butler Service</span>
                        </div>
                        <a href="#" class="block text-center bg-[#c19a6b] hover:bg-[#a9845a] text-white px-4 py-2 rounded-md font-medium transition duration-300">Book Now</a>
                    </div>
                </div>
                
                <!-- Presidential Suite -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md room-card transition duration-300 fade-in delay-3">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             alt="Presidential Suite" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-2xl font-semibold heading-font">Presidential Suite</h3>
                            <span class="text-[#c19a6b] font-bold">$1,200/night</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            150 sqm of pure luxury with separate living and dining areas, Jacuzzi, and 24/7 butler service.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">Super King Bed</span>
                            <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">Private Terrace</span>
                            <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">VIP Services</span>
                        </div>
                        <a href="#" class="block text-center bg-[#c19a6b] hover:bg-[#a9845a] text-white px-4 py-2 rounded-md font-medium transition duration-300">Book Now</a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12 fade-in delay-4">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-[#c19a6b] text-[#c19a6b] hover:bg-[#c19a6b]/10 rounded-md font-medium transition duration-300">
                    View All Room Types <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Dining -->
    <section id="dining" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-4xl font-bold mb-4 heading-font">Dining Experiences</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Culinary excellence in every bite</p>
                <div class="section-divider pt-8"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- The Grand Restaurant -->
                <div class="relative rounded-xl overflow-hidden shadow-lg h-96 fade-in delay-1">
                    <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" 
                         alt="The Grand Restaurant" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent flex items-end p-6">
                        <div>
                            <h3 class="text-2xl font-bold text-white mb-2 heading-font">The Grand Restaurant</h3>
                            <p class="text-white/90 mb-4">International gourmet cuisine in an elegant setting with live music</p>
                            <a href="#" class="text-[#c19a6b] font-medium flex items-center">
                                Learn More <i class="fas fa-chevron-right ml-2 text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Sky Lounge -->
                <div class="relative rounded-xl overflow-hidden shadow-lg h-96 fade-in delay-2">
                    <img src="https://images.unsplash.com/photo-1514933651103-005eec06c04b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" 
                         alt="Sky Lounge" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent flex items-end p-6">
                        <div>
                            <h3 class="text-2xl font-bold text-white mb-2 heading-font">Sky Lounge</h3>
                            <p class="text-white/90 mb-4">Rooftop bar with signature cocktails and panoramic city views</p>
                            <a href="#" class="text-[#c19a6b] font-medium flex items-center">
                                Learn More <i class="fas fa-chevron-right ml-2 text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- La Terrazza -->
                <div class="relative rounded-xl overflow-hidden shadow-lg h-96 fade-in delay-3">
                    <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                         alt="La Terrazza" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent flex items-end p-6">
                        <div>
                            <h3 class="text-2xl font-bold text-white mb-2 heading-font">La Terrazza</h3>
                            <p class="text-white/90 mb-4">Authentic Italian cuisine in our romantic garden terrace</p>
                            <a href="#" class="text-[#c19a6b] font-medium flex items-center">
                                Learn More <i class="fas fa-chevron-right ml-2 text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Amenities Section -->
     <section class="py-20 bg-gray-50" id="amenities">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="font-playfair text-4xl font-bold mb-4">World-Class Amenities</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Every detail has been carefully considered to ensure your stay is nothing short of extraordinary.</p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="amenity-item bg-white p-8 rounded-lg shadow-lg text-center">
                    <div class="amenity-icon text-4xl text-gold-600 mb-4">
                        <i class="fas fa-spa"></i>
                    </div>
                    <h3 class="font-playfair text-xl font-bold mb-2">Serenity Spa</h3>
                    <p class="text-gray-600">Our 10,000 sq ft spa offers rejuvenating treatments using only the finest organic products.</p>
                </div>
                
                <div class="amenity-item bg-white p-8 rounded-lg shadow-lg text-center">
                    <div class="amenity-icon text-4xl text-gold-600 mb-4">
                        <i class="fas fa-swimming-pool"></i>
                    </div>
                    <h3 class="font-playfair text-xl font-bold mb-2">Infinity Pool</h3>
                    <p class="text-gray-600">Our heated rooftop infinity pool offers stunning city views and private cabanas.</p>
                </div>
                
                <div class="amenity-item bg-white p-8 rounded-lg shadow-lg text-center">
                    <div class="amenity-icon text-4xl text-gold-600 mb-4">
                        <i class="fas fa-dumbbell"></i>
                    </div>
                    <h3 class="font-playfair text-xl font-bold mb-2">Fitness Center</h3>
                    <p class="text-gray-600">State-of-the-art equipment with personal training sessions available upon request.</p>
                </div>
                
                <div class="amenity-item bg-white p-8 rounded-lg shadow-lg text-center">
                    <div class="amenity-icon text-4xl text-gold-600 mb-4">
                        <i class="fas fa-concierge-bell"></i>
                    </div>
                    <h3 class="font-playfair text-xl font-bold mb-2">24/7 Concierge</h3>
                    <p class="text-gray-600">Our expert concierge team can arrange anything from theater tickets to private tours.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-20 bg-white" id="gallery">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="font-playfair text-4xl font-bold mb-4">Gallery</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">A visual journey through our luxurious spaces and unforgettable experiences.</p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="gallery-item rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1566669437684-c5b5d73b8a8b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="Hotel Lobby" class="w-full h-64 object-cover">
                </div>
                <div class="gallery-item rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Hotel Pool" class="w-full h-64 object-cover">
                </div>
                <div class="gallery-item rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1611892440501-1c0d68b4b317?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="Hotel Room" class="w-full h-64 object-cover">
                </div>
                <div class="gallery-item rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Restaurant" class="w-full h-64 object-cover">
                </div>
                <div class="gallery-item rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Bar" class="w-full h-64 object-cover">
                </div>
                <div class="gallery-item rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Hotel Exterior" class="w-full h-64 object-cover">
                </div>
            </div>
        </div>
    </section>

        <!-- Testimonials Section -->
        <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="font-playfair text-4xl font-bold mb-4">Guest Experiences</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Don't just take our word for it - hear from our valued guests about their stays at Grandeur Heights.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="testimonial-card bg-white p-8 rounded-lg shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="flex text-gold-500">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 italic">"From the moment we arrived, the service was impeccable. Our suite was breathtaking with panoramic views of the city. The attention to detail throughout our stay was extraordinary."</p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Guest" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Sarah Johnson</h4>
                            <p class="text-gray-600 text-sm">London, UK</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card bg-white p-8 rounded-lg shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="flex text-gold-500">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 italic">"The spa treatments were the best I've ever experienced. The staff anticipated our every need, and the dining options were exceptional. We'll definitely be returning next year."</p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Guest" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Michael Chen</h4>
                            <p class="text-gray-600 text-sm">New York, USA</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card bg-white p-8 rounded-lg shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="flex text-gold-500">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 italic">"Perfect location for our anniversary getaway. The rooftop pool at sunset was magical, and the concierge arranged the most romantic dinner on our terrace. Truly unforgettable."</p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Guest" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Emma Rodriguez</h4>
                            <p class="text-gray-600 text-sm">Madrid, Spain</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Contact Section -->
     <section class="py-20 bg-gray-50" id="contact">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
                    <h2 class="font-playfair text-4xl font-bold mb-6">Contact Us</h2>
                    <p class="text-gray-600 mb-8">Our concierge team is available 24/7 to assist with any inquiries or special requests you may have.</p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="text-gold-600 text-xl mr-4 mt-1">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-bold mb-1">Address</h4>
                                <p class="text-gray-600">1 Grandeur Heights Boulevard<br>Golden Triangle District<br>City Center, 10001</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="text-gold-600 text-xl mr-4 mt-1">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-bold mb-1">Phone</h4>
                                <p class="text-gray-600">+1 (555) 123-4567<br>Concierge: extension 123</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="text-gold-600 text-xl mr-4 mt-1">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="font-bold mb-1">Email</h4>
                                <p class="text-gray-600">reservations@grandeurheights.com<br>concierge@grandeurheights.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="md:w-1/2">
                    <div class="bg-white p-8 rounded-lg shadow-lg">
                        <h3 class="font-playfair text-2xl font-bold mb-6">Send Us a Message</h3>
                        <form>
                            <div class="mb-4">
                                <input type="text" placeholder="Your Name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gold-500">
                            </div>
                            <div class="mb-4">
                                <input type="email" placeholder="Your Email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gold-500">
                            </div>
                            <div class="mb-4">
                                <input type="text" placeholder="Subject" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gold-500">
                            </div>
                            <div class="mb-6">
                                <textarea rows="5" placeholder="Your Message" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gold-500"></textarea>
                            </div>
                            <button type="submit" class="bg-gold-600 hover:bg-gold-700 text-white px-8 py-3 rounded-full font-medium transition w-full">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-gold-700 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="font-playfair text-3xl font-bold mb-4">Stay Connected</h2>
            <p class="mb-8 max-w-2xl mx-auto">Subscribe to our newsletter for exclusive offers, events, and luxury travel inspiration.</p>
            
            <form class="max-w-md mx-auto flex">
                <input type="email" placeholder="Your email address" class="flex-grow px-4 py-3 rounded-l-lg focus:outline-none text-gray-900">
                <button type="submit" class="bg-black hover:bg-gray-900 text-white px-6 py-3 rounded-r-lg font-medium transition">Subscribe</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="font-playfair text-2xl font-bold mb-4">Grandeur Heights</h3>
                    <p class="text-gray-400 mb-4">A sanctuary of luxury and impeccable service in the heart of the city.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div>
                    <h4 class="font-bold text-lg mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Rooms & Suites</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Dining</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Spa & Wellness</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Special Offers</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-bold text-lg mb-4">Information</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Contact</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Gallery</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Careers</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Press</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-bold text-lg mb-4">Legal</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Terms & Conditions</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Cookie Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Accessibility</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="pt-8 border-t border-gray-800 text-center text-gray-400">
                <p>&copy; 2025 Royal Palm Grand. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    const mobileMenu = document.getElementById('mobile-menu');
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });

        // Room card hover effect
        const roomCards = document.querySelectorAll('.room-card');
        roomCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.querySelector('.room-overlay').style.opacity = '1';
                this.querySelector('.room-overlay').style.transform = 'translateY(0)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.querySelector('.room-overlay').style.opacity = '0';
                this.querySelector('.room-overlay').style.transform = 'translateY(20px)';
            });
        });

        // Testimonial carousel (simple version)
        let currentTestimonial = 0;
        const testimonials = document.querySelectorAll('.testimonial-card');
        
        function showTestimonial(index) {
            testimonials.forEach((testimonial, i) => {
                testimonial.style.display = i === index ? 'block' : 'none';
            });
        }
        
        // Auto-rotate testimonials
        setInterval(() => {
            currentTestimonial = (currentTestimonial + 1) % testimonials.length;
            showTestimonial(currentTestimonial);
        }, 5000);
    </script>
</body>
</html>
        ?>
