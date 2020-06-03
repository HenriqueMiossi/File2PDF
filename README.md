# File2PDF

Projeto de website que tem o objetivo converter arquivos de imagem para PDF. É um trabalho da faculdade e está em seus estágios iniciais do desenvolvimento.

## Requisitos

* PHP 7 ou superior instalado no sistema
* Sistema operacional baseado em unix

## Instalação

* Clone o repositório para sua máquina com:

```
git clone https://github.com/HenriqueMiossi/File2PDF
```

* Entre no diretório installationAndAutorun

```
cd installationAndAutorun
```

* Instale as dependências necessárias de acordo com seu sistema: 

```
./installPackagesDebian.sh
```
```
./installPackagesFedora.sh
```

## Executando Automaticamente

* Rode o script de autoexecução:

```
./startLocalHost
```

## Execução Manual

* Caso o script não funcione, volte ao diretório raíz e execute manualmente:
```
php -S localhost:8000
```

* Abra seu navegador de preferência (recomendado baseados em chromium, como o chrome, edge, brave...) e acesse:
```
http://localhost:8000
```
