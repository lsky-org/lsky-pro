require('./bootstrap');

import Alpine from 'alpinejs';
import Sidebar from './stores/sidebar';
import Modal from './stores/modal';

Alpine.store('sidebar', Sidebar);
Alpine.store('modal', Modal);

window.Alpine = Alpine;

Alpine.start();

window.utils = {
    formatSize(bytes, decimal) {
        if (bytes === 0) return '0 B';

        let c = 1024,
            d = decimal || 2,
            e = ["Bytes", "KB", "MB", "GB", "TB", "PB", "EB", "ZB", "YB"],
            f = Math.floor(Math.log(bytes) / Math.log(c));

        return parseFloat((bytes / Math.pow(c, f)).toFixed(d)) + " " + e[f];
    },
    /**
     * 更新进度条
     * @param size 增加的字节(kb)
     * @param total 总共有多少字节(kb)
     */
    setCapacityProgress(size, total) {
        let $progress = $('#capacity-progress');
        if ($progress.length) {
            let used = parseFloat($progress.find('progress').val()) + size;
            $progress.find('progress').val(used);
            $progress.find('span.used').text(utils.formatSize(used * 1024));

            if (total !== undefined && typeof total === 'number') {
                total = parseFloat($progress.find('progress').attr('max')) + total;
                $progress.find('progress').attr('max', total);
                $progress.find('span.total').text(utils.formatSize(total * 1024));
            }
        }
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
            return window.screen.width < 768;
        }
        return false;
    },
    infiniteScroll(selector, options) {
        if ($(selector).length > 0) {
            let classes = options.classes || {};
            let loadingText = options.loadingText || '加载中...';
            let finishedText = options.finishedText || '我也是有底线的~';
            let errorText = options.errorText || '加载失败';
            let offset = options.offset || 30;
            let props = {
                loading: false,
                finished: false,
            };
            $(selector).append(`<div class="infinite-scroll"><span>${loadingText}</span></div>`);
            for (const classesKey in classes) {
                $(selector).find('.infinite-scroll').addClass(classes[classesKey]);
            }
            let $btn = $(selector + ' .infinite-scroll span');

            let opts = {
                url: options.url || '',
                data: {
                    page: 1,
                },
                beforeSend() {
                    props.loading = true;
                    props.finished = false;
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
                    console.log(error)
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
                destroy() {
                    $(selector).unbind('scroll').unbind('click')
                }
            }
        }
    }
}
