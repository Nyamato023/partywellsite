<div class="bg-white p-8 rounded-lg shadow-sm">
    <h2 class="text-2xl font-bold text-gray-900 mb-6">Send us a Message</h2>
    <form class="space-y-6">
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
            <input type="text" id="name" name="name"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-custom focus:ring-custom"
                placeholder="John Doe">
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
            <input type="email" id="email" name="email"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-custom focus:ring-custom"
                placeholder="you@example.com">
        </div>

        <div>
            <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
            <input type="text" id="subject" name="subject"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-custom focus:ring-custom"
                placeholder="How can we help?">
        </div>

        <div>
            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
            <textarea id="message" name="message" rows="4"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-custom focus:ring-custom"
                placeholder="Your message here..."></textarea>
        </div>

        <div>
            <button type="submit"
                class="!rounded-button w-full bg-custom px-4 py-3 text-white font-medium hover:bg-custom/90 focus:outline-none focus:ring-2 focus:ring-custom focus:ring-offset-2">
                Send Message
            </button>
        </div>
    </form>
</div>
