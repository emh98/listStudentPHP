# Student List
## Requerimientos
1. Intalar nodejs la más actual posible junto con npm.
2. Instalar yarn.

Esto es necesario para que funcione las librerias de webpack-bundle para symfony.

## Pasos de instalación
1. Clona el repositorio.
2. Ingresa a la carpeta del proyecto.
3. Ejecuta el comando `make build` esto permitira construir la imagen de docker.
4. Ejecuta el comando `make run` esto permitira correr todos lo contenedores para el correcto funcionamiento de la aplicación.
5. Ejecuta el comando `make prepare` esto instalara todas las librerias del compouser de PHP.
6. Ejecuta el comando `yarn install` esto instalara las librerias nodejs que requiee el proyecto.
7. Ejecuta el comando `yarn watch` esto permitira insertar los assets faltantes que provienen de nodejs.
8. Ejecuta el comando `make create-migration` esto para actualizar el proceso de migracion de la base de datos.
9. Ejecuta el comando `make migrate` esto para montar las tablas en la base de datos.

Con esto terminaria la instalación basíca
### posibles alertas:
Si aparece que la gtabla prueba ya esta creada no se preocupe que la aplicación funcionara con total normalidad.

## Datos importantes:
### Base de datos
Para ingresar a la base de datos se esta utilizando el puerto 3307, con el usuario user y la contraseña password.
### Web App
Se ingresa desde el localhost:8009.
### Makefile:
utilisando el comando `make`  saldran todos los comandos make que estan configurados.

## Funcionamiento

1. Solo oprime el boton agregar estudiante para que aparesca y desaparesca la lista de estudiantes.
2. Para agregar un nuevo estudiante es obligatorio que ambos campos tengan texto escrito y luego oprima el boton agregar estudiante.
