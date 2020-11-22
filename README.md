1、安装环境
环境要求：PHP、Mysql、Nginx/Apache，搭建方法自行选择，这里使用宝塔演示。

Apache，nginx，IIS或lighttpd（首选Apache）（大飛这个教程是使用nginx搭建）

PHP> = 5.5.9

MariaDB或MySQL> = 5.5，或者使用SQLite

2、安装要求

内存：512M以上，推荐768M以上（纯面板约占系统60M内存）
硬盘：300M以上可用硬盘空间（纯面板约占20M磁盘空间）
系统：CentOS 7.1+ (Ubuntu16.04+.、Debian9.0+)，确保是干净的操作系统，没有安装过其它环境带的Apache/Nginx/php/MySQL/pgsql/gitlab/java（已有环境不可安装）
架构：x86_64（主流服务器均是此架构），ARM不完整兼容（面板环境安装慢，部分软件可能安装不上）

3、安装代码：

#CentOS系统
wget -O install.sh http://download.bt.cn/install/install_6.0.sh && sh install.sh
#Ubuntu系统
wget -O install.sh http://download.bt.cn/install/install-ubuntu_6.0.sh && sudo bash install.sh
#Debian系统
wget -O install.sh http://download.bt.cn/install/install-ubuntu_6.0.sh && bash install.sh
#CentOS系备用节点【香港】--香港vps推荐使用
yum install -y wget && wget -O install.sh http://103.224.251.67:5880/install/install_6.0.sh && sh install.sh

安装完成后，进入面板，点击左侧软件管理，然后安装PHP、Nginx或Apache、Mysql。

然后上传源码到网站根目录并解压出来

4、伪静态设置

#Apache，编辑.htaccess文件，将本地地址修改成自己的域名，比如：

RewriteEngine on
RewriteRule ^about                about.php [L]
RewriteRule ^api-about            api-about.php [L]
RewriteRule ^contact              contact.php [L]
RewriteRule ^tos                  tos.php [L]
RewriteRule ^([^/.]+)/?$          link.php?id=$1 [L]
RewriteRule ^404                  404.php [L]

Options -Indexes
ErrorDocument 404 http://你的域名/404
ErrorDocument 403 http://你的域名/404

#Nginx，点击域名设置-伪静态，然后将下面例子的域名改成自己的，再复制进去，比如：

rewrite ^/about /about.php last;
rewrite ^/api-about /api-about.php last;
rewrite ^/contact /contact.php last;
rewrite ^/tos /tos.php last;
rewrite ^/([^/.]+)/?$ /link.php?id=$1 last;
rewrite ^/404 /404.php last;
error_page 404 http://你的域名/404;
error_page 403 http://你的域名/404;

开始安装

最后开始安装，由于伪静态问题，只能通过具体路径安装，链接如下：

#安装路径，记得修改下面域名地址
https://你的域名/install/index.html
#后台路径
https://你的域名/admin/index.php

安装完成后，即可登录后台管理界面进行设置，默认用户名和密码均为admin。
