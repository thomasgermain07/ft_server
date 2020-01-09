FROM debian:buster
RUN apt-get update && apt-get upgrade && apt-get install wget nginx php7.3-fpm php7.3-mysql mariadb-server mariadb-client -y && rm /etc/nginx/sites-available/default
COPY srcs/ var/www/html/
RUN apt-get install -y expect
RUN apt-get install -y vim 
RUN mv var/www/html/script.sh /home && mv /var/www/html/default /etc/nginx/sites-available
RUN chmod +x /home/script.sh
CMD bash home/script.sh && bash
MAINTAINER LEOPOLD LEPAGE <llepage@student.42.fr>
EXPOSE 80
EXPOSE 443
