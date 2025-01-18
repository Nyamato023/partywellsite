<x-layout>
    <x-navbar />

    <main class="mx-auto max-w-8xl px-4 sm:px-6 lg:px-8 py-12">
        <div class="text-center mb-16">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Contact Us</h1>
            <p class="text-lg text-gray-600">We're here to help and answer any questions you might have</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <x-contact.contact-details />
            <x-contact.contact-form />
        </div>
    </main>

</x-layout>
