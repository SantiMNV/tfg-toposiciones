<p align="center"><img src="https://github.com/SantiMNV/tfg-toposiciones/blob/main/view/media/images/company/fototopo350-no-fondo.jpg" alt="Toposiciones"></p>

# Toposiciones 

Toposiciones es un sitio web sobre oposiciones.

### Requisitos

- Un sistema operativo basado en Unix, este proyecto ha sido desarrollado íntegramente en [Manjaro Linux](https://manjaro.org/)

También ha probado el despliegue en [Ubuntu](https://ubuntu.com); Si usas Windows es tu problema :)

- Apache2 u otro servidor web
- Activar mod rewrite de apache `a2enmod rewrite`
- php8
- mariaDB o mysql

## Instalación

Sitúese en el directorio base de su servidor de aplicaciones web

  - *ubuntu* `cd /var/www/html`

  - *arch* `cd /srv/http` 

Descárguese el repositorio, se recomienda usar la primera opción

| Método   | Comando                                                                                              |
|----------|------------------------------------------------------------------------------------------------------|
| **git**  | `git clone https://github.com/SantiMNV/tfg-toposiciones.git`                                         |
| **wget** | `wget --no-check-certificate --content-disposition https://github.com/SantiMNV/tfg-toposiciones.git` |
| **curl** | `curl -LJO https://github.com/SantiMNV/tfg-toposiciones.git`                                         |



Editar el path principal, descomente la línea debajo de tu su Sistema Operativo, o añada su directorio personalizado

```php

// MANJARO - Arch Based OS

const MAIN_DIRECTORY = "/srv/http/toposiciones";

// UBUNTU - Debian Based OS

//const MAIN_DIRECTORY = "/var/www/html/toposiciones";

// Windows & XAMPP

//const MAIN_DIRECTORY = "C:\\xampp\\htdocs\\toposiciones";

```

Tendrá que crear un usuario y contraseña a corde con el fichero /model/onclude/pdo_conncection.php
 

## Desinstalación

Sitúese en el directorio anterior al del repositorio y elimine el directorio usando

  `rm -rf tfg-toposiciones`

## Contribución & reporte de errores

  Cualquier error que encuentre en el repositorio, puede reportarlo usando Github en el apartado de Reporte de errores, proporcionando la máxima información

  posible y será arreglado lo antes posible.

 

  Si desea contribuir al proyecto, es libre de hacer un fork al proyecto y de llevar a cabo push requests que serán revisadas lo antes posible.

## Contribuidores

- Antonio Sierra (Tutor del proyecto)

 

Muchas gracias!
* * * 
 
>Este proyecto ha sido realizado como trabajo de fin de grado con una duración base de 40 horas en el grado superior de Desarrollo de Aplicaciones Web del IES Augusto González Linares, Peñacastillo (Cantabria)


## Sígueme

- [santimnv](https://www.linkedin.com/in/santimnv) en LinkedIn

- samntimnv27@gmail.com por correo

- [@SantiMNV](https://twitter.com/SantiMNV) en Twitter

- [@SantiMNV](https://www.instagram.com/sanitmnv/) en Instagram

# Screenshots
<p align="center"><img src="https://github.com/SantiMNV/tfg-toposiciones/blob/main/view/media/images/screeenshots/sc1.png"></p>
<p align="center"><img src="https://github.com/SantiMNV/tfg-toposiciones/blob/main/view/media/images/screeenshots/sc2.png"></p>
<p align="center"><img src="https://github.com/SantiMNV/tfg-toposiciones/blob/main/view/media/images/screeenshots/sc3.png"></p>
<p align="center"><img src="https://github.com/SantiMNV/tfg-toposiciones/blob/main/view/media/images/screeenshots/sc4.png"></p>