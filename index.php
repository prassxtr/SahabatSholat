<?php 
// Cek mode dari URL, default 'anak'
$mode = isset($_GET['mode']) ? $_GET['mode'] : 'anak';
include 'includes/header.php'; 
?>

<!-- Main Container -->
<div id="scroll-container" class="h-[calc(100vh-64px)] overflow-y-auto snap-y snap-mandatory scroll-smooth w-full no-scrollbar pb-24 md:pb-0">
    
    <?php if ($mode === 'dewasa'): ?>
        <!-- SECTION MODE DEWASA -->
        <?php include 'sections/home-dewasa.php'; ?>
        <?php include 'sections/sholat-dewasa.php'; ?>
        <?php include 'sections/surah-dewasa.php'; ?>
    <?php else: ?>
        <!-- SECTION MODE ANAK (DEFAULT) -->
        <?php include 'sections/home.php'; ?>
        <?php include 'sections/sholat.php'; ?>
        <?php include 'sections/surah.php'; ?>
    <?php endif; ?>

</div>

<?php include 'includes/bottom-nav.php'; ?>
<?php include 'includes/footer.php'; ?>