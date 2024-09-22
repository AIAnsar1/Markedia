<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## Маршруты

### Главные маршруты

- `GET /` — Главная страница приложения.  
  **Контроллер:** `PostController@index`

### Маршруты отладки (Debugbar)

- `GET|HEAD _debugbar/assets/javascript` — Получить JavaScript для Debugbar.  
  **Контроллер:** `Barryvdh\Debugbar\AssetController@js`

- `GET|HEAD _debugbar/assets/stylesheets` — Получить стили для Debugbar.  
  **Контроллер:** `Barryvdh\Debugbar\AssetController@css`

- `DELETE _debugbar/cache/{key}/{tags?}` — Удалить кэш Debugbar.  
  **Контроллер:** `Barryvdh\Debugbar\CacheController@delete`

- `GET|HEAD _debugbar/clockwork/{id}` — Получить данные для Clockwork.  
  **Контроллер:** `Barryvdh\Debugbar\OpenHandlerController@clockwork`

- `GET|HEAD _debugbar/open` — Открыть обработчик Debugbar.  
  **Контроллер:** `Barryvdh\Debugbar\OpenHandlerController@handle`

- `POST _debugbar/queries/explain` — Объяснить запросы к базе данных.  
  **Контроллер:** `Barryvdh\Debugbar\QueriesController@explain`

### Административные маршруты

#### Категории

- `GET|HEAD admin/categories` — Просмотр списка категорий.  
  **Контроллер:** `Admin\AdminCategoryController@index`

- `POST admin/categories` — Создание новой категории.  
  **Контроллер:** `Admin\AdminCategoryController@store`

- `GET|HEAD admin/categories/create` — Форма создания категории.  
  **Контроллер:** `Admin\AdminCategoryController@create`

- `GET|HEAD admin/categories/{category}` — Просмотр конкретной категории.  
  **Контроллер:** `Admin\AdminCategoryController@show`

- `PUT|PATCH admin/categories/{category}` — Обновление категории.  
  **Контроллер:** `Admin\AdminCategoryController@update`

- `DELETE admin/categories/{category}` — Удаление категории.  
  **Контроллер:** `Admin\AdminCategoryController@destroy`

- `GET|HEAD admin/categories/{category}/edit` — Форма редактирования категории.  
  **Контроллер:** `Admin\AdminCategoryController@edit`

#### Посты

- `GET|HEAD admin/posts` — Просмотр списка постов.  
  **Контроллер:** `Admin\AdminPostController@index`

- `POST admin/posts` — Создание нового поста.  
  **Контроллер:** `Admin\AdminPostController@store`

- `GET|HEAD admin/posts/create` — Форма создания поста.  
  **Контроллер:** `Admin\AdminPostController@create`

- `GET|HEAD admin/posts/{post}` — Просмотр конкретного поста.  
  **Контроллер:** `Admin\AdminPostController@show`

- `PUT|PATCH admin/posts/{post}` — Обновление поста.  
  **Контроллер:** `Admin\AdminPostController@update`

- `DELETE admin/posts/{post}` — Удаление поста.  
  **Контроллер:** `Admin\AdminPostController@destroy`

- `GET|HEAD admin/posts/{post}/edit` — Форма редактирования поста.  
  **Контроллер:** `Admin\AdminPostController@edit`

#### Теги

- `GET|HEAD admin/tags` — Просмотр списка тегов.  
  **Контроллер:** `Admin\AdminTagController@index`

- `POST admin/tags` — Создание нового тега.  
  **Контроллер:** `Admin\AdminTagController@store`

- `GET|HEAD admin/tags/create` — Форма создания тега.  
  **Контроллер:** `Admin\AdminTagController@create`

- `GET|HEAD admin/tags/{tag}` — Просмотр конкретного тега.  
  **Контроллер:** `Admin\AdminTagController@show`

- `PUT|PATCH admin/tags/{tag}` — Обновление тега.  
  **Контроллер:** `Admin\AdminTagController@update`

- `DELETE admin/tags/{tag}` — Удаление тега.  
  **Контроллер:** `Admin\AdminTagController@destroy`

- `GET|HEAD admin/tags/{tag}/edit` — Форма редактирования тега.  
  **Контроллер:** `Admin\AdminTagController@edit`

### Пользовательские маршруты

- `GET|HEAD article/{slug}` — Просмотр статьи по слагу.  
  **Контроллер:** `PostController@show`

- `GET|HEAD category/{slug}` — Просмотр категории по слагу.  
  **Контроллер:** `CategoryController@show`

- `GET|HEAD login` — Форма входа.  
  **Контроллер:** `UserController@loginForm`

- `POST login` — Вход пользователя.  
  **Контроллер:** `UserController@login`

- `GET|HEAD logout` — Выход пользователя.  
  **Контроллер:** `UserController@logout`

- `GET|HEAD register` — Форма регистрации.  
  **Контроллер:** `UserController@create`

- `POST register` — Регистрация пользователя.  
  **Контроллер:** `UserController@store`

- `GET|HEAD search` — Поиск.  
  **Контроллер:** `SearchController@index`

- `GET|HEAD storage/{path}` — Доступ к локальному хранилищу.  
  **Контроллер:** `storage.local`

- `GET|HEAD tag/{slug}` — Просмотр тега по слагу.  
  **Контроллер:** `TagController@show`

---

