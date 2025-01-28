<section class="relative h-[600px] overflow-hidden">
    <!-- Gradient Background with Decorative Shapes -->
    <div class="absolute inset-0 z-0 bg-gradient-to-r from-indigo-700 via-purple-800 to-indigo-900">
        <!-- Decorative Circles -->
        <div class="absolute w-64 h-64 bg-purple-500 rounded-full opacity-20 top-[-10%] right-[-5%]"></div>
        <div class="absolute w-48 h-48 bg-indigo-500 rounded-full opacity-20 bottom-[-10%] left-[-5%]"></div>
        <!-- Subtle Grid Pattern -->
        <div class="absolute inset-0 bg-grid-pattern opacity-10"></div>
    </div>

    <!-- Content -->
    <div class="absolute inset-0 flex items-center justify-center z-10">
        <div class="text-start md:w-5/6 mx-auto">
            <h1 class="text-6xl text-white font-bold mb-8 shadow-text">Party with Us!<br>Make Every Celebration
                Unforgettable!
            </h1>
            <button
                class="rounded-[32px] bg-white hover:bg-white/90 text-indigo-800 px-12 py-4 text-xl font-semibold transition-all duration-300">Shop
                Now</button>

            <button
                class="rounded-[32px] bg-gradient-to-r from-indigo-900 to-purple-800 hover:from-indigo-800 hover:to-purple-700 text-white px-12 py-4 text-xl font-semibold transition-all duration-300">GET
                OUR VALENTINES 20% OFFER</button>
        </div>
    </div>
</section>

<!-- Add a subtle grid pattern using CSS -->
<style>
    .bg-grid-pattern {
        background-image: radial-gradient(circle, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
        background-size: 20px 20px;
    }
</style>
