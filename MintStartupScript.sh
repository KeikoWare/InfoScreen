# KeikoWare Additions
# Screen settings
# Screensaver off
xset s off
# Screen blanking off
xset s noblank
# Screen powermanagement off
xset -dpms
# Start Chormium in kiosk mode with incognito to avoid crash start, when powered of hard
chromium --kiosk --incognito --disable-translate http://localhost/onscreen
