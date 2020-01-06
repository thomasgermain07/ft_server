FROM debian:buster

RUN apt-get update
RUN apt-get upgrade
RUN apt-get install -y nginx
RUN apt-get install -y mariadb-server
RUN ./etc/init.d/mysql start

COPY srcs/ /var/www/html

# RUN chmod +x /var/www/html/install_mysql.sh
# RUN bash /var/www/html/install_mysql.sh

EXPOSE 80
EXPOSE 443
