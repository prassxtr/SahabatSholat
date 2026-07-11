// ===== DETEKSI MODE DARI URL =====
function getCurrentMode() {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get('mode') || 'anak';
}

// ===== SMOOTH SCROLL =====
function scrollToSection(sectionId) {
    const target = document.getElementById(sectionId);
    if (target) {
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        
        // Close mobile menu jika terbuka
        const mobileMenu = document.getElementById('mobile-menu');
        if (mobileMenu) mobileMenu.classList.add('hidden');
    }
}

// ===== TOGGLE MOBILE MENU =====
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileMenu) {
        mobileMenu.classList.toggle('hidden');
    }
}

// ===== TOGGLE SHOLAT TYPE (FARDHU / SUNNAH) =====
function toggleSholatType(type) {
    const btnFardhu = document.getElementById('btn-fardhu');
    const btnSunnah = document.getElementById('btn-sunnah');
    const contentFardhu = document.getElementById('content-fardhu');
    const contentSunnah = document.getElementById('content-sunnah');
    
    if (!btnFardhu || !btnSunnah || !contentFardhu || !contentSunnah) return;

    // Deteksi mode untuk menentukan warna
    const mode = getCurrentMode();
    
    // Warna aktif berdasarkan mode
    const activeClass = mode === 'dewasa' 
        ? 'bg-slate-800 text-white' 
        : 'bg-emerald-600 text-white';
    
    const inactiveClass = mode === 'dewasa'
        ? 'text-slate-600 hover:text-slate-900'
        : 'text-gray-600 hover:text-emerald-700';

    const baseClass = 'text-xs sm:text-sm font-bold px-4 sm:px-6 py-3 rounded-full flex items-center justify-center gap-2 transition-all duration-300 flex-1';
    const inactiveBaseClass = 'text-xs sm:text-sm font-semibold px-4 sm:px-6 py-3 rounded-full flex items-center justify-center gap-2 transition-all duration-300 flex-1';

    if (type === 'fardhu') {
        btnFardhu.className = `${activeClass} ${baseClass} shadow-lg`;
        btnSunnah.className = `${inactiveClass} ${inactiveBaseClass}`;
        contentFardhu.classList.remove('hidden');
        contentSunnah.classList.add('hidden');
    } else {
        btnSunnah.className = `${activeClass} ${baseClass} shadow-lg`;
        btnFardhu.className = `${inactiveClass} ${inactiveBaseClass}`;
        contentSunnah.classList.remove('hidden');
        contentFardhu.classList.add('hidden');
    }
}

// ===== UPDATE ACTIVE STATE BOTTOM NAV =====
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

// ===== INTERSECTION OBSERVER (DETECT SECTION AKTIF) =====
function initIntersectionObserver() {
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
}

// ===== CLOSE MENU ON OUTSIDE CLICK =====
function initOutsideClick() {
    document.addEventListener('click', function(event) {
        const mobileMenu = document.getElementById('mobile-menu');
        const hamburgerBtn = event.target.closest('button[onclick="toggleMobileMenu()"]');
        
        if (mobileMenu && hamburgerBtn && 
            !mobileMenu.contains(event.target) && 
            !hamburgerBtn.contains(event.target) && 
            !mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.add('hidden');
        }
    });
}

// ===== SCROLL LISTENER (FALLBACK) =====
function initScrollListener() {
    let scrollTimeout;
    const container = document.getElementById('scroll-container');
    const sections = document.querySelectorAll('section[id]');
    
    const scrollTarget = container || window;
    
    scrollTarget.addEventListener('scroll', function() {
        clearTimeout(scrollTimeout);
        
        scrollTimeout = setTimeout(function() {
            const scrollPosition = container 
                ? container.scrollTop 
                : window.scrollY;
            
            const headerOffset = 100;
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                const sectionId = section.getAttribute('id');
                
                if (scrollPosition + headerOffset >= sectionTop && 
                    scrollPosition + headerOffset < sectionTop + sectionHeight) {
                    updateBottomNavActive(sectionId);
                }
            });
        }, 50);
    });
}

// ===== INITIALIZE ALL =====
document.addEventListener('DOMContentLoaded', function() {
    console.log('🚀 Mode aktif:', getCurrentMode());
    
    // Initialize semua fungsi
    initIntersectionObserver();
    initOutsideClick();
    initScrollListener();
    
    // Set default active state
    updateBottomNavActive('sec-home');
});