# 简介
 这是一个使用`maliboot`的项目骨架。此项目基于[`hyperf/hyperf-skeleton`](https://github.com/hyperf/hyperf-skeleton)，并
 适配`maliboot`的需求构建而成。

# 安装依赖
 - PHP >= 8.0
 - 框架引擎，两者选其一
   - Swoole PHP extension >= 4.5，在`php.ini`设置`swoole.use_shortname=Off`
   - Swow PHP extension (可二进制打包项目)
 - JSON PHP extension
 - Pcntl PHP extension
 - OpenSSL PHP extension （HTTPS必须）
 - PDO PHP extension （Mysql客户端必须）
 - Redis PHP extension （Redis客户端必须）
 - Protobuf PHP extension （GRPC必须）

# 安装项目骨架
```bash
$ composer create-project maliboot/maliboot-skeleton path/to/install
```
安装完后，运行项目

```bash
$ cd path/to/install
$ php bin/hyperf.php start
```

服务默认监听 `9501` 端口，打开浏览器，访问`127.0.0.1:9501`，访问项目首页
