# InfoScreen - browser support only

Create SD from RASPBIAN STRETCH LITE image (current release date 2017-11-29)

Boot your PI

If the diaply is roteted wronmg do this to ...

Rotate display

    $ sudo nano /boot/config.txt

Add one of the following lines

    display_rotate=0 Normal
    display_rotate=1 90 degrees
    display_rotate=2 180 degrees
    
Reboot for changes to take effect

    $ sudo reboot
Configure Wireless Network
    
    $ sudo nano /etc/wpa_supplicant/wpa_supplicant.conf
    
    country=DK
    ctrl_interface=DIR=/var/run/wpa_supplicant GROUP=netdev
    update_config=1
    network={
        ssid="The_ESSID"
        psk="Your_wifi_password"
    }

Configure your Pi
    
    $ sudo raspi-config

Choose #7 Advanced Options
then choose #A1 Expand Filesystem

Reboot for changes to take effect

    $ sudo reboot

Update distro

    $ sudo apt-get update
    $ sudo apt-get upgrade
    $ sudo apt-get dist-upgrade
    $ sudo apt-get clean
    $ sudo raspi-config

Choose #4 Localisation Options
then choose #1 Change Locale

Choose #4 Localisation Options
then choose #2 Change TimeZone

Choose #4 Localisation Options
then choose #3 Change keyboard Layout

Reboot for changes to take effect

    $ sudo reboot
Install Xwindow system

    $ sudo apt-get install --no-install-recommends xserver-xorg
    $ sudo apt-get install --no-install-recommends xinit
    $ sudo apt-get install raspberrypi-ui-mods
    $ sudo apt-get install lightdm 
    $ sudo apt-get install chromium-browser unclutter

    $ sudo nano ~/.config/openbox/autostart
    # KeikoWare Additions
    # Screen settings
    # Screensaver off
    xset s off
    # Screen blanking off
    xset s noblank
    # Screen powermanagement off
    xset -dpms
    # Start Chormium in kiosk mode with incognito to avoid crash start, when powered of hard
    chromium-browser --kiosk --incognito --disable-translate http://localhost/onscreen
  
    $ sudo chmod +x ~/.config/openbox/autostart
  
    $ sudo nano ~/.dmrc
    [Desktop]
    Session=openbox

Reboot for changes to take effect

    $ sudo reboot

Configure Raspberry Pi

    $ sudo raspi-config
Choose #3 Boot Options
Then choose #B1 Desktop / CLI
and then #B4 Desktop Autologin - Desktop GUI, automatically logged in as 'pi' user 

Reboot for changes to take effect

    $ sudo reboot


# InfoScreen

Create SD from Raspbian image (currently 31th of January 2015)

Boot your PI

From "raspi-config" do the following
- Expand Filesystem
- Change User Password
- Enable boot to Desktop

- finish (reboot)

From Desktop, open console / terminal window

-> git clone http://www.github.com/KeikoWare/infoscreen

-> cd infoscreen

-> . install.sh  
/ alternatively 
-> . installMint.sh


