import Alpine from 'alpinejs';

window.Alpine = Alpine;

document.addEventListener('alpine:init', () => {
    Alpine.data('portfolioCases', (cases = []) => ({
        cases,
        open: false,
        currentCase: null,
        previewMode: 'desktop', // desktop | mobile
        iframeFailed: false,

        get hasDemo() {
            const url = this.currentCase?.demoUrl;
            // Only external/live demos in iframe — ignore #anchors like #contact
            return Boolean(url && !url.startsWith('#'));
        },

        isVideo(src) {
            if (! src || typeof src !== 'string') {
                return false;
            }

            return /\.(mp4|webm|mov|ogg)(\?.*)?$/i.test(src);
        },

        mediaSrc(item, mode = 'desktop') {
            if (! item) {
                return '';
            }

            if (mode === 'mobile') {
                return item.videoMobile || item.imageMobile || item.video || item.image || '';
            }

            return item.video || item.image || '';
        },

        openModal(index, mode = 'desktop') {
            this.currentCase = this.cases[index] ?? null;
            if (! this.currentCase) {
                return;
            }

            this.previewMode = mode === 'mobile' ? 'mobile' : 'desktop';
            this.iframeFailed = false;
            this.open = true;
            document.body.style.overflow = 'hidden';
        },

        setPreviewMode(mode) {
            this.previewMode = mode;
            this.iframeFailed = false;
        },

        closeModal() {
            this.open = false;
            this.currentCase = null;
            this.previewMode = 'desktop';
            this.iframeFailed = false;
            document.body.style.overflow = '';
        },
    }));
});

Alpine.start();
