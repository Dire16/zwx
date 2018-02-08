注册登录接口
===============
注册：

http://localhost/public/user/register

提交样式

http://localhost/public/user/register?user_name=127&user_password=21&name=123

成功返回
{
"status": "0",
"message": "注册成功",
"data": {
"user_name": "127",
"user_password": "21",
"name": "123"
}
}
失败返回
{
"status": "-1",
"message": "用户已注册",
"data": null
}

登录：

http://localhost/public/user/login

提交样式

http://localhost/public/user/login?user_name=127&user_password=22

成功返回：
{
"status": "0",
"message": "登陆成功",
"data": null
}
失败返回：
{
"status": "-1",
"message": "密码错误",
"data": null
}