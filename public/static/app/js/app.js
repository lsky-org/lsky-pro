var app = {
  /**
   * ajax
   * @param url
   * @param data
   * @param success
   * @param error
   */
  ajax: function (url, data, success, error) {
    var loading = $('#loading-container');
    $.ajax({
      url: url,
      type: 'post',
      data: data,
      dataType: 'json',
      beforeSend: function () {
        loading.fadeIn(500);
      },
      success: success,
      error: error,
      complete: function () {
        loading.fadeOut(100);
      }
    });
  },
  /**
   * 执行请求
   * @param url       请求地址
   * @param data      数据
   * @param success   后端返回成功后执行的回调
   * @param error     后端返回失败后执行的回调
   * @returns {*|void}
   */
  request: function (url, data, success, error) {
    return app.ajax(url, data, function (response) {
      mdui.snackbar({
        message: "<i class=\"mdui-icon material-icons\">" + (response.code ? '&#xe86c' : '&#xe000') + ";</i> " + response.msg,
        position: 'right-top',
        timeout: response.code ? 1000 : 2000,
        onClose: function () {
          if (response.code) {
            success && success();
          } else {
            error && error();
          }
        }
      });
    });
  },
  /**
   * Msg
   * @param bool
   * @param msg
   * @param callback
   */
  msg: function (bool, msg, callback) {
    mdui.snackbar({
      message: "<i class=\"mdui-icon material-icons\">" + (bool ? '&#xe86c' : '&#xe000') + ";</i> " + msg,
      position: 'right-top',
      timeout: bool ? 1000 : 2000,
      onClose: function () {
        if (bool) callback && callback();
      }
    });
  },
  cookie: {
    /**
     * 设置cookie
     * @param key   cookie名称
     * @param val   cookie值
     * @param time  过期时间(天)
     * @param path  cookie路径
     */
    set: function (key, val, time, path) {
      var date = new Date();
      var expiresDays = time;
      date.setTime(date.getTime() + expiresDays * 24 * 3600 * 1000);
      document.cookie = key + "=" + val + ";expires=" + date.toGMTString() + (path ? (";path=" + path) : '');
    },
    /**
     * 获取cookie
     * @param key cookie名称
     * @returns {*}
     */
    get: function (key) {
      var getCookie = document.cookie.replace(/[ ]/g, "");
      var arrCookie = getCookie.split(";");
      var tips;
      for (var i = 0; i < arrCookie.length; i++) {
        var arr = arrCookie[i].split("=");
        if (key === arr[0]) {
          tips = arr[1];
          break;
        }
      }
      return tips;
    },
    /**
     * 删除cookie
     * @param key
     */
    delete: function (key) {
      var date = new Date();
      date.setTime(date.getTime() - 10000);
      document.cookie = key + "=v; expires =" + date.toGMTString();
    }
  },
  /**
   * 字节换算
   * @param bytes
   * @returns {string}
   */
  bytesToSize: function (bytes) {
    if (bytes === 0) return '0 B';
    var k = 1024, sizes = ['B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'], i = Math.floor(Math.log(bytes) / Math.log(k));
    return (bytes / Math.pow(k, i)).toFixed(2) + ' ' + sizes[i];
  }
};