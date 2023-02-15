<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## SISTEMA WEB PARA LA AUTOMATIZACIÓN DE PROCESOS DE GESTIÓN Y MONITOREO DEL GANADO BOVINO

Para la utilización de este sistema, la pc o el servidor necesita los siguientes elementos:

*Se incluyen los enlaces oficiales para la descarga:*

Composer: <a href="https://getcomposer.org/download/">https://getcomposer.org/download/</a>

PHP versión 8.1 en adelante : <a href="https://www.php.net/downloads.php">https://www.php.net/downloads.php</a>

## INSTALACIÓN

Los siguientes pasos son para computadoras personales, en caso de instalación en un servidor dedicado guiarse con la documentación de dicho servidor.

**1) Ejecutar el comando:**
```bash
composer install
```
**2) Crear una base de datos en su SGBD**
 
**3) En la carpeta raíz crear un archivo .env y pegar el siguiente contenido, modificando los valores entre parentesis por los correspondientes a sus servicios.
   En caso de no contar con un servicio de correo puede utilizar el servicio de gmail <a href="https://noted.lol/setup-gmail-smtp-sending-2023/"> aquí un artículo que indica como</a>**
```bash
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:hv51yrHoR6eXacvHMObHhZPbF4qoH5r7knOfLHm/Z0I=
APP_DEBUG=true
APP_URL=http://localhost/

LOG_CHANNEL=stack

DB_CONNECTION=(base_de_datos_que_se_utilizará)
DB_HOST=(host_donde_se_encuentra_la_base_de_datos)
DB_PORT=(puerto_de_la_base_de_datos)
DB_DATABASE=(nombre_de_la_base_de_datos)
DB_USERNAME=(nombre_de_usuario_de_la_base_de_datos)
DB_PASSWORD=(contraseña_de_la_base_de_datos)

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=database
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=(host_del_sistema_de_correo_que_se_utilizará)
MAIL_PORT=(puerto_recomendado_del_sistema_de_correo)
MAIL_USERNAME=(dirección_de_correo_encargada_del_envío)
MAIL_PASSWORD=(contraseña_del_correo)
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=(dirección_de_correo_encargada_del_envío)
MAIL_FROM_NAME="Sistema de Gestión Bovina"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

**4) Ejecutar las migraciones a la base de datos con el siguiente comando:**
```bash
    php artisan migrate:fresh --seed
```
**5) Ejecutar el proyecto con el siguiente comando:**
```bash
    php artisan serve
```
**6) Para la actualización automática de categorías periodo seco y demás mientras el sistema este activo ejecutar el siguiente comando**
```bash
    php artisan schedule:work
```
 
# QUE OFRECE EL SISTEMA

El sistema cuenta con las siguientes carcterísticas:

## SECCIÓN GANADO
### Gestión de razas
- Ver listado de razas
- Ingreso de nuevas razas
- Editar razas

### Gestión de Bovinos
- Ver el listado de bovinos
- ingresar animal
- editar animal
- eliminar animal
- reporte general del animal

### Cambio autómatico
- Cambio de categoría (ternero,torete,toro,vacona,vaca) dependiendo de la edad del animal.
- Finalización de días abiertos (100 días despues del parto)
- Inicio de periodo seco (300 días después del parto)
- Finalización de periodo seco (60 días después del inicio del periodo seco)

## SECCIÓN REPRODUCTIVA
### Gestión de montas
- Ver listado de montas
- Ingreso de Montas ->(solo permite el ingreso de animales aptos para la monta, es decir hembras vaconas o vacas que no se encuentren inseminadas, gestando o en sus                          días abiertos; y machos toretes o toros y la posibilidad de escoger inseminación como reemplazo del macho)
- Editar montas -> (Solo mientras la monta no haya sido finalizada)
- Finalización de montas
- Reporte de la monta
- Notificación de verificación de inseminación.

### Gestión de gestaciones
- Ver listado de gestaciones
- Finalización de gestaciones
- Reporte de la gestación
- Notificación de revisión ginecológica y fecha aproximada de parto (solo si la monta fue finalizada con éxito)
### Gestión de partos
- Ver listado de partos
- Editar parto
- Reporte de parto
- inicio de días abiertos y cambio al estado productivo: Lactando automático.
### Gestión de abortos
- Ver listado de abortos
- Editar aborto
- Reporte de aborto

## SECCIÓN PRODUCTIVA 
### Gestión de ordeños
- Ver listado de registro de ordeños
- Ingreso de ordeños ->(Solo vacas que tengan el estado productivo lactando, fecha limites de ingreso: desde el parto hasta 300 días después del mismo)
- Editar Ordeño
- Eliminar Ordeño
- Reporte de Ordeño

## SECCIÓN NUTRICIÓN
### Gestión de pesos
- Ver listado de registro de pesos
- Ingreso de nuevo registro
- Editar registro de peso
- Eliminar registro de peso
- Reporte de peso

### Cálculos de alimentación
- Cálculo de materia seca y pasto dependiendo del peso del animal

## SECCIÓN SANITARIA
### Gestión de enfermedades
- Ver listado de enfermedades
- Ingreso de nueva enfermedad
- Editar enfermedad
- Eliminar enfermedad
### Gestión de registros de enfermedades
- Ver listado de registro de enfermedades
- Ingresar nuevo registro
- Editar nuevo registro
- Eliminar registro
- Reporte de registro de enfermedad
### Gestión de vacunas
- Ver listado de vacunas
- Ingresar nueva vacuna
- Editar vacuna
- Eliminar vacuna
### Gestión de registro de vacunas
- Ver listado de registro de vacunas
- Ingresar nuevo registro
- Editar nuevo registro
- Eliminar registro
- Reporte de registro de vacunas
- Notificación de proxima vacuna si esta tiene periodicidad
### Gestión de Actividades
- Ver listado de registro de actividades
- Ingresar nuevo registro
- Editar nuevo registro
- Eliminar registro
- Reporte de registro de actividades
- Notificación de proxima actividad si esta tiene periodicidad

## SECCIÓN DE MORTALIDAD
### Gestión de muerte
- Ver listado de muertes
- Ingreso de nueva muerte
- Editar muerte
- Eliminar muerte->(Solo se elimina el estado muerto, el animal regresa al lisstado principal con su anterior estado).
- Reporte de muerte
- Reporte del animal
## SECCIÓN ADMINISTRATIVA
### Gestión de ventas
- Ver listado de ventas
- Ingreso de nueva venta
- Editar venta
- Eliminar venta->(Solo se elimina el estado vendido, el animal regresa al lisstado principal con su anterior estado).
- Reporte de venta

### Gestión de clientes
- Ver listado de clientes
- Ingreso de clientes
- Editar clientes
- Eliminar cliente->(Si el cliente tenía ventas a su nombre,estas pasan a nombre de "desconocido")

### Gestión de Usuarios
- Ver listado de usuarios
- Ingreso de usuario
- Editar usuario
- Eliminar usuario

### Gestión de permisos
- Ver listado de permisos
- Asignar o revocar permisos de acuerdo al rol del usuario
### OTRAS FUNCIONES
- Calendario para eventos y sistema de notificaciones
- Recuperación de Usuarios por medio de correo
- Gráficos estadisticos de ordeño y peso
- Gráficos estadisticos sobre el estado general del ganado.
- Sistema responsive para adaptarse a cualquier tipo de pantalla.



<div align="center">Realizado por Kevin Pacheco y Wilson García</div>

