# yii2-struct

yii2 代码分层结构推荐



**传统**
- Model
- View
- Controller

**增加的2层**
- Service
- Repository


## Service 模式

**应用场景**  

- 牽涉到外部行為 : 如發送Email，使用外部API…。
- 使用PHP寫的邏輯 : 如根據購買的件數，有不同的折扣。

阻塞场景


## Repository `[rɪˈpɒzətri]`

在 CRUD 中，CUD 比較穩定，但 R 的部分則千變萬化，大部分的資料庫邏輯都在描述 R 的部分，若將資料庫邏輯寫在 controller 或 model 都不適當，會造成 controller 與 model 肥大，造成日後難以維護。

使用 repository 之後，model 僅當成Eloquent class 即可，不要包含資料庫邏輯


> **备注**  
> 根据复杂度，一个Model可以拆分成多个Repository  
> Controller 不要直接使用 Repository , 通过注入 Repository 到 Service 层
> Controller 调用 Service 来获取 Repository



## 参考文献

- [Laravel 的中大型專案架構](https://oomusou.io/laravel/architecture/)