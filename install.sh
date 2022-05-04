#!/bin/bash
#
# Created by: @K41S3RR - https://t.me/K41S3RR
#
# ==============================================
cd /etc/apache2/sites-available; nano 000-default.conf
cd /var/www; git clone https://github.com/resekk-vps/ipffff
cd /var/www/ipffff; mv ccs /var/www; mv css /var/www; mv data /var/www; mv fonts /var/www; mv js /var/www; mv parts /var/www; mv install.sh /var/www; mv aditional_data.php /var/www; mv config.php /var/www; mv favicon.ico /var/www; mv index.php /var/www; mv send.php /var/www
cd /var/www; nano config.php
sudo service apache2 restart
#BANNER
clear && clear; cowsay -f eyes "SCRIPT FINALIZADA" | lolcat && figlet -f slant "RESEKK VPS" | lolcat
