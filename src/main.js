import './css/style.css';

console.log('Elite Properties - Main JS Loaded');

// Mobile Menu Toggle
const mobileMenuBtn = document.getElementById('mobile-menu-btn');
const mobileMenu = document.getElementById('mobile-menu');

if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
}

// Service Search Functionality
const searchInput = document.getElementById('service-search');
const serviceCards = document.querySelectorAll('.service-card');
const noResultsMsg = document.getElementById('no-results');

if (searchInput) {
    searchInput.addEventListener('input', (e) => {
        const searchTerm = e.target.value.toLowerCase();
        let hasResults = false;

        serviceCards.forEach(card => {
            const title = card.getAttribute('data-title');
            if (title.includes(searchTerm)) {
                card.style.display = 'block';
                hasResults = true;
            } else {
                card.style.display = 'none';
            }
        });

        if (noResultsMsg) {
            noResultsMsg.classList.toggle('hidden', hasResults);
        }
    });
}

// Service Modal Functionality
const modal = document.getElementById('service-modal');
const modalTitle = document.getElementById('modal-title');
const modalDesc = document.getElementById('modal-desc');
const modalCancel = document.getElementById('modal-cancel');
const modalOverlay = document.getElementById('modal-overlay');
const seeMoreBtns = document.querySelectorAll('.see-more-btn');

function openModal(title, desc) {
    if (modal && modalTitle && modalDesc) {
        modalTitle.textContent = title;
        modalDesc.textContent = desc;
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden'; // Prevent background scrolling
    }
}

function closeModal() {
    if (modal) {
        modal.classList.add('hidden');
        document.body.style.overflow = '';
    }
}

seeMoreBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        const title = btn.getAttribute('data-title');
        const desc = btn.getAttribute('data-desc');
        openModal(title, desc);
    });
});

if (modalCancel) modalCancel.addEventListener('click', closeModal);
if (modalOverlay) modalOverlay.addEventListener('click', closeModal);

// FAQ Accordion
const faqBtns = document.querySelectorAll('.faq-btn');

faqBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        const content = btn.nextElementSibling;
        const icon = btn.querySelector('svg');

        // Toggle current
        content.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');

        // Close others (optional, but good UX)
        faqBtns.forEach(otherBtn => {
            if (otherBtn !== btn) {
                otherBtn.nextElementSibling.classList.add('hidden');
                otherBtn.querySelector('svg').classList.remove('rotate-180');
            }
        });
    });
});
