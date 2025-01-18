<x-layout>
    <x-navbar />
    <main class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-col space-y-6">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-bold text-gray-900">Event Gallery</h1>
                <div class="relative">
                    <input type="text" placeholder="Search events..."
                        class="w-64 pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:ring-custom focus:border-custom">
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>
            </div>
            <x-gallery.grid />
            <x-gallery.pagination />
        </div>
    </main>
</x-layout>
