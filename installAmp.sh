
export DEBIAN_FRONTEND=noninteractive
sudo echo mysql-server-5.5 mysql-server/root_password password Inf0Scr33n | sudo debconf-set-selections
sudo echo mysql-server-5.5 mysql-server/root_password_again password Inf0Scr33n | sudo debconf-set-selections
sudo apt-get update -q
sudo apt-get install -q -y apache2
sudo apt-get install -q -y php5 libapache2-mod-php5
sudo apt-get install -q -y -o Dpkg::Options::="--force-confdef" -o Dpkg::Options::="--force-confold" mysql-server-5.5 mysql-client-5.5 php5-mysql

sudo echo phpmyadmin phpmyadmin/mysql/admin-pass password Inf0Scr33n | sudo debconf-set-selections
sudo echo phpmyadmin phpmyadmin/mysql/app-pass password | sudo debconf-set-selections
sudo echo phpmyadmin phpmyadmin/reconfigure-webserver multiselect apache2  | sudo debconf-set-selections
sudo echo phpmyadmin phpmyadmin/dbconfig-install boolean true  | sudo debconf-set-selections

sudo apt-get install -q -y -o Dpkg::Options::="--force-confdef" -o Dpkg::Options::="--force-confold" phpMyAdmin 



# mysql --user=root --password=Inf0Scr33n < ~/infoscreen/www/firmware/create_infoscreen_db.sql
# sudo rm /var/www/* -r
# sudo cp ~/infoscreen/www/ /var -r

sudo service apache2 restart
