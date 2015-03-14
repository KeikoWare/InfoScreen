export DEBIAN_FRONTEND=noninteractive
echo mysql-server-5.5 mysql-server/root_password password xyzzy | debconf-set-selections
echo mysql-server-5.5 mysql-server/root_password_again password xyzzy | debconf-set-selections
sudo apt-get update -q
sudo apt-get install -q -y -o Dpkg::Options::="--force-confdef" -o Dpkg::Options::="--force-confold" apache2
sudo apt-get install -q -y -o Dpkg::Options::="--force-confdef" -o Dpkg::Options::="--force-confold" php5 libapache2-mod-php5
sudo apt-get install -q -y -o Dpkg::Options::="--force-confdef" -o Dpkg::Options::="--force-confold" mysql-server mysql-client php5-mysql
