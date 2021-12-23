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
    infiniteScroll(selector, options) {
        if ($(selector).length > 0) {
            let loadingText = options.loadingText || '加载中...';
            let finishedText = options.finishedText || '我也是有底线的~';
            let errorText = options.errorText || '加载失败';
            let offset = options.offset || 100;
            let loading = false;
            let opts = {
                finished: false,
                url: options.url || '',
                data: {
                    page: 0,
                },
                beforeSend() {
                    loading = true;
                },
                success(response) {
                    if (typeof options.success === 'function') {
                        options.success(response.data);
                    }
                },
                complete() {
                    loading = false;
                }
            };

            let load = () => {
                if (loading) return;
                if (opts.data.page !== undefined) opts.data.page++;
                if (typeof options.data === 'function') {
                    opts.data = options.data(opts.data) || {};
                }
                $.ajax(opts);
            };

            // 首次加载，创建dom
            $(selector)
                .append('<div class="infinite-scroll"><a href="javascript:void(0)">加载中...</a></div>')
                .on('click', '.loading a', () => load());
            load();

            $(selector).scroll(function() {
                if(this.scrollTop + $(selector).height() >= this.scrollHeight - offset) {
                    load();
                }
            });
        }
    }
}
