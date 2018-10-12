## 客户端上传

本示例展示了如何使用表单 API, 直接从客户端进行安全的文件上传, 这种方式不需要客户服务器进行中转, 节省了客户服务器流量, 并且支持 HTTP/HTTPS 两种协议

DEMO 使用 `sdkimg` 空间进行演示, 上传成功后, 访问路径为 `http://sdkimg.b0.upaiyun.com/` 拼接保存路径

#### 运行示例

- `cd examples/client-upload`
- `php -S localhost:9000`

打开浏览器访问 `http://localhost:9000`, 选则文件上传即可.
示例中使用 body 签名，避免 header 签名存在跨域失败的情况，因为 `Access-Control-Allow-Headers: *` 兼容性不好，是刚设定的协议[标准](https://github.com/whatwg/fetch)
