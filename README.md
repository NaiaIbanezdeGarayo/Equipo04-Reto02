## Documentación de Soporte y uso de herramientas digitales

### Nombre
---
Aergibide SL APP (Equipo4/Reto2)

### Descripción y contexto
---
Aergibide SL APP es una aplicación web multiplataforma basada en html, css, JavaScript, PHP y JSON/AJAX para la gestión del conocimiento de la empresa. En la cual los usuarios podrán formular preguntas para que otros usuarios que ya hayan pasado por el mismo problema o tengan los conocimientos suficientes les respondan. La aplicación fue concebida inicialmente para la empresa Aergibide SL, pero al tratarse de código abierto siéntase libre de utilizarla como desee.

  - Compatible con dispositivos de distintos tamaños.
  - Compatible con los navegadores más utilizados.
  - Compatible con todos sistemas operativos. (Menos los basados en texto)

### Guía de usuario
---

#### Primer Inicio de Sesión

Si has descargado e integrado correctamente la app en tu servidor, se te abrirá la interfaz de inicio de sesión. (Ver imágen inferior)
[![pic](https://i.imgur.com/RmtMNP7.png)]()

###### Si es la primera vez que accedemos, debemos crearnos un cuenta primero, para ello le daremos al botón "Crear cuenta", el cual nos llevará a la siguiente imagen.

[![pic](https://i.imgur.com/VNQdIW9.png)]()

Una vez aquí, solamente tendremos que rellenar los datos correspondientes y posteriormente podremos acceder con la cuenta que acabamos de crear.

Lo primero que nos encontramos nada más acceder a la aplicación, es lo siguiente:

[![pic](https://i.imgur.com/a7tcPJ8.png)]()

En la parte izquierda tendremos unos botones con los que podremos navegar entre Preguntas, Temas de las preguntas y usuarios de la aplicación. También tenemos un buscador incorporado por si es necesario buscar alguna pregunta en concreto. En la esquina superior derecha, podemos encontrar un monigote, el cual al clickarlo, nos saldrá un pequeño menú con diferentes selecciones. Podremos elegir entre "Crear una pregunta" / "Ir a nuestro perfil" / "Notificaciones" / "Cerrar sesión", si clickamos en la primera opción nos llevará al siguiente formulario para crear la pregunta:

[![pic](https://i.imgur.com/QJo5q9z.png)]()

En esta zona podremos especificar y extendernos tanto como queramos. Si seleccionamos la opción "Ir a nuestro perfil", nos llevará a una página donde nos muestrará nuestros datos, además de las preguntas que hemos creado. En caso de necesitar modificar la información de nuestro perfil, habrá un botón de "Editar pefil" el cual, al pulsarlo, nos llevará a la siguiente imagen:

[![pic](https://i.imgur.com/6pxfMng.png)]()
 	
### Guía de instalación
---
Para el correcto funcionamiento de dicha aplicación es necesario instalar Vagrant en el ordenador que vayamos a ejecutar la aplicación, en caso de que no tengamos un servidor LAMP propio.

Si ya disponemos de todo lo necesario para el correcto funcionamiento de la aplicación, podemos proceder con los siguientes pasos.

Una vez que hayamos descargado la ultima versión de la aplicación [Click aquí](https://github.com/NaiaIbanezdeGarayo/Equipo04-Reto02/tree/main) :
- Introduciremos los archivos en nuestro servidor, y en caso de que no tengamos uno usaremos Vagrant, crearemos una carpeta nueva y posteriormente haremos el "vagrant up".
- En caso de tener nuestro servidor, tendremos que lanzar el script "create_database_wp.sql" ubicado en "/config/.ficheros/". Por otro lado, si estamos usando Vagrant, una vez hecho el "vagrant ssh", tendremos que acceder a MYSQL y posteriormente lanzar dicho script SQL.
- Una vez que ya tenemos todo lo anterior bien hecho, solamente nos quedaría ejecutar el "index.view.php" ubicado en la carpeta raiz.

### Cómo contribuir
---
Si quieres contribuir, bien sea dando ideas de mejora, añadiendo código o de cualquier otra forma. Puedes ponerte en contacto con nosotros en los siguientes correos:
  - [Eric Martínez](mailto:eric.martinez@ikasle.egibide.org?subject=[GitHub]%Aergibide%SL%APP:%Contribuir)
  - [Naia Ibañez de Garayo](mailto:naia.ibanezdegarayo@ikasle.egibide.org?subject=[GitHub]%Aergibide%SL%APP:%Contribuir)
  - [Urko Ruiz de Gordejuela](mailto:urko.ruizdegordejuela@ikasle.egibide.org?subject=[GitHub]%Aergibide%SL%APP:%Contribuir)

### Autor/es
---
  - Eric Martínez
  - Naia Ibañez de Garayo
  - Urko Ruiz de Gordejuela
  
### Licencia 
---
#### ¡Código abierto!

¿Quieres realizar mejoras en el código?, ¡Adelante!, pero si logras mejorar la app no te olvides de proponer un "Pull request" para que podamos valorar la posibilidad de unir tu código con el nuestro.

## Limitación de responsabilidades
---

El BID no será responsable, bajo circunstancia alguna, de daño ni indemnización, moral o patrimonial; directo o indirecto; accesorio o especial; o por vía de consecuencia, previsto o imprevisto, que pudiese surgir:

i. Bajo cualquier teoría de responsabilidad, ya sea por contrato, infracción de derechos de propiedad intelectual, negligencia o bajo cualquier otra teoría; y/o

ii. A raíz del uso de la Herramienta Digital, incluyendo, pero sin limitación de potenciales defectos en la Herramienta Digital, o la pérdida o inexactitud de los datos de cualquier tipo. Lo anterior incluye los gastos o daños asociados a fallas de comunicación y/o fallas de funcionamiento de ordenadores, vinculados con la utilización de la Herramienta Digital.
