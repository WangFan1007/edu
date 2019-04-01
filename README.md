# check代买后操作步骤
1. 安装依赖`composer i`
2. 配置本地`.env`
3. 执行数据库迁移与填充数据
<br>`php artisan migrate`
<br>`php artisan db:seed --class=ManagerTableSeeder`

# 用户认证
1. 自定义config目录下auth.php

# RBAC
1. `php artisan make:migration create_role_table`
<br>`php artisan make:migration create_auth_table`