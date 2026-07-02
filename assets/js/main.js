// Smooth Scroll
function scrollToSection(sectionId) {
    const target = document.getElementById(sectionId);
    if (target) {
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        const mobileMenu = document.getElementById('mobile-menu');
        if (mobileMenu) mobileMenu.classList.add('hidden');
    }
}

// Toggle Mobile Menu
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileMenu) {
        mobileMenu.classList.toggle('hidden');
    }
}

// Toggle Sholat Type
function toggleSholatType(type) {
    const btnFardhu = document.getElementById('btn-fardhu');
    const btnSunnah = document.getElementById('btn-sunnah');
    const contentFardhu = document.getElementById('content-fardhu');
    const contentSunnah = document.getElementById('content-sunnah');
    
    if (!btnFardhu || !btnSunnah || !contentFardhu || !contentSunnah) return;

    if (type === 'fardhu') {
        // Active button (hijau dengan shadow)
        btnFardhu.className = 'bg-emerald-600 text-white text-xs sm:text-sm font-bold px-4 sm:px-6 py-3 rounded-full flex items-center justify-center gap-2 transition-all duration-300 flex-1 shadow-lg';
        
        // Inactive button (putih/abu tanpa shadow)
        btnSunnah.className = 'text-gray-600 text-xs sm:text-sm font-semibold px-4 sm:px-6 py-3 rounded-full flex items-center justify-center gap-2 transition-all duration-300 flex-1 hover:text-emerald-700';
        
        contentFardhu.classList.remove('hidden');
        contentSunnah.classList.add('hidden');
    } else {
        // Active button (hijau dengan shadow)
        btnSunnah.className = 'bg-emerald-600 text-white text-xs sm:text-sm font-bold px-4 sm:px-6 py-3 rounded-full flex items-center justify-center gap-2 transition-all duration-300 flex-1 shadow-lg';
        
        // Inactive button (putih/abu tanpa shadow)
        btnFardhu.className = 'text-gray-600 text-xs sm:text-sm font-semibold px-4 sm:px-6 py-3 rounded-full flex items-center justify-center gap-2 transition-all duration-300 flex-1 hover:text-emerald-700';
        
        contentSunnah.classList.remove('hidden');
        contentFardhu.classList.add('hidden');
    }
}

// Mode Toggle
function initModeToggle() {
    const modeAnak = document.getElementById('mode-anak');
    const modeDewasa = document.getElementById('mode-dewasa');
    const modeAnakMobile = document.getElementById('mode-anak-mobile');
    const modeDewasaMobile = document.getElementById('mode-dewasa-mobile');
    
    function setMode(mode) {
        if (mode === 'anak') {
            if (modeAnak) { modeAnak.classList.add('bg-white', 'text-primary-dark'); modeAnak.classList.remove('text-white'); }
            if (modeDewasa) { modeDewasa.classList.remove('bg-white', 'text-primary-dark'); modeDewasa.classList.add('text-white'); }
            if (modeAnakMobile) { modeAnakMobile.classList.add('bg-white', 'text-primary-dark'); modeAnakMobile.classList.remove('text-emerald-700'); }
            if (modeDewasaMobile) { modeDewasaMobile.classList.remove('bg-white', 'text-primary-dark'); modeDewasaMobile.classList.add('text-emerald-700'); }
        } else {
            if (modeDewasa) { modeDewasa.classList.add('bg-white', 'text-primary-dark'); modeDewasa.classList.remove('text-white'); }
            if (modeAnak) { modeAnak.classList.remove('bg-white', 'text-primary-dark'); modeAnak.classList.add('text-white'); }
            if (modeDewasaMobile) { modeDewasaMobile.classList.add('bg-white', 'text-primary-dark'); modeDewasaMobile.classList.remove('text-emerald-700'); }
            if (modeAnakMobile) { modeAnakMobile.classList.remove('bg-white', 'text-primary-dark'); modeAnakMobile.classList.add('text-emerald-700'); }
        }
    }

    if (modeAnak) modeAnak.addEventListener('click', () => setMode('anak'));
    if (modeDewasa) modeDewasa.addEventListener('click', () => setMode('dewasa'));
    if (modeAnakMobile) modeAnakMobile.addEventListener('click', () => setMode('anak'));
    if (modeDewasaMobile) modeDewasaMobile.addEventListener('click', () => setMode('dewasa'));

    setMode('anak');
}

// ===== INI YANG HILANG - Update Active State Bottom Nav =====
function updateBottomNavActive(sectionId) {
    // Reset semua nav link
    document.querySelectorAll('.nav-link-mobile').forEach(link => {
        link.classList.remove('text-emerald-600');
        link.classList.add('text-gray-400');
    });
    
    // Set yang aktif
    const activeLink = document.querySelector(`.nav-link-mobile[data-target="${sectionId}"]`);
    if (activeLink) {
        activeLink.classList.remove('text-gray-400');
        activeLink.classList.add('text-emerald-600');
    }
}

// Intersection Observer untuk detect section aktif
const container = document.getElementById('scroll-container');
const sections = document.querySelectorAll('section[id]');

if (container && sections.length > 0) {
    const observerOptions = {
        root: container,
        threshold: 0.5 
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const currentId = entry.target.getAttribute('id');
                updateBottomNavActive(currentId);
            }
        });
    }, observerOptions);

    sections.forEach(section => observer.observe(section));
}

// Close menu on outside click
document.addEventListener('click', function(event) {
    const mobileMenu = document.getElementById('mobile-menu');
    const hamburgerBtn = document.querySelector('button[onclick="toggleMobileMenu()"]');
    if (mobileMenu && hamburgerBtn && !mobileMenu.contains(event.target) && !hamburgerBtn.contains(event.target) && !mobileMenu.classList.contains('hidden')) {
        mobileMenu.classList.add('hidden');
    }
});

// Initialize
document.addEventListener('DOMContentLoaded', function() {
    initModeToggle();
    updateBottomNavActive('sec-home'); // Set default active
});