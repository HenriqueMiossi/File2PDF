# File2PDF

Simple website project which aims to convert image and text files to PDF. This was made for a university assignment.

## Requisites

* PHP 7 or higher
* Preferably an unix based OS

## Installation

* Clone this repo to your machine with:

```
git clone https://github.com/HenriqueMiossi/File2PDF
```

* Proceed to installationAndAutorun directory:

```
cd installationAndAutorun
```

* Install the needed dependencies acording to your system: 

```
./installPackagesDebian.sh
```
```
./installPackagesFedora.sh
```

## Autorun

* Run the autorun script:

```
./startLocalHost
```

## Manual Running

* In case the autorun script stops working, go back to the root directory and run manually:
```
php -S localhost:8000
```

* Open your preferred browser (chromium based recommended) and access:
```
http://localhost:8000
```
