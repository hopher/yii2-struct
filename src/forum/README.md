# YII2 模块使用

## 目录结构

```
|-- commands 命令行脚本
|-- controllers 控制器
|-- models      模型
|-- repositories 仓储
|-- services    服务层
```


### Repository 仓储层

使用 repository 之后，model 仅当成 ActiveRecord 即可，不要包含资料库逻辑



### commands 命令行

存放命令行，php 运行脚本

### Service 服务层

- 牵涉到外部行为 : 如发送Email，使用外部API…。
- 使用PHP写的逻辑 : 如根据购买的件数，有不同的折扣。

> **备注**  
> 根据复杂度，一个Model可以拆分成多个Repository  
> Controller 不要直接使用 Repository , 通过注入 Repository 到 Service 层， 调用 Service 来获取 Repository





## 使用模块

在 `config/web.php` 和 `config/console.php` 中添加下面代码

```
[
    'modules' => [
        'forum' => [
            'class' => 'app\modules\forum\Module',
            // ... 模块其他配置 ...
        ],
    ],
]
```

## 参考资料
- [YII2 模块](https://www.yiichina.com/doc/guide/2.0/structure-modules)
- [Laravel 的中大型專案架構](https://oomusou.io/laravel/architecture/)