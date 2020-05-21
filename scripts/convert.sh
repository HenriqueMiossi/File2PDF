#!/bin/bash

cd uploads

./magick convert *.png final.pdf
./magick convert *.jpg final.pdf
./magick convert *.jpeg final.pdf

if enscript -p texto.ps *.txt; then
    ps2pdf texto.ps final.pdf
else
    exit 0
fi