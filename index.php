<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section id="home" class="relative h-screen min-h-[600px] flex items-center justify-center overflow-hidden bg-gray-900">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1600596542815-27b88e35eabb?q=80&w=2070&auto=format&fit=crop" alt="Luxury Villa" class="w-full h-full object-cover opacity-60">
            <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/40 to-black/70"></div>
        </div>

        <div class="relative z-10 text-center px-4 max-w-5xl mx-auto">
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif font-bold text-white mb-6 leading-tight animate-fade-in-up">
                Experience Luxury Living in <span class="text-gold-400">Vrindavan</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-200 mb-10 max-w-3xl mx-auto font-light animate-fade-in-up delay-100">
                Discover exceptional residential, commercial, and agricultural properties with trusted expertise and personalized service.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fade-in-up delay-200">
                <a href="#contact" class="btn-gold">Schedule a Viewing</a>
                <a href="#properties" class="btn-outline-gold bg-transparent hover:bg-white/10 text-white border-white hover:border-white">Explore Properties</a>
            </div>
        </div>
    </section>

    <!-- About Section (New) -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative">
                    <div class="absolute -top-4 -left-4 w-24 h-24 bg-gold-100 rounded-tl-3xl -z-10"></div>
                    <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=1973&auto=format&fit=crop" alt="About Elite Properties" class="rounded-xl shadow-xl w-full object-cover h-[500px]">
                    <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-gold-100 rounded-br-3xl -z-10"></div>
                </div>
                <div>
                    <h4 class="text-gold-600 font-bold uppercase tracking-wider mb-2">About Us</h4>
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-gray-900 mb-6">Your Trusted Real Estate Partner in Vrindavan</h2>
                    <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                        Elite Properties was founded with a simple mission: to bring transparency, professionalism, and luxury to the real estate market in Vrindavan and Mathura. With over 15 years of experience, we have established ourselves as the most trusted name in the region.
                    </p>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        Whether you are looking for a spiritual retreat, a commercial investment, or agricultural land, our team of experts is here to guide you every step of the way.
                    </p>
                    <a href="about.php" class="text-gold-600 font-medium hover:text-gold-700 inline-flex items-center text-lg">
                        Read Our Story <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-gray-900 mb-4">Our Services</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Comprehensive real estate solutions designed to exceed your expectations.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="group p-8 bg-white rounded-xl hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-gold-200">
                    <div class="w-14 h-14 bg-gold-50 rounded-lg flex items-center justify-center mb-6 group-hover:bg-gold-600 transition-colors duration-300">
                        <svg class="w-8 h-8 text-gold-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Residential Properties</h3>
                    <p class="text-gray-600 mb-4">Find your dream home, from luxury villas to modern apartments in prime locations.</p>
                    <a href="services.php" class="text-gold-600 font-medium hover:text-gold-700 inline-flex items-center">Learn More <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
                </div>

                <!-- Service 2 -->
                <div class="group p-8 bg-white rounded-xl hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-gold-200">
                    <div class="w-14 h-14 bg-gold-50 rounded-lg flex items-center justify-center mb-6 group-hover:bg-gold-600 transition-colors duration-300">
                        <svg class="w-8 h-8 text-gold-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Commercial Properties</h3>
                    <p class="text-gray-600 mb-4">Strategic spaces for your business growth, including retail shops and office complexes.</p>
                    <a href="services.php" class="text-gold-600 font-medium hover:text-gold-700 inline-flex items-center">Learn More <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
                </div>

                <!-- Service 3 -->
                <div class="group p-8 bg-white rounded-xl hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-gold-200">
                    <div class="w-14 h-14 bg-gold-50 rounded-lg flex items-center justify-center mb-6 group-hover:bg-gold-600 transition-colors duration-300">
                        <svg class="w-8 h-8 text-gold-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Agricultural Land</h3>
                    <p class="text-gray-600 mb-4">Prime agricultural land opportunities for investment and farming purposes.</p>
                    <a href="services.php" class="text-gold-600 font-medium hover:text-gold-700 inline-flex items-center">Learn More <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="services.php" class="btn-outline-gold">View All Services</a>
            </div>
        </div>
    </section>

    <!-- Featured Properties Section -->
    <section id="properties" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-gray-900 mb-4">Featured Properties</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Handpicked premium properties that define luxury living.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Property Card 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group border border-gray-100">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?q=80&w=2071&auto=format&fit=crop" alt="Luxury Villa" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 left-4 bg-gold-600 text-white px-3 py-1 text-sm font-medium rounded-sm">For Sale</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Modern Luxury Villa</h3>
                        <p class="text-gray-500 text-sm mb-4">Vrindavan, Mathura</p>
                        <div class="flex justify-between items-center border-t border-gray-100 pt-4">
                            <span class="text-gold-600 font-bold text-lg">₹1.5 Cr</span>
                            <a href="#contact" class="text-gray-900 font-medium hover:text-gold-600 text-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Property Card 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group border border-gray-100">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop" alt="Commercial Space" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 left-4 bg-gold-600 text-white px-3 py-1 text-sm font-medium rounded-sm">For Rent</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Prime Commercial Space</h3>
                        <p class="text-gray-500 text-sm mb-4">City Center, Mathura</p>
                        <div class="flex justify-between items-center border-t border-gray-100 pt-4">
                            <span class="text-gold-600 font-bold text-lg">₹50,000 / mo</span>
                            <a href="#contact" class="text-gray-900 font-medium hover:text-gold-600 text-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Property Card 3 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group border border-gray-100">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=2064&auto=format&fit=crop" alt="Agricultural Land" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 left-4 bg-gold-600 text-white px-3 py-1 text-sm font-medium rounded-sm">Investment</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Fertile Agricultural Land</h3>
                        <p class="text-gray-500 text-sm mb-4">Outskirts, Vrindavan</p>
                        <div class="flex justify-between items-center border-t border-gray-100 pt-4">
                            <span class="text-gold-600 font-bold text-lg">₹45 Lakhs</span>
                            <a href="#contact" class="text-gray-900 font-medium hover:text-gold-600 text-sm">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-gold-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-4xl font-bold mb-2">2000+</div>
                    <div class="text-gold-100">Happy Clients</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">15+</div>
                    <div class="text-gold-100">Years Experience</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">98%</div>
                    <div class="text-gold-100">Success Rate</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">500+</div>
                    <div class="text-gold-100">Properties Sold</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section (New) -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-gray-900 mb-4">Client Testimonials</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Hear what our satisfied clients have to say about their experience with Elite Properties.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                    <div class="flex text-gold-500 mb-4">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </div>
                    <p class="text-gray-600 mb-6">"Elite Properties helped us find our dream home in Vrindavan. Their team was professional, transparent, and very helpful throughout the process."</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gray-200 rounded-full mr-3"></div>
                        <div>
                            <h4 class="font-bold text-gray-900">Rajesh Kumar</h4>
                            <p class="text-sm text-gray-500">Homeowner</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                    <div class="flex text-gold-500 mb-4">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </div>
                    <p class="text-gray-600 mb-6">"The team at Elite Properties is very knowledgeable and friendly. They found us the perfect commercial space for our new shop."</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gray-200 rounded-full mr-3"></div>
                        <div>
                            <h4 class="font-bold text-gray-900">Anil Verma</h4>
                            <p class="text-sm text-gray-500">Business Owner</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                    <div class="flex text-gold-500 mb-4">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </div>
                    <p class="text-gray-600 mb-6">"Excellent service and great property options. I highly recommend Elite Properties for anyone looking to invest in Mathura."</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gray-200 rounded-full mr-3"></div>
                        <div>
                            <h4 class="font-bold text-gray-900">Priya Sharma</h4>
                            <p class="text-sm text-gray-500">Investor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section (New) -->
    <section class="py-20 bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-serif font-bold text-gray-900 mb-12 text-center">Frequently Asked Questions</h2>
            
            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden">
                    <button class="faq-btn w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none hover:bg-gray-100 transition-colors">
                        <span class="font-medium text-gray-900">How do I schedule a property viewing?</span>
                        <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="faq-content hidden px-6 pb-4 text-gray-600">
                        You can schedule a viewing by calling us directly at +91 7710577030 or by filling out the contact form on our website. Our team will coordinate a convenient time for you.
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden">
                    <button class="faq-btn w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none hover:bg-gray-100 transition-colors">
                        <span class="font-medium text-gray-900">Do you assist with property loans?</span>
                        <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="faq-content hidden px-6 pb-4 text-gray-600">
                        Yes, we have tie-ups with leading banks and financial institutions. Our team assists you with the entire loan application process, ensuring you get the best rates.
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden">
                    <button class="faq-btn w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none hover:bg-gray-100 transition-colors">
                        <span class="font-medium text-gray-900">Are the properties legally verified?</span>
                        <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="faq-content hidden px-6 pb-4 text-gray-600">
                        Absolutely. We only deal in properties with clear titles and complete documentation. Our legal team verifies every property before listing it.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <div>
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-gray-900 mb-6">Get in Touch</h2>
                    <p class="text-gray-600 mb-8">Ready to start your real estate journey? Contact us today for a consultation or to schedule a viewing.</p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center flex-shrink-0 shadow-sm text-gold-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Visit Us</h4>
                                <p class="text-gray-600">Omaxe Eternity, Vrindavan, Mathura, Uttar Pradesh 281121</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center flex-shrink-0 shadow-sm text-gold-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Call Us</h4>
                                <p class="text-gray-600">+91 7710577030, +91 7710377450</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center flex-shrink-0 shadow-sm text-gold-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Email Us</h4>
                                <p class="text-gray-600">judgemridulchaurasiya520@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                    <form action="#" method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                                <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-gold-500 focus:border-gold-500 outline-none transition-colors" placeholder="Your Name">
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                                <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-gold-500 focus:border-gold-500 outline-none transition-colors" placeholder="Your Phone">
                            </div>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-gold-500 focus:border-gold-500 outline-none transition-colors" placeholder="Your Email">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-gold-500 focus:border-gold-500 outline-none transition-colors" placeholder="I am interested in..."></textarea>
                        </div>
                        <button type="submit" class="w-full btn-gold">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>
