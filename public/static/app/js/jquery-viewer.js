/*!
 * jQuery Viewer v1.0.0
 * https://github.com/fengyuanchen/jquery-viewer
 *
 * Copyright (c) 2018 Chen Fengyuan
 * Released under the MIT license
 *
 * Date: 2018-04-01T05:58:29.617Z
 */

(function (global, factory) {
  typeof exports === 'object' && typeof module !== 'undefined' ? factory(require('jquery'), require('viewerjs')) :
    typeof define === 'function' && define.amd ? define(['jquery', 'viewerjs'], factory) :
      (factory(global.jQuery,global.Viewer));
}(this, (function ($,Viewer) { 'use strict';

  $ = $ && $.hasOwnProperty('default') ? $['default'] : $;
  Viewer = Viewer && Viewer.hasOwnProperty('default') ? Viewer['default'] : Viewer;

  if ($.fn) {
    var AnotherViewer = $.fn.viewer;
    var NAMESPACE = 'viewer';

    $.fn.viewer = function jQueryViewer(option) {
      for (var _len = arguments.length, args = Array(_len > 1 ? _len - 1 : 0), _key = 1; _key < _len; _key++) {
        args[_key - 1] = arguments[_key];
      }

      var result = void 0;

      this.each(function (i, element) {
        var $element = $(element);
        var isDestroy = option === 'destroy';
        var viewer = $element.data(NAMESPACE);

        if (!viewer) {
          if (isDestroy) {
            return;
          }

          var options = $.extend({}, $element.data(), $.isPlainObject(option) && option);

          viewer = new Viewer(element, options);
          $element.data(NAMESPACE, viewer);
        }

        if (typeof option === 'string') {
          var fn = viewer[option];

          if ($.isFunction(fn)) {
            result = fn.apply(viewer, args);

            if (result === viewer) {
              result = undefined;
            }

            if (isDestroy) {
              $element.removeData(NAMESPACE);
            }
          }
        }
      });

      return result !== undefined ? result : this;
    };

    $.fn.viewer.Constructor = Viewer;
    $.fn.viewer.setDefaults = Viewer.setDefaults;
    $.fn.viewer.noConflict = function noConflict() {
      $.fn.viewer = AnotherViewer;
      return this;
    };
  }

})));