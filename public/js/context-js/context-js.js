/*
 * Context.js
 * Copyright Jacob Kelley, Modified by WispX
 * MIT License
 */
window.context = window.context || (function () {

    let options = {
        fadeSpeed: 100,
        filter: function ($obj) {
            // Modify $obj, Do not return
        },
        above: 'auto',
        preventDoubleContext: true,
        compress: false
    };

    function initialize(opts) {

        options = $.extend({}, options, opts);

        $(document).on('click', 'html', function () {
            $('.dropdown-context').fadeOut(options.fadeSpeed, function () {
                $('.dropdown-context').css({display: ''}).find('.drop-left').removeClass('drop-left');
            });
        });
        if (options.preventDoubleContext) {
            $(document).on('contextmenu', '.dropdown-context', function (e) {
                e.preventDefault();
            });
        }
        $(document).on('mouseenter', '.dropdown-submenu', function () {
            let $sub = $(this).find('.dropdown-context-sub:first'),
                subWidth = $sub.width(),
                subLeft = $sub.offset().left,
                collision = (subWidth + subLeft) > window.innerWidth;
            if (collision) {
                $sub.addClass('drop-left');
            }
        });

    }

    function updateOptions(opts) {
        options = $.extend({}, options, opts);
    }

    function buildMenu(event, data, id, subMenu) {
        let subClass = (subMenu) ? ' dropdown-context-sub' : '',
            compressed = options.compress ? ' compressed-context' : '',
            $menu = $('<ul class="dropdown-menu dropdown-context' + subClass + compressed + '" id="dropdown-' + id + '"></ul>');
        let i = 0, linkTarget = '';
        for (i; i < data.length; i++) {
            if (typeof data[i].divider !== 'undefined') {
                $menu.append('<li class="divider"></li>');
            } else if (typeof data[i].header !== 'undefined') {
                $menu.append('<li class="nav-header">' + data[i].header + '</li>');
            } else {
                if (typeof data[i].href == 'undefined') {
                    data[i].href = 'javascript:void(0)';
                }
                if (typeof data[i].target !== 'undefined') {
                    linkTarget = ' target="' + data[i].target + '"';
                }
                let $sub;
                if (typeof data[i].subMenu !== 'undefined') {
                    $sub = $('<li class="dropdown-submenu"><a tabindex="-1" href="' + data[i].href + '">' + data[i].text + '</a></li>');
                } else {
                    $sub = $('<li><a tabindex="-1" href="' + data[i].href + '"' + linkTarget + '>' + data[i].text + '</a></li>');
                }
                // show or hide?
                if (typeof data[i].visible === 'function') {
                    if (! data[i].visible(event)) {
                        $sub.hide();
                    }
                }
                let $a = $sub.find('a');
                // custom classes
                if (typeof data[i].classes !== 'undefined') {
                    for (const classKey in data[i].classes) {
                        $a.addClass(data[i].classes[classKey]);
                    }
                }
                // custom attributes
                if (typeof data[i].attributes !== 'undefined') {
                    for (const attributesKey in data[i].attributes) {
                        $a.attr(attributesKey, data[i].attributes[attributesKey]);
                    }
                }
                // click callback
                if (typeof data[i].action !== 'undefined') {
                    let actionID = 'event-' + new Date().getTime() * Math.floor(Math.random() * 100000),
                        eventAction = data[i].action;
                    $a.attr('id', actionID);
                    $('#' + actionID).addClass('context-event');
                    $(document).on('click', '#' + actionID, function () {
                        eventAction.call(this, event);
                    });
                }
                $menu.append($sub);
                if (typeof data[i].subMenu != 'undefined') {
                    let subMenuData = buildMenu(event, data[i].subMenu, id, true);
                    $menu.find('li:last').append(subMenuData);
                }
            }
            if (typeof options.filter == 'function') {
                options.filter($menu.find('li:last'));
            }
        }
        return $menu;
    }

    /**
     * 添加菜单
     * @param selector 被右击元素
     * @param opts 参数 {
     *     data: Array[Object] {
     *         text: String, // 文本
     *         classes: Array, // class
     *         attributes: Object, // 属性
     *         action: Function, // 点击后的回调 function (e) {}
     *         visible: Function, // 函数返回bool类型，表示显示或隐藏按钮 function (e) {}
     *     }
     *     beforeOpen: Function, // 打开前 function (item) {}
     *     afterOpen: Function, // 打开后 function (item, dropdown) {}
     * }
     */
    function addContext(selector, opts) {
        opts = opts || {};
        let data = opts.data || {};
        let id = new Date().getTime();

        $(document).on('contextmenu', selector, function (e) {
            e.preventDefault();
            e.stopPropagation();

            let item = e.target.closest(selector);
            typeof opts.beforeOpen === 'function' && opts.beforeOpen.call(e, item);

            let $menu = buildMenu(item, data, id);
            // clear dropdowns
            $('body .dropdown-menu.dropdown-context').remove();
            // create dropdown
            $('body').append($menu);

            $('.dropdown-context:not(.dropdown-context-sub)').hide();

            let $dd = $("#dropdown-" + id);

            if (typeof options.above == 'boolean' && options.above) {
                $dd.addClass('dropdown-context-up').css({
                    top: e.pageY - 20 - $('#dropdown-' + id).height(),
                    left: e.pageX - 13
                }).fadeIn(options.fadeSpeed);
            } else if (typeof options.above == 'string' && options.above === 'auto') {
                $dd.removeClass('dropdown-context-up');
                let autoH = $dd.height() + 12;
                if ((e.pageY + autoH) > $('html').height()) {
                    $dd.addClass('dropdown-context-up').css({
                        top: e.pageY - 20 - autoH,
                        left: e.pageX - 13
                    }).fadeIn(options.fadeSpeed);
                } else {
                    $dd.css({
                        top: e.pageY + 10,
                        left: e.pageX - 13
                    }).fadeIn(options.fadeSpeed);
                }
            }

            typeof opts.afterOpen === 'function' && opts.afterOpen.call(e, item, $dd.get(0));
        });
    }

    function destroyContext(selector) {
        $(document).off('contextmenu', selector).off('click', '.context-event');
    }

    return {
        init: initialize,
        settings: updateOptions,
        attach: addContext,
        destroy: destroyContext
    };
})();
