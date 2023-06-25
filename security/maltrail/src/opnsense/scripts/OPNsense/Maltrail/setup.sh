#!/bin/sh

mkdir -p /var/log/maltrail/
chown root:wheel /var/log/maltrail
chmod 750 /var/log/maltrail

/usr/local/opnsense/scripts/OPNsense/Maltrail/convert.php > /dev/null 2>&1