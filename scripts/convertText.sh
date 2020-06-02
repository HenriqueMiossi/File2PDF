#!/bin/bash

cd uploads

if enscript -p texto.ps *.txt; then
    ps2pdf texto.ps final.pdf
else
    exit 0
fi