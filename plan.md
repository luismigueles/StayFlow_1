FRONTEND:

JavaScript: Se utilizara para crear una interfaz de usuario interactiva, considerando su escalabilidad y fácil mantenimiento.

HTML: Proporcionara la estructura del contenido haciendo que sea compatible con distintos navegadores e incluso dispositivos.

CSS: Se usara para el diseño y la presentación visual, haciendo una interfaz moderna y responsiva.

MOTIVO: Me permite mayor control del rendimiento y reducir la dependencia de librerías externas (Aunque no descarto usarlas).



BACKEND:

PHP(Laravel): Es un framework de PHP. Me ofrece un modelo vista-controlador, sistema de autentificación y migración a la base de datos mejorada.

MOTIVO: Me simplifica el desarrollo en cuanto a gestión de usuarios, y conexión con la base de datos.



BBDD:

MySQL: Bases de datos relacional para gestionar la información del hotel. (Reservas, usuarios, huéspedes etc...).

MOTIVO: Es escalable y se integra fácilmente con Laravel, lo que permite una conexión segura de los datos.



HERRAMIENTAS DE DESARROLLO:

Visual Studio Code: Editor ligero ágil y fácilmente personalizable, gracias a las extensiones.

MySQL Workbench: Herramienta que me facilita la gestión de la base de datos y para las consultas.

XAMPP: Para ejecutar y probar la aplicación, antes de su implementación.

GitHub: Plataforma para alojar un flujo de trabajo organizado.

Git: sistema de control de versiones que me permite gestionar los cambios en el código.

## Objetivos generales y especificos

OBJETIVOS GENERALES:

Desarrollar una aplicación web interna para la gestión operativa de hoteles, para centralizar y optimizar los procesos administrativos mejorando la eficiencia de los empleados.



OBJETIVOS ESPECIFICOS:

Gestión de Reservas: Implementar un modulo para la creación de nuevos huéspedes y asignarles una habitación libre, permitiendo ver el estado en tiempo real de las habitaciones ocupadas/libres.



Control de usuarios y roles: Crear un sistema de autentificación y autorización que permita roles específicos, con acceso restringido a determinadas funcionalidades.



Gestión de habitaciones: Permitir la actualización del estado, para facilitar la organización interna.



Modulo de limpieza y Mantenimiento: Crear una funcionalidad, para la asignación y seguimiento de las tareas e incidencias de limpieza/mantenimiento.



Interfaz sencilla e intuitiva: Diseñar una interfaz amigable y moderna facilitando la navegación a los usuarios.



Pruebas: Se realizaran pruebas funcionales para asegurar el correcto funcionamiento de cada modulo antes de implementarlo.



Despliegue con XAMPP: Ejecutar la aplicación en un servidor local para garantizar su correcto funcionamiento.

## disposicion de las tablas 
Tabla Usuarios:

Almacena información sobres los usuarios con la PK ID_usuario

Se usara un campo rol para diferenciar a los empleados.

Relaciones:  1-N con Tabla Habitaciones y 1-N con la tabla Tareas.



Tabla Habitaciones:

Contiene información como tipo de habitación capacidad etc..

Relaciones: 1-N Tabla usuarios y 1-N Tabla tareas.



Tabla Tareas:

registra todas las tareas como limpieza y mantenimiento

Relaciones: 1-N con Tabla Usuarios y 1-N con Tabla Habitaciones.



No se descarta añadir alguna tabla mas si fuese necesario.

La gestión de los hoteles es un área que en muchos casos sigue dependiendo de sistemas obsoletos o procesos manuales, que en muchos casos generan errores y la mala experiencia del huésped del hotel que ello conlleva.

Con esta aplicación web, pretendo aportar una solución tecnológica que facilite la organización del personal y mejorar la calidad del servicio.

## Justificacion

Alineación con los objetivos del ciclo:

Este proyecto me permite poner en practica...

Desarrollo Full Stack - Aplicando tanto FRONT como BACK y BBDD.

Gestión de bases de datos relacionales- Diseñando una estructura de datos eficiente.

Despliegue en un entorno real - Utilizando herramientas como XAMPP.



Este proyecto, es una oportunidad para combinar mi interés en la tecnología con una solución practica en el sector hotelero, que además me permite consolidar mis conocimientos para prepararme en un entorno real.

