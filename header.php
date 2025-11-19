<?php require_once 'includes/vite_helper.php'; ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Properties | Premier Real Estate in Vrindavan</title>
    <meta name="description" content="Find your dream property in Vrindavan with Elite Properties. Luxury residential, commercial, and agricultural real estate services.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?php vite('src/main.js'); ?>
</head>
<body class="bg-gray-50 text-gray-800">
    <header class="fixed w-full bg-white/95 backdrop-blur-sm shadow-sm z-50 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-gold-600 rounded-sm flex items-center justify-center text-white font-serif text-2xl font-bold">E</div>
                        <span class="font-serif text-2xl font-bold text-gray-900">Elite Properties</span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <nav class="hidden md:flex space-x-8 items-center">
                    <a href="index.php" class="text-gray-700 hover:text-gold-600 font-medium transition-colors">Home</a>
                    <a href="services.php" class="text-gray-700 hover:text-gold-600 font-medium transition-colors">Services</a>
                    <a href="index.php#properties" class="text-gray-700 hover:text-gold-600 font-medium transition-colors">Properties</a>
                    <a href="about.php" class="text-gray-700 hover:text-gold-600 font-medium transition-colors">About</a>
                    <a href="index.php#contact" class="text-gray-700 hover:text-gold-600 font-medium transition-colors">Contact</a>
                    <a href="index.php#contact" class="btn-gold text-sm px-5 py-2.5">Schedule a Viewing</a>
                </nav>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-gray-700 hover:text-gold-600 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="index.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-gold-600 hover:bg-gray-50 rounded-md">Home</a>
                <a href="services.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-gold-600 hover:bg-gray-50 rounded-md">Services</a>
                <a href="index.php#properties" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-gold-600 hover:bg-gray-50 rounded-md">Properties</a>
                <a href="about.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-gold-600 hover:bg-gray-50 rounded-md">About</a>
                <a href="index.php#contact" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-gold-600 hover:bg-gray-50 rounded-md">Contact</a>
            </div>
        </div>
    </header>
