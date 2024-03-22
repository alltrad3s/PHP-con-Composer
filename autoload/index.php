<?php

/*
En archivo composer.json
Files → Permite cargar una serie de archivos con helpers. Aquí conficuramos archivos ayudantes (helpers).
Classmap → Nos deja cargar carpetas de una manera directa carpetas que van a tener dentro de si diferentes clases.
Psr-0 → Ya que es más antiguo, tenemos que poner todas las rutas de las carpetas.
Psr-4 → Al hacer énfasis a la carpeta principal, este entiende todas las rutas dentro de sí. (remonedado)
*/

require __DIR__ . '/vendor/autoload.php';