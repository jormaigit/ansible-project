# Ansible LAMP en Docker

Este proyecto utiliza Ansible para configurar un entorno LAMP completo dentro de un contenedor Docker. 
Es una solución todo en uno que instala y configura MySQL, Apache y PHP dentro de un contenedor para desplegar una aplicación web.

# Entorno de despliegue recomendado
Ubuntu 22.04

## Requisitos Previos

1. Software necesario:

- Python: Versión 3.10 o superior.
 
- Ansible [core 2.16.3] ( se puede instalar con --> python3 -m pip install ansible)
- Jinja version  3.1.3

- Docker version 25.0.3

- Ssh --> OpenSSH_8.9p1

- Git version 2.34.1

- Tener un usuario con permisos los necesarios para ejecutar los comandos


2. Tener la red que usa el contenedor libre (o modificarla a su gusto)

3. Añadir al /etc/hosts la IP y nombre del contenedor (opcional)

4. Generar clave publica y privada (sino se tiene generada previamente)

5. Clonar el repistorio con -->  git clone https://github.com/jormaigit/ansible-project.git

6. Moverse al directorio --> cd ansible-project

7. Ejecutar --> bash setup.sh

8. Ejecutar --> ssh-copy-id ubuntu-test (contraseña del contenedor --> lepanto)

9. Ejecutar --> ansible-playbook lamp.yaml

10. Acceder con un navegador web a "http://ubuntu-test" o "http://172.20.0.100/"
