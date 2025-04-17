<!-- _navbar.php -->

<?php
    // Get the current page filename
    $currentPage = basename($_SERVER['PHP_SELF']);
?>

<style>
    .nav-link {
    position: relative;
}

.nav-link::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 0;
    height: 2px;
    background: #c19a6b;
    transition: width 0.3s ease;
}

.nav-link:hover::after {
    width: 100%;
}

.active-nav::after {
    width: 100%;
}
</style>

<nav class="navbar fixed w-full bg-white/90 backdrop-blur-sm z-50 shadow-sm">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="home.php" class="text-3xl font-bold text-gray-800 heading-font">Royal Palm Grand</a>

        <div class="hidden md:flex space-x-8">
            <a href="home.php#home" class="nav-link <?= $currentPage == 'home.php' ? 'active-nav' : '' ?>">Home</a>
            <a href="roompage.php" class="nav-link <?= $currentPage == 'roompage.php' ? 'active-nav' : '' ?>">Rooms & Suites</a>
            <a href="diningpage.php" class="nav-link <?= $currentPage == 'diningpage.php' ? 'active-nav' : '' ?>">Dining</a>
            <a href="home.php#amenities" class="nav-link <?= $currentPage == 'home.php' ? '' : '' ?>">Amenities</a>
            <a href="home.php#gallery" class="nav-link <?= $currentPage == 'home.php' ? '' : '' ?>">Gallery</a>
            <a href="home.php#contact" class="nav-link <?= $currentPage == 'home.php' ? '' : '' ?>">Contact</a>
            <a href="#booking" class="bg-[#c19a6b] hover:bg-[#a9845a] text-white px-4 py-2 rounded-md font-medium transition duration-300">Book Now</a>
        </div>

        <button id="mobile-menu-button" class="md:hidden focus:outline-none">
            <i class="fas fa-bars text-2xl text-gray-800"></i>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white px-6 py-3 border-t">
        <div class="flex flex-col space-y-4">
            <a href="home.php#home" class="nav-link <?= $currentPage == 'home.php' ? 'active-nav' : '' ?>">Home</a>
            <a href="roompage.php" class="nav-link <?= $currentPage == 'roompage.php' ? 'active-nav' : '' ?>">Rooms & Suites</a>
            <a href="diningpage.php" class="nav-link <?= $currentPage == 'diningpage.php' ? 'active-nav' : '' ?>">Dining</a>
            <a href="home.php#amenities" class="nav-link">Amenities</a>
            <a href="home.php#gallery" class="nav-link">Gallery</a>
            <a href="home.php#contact" class="nav-link">Contact</a>
            <a href="#booking" class="bg-[#c19a6b] hover:bg-[#a9845a] text-white px-4 py-2 rounded-md font-medium text-center transition duration-300">Book Now</a>
        </div>
    </div>
</nav>


<script>

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
    </script>
