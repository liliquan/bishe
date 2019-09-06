## 安装步骤
- 复制.env.example为.env
- 配置.env里的数据库连接信息
- 登录后台：admins/login   帐号：admin  密码：admin123
- composer install
#数据重置
- php artisan migrate:refresh --seed

## 项目环境要求
- mysql 5.7
- php 7.2
- redis
