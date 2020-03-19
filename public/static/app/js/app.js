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
        loading.fadeIn(200);
      },
      success: success,
      error: error,
      complete: function () {
        loading.fadeOut(50);
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
      date.setTime(date.getTime() - 1);
      document.cookie = key + "=; expires=" + date.toGMTString() + ";path=/";
    },
    /**
     * Has
     * @param key
     * @returns {boolean}
     */
    has: function (key) {
      return app.cookie.get(key) ? true : false;
    }
  },
  /**
   * 字节换算
   * @param bytes
   * @returns {string}
   */
  bytesToSize: function (bytes) {
    if (bytes === 0) return '0 B';
    var k = 1024, sizes = ['B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'],
      i = Math.floor(Math.log(bytes) / Math.log(k));
    return (bytes / Math.pow(k, i)).toFixed(2) + ' ' + sizes[i];
  },
  versionCompare: function (ver, newVer) {
    var sources = ver.split('.');
    var dests = newVer.split('.');
    var maxL = Math.max(sources.length, dests.length);
    var result = 0;
    for (var i = 0; i < maxL; i++) {
      let preValue = sources.length > i ? sources[i] : 0;
      let preNum = isNaN(Number(preValue)) ? preValue.charCodeAt() : Number(preValue);
      let lastValue = dests.length > i ? dests[i] : 0;
      let lastNum = isNaN(Number(lastValue)) ? lastValue.charCodeAt() : Number(lastValue);
      if (preNum < lastNum) {
        result = -1;
        break;
      } else if (preNum > lastNum) {
        result = 1;
        break;
      }
    }
    return result;
  },
  /**
   * 执行更新
   */
  upgrade: function (backup) {
    var loading = false;
    if (loading) return;
    loading = true;
    var content = '<div class="mdui-valign">' +
      '<div class="mdui-spinner mdui-spinner-colorful mdui-m-r-3"></div>' +
      '升级中, 请不要关闭窗口...' +
      '</div>';
    var error = '升级失败, 请稍后重试(帮助文档: <a target="_blank" href="https://www.kancloud.cn/wispx/lsky-pro/1569428">https://www.kancloud.cn/wispx/lsky-pro/1569428</a>)';

    $d = mdui.dialog({
      overlay: true,
      modal: true,
      buttons: [],
      closeOnEsc: false,
      content: content
    });
    $d.$dialog.css({'max-width': '300px'});
    mdui.mutation();
    var upgradeCallback = function () {
      setTimeout(function () {
        $.ajax({
          url: '/admin/system/upgrade.html',
          type: 'POST',
          success: function (res) {
            mdui.alert(res.msg, '系统提示', function () {
              history.go(0);
            }, {
              modal: true,
              closeOnEsc: true,
            });
          },
          complete: function () {
            $d.close();
            loading = false;
          },
          error: function () {
            mdui.alert(error, '系统提示');
          }
        });
      }, 1000)
    };

    if (backup) {
      $.ajax({
        url: '/admin/system/backup.html',
        type: 'POST',
        success: function (res) {
          if (res.code) {
            upgradeCallback();
          } else {
            $d.close();
            loading = false;
            mdui.alert(res.msg, '系统提示', function () {
              history.go(0);
            }, {
              modal: true,
              closeOnEsc: true,
            });
          }
        },
        error: function () {
          $d.close();
          loading = false;
          mdui.alert(error, '系统提示');
        }
      });
    } else {
      upgradeCallback();
    }
  },
  /**
   * 检测版本更新
   * @param ver
   * @param auto
   */
  getLastVer: function (ver, auto) {
    $.ajax({
      url: 'https://api.lsky.pro/releases.php?version=last',
      success: function (response) {
        if (app.versionCompare(ver, response.version) === 0) {
          // 已经是最新版
          auto && app.msg(true, '已经是最新版本');
        } else {
          if (!app.cookie.has('no_update') || auto) {
            mdui.dialog({
              title: '检测到新版本[' + response.version + ']',
              content: '<div class="markdown-body mdui-p-l-3 mdui-p-r-3">' + marked(response.info) + '</div>',
              modal: true,
              history: false,
              buttons: [
                {
                  text: '忽略'
                },
                {
                  text: '不再提示',
                  onClick: function () {
                    app.cookie.set('no_update', true, 30, '/');
                  }
                },
                {
                  text: '立即升级',
                  close: false,
                  onClick: function (inst) {
                    inst.close();
                    mdui.confirm(
                      '将会在升级前备份原系统文件, 但不包括 runtime 和 public 目录以及数据库',
                      '⚠ 是否需要备份原系统?',
                      function () {
                        app.upgrade(true);
                      },
                      function () {
                        app.upgrade(false);
                      },
                      {
                        confirmText: '备份',
                        cancelText: '不备份',
                        modal: true,
                        closeOnEsc: false,
                      }
                    );
                  }
                }
              ]
            });
          }
        }
        auto && app.cookie.delete('no_update');
      }
    });
  },
  toggleTheme: function () {
    var theme = app.cookie.get('theme') || 'light';
    theme = theme === 'dark' ? 'light' : 'dark';
    app.cookie.set('theme', theme, 30, '/');
    $('body')[theme === 'dark' ? 'addClass' : 'removeClass']('mdui-theme-layout-dark');
    $('#set-theme i').html(theme === 'dark' ? '&#xe3ac;' : '&#xe3a9;');
  }
};
