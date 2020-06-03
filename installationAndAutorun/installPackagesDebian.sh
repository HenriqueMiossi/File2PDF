#!/bin/bash

apt update

for package in xdg-utils enscript ghostscript php7.4 
do

apt install -qq $package

done
