[19-Nov-2020 10:37:05 Europe/Kiev] PHP Fatal error:  Uncaught Error: Call to undefined method stdClass::destroy() in /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php:130
Stack trace:
#0 /home/janus/www/php-w19-unit_08/core/Router.php(101): CategoryController->delete()
#1 /home/janus/www/php-w19-unit_08/core/Router.php(67): Router->init()
#2 /home/janus/www/php-w19-unit_08/core/App.php(38): Router->run()
#3 /home/janus/www/php-w19-unit_08/bootstrap/app.php(37): App->run()
#4 /home/janus/www/php-w19-unit_08/public/index.php(12): require_once('/home/janus/www...')
#5 {main}
  thrown in /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php on line 130
[19-Nov-2020 10:43:36 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-w19-unit_08/app/Views/admin/categories/delete.php on line 5
[19-Nov-2020 10:43:36 Europe/Kiev] PHP Stack trace:
[19-Nov-2020 10:43:36 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-w19-unit_08/public/index.php:0
[19-Nov-2020 10:43:36 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-w19-unit_08/public/index.php:12
[19-Nov-2020 10:43:36 Europe/Kiev] PHP   3. App->run() /home/janus/www/php-w19-unit_08/bootstrap/app.php:37
[19-Nov-2020 10:43:36 Europe/Kiev] PHP   4. Router->run() /home/janus/www/php-w19-unit_08/core/App.php:38
[19-Nov-2020 10:43:36 Europe/Kiev] PHP   5. Router->init() /home/janus/www/php-w19-unit_08/core/Router.php:67
[19-Nov-2020 10:43:36 Europe/Kiev] PHP   6. CategoryController->delete() /home/janus/www/php-w19-unit_08/core/Router.php:101
[19-Nov-2020 10:43:36 Europe/Kiev] PHP   7. View->render() /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php:137
[19-Nov-2020 10:43:36 Europe/Kiev] PHP   8. require() /home/janus/www/php-w19-unit_08/core/View.php:35
[19-Nov-2020 10:43:36 Europe/Kiev] PHP   9. include() /home/janus/www/php-w19-unit_08/app/Views/layouts/admin.php:19
[19-Nov-2020 10:46:48 Europe/Kiev] PHP Notice:  Undefined offset: 404 in /home/janus/www/php-w19-unit_08/core/Router.php on line 70
[19-Nov-2020 10:46:48 Europe/Kiev] PHP Stack trace:
[19-Nov-2020 10:46:48 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-w19-unit_08/public/index.php:0
[19-Nov-2020 10:46:48 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-w19-unit_08/public/index.php:12
[19-Nov-2020 10:46:48 Europe/Kiev] PHP   3. App->run() /home/janus/www/php-w19-unit_08/bootstrap/app.php:37
[19-Nov-2020 10:46:48 Europe/Kiev] PHP   4. Router->run() /home/janus/www/php-w19-unit_08/core/App.php:38
[19-Nov-2020 10:46:48 Europe/Kiev] PHP Notice:  Undefined offset: 1 in /home/janus/www/php-w19-unit_08/core/Router.php on line 76
[19-Nov-2020 10:46:48 Europe/Kiev] PHP Stack trace:
[19-Nov-2020 10:46:48 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-w19-unit_08/public/index.php:0
[19-Nov-2020 10:46:48 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-w19-unit_08/public/index.php:12
[19-Nov-2020 10:46:48 Europe/Kiev] PHP   3. App->run() /home/janus/www/php-w19-unit_08/bootstrap/app.php:37
[19-Nov-2020 10:46:48 Europe/Kiev] PHP   4. Router->run() /home/janus/www/php-w19-unit_08/core/App.php:38
[19-Nov-2020 10:46:48 Europe/Kiev] PHP   5. Router->getController() /home/janus/www/php-w19-unit_08/core/Router.php:70
[19-Nov-2020 10:46:48 Europe/Kiev] PHP Fatal error:  Uncaught Exception: File /home/janus/www/php-w19-unit_08/app/Controllers/.php does not exists. in /home/janus/www/php-w19-unit_08/core/Router.php:97
Stack trace:
#0 /home/janus/www/php-w19-unit_08/core/Router.php(70): Router->init()
#1 /home/janus/www/php-w19-unit_08/core/App.php(38): Router->run()
#2 /home/janus/www/php-w19-unit_08/bootstrap/app.php(37): App->run()
#3 /home/janus/www/php-w19-unit_08/public/index.php(12): require_once('/home/janus/www...')
#4 {main}
  thrown in /home/janus/www/php-w19-unit_08/core/Router.php on line 97
[19-Nov-2020 10:47:51 Europe/Kiev] PHP Notice:  Undefined offset: 404 in /home/janus/www/php-w19-unit_08/core/Router.php on line 70
[19-Nov-2020 10:47:51 Europe/Kiev] PHP Stack trace:
[19-Nov-2020 10:47:51 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-w19-unit_08/public/index.php:0
[19-Nov-2020 10:47:51 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-w19-unit_08/public/index.php:12
[19-Nov-2020 10:47:51 Europe/Kiev] PHP   3. App->run() /home/janus/www/php-w19-unit_08/bootstrap/app.php:37
[19-Nov-2020 10:47:51 Europe/Kiev] PHP   4. Router->run() /home/janus/www/php-w19-unit_08/core/App.php:38
[19-Nov-2020 10:47:51 Europe/Kiev] PHP Notice:  Undefined offset: 1 in /home/janus/www/php-w19-unit_08/core/Router.php on line 76
[19-Nov-2020 10:47:51 Europe/Kiev] PHP Stack trace:
[19-Nov-2020 10:47:51 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-w19-unit_08/public/index.php:0
[19-Nov-2020 10:47:51 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-w19-unit_08/public/index.php:12
[19-Nov-2020 10:47:51 Europe/Kiev] PHP   3. App->run() /home/janus/www/php-w19-unit_08/bootstrap/app.php:37
[19-Nov-2020 10:47:51 Europe/Kiev] PHP   4. Router->run() /home/janus/www/php-w19-unit_08/core/App.php:38
[19-Nov-2020 10:47:51 Europe/Kiev] PHP   5. Router->getController() /home/janus/www/php-w19-unit_08/core/Router.php:70
[19-Nov-2020 10:47:51 Europe/Kiev] PHP Fatal error:  Uncaught Exception: File /home/janus/www/php-w19-unit_08/app/Controllers/.php does not exists. in /home/janus/www/php-w19-unit_08/core/Router.php:97
Stack trace:
#0 /home/janus/www/php-w19-unit_08/core/Router.php(70): Router->init()
#1 /home/janus/www/php-w19-unit_08/core/App.php(38): Router->run()
#2 /home/janus/www/php-w19-unit_08/bootstrap/app.php(37): App->run()
#3 /home/janus/www/php-w19-unit_08/public/index.php(12): require_once('/home/janus/www...')
#4 {main}
  thrown in /home/janus/www/php-w19-unit_08/core/Router.php on line 97
[19-Nov-2020 10:48:18 Europe/Kiev] PHP Warning:  move_uploaded_file(/home/janus/www/php-w19-unit_08/public/assets/images/images/categories//645048b474d055d5678e921c436c7c3453950de81605775698): failed to open stream: No such file or directory in /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php on line 41
[19-Nov-2020 10:48:18 Europe/Kiev] PHP Stack trace:
[19-Nov-2020 10:48:18 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-w19-unit_08/public/index.php:0
[19-Nov-2020 10:48:18 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-w19-unit_08/public/index.php:12
[19-Nov-2020 10:48:18 Europe/Kiev] PHP   3. App->run() /home/janus/www/php-w19-unit_08/bootstrap/app.php:37
[19-Nov-2020 10:48:18 Europe/Kiev] PHP   4. Router->run() /home/janus/www/php-w19-unit_08/core/App.php:38
[19-Nov-2020 10:48:18 Europe/Kiev] PHP   5. Router->init() /home/janus/www/php-w19-unit_08/core/Router.php:58
[19-Nov-2020 10:48:18 Europe/Kiev] PHP   6. CategoryController->store() /home/janus/www/php-w19-unit_08/core/Router.php:101
[19-Nov-2020 10:48:18 Europe/Kiev] PHP   7. CategoryController->upload() /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php:79
[19-Nov-2020 10:48:18 Europe/Kiev] PHP   8. move_uploaded_file() /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php:41
[19-Nov-2020 10:48:18 Europe/Kiev] PHP Warning:  move_uploaded_file(): Unable to move '/tmp/phpyShXpA' to '/home/janus/www/php-w19-unit_08/public/assets/images/images/categories//645048b474d055d5678e921c436c7c3453950de81605775698' in /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php on line 41
[19-Nov-2020 10:48:18 Europe/Kiev] PHP Stack trace:
[19-Nov-2020 10:48:18 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-w19-unit_08/public/index.php:0
[19-Nov-2020 10:48:18 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-w19-unit_08/public/index.php:12
[19-Nov-2020 10:48:18 Europe/Kiev] PHP   3. App->run() /home/janus/www/php-w19-unit_08/bootstrap/app.php:37
[19-Nov-2020 10:48:18 Europe/Kiev] PHP   4. Router->run() /home/janus/www/php-w19-unit_08/core/App.php:38
[19-Nov-2020 10:48:18 Europe/Kiev] PHP   5. Router->init() /home/janus/www/php-w19-unit_08/core/Router.php:58
[19-Nov-2020 10:48:18 Europe/Kiev] PHP   6. CategoryController->store() /home/janus/www/php-w19-unit_08/core/Router.php:101
[19-Nov-2020 10:48:18 Europe/Kiev] PHP   7. CategoryController->upload() /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php:79
[19-Nov-2020 10:48:18 Europe/Kiev] PHP   8. move_uploaded_file() /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php:41
[19-Nov-2020 10:48:19 Europe/Kiev] PHP Warning:  Cannot modify header information - headers already sent by (output started at /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php:41) in /home/janus/www/php-w19-unit_08/core/Redirector.php on line 6
[19-Nov-2020 10:48:19 Europe/Kiev] PHP Stack trace:
[19-Nov-2020 10:48:19 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-w19-unit_08/public/index.php:0
[19-Nov-2020 10:48:19 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-w19-unit_08/public/index.php:12
[19-Nov-2020 10:48:19 Europe/Kiev] PHP   3. App->run() /home/janus/www/php-w19-unit_08/bootstrap/app.php:37
[19-Nov-2020 10:48:19 Europe/Kiev] PHP   4. Router->run() /home/janus/www/php-w19-unit_08/core/App.php:38
[19-Nov-2020 10:48:19 Europe/Kiev] PHP   5. Router->init() /home/janus/www/php-w19-unit_08/core/Router.php:58
[19-Nov-2020 10:48:19 Europe/Kiev] PHP   6. CategoryController->store() /home/janus/www/php-w19-unit_08/core/Router.php:101
[19-Nov-2020 10:48:19 Europe/Kiev] PHP   7. Redirector->redirect() /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php:87
[19-Nov-2020 10:48:19 Europe/Kiev] PHP   8. header() /home/janus/www/php-w19-unit_08/core/Redirector.php:6
[19-Nov-2020 10:50:06 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-w19-unit_08/app/Views/admin/categories/delete.php on line 5
[19-Nov-2020 10:50:06 Europe/Kiev] PHP Stack trace:
[19-Nov-2020 10:50:06 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-w19-unit_08/public/index.php:0
[19-Nov-2020 10:50:06 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-w19-unit_08/public/index.php:12
[19-Nov-2020 10:50:06 Europe/Kiev] PHP   3. App->run() /home/janus/www/php-w19-unit_08/bootstrap/app.php:37
[19-Nov-2020 10:50:06 Europe/Kiev] PHP   4. Router->run() /home/janus/www/php-w19-unit_08/core/App.php:38
[19-Nov-2020 10:50:06 Europe/Kiev] PHP   5. Router->init() /home/janus/www/php-w19-unit_08/core/Router.php:67
[19-Nov-2020 10:50:06 Europe/Kiev] PHP   6. CategoryController->delete() /home/janus/www/php-w19-unit_08/core/Router.php:101
[19-Nov-2020 10:50:06 Europe/Kiev] PHP   7. View->render() /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php:135
[19-Nov-2020 10:50:06 Europe/Kiev] PHP   8. require() /home/janus/www/php-w19-unit_08/core/View.php:35
[19-Nov-2020 10:50:06 Europe/Kiev] PHP   9. include() /home/janus/www/php-w19-unit_08/app/Views/layouts/admin.php:19
[19-Nov-2020 10:51:48 Europe/Kiev] PHP Fatal error:  Uncaught Error: Call to undefined method stdClass::update() in /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php:119
Stack trace:
#0 /home/janus/www/php-w19-unit_08/core/Router.php(101): CategoryController->update()
#1 /home/janus/www/php-w19-unit_08/core/Router.php(58): Router->init()
#2 /home/janus/www/php-w19-unit_08/core/App.php(38): Router->run()
#3 /home/janus/www/php-w19-unit_08/bootstrap/app.php(37): App->run()
#4 /home/janus/www/php-w19-unit_08/public/index.php(12): require_once('/home/janus/www...')
#5 {main}
  thrown in /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php on line 119
[19-Nov-2020 10:57:51 Europe/Kiev] PHP Warning:  unlink(/home/janus/www/php-w19-unit_08/public/assets/images/categories//): Is a directory in /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php on line 116
[19-Nov-2020 10:57:51 Europe/Kiev] PHP Stack trace:
[19-Nov-2020 10:57:51 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-w19-unit_08/public/index.php:0
[19-Nov-2020 10:57:51 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-w19-unit_08/public/index.php:12
[19-Nov-2020 10:57:51 Europe/Kiev] PHP   3. App->run() /home/janus/www/php-w19-unit_08/bootstrap/app.php:37
[19-Nov-2020 10:57:51 Europe/Kiev] PHP   4. Router->run() /home/janus/www/php-w19-unit_08/core/App.php:38
[19-Nov-2020 10:57:51 Europe/Kiev] PHP   5. Router->init() /home/janus/www/php-w19-unit_08/core/Router.php:58
[19-Nov-2020 10:57:51 Europe/Kiev] PHP   6. CategoryController->update() /home/janus/www/php-w19-unit_08/core/Router.php:101
[19-Nov-2020 10:57:51 Europe/Kiev] PHP   7. unlink() /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php:116
[19-Nov-2020 10:59:53 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-w19-unit_08/app/Views/admin/categories/delete.php on line 5
[19-Nov-2020 10:59:53 Europe/Kiev] PHP Stack trace:
[19-Nov-2020 10:59:53 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-w19-unit_08/public/index.php:0
[19-Nov-2020 10:59:53 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-w19-unit_08/public/index.php:12
[19-Nov-2020 10:59:53 Europe/Kiev] PHP   3. App->run() /home/janus/www/php-w19-unit_08/bootstrap/app.php:37
[19-Nov-2020 10:59:53 Europe/Kiev] PHP   4. Router->run() /home/janus/www/php-w19-unit_08/core/App.php:38
[19-Nov-2020 10:59:53 Europe/Kiev] PHP   5. Router->init() /home/janus/www/php-w19-unit_08/core/Router.php:67
[19-Nov-2020 10:59:53 Europe/Kiev] PHP   6. CategoryController->delete() /home/janus/www/php-w19-unit_08/core/Router.php:101
[19-Nov-2020 10:59:53 Europe/Kiev] PHP   7. View->render() /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php:137
[19-Nov-2020 10:59:53 Europe/Kiev] PHP   8. require() /home/janus/www/php-w19-unit_08/core/View.php:35
[19-Nov-2020 10:59:53 Europe/Kiev] PHP   9. include() /home/janus/www/php-w19-unit_08/app/Views/layouts/admin.php:19
[19-Nov-2020 11:00:57 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-w19-unit_08/app/Views/admin/categories/delete.php on line 5
[19-Nov-2020 11:00:57 Europe/Kiev] PHP Stack trace:
[19-Nov-2020 11:00:57 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-w19-unit_08/public/index.php:0
[19-Nov-2020 11:00:57 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-w19-unit_08/public/index.php:12
[19-Nov-2020 11:00:57 Europe/Kiev] PHP   3. App->run() /home/janus/www/php-w19-unit_08/bootstrap/app.php:37
[19-Nov-2020 11:00:57 Europe/Kiev] PHP   4. Router->run() /home/janus/www/php-w19-unit_08/core/App.php:38
[19-Nov-2020 11:00:57 Europe/Kiev] PHP   5. Router->init() /home/janus/www/php-w19-unit_08/core/Router.php:67
[19-Nov-2020 11:00:57 Europe/Kiev] PHP   6. CategoryController->delete() /home/janus/www/php-w19-unit_08/core/Router.php:101
[19-Nov-2020 11:00:57 Europe/Kiev] PHP   7. View->render() /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php:137
[19-Nov-2020 11:00:57 Europe/Kiev] PHP   8. require() /home/janus/www/php-w19-unit_08/core/View.php:35
[19-Nov-2020 11:00:57 Europe/Kiev] PHP   9. include() /home/janus/www/php-w19-unit_08/app/Views/layouts/admin.php:19
[19-Nov-2020 11:05:43 Europe/Kiev] PHP Warning:  unlink(/home/janus/www/php-w19-unit_08/public/assets/images/categories//): Is a directory in /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php on line 114
[19-Nov-2020 11:05:43 Europe/Kiev] PHP Stack trace:
[19-Nov-2020 11:05:43 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-w19-unit_08/public/index.php:0
[19-Nov-2020 11:05:43 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-w19-unit_08/public/index.php:12
[19-Nov-2020 11:05:43 Europe/Kiev] PHP   3. App->run() /home/janus/www/php-w19-unit_08/bootstrap/app.php:37
[19-Nov-2020 11:05:43 Europe/Kiev] PHP   4. Router->run() /home/janus/www/php-w19-unit_08/core/App.php:38
[19-Nov-2020 11:05:43 Europe/Kiev] PHP   5. Router->init() /home/janus/www/php-w19-unit_08/core/Router.php:58
[19-Nov-2020 11:05:43 Europe/Kiev] PHP   6. CategoryController->update() /home/janus/www/php-w19-unit_08/core/Router.php:101
[19-Nov-2020 11:05:43 Europe/Kiev] PHP   7. unlink() /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php:114
[19-Nov-2020 12:12:07 Europe/Kiev] PHP Parse error:  syntax error, unexpected 'ry' (T_STRING), expecting ';' or ',' in /home/janus/www/php-w19-unit_08/app/Views/admin/categories/edit.php on line 40
[19-Nov-2020 13:12:25 Europe/Kiev] PHP Notice:  Undefined index: file_name in /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php on line 164
[19-Nov-2020 13:12:25 Europe/Kiev] PHP Stack trace:
[19-Nov-2020 13:12:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-w19-unit_08/public/index.php:0
[19-Nov-2020 13:12:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-w19-unit_08/public/index.php:12
[19-Nov-2020 13:12:25 Europe/Kiev] PHP   3. App->run() /home/janus/www/php-w19-unit_08/bootstrap/app.php:37
[19-Nov-2020 13:12:25 Europe/Kiev] PHP   4. Router->run() /home/janus/www/php-w19-unit_08/core/App.php:38
[19-Nov-2020 13:12:25 Europe/Kiev] PHP   5. Router->init() /home/janus/www/php-w19-unit_08/core/Router.php:58
[19-Nov-2020 13:12:25 Europe/Kiev] PHP   6. CategoryController->store() /home/janus/www/php-w19-unit_08/core/Router.php:101
[19-Nov-2020 13:13:29 Europe/Kiev] PHP Warning:  unlink(/home/janus/www/php-w19-unit_08/public/assets/images/categories//): Is a directory in /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php on line 216
[19-Nov-2020 13:13:29 Europe/Kiev] PHP Stack trace:
[19-Nov-2020 13:13:29 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-w19-unit_08/public/index.php:0
[19-Nov-2020 13:13:29 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-w19-unit_08/public/index.php:12
[19-Nov-2020 13:13:29 Europe/Kiev] PHP   3. App->run() /home/janus/www/php-w19-unit_08/bootstrap/app.php:37
[19-Nov-2020 13:13:29 Europe/Kiev] PHP   4. Router->run() /home/janus/www/php-w19-unit_08/core/App.php:38
[19-Nov-2020 13:13:29 Europe/Kiev] PHP   5. Router->init() /home/janus/www/php-w19-unit_08/core/Router.php:67
[19-Nov-2020 13:13:29 Europe/Kiev] PHP   6. CategoryController->delete() /home/janus/www/php-w19-unit_08/core/Router.php:101
[19-Nov-2020 13:13:29 Europe/Kiev] PHP   7. unlink() /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php:216
[19-Nov-2020 16:24:30 Europe/Kiev] PHP Warning:  Use of undefined constant array_pop - assumed 'array_pop' (this will throw an Error in a future version of PHP) in /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php on line 147
[19-Nov-2020 16:24:30 Europe/Kiev] PHP Stack trace:
[19-Nov-2020 16:24:30 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-w19-unit_08/public/index.php:0
[19-Nov-2020 16:24:30 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-w19-unit_08/public/index.php:12
[19-Nov-2020 16:24:30 Europe/Kiev] PHP   3. App->run() /home/janus/www/php-w19-unit_08/bootstrap/app.php:37
[19-Nov-2020 16:24:30 Europe/Kiev] PHP   4. Router->run() /home/janus/www/php-w19-unit_08/core/App.php:38
[19-Nov-2020 16:24:30 Europe/Kiev] PHP   5. Router->init() /home/janus/www/php-w19-unit_08/core/Router.php:58
[19-Nov-2020 16:24:30 Europe/Kiev] PHP   6. CategoryController->insertImage() /home/janus/www/php-w19-unit_08/core/Router.php:101
[19-Nov-2020 16:24:30 Europe/Kiev] PHP   7. CategoryController->fileName() /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php:155
[19-Nov-2020 16:24:30 Europe/Kiev] PHP Notice:  Only variables should be passed by reference in /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php on line 147
[19-Nov-2020 16:24:30 Europe/Kiev] PHP Stack trace:
[19-Nov-2020 16:24:30 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-w19-unit_08/public/index.php:0
[19-Nov-2020 16:24:30 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-w19-unit_08/public/index.php:12
[19-Nov-2020 16:24:30 Europe/Kiev] PHP   3. App->run() /home/janus/www/php-w19-unit_08/bootstrap/app.php:37
[19-Nov-2020 16:24:30 Europe/Kiev] PHP   4. Router->run() /home/janus/www/php-w19-unit_08/core/App.php:38
[19-Nov-2020 16:24:30 Europe/Kiev] PHP   5. Router->init() /home/janus/www/php-w19-unit_08/core/Router.php:58
[19-Nov-2020 16:24:30 Europe/Kiev] PHP   6. CategoryController->insertImage() /home/janus/www/php-w19-unit_08/core/Router.php:101
[19-Nov-2020 16:24:30 Europe/Kiev] PHP   7. CategoryController->fileName() /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php:155
[19-Nov-2020 16:24:30 Europe/Kiev] PHP Warning:  Illegal offset type in /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php on line 147
[19-Nov-2020 16:24:30 Europe/Kiev] PHP Stack trace:
[19-Nov-2020 16:24:30 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-w19-unit_08/public/index.php:0
[19-Nov-2020 16:24:30 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-w19-unit_08/public/index.php:12
[19-Nov-2020 16:24:30 Europe/Kiev] PHP   3. App->run() /home/janus/www/php-w19-unit_08/bootstrap/app.php:37
[19-Nov-2020 16:24:30 Europe/Kiev] PHP   4. Router->run() /home/janus/www/php-w19-unit_08/core/App.php:38
[19-Nov-2020 16:24:30 Europe/Kiev] PHP   5. Router->init() /home/janus/www/php-w19-unit_08/core/Router.php:58
[19-Nov-2020 16:24:30 Europe/Kiev] PHP   6. CategoryController->insertImage() /home/janus/www/php-w19-unit_08/core/Router.php:101
[19-Nov-2020 16:24:30 Europe/Kiev] PHP   7. CategoryController->fileName() /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php:155
[19-Nov-2020 16:31:49 Europe/Kiev] PHP Notice:  Only variables should be passed by reference in /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php on line 145
[19-Nov-2020 16:31:49 Europe/Kiev] PHP Stack trace:
[19-Nov-2020 16:31:49 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-w19-unit_08/public/index.php:0
[19-Nov-2020 16:31:49 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-w19-unit_08/public/index.php:12
[19-Nov-2020 16:31:49 Europe/Kiev] PHP   3. App->run() /home/janus/www/php-w19-unit_08/bootstrap/app.php:37
[19-Nov-2020 16:31:49 Europe/Kiev] PHP   4. Router->run() /home/janus/www/php-w19-unit_08/core/App.php:38
[19-Nov-2020 16:31:49 Europe/Kiev] PHP   5. Router->init() /home/janus/www/php-w19-unit_08/core/Router.php:58
[19-Nov-2020 16:31:49 Europe/Kiev] PHP   6. CategoryController->insertImage() /home/janus/www/php-w19-unit_08/core/Router.php:101
[19-Nov-2020 16:31:49 Europe/Kiev] PHP   7. CategoryController->fileName() /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php:155
[19-Nov-2020 16:31:49 Europe/Kiev] PHP Notice:  Only variables should be passed by reference in /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php on line 146
[19-Nov-2020 16:31:49 Europe/Kiev] PHP Stack trace:
[19-Nov-2020 16:31:49 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-w19-unit_08/public/index.php:0
[19-Nov-2020 16:31:49 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-w19-unit_08/public/index.php:12
[19-Nov-2020 16:31:49 Europe/Kiev] PHP   3. App->run() /home/janus/www/php-w19-unit_08/bootstrap/app.php:37
[19-Nov-2020 16:31:49 Europe/Kiev] PHP   4. Router->run() /home/janus/www/php-w19-unit_08/core/App.php:38
[19-Nov-2020 16:31:49 Europe/Kiev] PHP   5. Router->init() /home/janus/www/php-w19-unit_08/core/Router.php:58
[19-Nov-2020 16:31:49 Europe/Kiev] PHP   6. CategoryController->insertImage() /home/janus/www/php-w19-unit_08/core/Router.php:101
[19-Nov-2020 16:31:49 Europe/Kiev] PHP   7. CategoryController->fileName() /home/janus/www/php-w19-unit_08/app/Controllers/Admin/CategoryController.php:155
[19-Nov-2020 17:40:25 Europe/Kiev] PHP Notice:  Undefined offset: 404 in /home/janus/www/php-w19-unit_08/core/Router.php on line 70
[19-Nov-2020 17:40:25 Europe/Kiev] PHP Stack trace:
[19-Nov-2020 17:40:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-w19-unit_08/public/index.php:0
[19-Nov-2020 17:40:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-w19-unit_08/public/index.php:12
[19-Nov-2020 17:40:25 Europe/Kiev] PHP   3. App->run() /home/janus/www/php-w19-unit_08/bootstrap/app.php:37
[19-Nov-2020 17:40:25 Europe/Kiev] PHP   4. Router->run() /home/janus/www/php-w19-unit_08/core/App.php:38
[19-Nov-2020 17:40:25 Europe/Kiev] PHP Notice:  Undefined offset: 1 in /home/janus/www/php-w19-unit_08/core/Router.php on line 76
[19-Nov-2020 17:40:25 Europe/Kiev] PHP Stack trace:
[19-Nov-2020 17:40:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-w19-unit_08/public/index.php:0
[19-Nov-2020 17:40:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-w19-unit_08/public/index.php:12
[19-Nov-2020 17:40:25 Europe/Kiev] PHP   3. App->run() /home/janus/www/php-w19-unit_08/bootstrap/app.php:37
[19-Nov-2020 17:40:25 Europe/Kiev] PHP   4. Router->run() /home/janus/www/php-w19-unit_08/core/App.php:38
[19-Nov-2020 17:40:25 Europe/Kiev] PHP   5. Router->getController() /home/janus/www/php-w19-unit_08/core/Router.php:70
[19-Nov-2020 17:40:25 Europe/Kiev] PHP Fatal error:  Uncaught Exception: File /home/janus/www/php-w19-unit_08/app/Controllers/.php does not exists. in /home/janus/www/php-w19-unit_08/core/Router.php:97
Stack trace:
#0 /home/janus/www/php-w19-unit_08/core/Router.php(70): Router->init()
#1 /home/janus/www/php-w19-unit_08/core/App.php(38): Router->run()
#2 /home/janus/www/php-w19-unit_08/bootstrap/app.php(37): App->run()
#3 /home/janus/www/php-w19-unit_08/public/index.php(12): require_once('/home/janus/www...')
#4 {main}
  thrown in /home/janus/www/php-w19-unit_08/core/Router.php on line 97
[19-Nov-2020 18:13:36 Europe/Kiev] PHP Notice:  Undefined offset: 404 in /home/janus/www/php-w19-unit_08/core/Router.php on line 70
[19-Nov-2020 18:13:36 Europe/Kiev] PHP Stack trace:
[19-Nov-2020 18:13:36 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-w19-unit_08/public/index.php:0
[19-Nov-2020 18:13:36 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-w19-unit_08/public/index.php:12
[19-Nov-2020 18:13:36 Europe/Kiev] PHP   3. App->run() /home/janus/www/php-w19-unit_08/bootstrap/app.php:37
[19-Nov-2020 18:13:36 Europe/Kiev] PHP   4. Router->run() /home/janus/www/php-w19-unit_08/core/App.php:38
[19-Nov-2020 18:13:36 Europe/Kiev] PHP Notice:  Undefined offset: 1 in /home/janus/www/php-w19-unit_08/core/Router.php on line 76
[19-Nov-2020 18:13:36 Europe/Kiev] PHP Stack trace:
[19-Nov-2020 18:13:36 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-w19-unit_08/public/index.php:0
[19-Nov-2020 18:13:36 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-w19-unit_08/public/index.php:12
[19-Nov-2020 18:13:36 Europe/Kiev] PHP   3. App->run() /home/janus/www/php-w19-unit_08/bootstrap/app.php:37
[19-Nov-2020 18:13:36 Europe/Kiev] PHP   4. Router->run() /home/janus/www/php-w19-unit_08/core/App.php:38
[19-Nov-2020 18:13:36 Europe/Kiev] PHP   5. Router->getController() /home/janus/www/php-w19-unit_08/core/Router.php:70
[19-Nov-2020 18:13:36 Europe/Kiev] PHP Fatal error:  Uncaught Exception: File /home/janus/www/php-w19-unit_08/app/Controllers/.php does not exists. in /home/janus/www/php-w19-unit_08/core/Router.php:97
Stack trace:
#0 /home/janus/www/php-w19-unit_08/core/Router.php(70): Router->init()
#1 /home/janus/www/php-w19-unit_08/core/App.php(38): Router->run()
#2 /home/janus/www/php-w19-unit_08/bootstrap/app.php(37): App->run()
#3 /home/janus/www/php-w19-unit_08/public/index.php(12): require_once('/home/janus/www...')
#4 {main}
  thrown in /home/janus/www/php-w19-unit_08/core/Router.php on line 97
