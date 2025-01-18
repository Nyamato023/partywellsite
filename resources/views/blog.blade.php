<x-layout>
    <header class="bg-white shadow-sm fixed w-full z-50">
        <x-navbar />
    </header>

    <main class="pt-16">
        <x-blogs.hero />

        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 my-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="col-span-2">
                    <h2 class="text-2xl font-bold font-[Playfair Display] mb-8">Latest Articles</h2>
                    <x-blogs.grid />
                </div>

                <div class="col-span-1">
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h3 class="text-xl font-bold font-[Playfair Display] mb-6">Trending Topics</h3>
                        <div class="space-y-4">
                            <div class="flex items-center gap-4">
                                <img src="https://creatie.ai/ai/api/search-image?query=Close-up of a modern wedding invitation suite with elegant typography and minimal design elements on a light background. The scene includes RSVP cards, envelopes, and other stationery items&width=100&height=100&orientation=squarish&flag=2ae72e96-0db6-4e7f-9925-532bb66f50b9"
                                    class="w-16 h-16 rounded-lg object-cover" alt="Wedding Invitation">
                                <div>
                                    <h4 class="font-medium">Modern Invitation Designs</h4>
                                    <p class="text-sm text-gray-500">Latest trends in wedding stationery</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <img src="https://creatie.ai/ai/api/search-image?query=Artistic capture of a wedding cake with modern design elements, textured tiers, and elegant sugar flowers. The cake features contemporary patterns and a sophisticated color palette&width=100&height=100&orientation=squarish&flag=c3152278-9e54-447e-9f6a-578e3c4f8989"
                                    class="w-16 h-16 rounded-lg object-cover" alt="Wedding Cake">
                                <div>
                                    <h4 class="font-medium">Statement Wedding Cakes</h4>
                                    <p class="text-sm text-gray-500">Unique designs for 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-custom/5 rounded-lg p-6 mt-8">
                        <h3 class="text-xl font-bold font-[Playfair Display] mb-4">Subscribe to Our Newsletter</h3>
                        <p class="text-gray-600 mb-4">Get weekly wedding planning tips and inspiration delivered to
                            your inbox.</p>
                        <form class="space-y-4">
                            <input type="email" placeholder="Enter your email"
                                class="w-full !rounded-button border-gray-300 focus:border-custom focus:ring-custom">
                            <button type="submit"
                                class="w-full !rounded-button bg-custom text-white py-2 hover:bg-custom/90">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-layout>
