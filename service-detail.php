<?php 
include 'header.php'; 
require_once 'includes/data.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$services = getServices();
$service = null;

foreach ($services as $s) {
    if ($s['id'] === $id) {
        $service = $s;
        break;
    }
}

if (!$service) {
    echo "<script>window.location.href = 'services.php';</script>";
    exit;
}
?>

<main class="pt-20">
    <section class="relative h-[50vh] min-h-[400px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="<?php echo $service['image']; ?>" alt="<?php echo $service['title']; ?>" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/60"></div>
        </div>
        <div class="relative z-10 text-center text-white px-4">
            <h1 class="text-4xl md:text-6xl font-serif font-bold mb-4"><?php echo $service['title']; ?></h1>
            <a href="services.php" class="inline-flex items-center text-gold-400 hover:text-white transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                Back to Services
            </a>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-lg p-8 md:p-12 -mt-20 relative z-20">
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-16 h-16 bg-gold-100 rounded-xl flex items-center justify-center text-gold-600">
                        <?php echo $service['icon']; ?>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900">Overview</h2>
                </div>
                
                <div class="prose prose-lg text-gray-600 max-w-none mb-12">
                    <p><?php echo $service['long_desc']; ?></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <div class="border-t border-gray-100 pt-8 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Interested in this service?</h3>
                    <a href="index.php#contact" class="btn-gold">Contact Us Now</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>
