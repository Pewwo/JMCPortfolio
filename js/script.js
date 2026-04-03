// Initialize AOS (Animate on Scroll)
document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        once: true,
        offset: 50,
        duration: 1000, // Slower for minimal feel
        easing: 'ease-out-cubic',
    });
});

// Navbar scroll effect
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        navbar.classList.add('shadow-lg');
        navbar.classList.remove('py-6');
        navbar.classList.add('py-4');
    } else {
        navbar.classList.remove('shadow-lg');
        navbar.classList.add('py-6');
        navbar.classList.remove('py-4');
    }
});

// Mobile Menu Toggle
const mobileMenuBtn = document.getElementById('mobile-menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
const mobileMenuIcon = mobileMenuBtn.querySelector('i');
const mobileLinks = document.querySelectorAll('.mobile-link');

let isMenuOpen = false;

function toggleMenu() {
    isMenuOpen = !isMenuOpen;
    if (isMenuOpen) {
        mobileMenu.classList.remove('hidden');
        setTimeout(() => {
            mobileMenu.classList.remove('opacity-0');
            mobileMenu.classList.add('opacity-100', 'flex');
        }, 10);
        mobileMenuIcon.classList.remove('ph-list');
        mobileMenuIcon.classList.add('ph-x');
        document.body.style.overflow = 'hidden';
    } else {
        mobileMenu.classList.remove('opacity-100');
        mobileMenu.classList.add('opacity-0');
        setTimeout(() => {
            mobileMenu.classList.add('hidden');
            mobileMenu.classList.remove('flex');
        }, 300);
        mobileMenuIcon.classList.remove('ph-x');
        mobileMenuIcon.classList.add('ph-list');
        document.body.style.overflow = 'auto'; // Re-enable scrolling
    }
}

if(mobileMenuBtn) {
    mobileMenuBtn.addEventListener('click', toggleMenu);
}

mobileLinks.forEach(link => {
    link.addEventListener('click', toggleMenu);
});

// Modal Logic for Projects
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if(modal) {
        modal.classList.remove('hidden');
        setTimeout(() => {
            modal.classList.remove('opacity-0');
            modal.classList.add('opacity-100', 'flex');
        }, 10);
        document.body.style.overflow = 'hidden'; // Stop background scrolling
    }
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if(modal) {
        modal.classList.remove('opacity-100');
        modal.classList.add('opacity-0');
        setTimeout(() => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }, 300);
        document.body.style.overflow = 'auto'; // Restore background scrolling
    }
}

// Close modal when clicking outside the content block
document.querySelectorAll('[id^="modal-"]').forEach(modal => {
    modal.addEventListener('click', function(e) {
        if(e.target === this) {
            closeModal(this.id);
        }
    });
});

// Contact Form Handling (AJAX / SMTP simulation)
const contactForm = document.getElementById('contactForm');
const formFeedback = document.getElementById('formFeedback');

if (contactForm) {
    contactForm.addEventListener('submit', async function(e) {
        e.preventDefault();

        // Check if access key is still placeholder
        const accessKey = this.querySelector('input[name="access_key"]').value;
        if (accessKey === 'YOUR_ACCESS_KEY_HERE') {
            formFeedback.classList.remove('hidden');
            formFeedback.innerHTML = `<span class="text-red-500 flex items-center justify-center gap-2 font-medium"><i class="ph ph-warning-circle"></i> Please set your Web3Forms Access Key in index.php</span>`;
            return;
        }
        
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerText;
        submitBtn.innerText = 'Sending...';
        submitBtn.classList.add('opacity-70', 'cursor-not-allowed');
        submitBtn.disabled = true;

        const formData = new FormData(this);

        try {
            const response = await fetch('https://api.web3forms.com/submit', {
                method: 'POST',
                body: formData
            });

            const data = await response.json();

            formFeedback.classList.remove('hidden');
            
            if (data.success) {
                formFeedback.innerHTML = `<span class="text-primary flex items-center justify-center gap-2 font-medium"><i class="ph ph-check-circle"></i> ${data.message}</span>`;
                contactForm.reset();
            } else {
                formFeedback.innerHTML = `<span class="text-red-500 flex items-center justify-center gap-2 font-medium"><i class="ph ph-warning-circle"></i> ${data.message || 'An error occurred.'}</span>`;
            }
        } catch (error) {
            formFeedback.classList.remove('hidden');
            formFeedback.innerHTML = '<span class="text-red-500 flex items-center justify-center gap-2 font-medium"><i class="ph ph-warning-circle"></i> Connection error. Please try again later.</span>';
        } finally {
            setTimeout(() => {
                submitBtn.innerText = originalText;
                submitBtn.classList.remove('opacity-70', 'cursor-not-allowed');
                submitBtn.disabled = false;
            }, 500);
        }
    });
}

// Project Carousel Logic (Internal Navigation Helper)
function navigateCarousel(btn, direction) {
    const carousel = btn.closest('.project-carousel');
    const images = carousel.querySelectorAll('.carousel-inner img');
    if (images.length <= 1) return;

    let currentIndex = Array.from(images).findIndex(img => img.classList.contains('opacity-100'));
    
    // Hide old
    images[currentIndex].classList.remove('opacity-100', 'z-10');
    images[currentIndex].classList.add('opacity-0', 'z-0');
    
    // New index
    currentIndex = (currentIndex + direction + images.length) % images.length;
    
    // Show new
    images[currentIndex].classList.remove('opacity-0', 'z-0');
    images[currentIndex].classList.add('opacity-100', 'z-10');
}

// Automated Carousel Logic (Staggered)
function initCarousels() {
    const carousels = document.querySelectorAll('.project-carousel');
    carousels.forEach((carousel, index) => {
        const images = carousel.querySelectorAll('.carousel-inner img');
        if (images.length <= 1) return;
        
        let currentIndex = 0;
        // Stagger the start based on the element's index (1.2s gap)
        setTimeout(() => {
            setInterval(() => {
                // Hide current
                images[currentIndex].classList.remove('opacity-100', 'z-10');
                images[currentIndex].classList.add('opacity-0', 'z-0');
                
                currentIndex = (currentIndex + 1) % images.length;
                
                // Show next
                images[currentIndex].classList.remove('opacity-0', 'z-0');
                images[currentIndex].classList.add('opacity-100', 'z-10');
            }, 5000);
        }, index * 1200); 
    });
}

// Modal Carousel Manual + Automatic Logic
function initModalCarousels() {
    const modalCarousels = document.querySelectorAll('.modal-carousel');
    modalCarousels.forEach(carousel => {
        const images = carousel.querySelectorAll('.carousel-inner img');
        const prevBtn = carousel.querySelector('.carousel-prev');
        const nextBtn = carousel.querySelector('.carousel-next');
        const counter = carousel.querySelector('.current-slide');
        const total = carousel.querySelector('.total-slides');
        
        if (!images.length || !prevBtn || !nextBtn) return;
        if (total) total.innerText = images.length;
        
        let currentIndex = 0;
        let interval;

        const updateCarousel = (newIndex) => {
            images[currentIndex].classList.remove('opacity-100', 'z-10');
            images[currentIndex].classList.add('opacity-0', 'z-0');
            currentIndex = newIndex;
            images[currentIndex].classList.remove('opacity-0', 'z-0');
            images[currentIndex].classList.add('opacity-100', 'z-10');
            if (counter) counter.innerText = currentIndex + 1;
        };

        const startAuto = () => {
            clearInterval(interval);
            interval = setInterval(() => {
                updateCarousel((currentIndex + 1) % images.length);
            }, 6000);
        };

        prevBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            updateCarousel((currentIndex - 1 + images.length) % images.length);
            startAuto(); // Reset timer
        });

        nextBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            updateCarousel((currentIndex + 1) % images.length);
            startAuto(); // Reset timer
        });

        startAuto();
    });
}

// Lightbox Logic
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightbox-img');

function openLightbox(src) {
    if (!lightbox || !lightboxImg) return;
    lightboxImg.src = src;
    lightbox.classList.remove('hidden');
    setTimeout(() => {
        lightbox.classList.remove('opacity-0');
        lightbox.classList.add('opacity-100', 'flex');
    }, 10);
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    if (!lightbox) return;
    lightbox.classList.remove('opacity-100');
    lightbox.classList.add('opacity-0');
    setTimeout(() => {
        lightbox.classList.add('hidden');
        lightbox.classList.remove('flex');
    }, 300);
    if (!document.querySelector('[id^="modal-"]:not(.hidden)')) {
        document.body.style.overflow = 'auto';
    }
}

function initLightboxLinks() {
    document.querySelectorAll('.modal-carousel .carousel-inner img').forEach(img => {
        img.style.cursor = 'zoom-in';
        img.addEventListener('click', (e) => {
            e.stopPropagation();
            openLightbox(img.src);
        });
    });
}

document.addEventListener('DOMContentLoaded', () => {
    initCarousels();
    initModalCarousels();
    initLightboxLinks();
});
