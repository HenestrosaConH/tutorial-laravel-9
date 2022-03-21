<div id="top"></div>

<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![LinkedIn][linkedin-shield]][linkedin-url]

<!-- PROJECT LOGO -->
<br />
<div align="center">
  <h3 align="center">TutorialLaravel9</h3>

  <p align="center">
    Estructura basada en el curso de pildorasinformaticas. No obstante, aquí se proveen detalles adicionales sacados de la documentación y se hace uso Laravel 9.
    <br />
    <a href="https://github.com/HenestrosaConH/TutorialLaravel9/issues">Reportar bug</a>
    ·
    <a href="https://github.com/HenestrosaConH/TutorialLaravel9/issues">Solicitar funcionalidad</a>
  </p>
</div>

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table de contenidos</summary>
  <ol>
    <li>
      <a href="#sobre-el-proyecto">Sobre el proyecto</a>
      <ul>
        <li><a href="#realizado-con">Realizado con</a></li>
      </ul>
    </li>
    <li>
      <a href="#contenidos">Contenidos</a>
			<ol>
				<li><a href="#framework-web-y-creacion-de-proyectos">Framework web y creación de proyectos</a></li>
				<li><a href="#rutas-y-controladores">Rutas y controladores</a></li>
				<li><a href="#vistas-mediante-bootstrap-y-blade">Vistas mediante Bootstrap y Blade</a></li>
				<li>
					<a href="#bases-de-datos-y-eloquent">Bases de datos y Eloquent</a>
					<ol start="5">
						<li><a href="#tinker">Tinker</a></li>
					</ol>
				</li>
				<li><a href="#crud-con-formularios">CRUD con formularios</a></li>
				<li><a href="#auth-sesiones-y-mails">Auth, sesiones y mails</a></li>
				<li><a href="#aplicacion-web-completa-con-laravel">Aplicación web completa con Laravel</a></li>
			</ol>
    </li>
		<li><a href="#contribuir">Contribuir</a></li>
    <li><a href="#contacto">Contacto</a></li>
    <li><a href="#agradecimientos">Agradecimientos</a></li>
  </ol>
</details>

<!-- SOBRE EL PROYECTO -->

## Sobre el proyecto

El creador del tutorial realiza el proyecto en Laravel 5.5, mientras que yo lo he hecho en Laravel 9 realizando todos los cambios pertinentes para asegurar el correcto funcionamiento del contenido aprendido.

<p align="right">(<a href="#top">volver al principio</a>)</p>

<!-- HECHO CON -->

### Hecho con

-   [Laravel 9](https://laravel.com)
-   [Bootstrap 5](https://getbootstrap.com)

<p align="right">(<a href="#top">volver al principio</a>)</p>

<!-- GETTING STARTED -->

## Contenidos

Los contenidos vistos en el curso dan una base sólida sobre Laravel, pero hay muchísimas cosas que se resumen o que directamente se pasan por alto de la documentación, por lo que te sugiero altamente que la leas conforme se progresa en el curso. Mencionar que la documentación de Laravel está muy bien redactada y estructurada y que, además, existe [Laracasts](https://laracasts.com/): una página que enseña desarrollo web a través de cursos gratuitos y de pago. Es un buen complemento junto a la documentación. Asimismo, aconsejo echarle un vistazo a [este repositorio](https://github.com/LaravelDaily/Laravel-Roadmap-Learning-Path) que sirve como roadmap para estructurar vuestro desarrollo como programadores de Laravel.

También añadir que es importante tener una base sólida de PHP para hacer un uso razonado y comprensivo del framework, ya que cualquier framework que se utilice abstrae el lenguaje en el que está basado. Esto implica que muchas veces, la "magia" del framework sea inexplicable para los desarrolladores a causa de la facilidad con la que se realizan acciones como el enrutamiento o el proceso de autentificación.

Adicionalmente, es importante tener conocimientos de HTML para usarlo en los archivos `.blade.php` y de CSS para estilizar a los elementos HTML.

<!-- FRAMEWORK WEB Y CREACIÓN DE PROYECTOS -->
### Framework web y creación de proyectos

#### Qué es Laravel

Laravel es un framework *open source* y gratuito, construido en PHP, que se utiliza para el diseño web siguiendo el patrón MVC. Está basado en otro framework PHP llamado *Symphony*.

#### Qué es un framework

Un *framework*  es una herramienta que provee una serie de componentes o soluciones para agilizar y facilitar la etapa de desarrollo.

#### Qué es el patrón MVC

Laravel sigue el patrón de diseño arquitectónico MVC, el cual consiste en dividir la aplicación/programa en tres pares: Modelo, Vista y Controlador.

* El modelo se encarga de realizar las peticiones a la base de datos.
* La vista muestra, a través de interfaces gráficas (Laravel utiliza el motor de plantillas *Blade*), la información de la aplicación/programa.
* El controlador es el intermediario entre el modelo y la vista. Es decir, es el cerebro que se encarga de pasarle a la vista los datos del modelo que tienen que ser presentados.

#### Crear proyecto de Laravel

Se puede instalar Laravel de varias formas, tal y como se puede comprobar en la [documentación oficial](https://laravel.com/docs/9.x). Por mi parte, recomiendo crear proyectos Laravel via Composer ya que se realiza, simplemente, con la ejecución del comando `composer create-project laravel/laravel nombre-proyecto`. Aquí dejo un enlace para la [instalación de Composer](https://getcomposer.org/download/).

Para el despliegue del proyecto creado, recomiendo altamente el uso de [Laragon](https://laragon.org/). Es una herramienta muy potente que incluso tiene la opción de crear un proyecto Laravel con tan solo dar un click, sin necesitad de introducir comandos en la consola.

[Este](https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/1.%20Framework%20web%20e%20instalaci%C3%B3n/Proyecto%20vac%C3%ADo/example-app) es un ejemplo de proyecto vacío que se podría usar como plantilla.

<!-- RUTAS Y CONTROLADORES -->
### Rutas y controladores

-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/2.%20Rutas%20y%20controladores/a)%20Creaci%C3%B3n%20de%20rutas%20simples/routes">Creación de rutas simples</a>
-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/2.%20Rutas%20y%20controladores/b)%20A%C3%B1adir%20un%20controlador%20a%20una%20ruta">Añadir un controlador a una ruta</a>
-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/2.%20Rutas%20y%20controladores/c)%20Creaci%C3%B3n%20de%20controladores%20desde%20Artisan">Creación de controladores desde Artisan</a>
-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/2.%20Rutas%20y%20controladores/d)%20Gestionar%20vista%20desde%20un%20controlador">Gestionar vista desde un controlador</a>
-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/2.%20Rutas%20y%20controladores/e)%20Crear%20rutas%20CRUD%20y%20listarlas%20con%20Artisan">Crear rutas CRUD y listarlas con Artisan</a>

<!-- VISTAS MEDIANTE BOOTSTRAP Y BLADE -->
### Vistas mediante Bootstrap y Blade

-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/3.%20Vistas%20mediante%20Bootstrap%20y%20Blade/a)%20Enlazar%20a%20Bootstrap%20CDN">Enlazar a Bootstrap CDN</a>
-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/3.%20Vistas%20mediante%20Bootstrap%20y%20Blade/b)%20Nav%20con%20Bootstrap">Nav con Boostrap</a>
-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/3.%20Vistas%20mediante%20Bootstrap%20y%20Blade/c)%20Plantilla%20base%20con%20plantillas%20descendientes">Plantilla base con plantillas descendientes</a>
-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/3.%20Vistas%20mediante%20Bootstrap%20y%20Blade/d)%20Mostrar%20informaci%C3%B3n%20de%20modelo%20desde%20plantilla">Mostrar información de modelo desde plantilla</a>
-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/3.%20Vistas%20mediante%20Bootstrap%20y%20Blade/e)%20Combinar%20plantillas%20Blade%20hechas%20con%20Bootstrap/resources%20-%20views">Combinar plantillas Blade hechas con Bootstrap</a>

<!-- BASES DE DATOS Y ELOQUENT -->
### Bases de datos y Eloquent

-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/4.%20Bases%20de%20datos%20y%20Eloquent/a)%20Configurar%20BBDD">Configurar BBDD</a>
-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/4.%20Bases%20de%20datos%20y%20Eloquent/b)%20Migraciones">Migraciones</a>
-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/4.%20Bases%20de%20datos%20y%20Eloquent/c)%20Consultas%20SQL%20nativas/routes">Consultas SQL nativas</a>
-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/4.%20Bases%20de%20datos%20y%20Eloquent/d)%20Creaci%C3%B3n%20de%20modelos%20y%20uso%20de%20Eloquent">Creación de modelos y uso de Eloquent</a>
-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/4.%20Bases%20de%20datos%20y%20Eloquent/e)%20Selecci%C3%B3n%20de%20registros%20con%20filtros%20en%20Eloquent">Selección de registros con filtros en Eloquent</a>
-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/4.%20Bases%20de%20datos%20y%20Eloquent/f)%20Insertar%20y%20actualizar%20registros%20en%20Eloquent/routes">Insertar y actualizar registros en Eloquent</a>
-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/4.%20Bases%20de%20datos%20y%20Eloquent/g)%20CRUD%20en%20masa%20en%20Eloquent">CRUD en masa en Eloquent</a>
-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/4.%20Bases%20de%20datos%20y%20Eloquent/h)%20Soft%20deleting%20en%20Eloquent">Soft deleting en Eloquent</a>
-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/4.%20Bases%20de%20datos%20y%20Eloquent/i)%20Relaci%C3%B3n%201-1%20en%20Eloquent">Relación 1-1 en Eloquent</a>
-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/4.%20Bases%20de%20datos%20y%20Eloquent/j)%20Relaci%C3%B3n%201-1%20inversa%20en%20Eloquent">Relación 1-1 inversa en Eloquent</a>
-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/4.%20Bases%20de%20datos%20y%20Eloquent/k)%20Relaci%C3%B3n%201-%E2%88%9E%20en%20Eloquent">Relación 1-∞ en Eloquent</a>
-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/4.%20Bases%20de%20datos%20y%20Eloquent/l)%20Relaci%C3%B3n%20%E2%88%9E-%E2%88%9E%20en%20Eloquent">Relación ∞-∞ en Eloquent</a>
-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/4.%20Bases%20de%20datos%20y%20Eloquent/m)%20Relaciones%20polif%C3%B3rmicas%20en%20Eloquent">Relaciones polifórmicas en Eloquent</a>

<!-- TINKER -->
### Tinker

Es una consola de pruebas que permite multitud de operaciones. Entre ellas, interactuar con las BBDDs uttilizando Eloquent, hacer operaciones CRUD, crear objetos nuevos, comprobar relaciones…

Para su ejecución, hay que introducir el comando `php artisan tinker` y, para salir, hay que ejecutar el comando `exit;`.

<a href="https://github.com/HenestrosaConH/TutorialLaravel9/blob/main/4.5%20Tinker/uso-de-tinker.txt">Uso de Tinker</a>

<!-- CRUD con formularios -->
### CRUD con formularios

-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/5.%20CRUD%20con%20formularios/a)%20Caso%20pr%C3%A1ctico">Caso práctico</a>
-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/5.%20CRUD%20con%20formularios/b)%20Laravel%20Collective">Laravel Collective</a>
-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/5.%20CRUD%20con%20formularios/c)%20Validaci%C3%B3n%20de%20formularios">Validación de formularios</a>
-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/5.%20CRUD%20con%20formularios/d)%20Subida%20y%20obtenci%C3%B3n%20de%20im%C3%A1genes%20en%20formularios">Subida y obtención de imágenes en formularios</a>

<!-- AUTH, SESIONES Y MAILS -->
### Auth, sesiones y mails

-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/6.%20Auth%2C%20sesiones%20y%20mails/a)%20Sistema%20de%20registro%20e%20inicio%20de%20sesi%C3%B3n">Sistema de registro e inicio de sesión</a>
-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/6.%20Auth%2C%20sesiones%20y%20mails/b)%20Roles%20y%20zonas%20de%20usuarios">Roles y zonas de usuarios</a>
-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/6.%20Auth%2C%20sesiones%20y%20mails/c)%20Sesiones">Sesiones</a>
-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/6.%20Auth%2C%20sesiones%20y%20mails/d)%20Enviar%20mails">Enviar mails</a>

<!-- APLICACIÓN WEB COMPLETA CON LARAVEL -->
### Aplicación web completa con Laravel

Se trata de una aplicación muy básica en la que podremos iniciar sesión como usuarios y hacer operaciones CRUD de usuarios a través de formularios. Se hace uso de Bootstrap 5.

-   <a href="https://github.com/HenestrosaConH/TutorialLaravel9/tree/main/7.%20Aplicaci%C3%B3n%20web%20completa%20con%20Laravel">Link</a>

<p align="right">(<a href="#top">volver al principio</a>)</p>


<!-- CONTRIBUIR -->
## Contribuir

Las contribuciones son lo que hacen a la comunidad open source un sitio increíble del que aprender, inspirar y crear. Cualquier contribución que hagas será **muy agradecida**.

Si tienes alguna sugerencia que crees que puede beneficiar al proyecto, haz un *fork* y crea un *pull request*. También puedes abrir un *issue* con la etiqueta "mejora".

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Haz un *fork* del proyecto
2. Crea tu propia rama (`git checkout -b feature/AmazingFeature`)
3. Haz commit de tus cambios (`git commit -m 'Add some AmazingFeature'`)
4. Haz push de la rama (`git push origin feature/AmazingFeature`)
5. Crea un *pull request*

<p align="right">(<a href="#top">volver al principio</a>)</p>

<!-- CONTACTO -->

## Contacto
 
Creador del curso original: [pildorasinformaticas](https://www.youtube.com/channel/UCdulIs-x_xrRd1ezwJZR9ww) - [Playlist del curso](https://www.youtube.com/watch?v=0sHSrqyZCnM&list=PLU8oAlHdN5Bk-qkvjER90g2c_jVmpAHBh&ab_channel=pildorasinformaticas)

Autor del repositorio: henestrosaconh@gmail.com - [LinkedIn](https://www.linkedin.com/in/josecarloslh/)

Link del proyecto: [https://github.com/HenestrosaConH/TutorialLaravel9](https://github.com/HenestrosaConH/TutorialLaravel9)

<p align="right">(<a href="#top">volver al principio</a>)</p>

<!-- Agradecimientos -->

## Agradecimientos

Como he dicho en varias partes del documento, agradecer a [pildorasinformaticas](https://www.youtube.com/channel/UCdulIs-x_xrRd1ezwJZR9ww) por su curso de Laravel y a todos estos repositorios que han ayudado a la realización de este proyecto/README:

-   [Best-README-Template](https://github.com/othneildrew/Best-README-Template/)
-   [Img Shields](https://shields.io)

<p align="right">(<a href="#top">volver al principio</a>)</p>

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->

[contributors-shield]: https://img.shields.io/github/contributors/HenestrosaConH/TutorialLaravel9.svg?style=for-the-badge
[contributors-url]: https://github.com/HenestrosaConH/TutorialLaravel9/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/HenestrosaConH/TutorialLaravel9.svg?style=for-the-badge
[forks-url]: https://github.com/HenestrosaConH/TutorialLaravel9/network/members
[stars-shield]: https://img.shields.io/github/stars/HenestrosaConH/TutorialLaravel9.svg?style=for-the-badge
[stars-url]: https://github.com/HenestrosaConH/TutorialLaravel9/stargazers
[issues-shield]: https://img.shields.io/github/issues/HenestrosaConH/TutorialLaravel9.svg?style=for-the-badge
[issues-url]: https://github.com/HenestrosaConH/TutorialLaravel9/issues
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/henestrosaconh
