<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - DevSpark</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        .floating-animation {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .pulse-ring {
            animation: pulse-ring 1.5s ease-out infinite;
        }

        @keyframes pulse-ring {
            0% {
                transform: scale(0.33);
            }

            80%,
            100% {
                opacity: 0;
            }
        }

        .celebration {
            background: linear-gradient(45deg, #667eea 0%, #764ba2 100%);
        }
    </style>
</head>

<body class="min-h-screen celebration mt-5">
    <!-- Floating particles background -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-20 w-4 h-4 bg-white rounded-full opacity-20 floating-animation"></div>
        <div class="absolute top-32 right-32 w-3 h-3 bg-yellow-300 rounded-full opacity-30 floating-animation"
            style="animation-delay: -1s;"></div>
        <div class="absolute bottom-20 left-32 w-5 h-5 bg-pink-300 rounded-full opacity-25 floating-animation"
            style="animation-delay: -2s;"></div>
        <div class="absolute bottom-32 right-20 w-2 h-2 bg-blue-300 rounded-full opacity-40 floating-animation"
            style="animation-delay: -0.5s;"></div>
    </div>

    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="max-w-2xl mx-auto text-center">

            <!-- Success Icon with Animation -->
            <div class="relative mb-8">
                <div class="absolute inset-0 rounded-full bg-green-400 opacity-25 pulse-ring"></div>
                <div
                    class="relative bg-white rounded-full p-6 mx-auto w-24 h-24 flex items-center justify-center shadow-2xl">
                    <svg class="w-12 h-12 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
            </div>

            <!-- Main Message -->
            <h1 class="text-6xl font-bold text-white mb-4 tracking-tight">
                Thank You!
            </h1>

            <div
                class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 mb-8 border border-white border-opacity-20">
                <h2 class="text-2xl font-semibold text-white mb-4">Your Order is Confirmed!</h2>
                <p class="text-lg text-white text-opacity-90 mb-6 leading-relaxed">
                    🎉 Awesome! Your order has been successfully placed and is being processed.
                    We're excited to get your products ready for delivery!
                </p>

                <!-- Order Status Steps -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="text-center">
                        <div
                            class="bg-white bg-opacity-20 rounded-full p-4 mx-auto w-16 h-16 flex items-center justify-center mb-3">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-white font-medium mb-1">Processing</h3>
                        <p class="text-white text-opacity-80 text-sm">1-2 business days</p>
                    </div>
                    <div class="text-center">
                        <div
                            class="bg-white bg-opacity-20 rounded-full p-4 mx-auto w-16 h-16 flex items-center justify-center mb-3">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                        </div>
                        <h3 class="text-white font-medium mb-1">Shipping</h3>
                        <p class="text-white text-opacity-80 text-sm">2-3 business days</p>
                    </div>
                    <div class="text-center">
                        <div
                            class="bg-white bg-opacity-20 rounded-full p-4 mx-auto w-16 h-16 flex items-center justify-center mb-3">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4m2.6 8L6 6H4m3 7v4a1 1 0 001 1h6m-6-4a1 1 0 100 2 1 1 0 000-2zm10 0a1 1 0 100 2 1 1 0 000-2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-white font-medium mb-1">Delivered</h3>
                        <p class="text-white text-opacity-80 text-sm">5-7 business days</p>
                    </div>
                </div>

                <!-- Email Notice -->
                <div class="bg-blue-500 bg-opacity-20 border border-blue-300 border-opacity-30 rounded-lg p-4 mb-6">
                    <div class="flex items-center justify-center">
                        <svg class="w-5 h-5 text-white mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        <span class="text-white font-medium">📧 Confirmation email sent to your inbox!</span>
                    </div>
                    <p class="text-white text-opacity-90 text-sm mt-2">Check your spam folder if you don't see it.</p>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('home') }}"
                    class="bg-white text-purple-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition duration-300 transform hover:scale-105 shadow-lg">
                    🏠 Continue Shopping
                </a>
                <a href="mailto:info@devspark.com"
                    class="bg-white bg-opacity-20 text-white border-2 border-white border-opacity-30 px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-purple-600 transition duration-300 transform hover:scale-105">
                    💬 Contact Support
                </a>
            </div>

            <!-- Customer Support Info -->
            {{-- <div class="mt-12 text-center">
                <p class="text-white text-opacity-80 mb-4">Need help? We're here for you!</p>
                <div
                    class="flex flex-col sm:flex-row justify-center items-center space-y-2 sm:space-y-0 sm:space-x-8 text-white text-opacity-90">
                    <div class="flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                        <span>+1 5989 55488 55</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        <span>info@devspark.com</span>
                    </div>
                </div>
                <p class="text-white text-opacity-70 text-sm mt-4">Monday - Friday, 9AM - 6PM PST</p>
            </div> --}}

            <!-- Fun Quote -->
            <div class="mt-12 bg-white bg-opacity-10 rounded-lg p-6">
                <p class="text-white text-opacity-90 italic text-lg">"Great things are coming your way! 🚀"</p>
                <p class="text-white text-opacity-70 text-sm mt-2">- DevSpark Team</p>
            </div>
        </div>
    </div>

    <!-- Confetti Animation -->
    <script>
        // Simple confetti effect
        function createConfetti() {
            const colors = ['#ff6b6b', '#4ecdc4', '#45b7d1', '#96ceb4', '#ffeaa7', '#dda0dd'];

            for (let i = 0; i < 50; i++) {
                setTimeout(() => {
                    const confetti = document.createElement('div');
                    confetti.style.cssText = `
                        position: fixed;
                        top: -10px;
                        left: ${Math.random() * 100}vw;
                        width: ${Math.random() * 10 + 5}px;
                        height: ${Math.random() * 10 + 5}px;
                        background: ${colors[Math.floor(Math.random() * colors.length)]};
                        z-index: 1000;
                        pointer-events: none;
                        border-radius: 50%;
                        animation: fall ${Math.random() * 3 + 2}s linear forwards;
                    `;

                    document.body.appendChild(confetti);

                    setTimeout(() => confetti.remove(), 5000);
                }, i * 100);
            }
        }

        // CSS for falling animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fall {
                to {
                    transform: translateY(100vh) rotate(360deg);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);

        // Trigger confetti on page load
        window.addEventListener('load', createConfetti);
    </script>
</body>
