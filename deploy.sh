#!/bin/sh
cd syrus_webpage/
git pull origin master
sudo service apache2 restart
