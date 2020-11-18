#!/bin/bash
#Author: Equipo 4 (Eric, Naia y Urko)

##~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
##~ Actualización del Servidor ~
##~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~"
echo "~ Comenzamos con la actualización del server ~"
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~"

sleep 5s

apt-get update -y
#apt-get upgrade -y


##~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
##~ Instalación de Herramientas ~
##~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~"
echo "~ Instalamos algunas herramientas útiles ~"
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~"

sleep 5s

apt-get install unzip -y
apt-get install pv -y
apt-get install composer -y
apt-get install curl -y


##~~~~~~~~~~~~~~~~~~~~~~~~
##~ Instalación de MySQL ~
##~~~~~~~~~~~~~~~~~~~~~~~~

echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~"
echo "~ Procedemos a instalar MySQL ~"
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~"

sleep 5s

apt-get install -y mysql-server mysql-client

# Copiamos nuestro fichero ya modificado
sudo cp /vagrant/config/.ficheros/mysqld.cnf /etc/mysql/mysql.conf.d/

# Reiniciamos el servicio de MySQL
sudo service mysql restart

##~~~~~~~~~~~~~~~~~~~~~~~~~~
##~ Instalación de Apache2 ~
##~~~~~~~~~~~~~~~~~~~~~~~~~~

echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~"
echo "~ Continuamos con la instalación de Apache2 ~"
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~"

sleep 5s

apt-get install apache2 -y

# Copiamos nuestro fichero ya modificado
sudo cp /vagrant/config/.ficheros/000-default.conf /etc/apache2/sites-available/

# Habilitamos los mod_rewrite
a2enmod expires
a2enmod headers
a2enmod rewrite
a2enmod actions

##~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
##~ Instalación de php, xdebug y librerias ~
##~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~"
echo "~ Comenzamos con la instalación de PHP, XDebug y Librerias ~"
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~"

sleep 5s

apt-get install php -y
apt-get install php-{bcmath,bz2,intl,gd,mbstring,mysql,zip,fpm,xdebug,mysql,xml} -y
apt-get install mysql-client libmysqlclient-dev -y
apt-get install libapache2-mod-php7.2 php7.2 php7.2-mysql php7.2-sqlite -y
apt-get install php7.2-mbstring php7.2-curl php7.2-intl php7.2-gd php7.2-zip php7.2-bz2 -y
apt-get install php7.2-dom php7.2-xml php7.2-soap -y
apt-get install --reinstall ca-certificates -y
apt-get install php-xdebug -y

# Copiamos nuestros ficheros ya modificados
sudo cp /vagrant/config/.ficheros/xdebug.ini /etc/php/7.2/mods-available
sudo cp /vagrant/config/.ficheros/10-opcache.ini  /etc/php/7.2/apache2/conf.d

a2enmod proxy_fcgi setenvif
a2enconf php7.2-fpm

##~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
##~ Instalación de PhpMyAdmin ~
##~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~"
echo "~ Procedemos a instalar PhpMyAdmin ~"
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~"

sleep 5s

echo 'phpmyadmin phpmyadmin/dbconfig-install boolean true' | debconf-set-selections
echo 'phpmyadmin phpmyadmin/app-password-confirm password root' | debconf-set-selections
echo 'phpmyadmin phpmyadmin/mysql/admin-pass password root' | debconf-set-selections
echo 'phpmyadmin phpmyadmin/mysql/app-pass password root' | debconf-set-selections
echo 'phpmyadmin phpmyadmin/reconfigure-webserver multiselect apache2' | debconf-set-selections
apt-get install phpmyadmin -y

##~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
##~ Mapear la carpeta de nuestro proyecto ~
##~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~"
echo "~ Procedemos a mapear la carpeta de nuestro proyecto con la carpeta del server ~"
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~"

sleep 5s

sudo rm /var/www/html/index.html
sudo rmdir /var/www/html
sudo ln -s /vagrant/ /var/www/html
sudo chmod 755 /var/www/html

##~~~~~~~~~~~~~~~~~~~~~~~~~
##~ Reiniciamos servicios ~
##~~~~~~~~~~~~~~~~~~~~~~~~~

sudo service php7.2-fpm restart
sudo service apache2 restart
sudo service mysql restart

# ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~"
echo "~ Configuración Terminada ~"
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~"