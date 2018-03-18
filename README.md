# UniFi-http-qrcode
UniFi http qrcode is a php written aplication that gives a simple page with a form to select a site and ssid to generate a QR code:

It uses [this UniFi-API-client for php](https://github.com/Art-of-WiFi/UniFi-API-client/) to connect to the unifi controller and get information.
It searches based on the connection client's IP address for whitch it searches in the configured site (working to add a all site mode) this can be usefull for remote support personel to quiqly identify the users switchport or AP.
It uses following librarys:

*   Bootstrap (loaded via cdn)
*   Jquery (loaded via cdn)
*   fontawesome (loaded via cdn)
*   UniFi-API-client

Based on this project [https://github.com/evgeni/qifi](https://github.com/evgeni/qifi)

## Installation

1.  Clone to webserver
2.  Get the client file from UniFi-API-client and put it in the includes/php/unifi-api-client folder
3.  Edit the settings file located in incluses/php/
4.  Ready

## Known issues

*   Not csp ready