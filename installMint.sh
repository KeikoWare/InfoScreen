export DEBIAN_FRONTEND=noninteractive
sudo echo mysql-server-5.5 mysql-server/root_password password Inf0Scr33n | sudo debconf-set-selections
sudo echo mysql-server-5.5 mysql-server/root_password_again password Inf0Scr33n | sudo debconf-set-selections
sudo apt-get update -q
sudo apt-get install -q -y apache2
sudo apt-get install -q -y php5 libapache2-mod-php5
sudo apt-get install -q -y -o Dpkg::Options::="--force-confdef" -o Dpkg::Options::="--force-confold" mysql-server-5.5 mysql-client-5.5 php5-mysql

mysql --user=root --password=Inf0Scr33n < ~/infoscreen/www/firmware/create_infoscreen_db.sql
sudo rm /var/www/* -r
sudo cp ~/infoscreen/www/ /var -r
sudo service apache2 restart
sudo apt-get install -q -y chromium x11-xserver-utils unclutter ttf-mscorefonts-installer
sudo ln -s /usr/lib/arm-linux-gnueabihf/nss/ /usr/lib/nss

# Customizing the look and feel of Linuxmint
sudo update-alternatives --config default.plymouth
sudo update-initramfs –u


echo "# KeikoWare Additions" >> ~/.config/autostart
echo "# Screen settings" >> ~/.config/autostart
echo "# Screensaver off" >> ~/.config/autostart
echo "xset s off" >> ~/.config/autostart
echo "# Screen blanking off" >> ~/.config/autostart
echo "xset s noblank" >> ~/.config/autostart
echo "# Screen powermanagement off" >> ~/.config/autostart
echo "xset -dpms" >> ~/.config/autostart
echo "# Start Chormium in kiosk mode with incognito to avoid crash start, when powered of hard" >> ~/.config/autostart
echo "chromium --kiosk --incognito --disable-translate http://localhost/onscreen" >> ~/.config/autostart
sudo chmod +x ~/.config/autostart

# echo "[Desktop]" > ~/.dmrc
# echo "Session=openbox" >> ~/.dmrc

sudo reboot