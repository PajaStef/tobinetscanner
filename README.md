# tobinetscanner
This is a network scanner that uses Nmap.
This project was built in PHP, and then put inside a docker image that i created(which is debian with lighttpd and the actual app).

You first need Docker and docker-compose, to install on debian do:

sudo apt install docker.io -y && sudo apt install docker-compose -y

fedora:

sudo dnf install docker -y && sudo dnf install docker-compose -y

NOTE: if your distro isn't listed here just use your distros package manager and install docker and docker-compose.

INSTALATION:
1. do: git clone https://github.com/PajaStef/tobinetscanner/
2. go into that directory: cd tobinetscanner
3. do: docker-compose up -d
USAGE:
open up your browser and go to: http://localhost:8080

When you are on the page you have Indiviudal scan which is just for one device, choose type agressive(best) and enter ports and ip.

For network scan choose any type and enter the subnet for scan.
