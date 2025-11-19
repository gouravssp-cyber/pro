<?php 
include 'header.php'; 
require_once 'includes/data.php';
$services = getServices();
?>

<main class="pt-20">
    <!-- Header -->
    <section class="bg-gray-900 py-20 text-center text-white">
        <h1 class="text-4xl md:text-5xl font-serif font-bold mb-4">Our Services</h1>
        <p class="text-gray-400 max-w-2xl mx-auto px-4">Comprehensive real estate solutions tailored to your needs.</p>
    </section>

    <!-- Search & Grid -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Search Bar -->
            <div class="max-w-md mx-auto mb-12">
                <div class="relative">
                    <input type="text" id="service-search" placeholder="Search for services..." 
                           class="w-full px-5 py-3 pl-12 rounded-full border border-gray-300 focus:ring-2 focus:ring-gold-500 focus:border-transparent outline-none shadow-sm transition-all">
                    <svg class="w-5 h-5 text-gray-400 absolute left-4 top-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="services-grid">
                <?php foreach ($services as $service): ?>
                <div class="service-card bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group border border-gray-100" data-title="<?php echo strtolower($service['title']); ?>">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo $service['image']; ?>" alt="<?php echo $service['title']; ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="w-12 h-12 bg-gold-50 rounded-lg flex items-center justify-center mb-4 text-gold-600">
                            <?php echo $service['icon']; ?>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2"><?php echo $service['title']; ?></h3>
                        <p class="text-gray-600 mb-4 line-clamp-2"><?php echo $service['short_desc']; ?></p>
                        <button class="text-gold-600 font-medium hover:text-gold-700 inline-flex items-center see-more-btn" 
                                data-id="<?php echo $service['id']; ?>"
                                data-title="<?php echo htmlspecialchars($service['title']); ?>"
                                data-desc="<?php echo htmlspecialchars($service['long_desc']); ?>">
                            See More <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            
            <!-- No Results Message -->
            <div id="no-results" class="hidden text-center py-12">
                <p class="text-gray-500 text-lg">No services found matching your search.</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gold-600 text-white text-center">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl font-serif font-bold mb-4">Ready to Find Your Dream Property?</h2>
            <p class="text-gold-100 mb-8 text-lg">Let our experts guide you through every step of the journey.</p>
            <a href="contact.php" class="inline-block bg-white text-gold-600 px-8 py-3 rounded-md font-bold hover:bg-gray-100 transition-colors">Contact Us Today</a>
        </div>
    </section>
</main>

<!-- Service Modal -->
<div id="service-modal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <!-- Background overlay -->
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true" id="modal-overlay"></div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <!-- Modal panel -->
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                        <h3 class="text-2xl leading-6 font-bold text-gray-900 font-serif mb-4" id="modal-title">Service Title</h3>
                        <div class="mt-2">
                            <p class="text-gray-600 text-base leading-relaxed" id="modal-desc">
                                Service description goes here.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <a href="index.php#contact" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-gold-600 text-base font-medium text-white hover:bg-gold-700 focus:outline-none sm:ml-3 sm:w-auto sm:text-sm">
                    Query
                </a>
                <button type="button" id="modal-cancel" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
