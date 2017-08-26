# Validador Hash - PHP

Sistema em PHP para buscar informações em um Serviço Windows e retornar informações de acordo o ID e HASH inseridos.  

### Pré-requisitos

Sinta-se livre para baixar ou clonar o código:

```
git@github.com:ThallisonRhanniel/ValidadorHashPHP.git
```
Antes de usar o ValidadorHash, por favor instale:

**Serviço no Windows. [Clique Aqui](https://github.com/ThallisonRhanniel/ServicoWcf) para saber mais.**

[Bootstrap](https://github.com/twbs/bootstrap/archive/v4.0.0-beta.zip)

```
http://getbootstrap.com/
```

* [Jquery](https://code.jquery.com/jquery-3.2.1.min.js)
* [Jquery.Validate](https://github.com/jquery-validation/jquery-validation/releases/download/1.17.0/jquery-validation-1.17.0.zip)


```
  * https://jquery.com/

  * https://jqueryvalidation.org/
```
[EasyPHP](http://www.easyphp.org/save-easyphp-devserver-latest.php)

```
http://www.easyphp.org/
```
Será utilizado no Sistema uma biblioteca que não está nativamente ativa, devemos ativa-lá.

Será necessário alterar o arquivo **PHP.ini**

**Observação: Este procedimento necessita do EasyPHP instalado previamente.**

Para localizarmos onde fica o arquivo, basta usar o método abaixo no seu Index.php.

```php
<?php
    phpinfo()
?>
```
Abrirá uma enorme tabela, mas precisamos apenas do caminho do arquivo.

![PHP.ini](https://raw.githubusercontent.com/ThallisonRhanniel/ValidadorHashPHP/master/Screenshot/phpIni.png)

Nesse arquivo à varias dll, procure o **php_soap.dll** e remova o **;** 

![Soap](https://raw.githubusercontent.com/ThallisonRhanniel/ValidadorHashPHP/master/Screenshot/soapDll.png)

### Instalando

Para usar o Sistema é necessário um servidor PHP. Hospede o sistema em seu Host favorito.

Nesse exemplo usaremos **LocalHost**

Após baixar o EasyPHP, instale e copie a pasta do sistema para **C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www**

Feito isso, abra o EasyPHP e click em Start:

![Easy PHP](https://raw.githubusercontent.com/ThallisonRhanniel/ValidadorHashPHP/master/Screenshot/easyphp.png)


## Como usar

Insira o ID e HASH em seus respectivos campos e clique em Send 

![Inserir Dados](https://raw.githubusercontent.com/ThallisonRhanniel/ValidadorHashPHP/master/Screenshot/inserirDados.png)

## Resultado

![Resultado](https://raw.githubusercontent.com/ThallisonRhanniel/ValidadorHashPHP/master/Screenshot/resultado.png)


