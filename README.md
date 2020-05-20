# File2PDF

Projeto de website que tem o objetivo converter arquivos de imagem para PDF. É um trabalho da faculdade e está em seus estágios iniciais do desenvolvimento.

## Requisitos

* PHP 7 ou superior instalado no sistema
* O xdg-open é necessário apenas para iniciar um host local automaticamente e não é essencial para o funcionamento do website

## Instalação

* Clone o repositório para sua máquina com:

```
git clone https://github.com/HenriqueMiossi/File2PDF
```

* Instale o PHP em sua máquina caso ainda não o tenha instalado. Para conferir qual versão está instalada digite: 

```
php --version
```

* Verifique se você possui o xdg-open instalado. Caso possua, prossiga para a Execução Automática, caso contrário, será necessário instalar o pacote xdg-utils ou prosseguir para a Execução Manual.

```
xdg-open --version
```

## Executando Automaticamente

* Entre no diretório do projeto e execute o script de inicialização, que irá rodar o servidor e abrir seu navegador padrão:

```
./startLocalHost.sh
```

## Executando Manualmente

* Crie um host local com o PHP:

```
php -S localhost:8000
```

* Abra seu navegador de preferência (Chrome recomendado) e entre no servidor local digitando o seguinte link:

```
http://localhost:8000
```
