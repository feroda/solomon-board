﻿Software included
=================

Inverters
---------
ABB PowerOne
^^^^^^^^^^^^
SMA SunnyBoyd
^^^^^^^^^^^^^


Drivers 
-------
Aurora
^^^^^^
The official site of `Aurora <http://www.curtronics.com/Solar/>`_. 
Aurora is a data-collector program developed in 'C' for PowerOne inverters.
It uses the RS-485 interface to communicate with the Power One inverter.
By passing a specific query to Aurora, it can take any needed information from the inverter like: daily production, display inverter time, alarms, etc.
Aurora can display also the configuration of the inverter. It is possible to have multiple inverters connected to the same machine where Aurora is installed.

Most useful queries:
#. Energy Produced data displays information about Daily, Weekly, Monthly, Yearly and Total energy. 
   ``aurora -a 2 -e /dev/ttyUSB0``  
   ``-a 2`` is the name of the inverter. 
   ``-e`` displays the Cumulated Energy. 
   ``/dev/ttyUSB0`` is the port where the RS485 is connected.
#. DSP (digital signal processing) displays information about Voltage, Current and Power for every Input (usually inverters has 2 inputs), information abut the grid, the efficiency of the AC/DC conversion and the temperature. 
   ``aurora -a 2 -d 0 /dev/ttyUSB0``
   ``d 0``  displays the DSP informations. 

It is possible to make Aurora displaying the information in column for a simple conversion into a csv file. To make this happen add ``-c`` into the query. 
Sometimes Aurora gives an error if the connection port is busy, to prevent this make sure to add ``-Y 20 -l 10`` to the query. ``-Y 20`` is the number of attempts that Aurora does, before declaring the communication closed. ``-l 10`` is the number in milliseconds that Aurora wait for each attempt. 
When some errors occur is useful to add ``-b`` to display a full debug of what is happening.

485solarget and Yasdi
^^^^^^^^^^^^^^^^^^^^^
This is the link to download the `485solarget <https://sourceforge.net/projects/solarget/>`_.
485solarget is a data-collector program developed in 'C'. 
485solarget works with multiple inverters, it uses the RS-485 interface like Power-one's inverters.
The SMA Sunnyboy inverter doesn't have an interface incorporated. It is necessary to buy one add on board like the 485PB-NR or 485PB-MS-NR.
485solarget is written under GNU public licenses.

The sma_get is based on the libyasdi libraries from `SMA <http://www.sma.de/en/products/monitoring-control/yasdi.html>`_.
The software Yasdi is suitable for the development of individual applications for the communication with SMA products.
Yasdi is an implementation of the SMA Data Protocols, through which inverters communicate with other SMA devices.
Yasdi was developed in 'C'.
Yasdi is written by SMA Solar Technology under GNU public licenses.


Configuration programs
----------------------
usb_modeswitch
^^^^^^^^^^^^^^
usb_modeswitch is a mode switching tool for controlling lots of USB wireless devices.
To install it run ``apt-get install usb-modeswitch``
Plugging a new device into the machine, it is possible that it isn't recognized by the operating system. It's necessary to use usb_modeswitch to configure the new device.
Plugging a low cost USB modem it may be recognized as a simple USB storage device. To switch it into a modem follow this steps:
1. Recognize the product and vendor ID with the command ``lsusb`` [ID prodcut:vendor].
2. Download the configuration file for that device.
3. Put the file into ``/etc/usb_modeswitch.d`` with the name [product:/vendor].
4. Switch mode with the command ``usb_modeswitch -W -p <product> -v <vendor> -c </path/to/config/file>``.


For the Chinese USB modem adapter the configuration file is:
.. literalinclude:: _static/usb_modeswitch.cinesaglia
    :linenos:

.. todo::  dir solomon

WvDial
^^^^^^
.. todo:: move a part of this section into install.rst
WvDial is a Point-to-Point Protocol dialer: it dials a modem and starts ppp in order to connect to the Internet.
To make WvDial work we need to:
#. Install it: ``apt-get install wvdial ppp``
#. Create a configuration file into **/etc/wvdial.conf** with ``wvdialconf /etc/wvdial.conf``
#. Edit `` editor /etc/wvdial.conf``:
   .. literalinclude:: _static/wvdial.conf
#. Modify it to work with your internet provider informations.
#. Run it with ``wvdial Defaults``. Change **Default** with whatever is write in **/etc/wvdial.conf**. 

Now running ``ifconfig`` or ``ip a`` you can see what IP assigned.

wpa_supplicant
^^^^^^^^^^^^^^
wpa_supplicant is the IEEE 802.1X/WPA component that is used in the client stations. It implements key negotiation with a WPA authenticator and it controls the roaming and IEEE 802.11 authentication/association of the wireless driver.


RPI as an Access Point
----------------------
The Raspberry Pi can be used as a wireless access point, running a standalone network.
It is needed an Access Point to easily connect to the raspberry with an SSH connection. 
If we want to connect the rpi to a new WIFI, it is needed to manually change the network configuration files. To make it easier we are using the RPI as an Access Point when we boot it. Is useful to have an external wireless adapter, so we set that up as access point and we use the rpi native wireless adapter to connect to the local network.
Making the RPI as an Access Point we can connect to it with any Device, for example a mobile phone. Once connected we use a web page to insert WIFI name and password. The RPI will automatically change the network configuration files and establish a connection to the new local network.

hostapd
^^^^^^
Hostapd is the main program that makes the rpi works as an Access Point.
After installing and configuring the program, it is good to change the default settings of *wifi name*, *wifi password*.
The configuration file of this program ``/etc/hostapd/hostapd.conf``.

dnsmasq
^^^^^^^
The DHCP service is provided by a program called dnsmask. The DHCP service is needed to assign IP addresses for the clients connected to the rpi AP. 
It is possible to allow access to a max number of clients by setting the range with this command: ``dhcp-range=192.168.0.x,192.168.y.20,255.255.255.0,<24>h``. Set the number of max clients choosing a range from **x** to **y**. 

Monitoring
----------

123solar
^^^^^^^^

.. todo:: no graph!

Web setup
---------

NGINX
^^^^^

Apache
^^^^^^

PHP and FPM
^^^^^^^^^^^

System
------

Interfaces settings
^^^^^^^^^^^^^^^^^^^

Cron
^^^^

Systemd
^^^^^^^

NTP
^^^
