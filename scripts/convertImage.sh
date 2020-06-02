#!/bin/bash

cd uploads

./magick convert *.png final.pdf
./magick convert *.jpg final.pdf
./magick convert *.jpeg final.pdf
