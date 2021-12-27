require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.utils = {
    formatSize(bytes) {
        if (bytes === 0) return '0 B';
        let k = 1024,
            sizes = ['B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'],
            i = Math.floor(Math.log(bytes) / Math.log(k));

        return (bytes / Math.pow(k, i)).toPrecision(3) + ' ' + sizes[i];
    },
    guid() {
        return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, (c) => {
            let r = Math.random() * 16 | 0, v = c === 'x' ? r : (r & 0x3 | 0x8);
            return v.toString(16);
        });
    },
    isMobile() {
        if (navigator.userAgent.match(/Android/i)
            || navigator.userAgent.match(/webOS/i)
            || navigator.userAgent.match(/iPhone/i)
            || navigator.userAgent.match(/iPad/i)
            || navigator.userAgent.match(/iPod/i)
            || navigator.userAgent.match(/BlackBerry/i)
            || navigator.userAgent.match(/Windows Phone/i)
        ) {
            return true;
        }
        return false;
    },
    infiniteScroll(selector, options) {
        if ($(selector).length > 0) {
            let loadingText = options.loadingText || '加载中...';
            let finishedText = options.finishedText || '我也是有底线的~';
            let errorText = options.errorText || '加载失败';
            let offset = options.offset || 30;
            let props = {
                loading: false,
                finished: false,
            };
            $(selector).append(`<div class="infinite-scroll"><span>${loadingText}</span></div>`);
            let $btn = $(selector + ' .infinite-scroll span');

            let opts = {
                url: options.url || '',
                data: {
                    page: 1,
                },
                beforeSend() {
                    props.loading = true;
                    $btn.text(loadingText).addClass('disabled')
                },
                success(response) {
                    options.success && options.success.call(props, response.data);
                },
                complete(data) {
                    props.loading = false;
                    if (props.finished) {
                        // no more
                        $btn.text(finishedText).addClass('disabled')
                    } else {
                        $btn.text('加载更多').removeClass('disabled')
                    }
                    if (opts.data.page !== undefined) {
                        opts.data.page++;
                    }
                    options.complete && options.complete.call(props, data)
                },
                error(error) {
                    // response = error.response
                    $btn.text(errorText).addClass('disabled')
                    setTimeout(() => $btn.text(errorText).removeClass('disabled'), 3000)
                }
            };

            let load = (params, force) => {
                if (!force) {
                    if (props.loading || props.finished) return;
                }
                if (typeof options.data === 'function') {
                    opts.data = options.data(opts.data) || {};
                }
                if (params) {
                    opts.data = $.extend(opts.data, params)
                }

                opts.beforeSend();
                axios.get(opts.url, {params: opts.data}).then(opts.success).catch(opts.error).finally(opts.complete);
            };

            // 首次加载
            load();
            $(selector).off('click').on('click', 'span:not(.disabled)', () => load());

            $(selector).scroll(function () {
                if (this.scrollTop + $(selector).height() >= this.scrollHeight - offset) {
                    load();
                }
            });

            return {
                refresh(params) {
                    load(params, true);
                },
                reset() {
                    opts.data = {page: 1};
                    props.loading = false;
                    props.finished = false;
                    load();
                },
            }
        }
    }
}
