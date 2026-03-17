(function (window) {
    const escapeHtml = function (value) {
        return String(value ?? '')
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;')
            .replace(/'/g, '&#039;');
    };

    const copyText = async function (text) {
        const value = String(text ?? '').trim();
        if (!value) return false;
        if (!navigator.clipboard || !navigator.clipboard.writeText) return false;
        try {
            await navigator.clipboard.writeText(value);
            return true;
        } catch (error) {
            return false;
        }
    };

    const renderThumbButtons = function (items, activeIndex, mapper) {
        return (Array.isArray(items) ? items : []).map(function (item, index) {
            const mapped = typeof mapper === 'function' ? (mapper(item, index) || {}) : {};
            const buttonClass = mapped.buttonClass || 'images-carousel-thumb';
            const imageClass = mapped.imageClass || '';
            const title = escapeHtml(mapped.title || '');
            const src = escapeHtml(mapped.src || '');
            const alt = escapeHtml(mapped.alt || '');
            return '<button type="button" class="' + buttonClass + (index === activeIndex ? ' active' : '') + '" data-index="' + index + '" title="' + title + '"><img class="' + imageClass + '" src="' + src + '" alt="' + alt + '"></button>';
        }).join('');
    };

    const normalizeLoopIndex = function (index, length) {
        const total = Number(length || 0);
        if (total <= 0) return 0;
        const normalized = Number(index || 0) % total;
        return normalized < 0 ? normalized + total : normalized;
    };

    const setPanelScrollLocked = function (root, locked) {
        const element = root instanceof Element ? root : null;
        if (!element) return;

        const host = element.closest('.lsky-main');
        if (!host) return;

        host.classList.toggle('media-carousel-open', !!locked);
    };

    window.LskyMediaCarousel = {
        escapeHtml: escapeHtml,
        copyText: copyText,
        renderThumbButtons: renderThumbButtons,
        normalizeLoopIndex: normalizeLoopIndex,
        setPanelScrollLocked: setPanelScrollLocked,
    };
})(window);
