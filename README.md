# Instalación y configuración del proyecto Laravel 12

A continuación, se describen los pasos para clonar el repositorio e instalar correctamente el proyecto.

## Requisitos previos

Antes de comenzar, asegúrate de tener instalados los siguientes programas:

* **XAMPP**: (Recomendado) Incluye Apache (versión compatible) y PHP 8.2.
* **Composer**: (Gestor de dependencias de PHP)
* **Node.js**: (Entorno de ejecución de JavaScript)
* **Git**: (Sistema de control de versiones)

## Pasos de instalación

1.  **Crear directorio del proyecto**:
    * Crea una nueva carpeta dentro del directorio `htdocs` de XAMPP. Por ejemplo, `C:\xampp\htdocs\dashboard-games`.
2.  **Inicializar repositorio Git**:
    * Abre la terminal o línea de comandos y navega hasta la carpeta del proyecto recién creada.
    * Ejecuta el siguiente comando para inicializar un repositorio Git local:
        ```bash
        git init
        ```
3.  **Añadir repositorio remoto**:
    * Ejecuta el siguiente comando para añadir el repositorio remoto de GitHub:
        ```bash
        git remote add origin https://github.com/DiegoMR98/dashboard-games.git
        ```
4.  **Clonar el repositorio**:
    * Ejecuta el siguiente comando para descargar el código del repositorio remoto:
        ```bash
        git pull origin main
        ```
5.  **Configurar PHP**:
    * Abre el archivo `php.ini` ubicado en el directorio `php` de XAMPP (por ejemplo, `C:\xampp\php\php.ini`).
    * Busca la línea `;extension=zip` y elimina el punto y coma (`;`) al inicio para habilitar la extensión ZIP.
    * Guarda los cambios y reinicia el servidor Apache desde el panel de control de XAMPP.
6.  **Instalar dependencias de Node.js**:
    * En la terminal, dentro del directorio del proyecto, ejecuta el siguiente comando:
        ```bash
        npm install
        ```
7.  **Construir assets**:
    * Ejecuta el siguiente comando para construir los assets del proyecto con Vite:
        ```bash
        npm run build
        ```
8.  **Instalar dependencias de Composer**:
    * Ejecuta el siguiente comando:
        ```bash
        composer install
        ```
9.  **Ejecutar el proyecto**:
    * Ejecuta el siguiente comando para iniciar el servidor de desarrollo de Laravel:
        ```bash
        php artisan serve
        ```
    *O tambíen se pude intentar con:
        ```bash
        composer run dev
        ```
    * El proyecto estará disponible en tu navegador en la dirección `http://localhost:8000/dashboard`.

## Notas adicionales

* Asegurarse de que XAMPP esté en ejecución antes de intentar acceder al proyecto en tu navegador y de que el servicio de Apache esté iniciado.
