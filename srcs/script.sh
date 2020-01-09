#!bin/bash

mkdir /etc/nginx/ssl
mkdir /etc/nginx/ssl/localhost/
mv /var/www/html/*.pem /etc/nginx/ssl/localhost/
service nginx start
service php7.3-fpm start
service mysql start
rm -f /var/www/html/index.nginx-debian.html
mysql -u root -e "CREATE DATABASE wordpress"
mysql -u root -e "CREATE USER 'user1'@'localhost' IDENTIFIED BY 'test123'"
mysql -u root -e "GRANT ALL PRIVILEGES ON * . * TO 'user1'@'localhost'"
mysql -u root -e "FLUSH PRIVILEGES"
service mysql restart
