# api-bi

Business Intelligence es un Aplicación diseñada para llevar el control de la información de empresas que se encargan de realizar producciones teatrales en cualquier parte del mundo.

Esta aplicación esta desarrollada con PHP 7.2 utilizando el framework laravel 5.6

# Configuración de la Aplicación 

Requerimientos minimos:
* PHP 7.2
* Composer 1.6.5
* MySqlServer version 5.7.22 o superior

Se debe tener instalado composer 1.6.5, sigue las instrucciones de instalación en el siguiente link [Composer](https://getcomposer.org/download/)

# Creación de la base de datos
Crea en MySql una base de datos con el nombre business_intelligence

# Migración de la data
Una vez clonado el proyecto, a traves de la consola de comandos cambia al directorio hasta la carpeta del proyecto api-bi, una vez allí ejecuta el siguiente comando:

>php artisan migrate

# Popular la base de datos
Si deseas Popular la base de datos con ata de prueba ejecuta el siguiente comando:

>php artisan db:seed

# Levantar el servidor

>php artisan serve

**Para verificar la respuesta de los servicios
Abre una ventana del explorador (Preferiblemente Chrome) y escribe:** 

>(http://localhost:8000/api/{endpoint})

Listado de Endpoints disponibles:
* **/countries**
* **/states**
* **/cities**
* **/shows**
* **/categories**
