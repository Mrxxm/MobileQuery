## 类自动加载 + 手机号归属地查询

* 调用QueryPhone类(当我们实例化一个未定义的类时，就会触发此函数spl_autoload_register())
* 函数spl_autoload_register(), 触发autoload的load加载方法
* 加载QueryPhone类

#### 访问：

```
http://localhost/autoload/index.html
```


