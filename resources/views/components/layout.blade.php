<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PartyPop - Make Every Celebration Unforgettable</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.core.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.theme.min.css" rel="stylesheet" />
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-custom.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/glide.min.js"></script>
    <script
        src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1">
    </script>
    <script src="https://ai-public.creatie.ai/gen_page/tailwind-config.min.js" data-color="#000000"
        data-border-radius="small"></script>
</head>

<body class="text-sm font-bold bg-gray-50">
    {{ $slot }}
    <footer class="bg-gray-900 text-white py-16">
        <div class="max-w-8xl mx-auto px-4">
            <div class="grid grid-cols-4 gap-8">
                <div>
                    <img src="https://ai-public.creatie.ai/gen_page/logo_placeholder.png" alt="PartyPop Logo"
                        class="h-12 mb-6" />
                    <p class="text-gray-400">Make every celebration unforgettable with our premium party supplies and
                        decorations.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">About Us</a></li>
                        <li><a href="#" class="hover:text-white">Contact</a></li>
                        <li><a href="#" class="hover:text-white">FAQs</a></li>
                        <li><a href="#" class="hover:text-white">Shipping Info</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Party Planning</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">Party Guide</a></li>
                        <li><a href="#" class="hover:text-white">Theme Ideas</a></li>
                        <li><a href="#" class="hover:text-white">Bulk Orders</a></li>
                        <li><a href="#" class="hover:text-white">Custom Orders</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Connect With Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-pinterest text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>© 2024 PartyPop. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        new Glide('.glide', {
            type: 'carousel',
            autoplay: 5000,
            animationDuration: 1000,
            gap: 0,
            perView: 1
        }).mount();
    </script>
</body>

</html>
