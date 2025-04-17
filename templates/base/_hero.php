<!-- _hero.php -->
<section id="home" class="h-screen relative overflow-hidden" x-data="carousel()" x-init="init()">
    <!-- Slides -->
    <template x-for="(slide, index) in slides" :key="index">
        <div x-show="active === index"
             class="absolute inset-0 w-full h-full bg-cover bg-center transition-opacity duration-1000"
             :style="'background-image: url(' + slide.image + ')'"
             x-transition:enter="opacity-0"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="opacity-100"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0">
            <div class="w-full h-full bg-black/40 flex items-center justify-center">
                <div class="container mx-auto px-6 text-white text-center fade-in max-w-4xl">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6 heading-font" x-text="slide.title"></h1>
                    <p class="text-xl md:text-2xl mb-8" x-text="slide.subtitle"></p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="#booking" class="bg-[#c19a6b] hover:bg-[#a9845a] text-white px-8 py-4 rounded-md font-medium transition duration-300">Book Your Stay</a>
                        <a href="#rooms" class="bg-transparent border-2 border-white hover:bg-white/20 px-8 py-4 rounded-md font-medium transition duration-300">Explore Rooms</a>
                    </div>
                </div>
            </div>
        </div>
    </template>

    <!-- Navigation Dots -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-3">
        <template x-for="(slide, index) in slides" :key="index">
            <button @click="active = index"
                    :class="active === index ? 'bg-white' : 'bg-white/50'"
                    class="w-3 h-3 rounded-full transition duration-300"></button>
        </template>
    </div>
</section>

<script>
    function carousel() {
        return {
            active: 0,
            slides: [
                {
                    image: 'https://images.unsplash.com/photo-1501117716987-c8e02e5ffe3d?auto=format&fit=crop&w=1470&q=80',
                    title: 'Experience Unparalleled Luxury',
                    subtitle: 'Where timeless elegance meets contemporary comfort in the heart of the city',
                },
                {
                    image: 'https://unsplash.com/photos/blue-body-of-water-in-front-of-building-near-trees-during-nighttime-M7GddPqJowg',
                    title: 'Breathtaking Views & Elegance',
                    subtitle: 'Wake up to skyline serenity and 5-star comfort',
                },
                {
                    image: 'https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=1470&q=80',
                    title: 'Fine Dining Awaits',
                    subtitle: 'From rooftop lounges to elegant indoor experiences',
                }
            ],
            init() {
                setInterval(() => {
                    this.active = (this.active + 1) % this.slides.length;
                }, 7000); // auto-slide every 7 seconds
            }
        }
    }
</script>


