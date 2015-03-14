export DEBIAN_FRONTEND=noninteractive
sudo echo mysql-server-5.5 mysql-server/root_password password K31k0Ware | sudo debconf-set-selections
sudo echo mysql-server-5.5 mysql-server/root_password_again password K31k0Ware | sudo debconf-set-selections
sudo apt-get update -q
sudo apt-get install -q -y -o Dpkg::Options::="--force-confdef" -o Dpkg::Options::="--force-confold" apache2
sudo apt-get install -q -y -o Dpkg::Options::="--force-confdef" -o Dpkg::Options::="--force-confold" php5 libapache2-mod-php5
sudo apt-get install -q -y -o Dpkg::Options::="--force-confdef" -o Dpkg::Options::="--force-confold" mysql-server mysql-client php5-mysql
