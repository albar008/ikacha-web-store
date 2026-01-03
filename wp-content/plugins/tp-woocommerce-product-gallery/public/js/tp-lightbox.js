/**
 * TP Simple Lightbox - Secure and lightweight lightbox
 * Replaces lightGallery to fix DOM-based XSS vulnerability
 */

class TPLightbox {
    constructor() {
        this.currentIndex = 0;
        this.images = [];
        this.isOpen = false;
        this.init();
    }

    init() {
        this.createLightboxHTML();
        this.bindEvents();
    }

    createLightboxHTML() {
        // Create lightbox container
        const lightboxHTML = `
            <div id="tp-lightbox" class="tp-lightbox" style="display: none;">
                <div class="tp-lightbox-overlay"></div>
                <div class="tp-lightbox-container">
                    <button class="tp-lightbox-close" aria-label="Close">&times;</button>
                    <button class="tp-lightbox-prev" aria-label="Previous">&#8249;</button>
                    <button class="tp-lightbox-next" aria-label="Next">&#8250;</button>
                    <div class="tp-lightbox-content">
                        <img class="tp-lightbox-image" src="" alt="">
                        <div class="tp-lightbox-caption"></div>
                    </div>
                    <div class="tp-lightbox-counter"></div>
                </div>
            </div>
        `;
        
        // Add to body if not exists
        if (!document.getElementById('tp-lightbox')) {
            document.body.insertAdjacentHTML('beforeend', lightboxHTML);
        }
    }

    bindEvents() {
        const lightbox = document.getElementById('tp-lightbox');
        if (!lightbox) return;

        // Close events
        lightbox.querySelector('.tp-lightbox-close').addEventListener('click', () => this.close());
        lightbox.querySelector('.tp-lightbox-overlay').addEventListener('click', () => this.close());
        
        // Navigation events
        lightbox.querySelector('.tp-lightbox-prev').addEventListener('click', () => this.prev());
        lightbox.querySelector('.tp-lightbox-next').addEventListener('click', () => this.next());
        
        // Keyboard events
        document.addEventListener('keydown', (e) => {
            if (!this.isOpen) return;
            
            switch(e.key) {
                case 'Escape':
                    this.close();
                    break;
                case 'ArrowLeft':
                    this.prev();
                    break;
                case 'ArrowRight':
                    this.next();
                    break;
            }
        });
    }

    open(images, startIndex = 0) {
        this.images = images;
        this.currentIndex = startIndex;
        this.isOpen = true;
        
        const lightbox = document.getElementById('tp-lightbox');
        lightbox.style.display = 'block';
        document.body.style.overflow = 'hidden';
        
        this.showImage();
        this.updateNavigation();
        this.updateCounter();
        
        // Add fade in animation
        setTimeout(() => {
            lightbox.classList.add('tp-lightbox-active');
        }, 10);
    }

    close() {
        const lightbox = document.getElementById('tp-lightbox');
        lightbox.classList.remove('tp-lightbox-active');
        
        setTimeout(() => {
            lightbox.style.display = 'none';
            document.body.style.overflow = '';
            this.isOpen = false;
        }, 300);
    }

    showImage() {
        if (!this.images[this.currentIndex]) return;

        const image = document.querySelector('.tp-lightbox-image');
        const caption = document.querySelector('.tp-lightbox-caption');
        const currentImg = this.images[this.currentIndex];

        // Hide image while loading
        image.style.opacity = '0';

        // Safely set image source (no XSS risk)
        image.src = currentImg.src;
        image.alt = currentImg.alt || '';

        // Show image when loaded
        image.onload = function() {
            image.style.opacity = '1';
        };

        // Safely set caption (escape HTML to prevent XSS)
        if (currentImg.caption) {
            caption.textContent = currentImg.caption;
            caption.style.display = 'inline-block';
        } else {
            caption.style.display = 'none';
        }
    }

    prev() {
        if (this.currentIndex > 0) {
            this.currentIndex--;
            this.showImage();
            this.updateNavigation();
            this.updateCounter();
        }
    }

    next() {
        if (this.currentIndex < this.images.length - 1) {
            this.currentIndex++;
            this.showImage();
            this.updateNavigation();
            this.updateCounter();
        }
    }

    updateNavigation() {
        const prevBtn = document.querySelector('.tp-lightbox-prev');
        const nextBtn = document.querySelector('.tp-lightbox-next');
        
        // Show/hide navigation buttons
        prevBtn.style.display = this.currentIndex > 0 ? 'block' : 'none';
        nextBtn.style.display = this.currentIndex < this.images.length - 1 ? 'block' : 'none';
    }

    updateCounter() {
        const counter = document.querySelector('.tp-lightbox-counter');
        if (this.images.length > 1) {
            counter.textContent = `${this.currentIndex + 1} / ${this.images.length}`;
            counter.style.display = 'block';
        } else {
            counter.style.display = 'none';
        }
    }
}

// Initialize lightbox when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    window.tpLightbox = new TPLightbox();
});

// Helper function to open lightbox from gallery
function openTPLightbox(images, startIndex = 0) {
    if (window.tpLightbox) {
        window.tpLightbox.open(images, startIndex);
    }
}
