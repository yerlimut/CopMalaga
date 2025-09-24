
# Titulo

CopMalaga

# Descripcion

una plataforma para la gestión de una cooperativa escolar, donde se lleva el control de estudiantes, productos, ventas, etc.


## Caracteristicas

- Registrar y administrar productos de la cooperativa.
- Control de ventas y compras.
- Registro de estudiantes y usuarios.
- Reportes básicos.


## Tecnologías y Herramientas

| Categoría                 | Tecnologías / Herramientas |
|----------------------------|-----------------------------|
| **Frameworks y Lenguajes** | ![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white) ![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white) ![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white) ![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white) ![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white) ![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black) |
| **Base de Datos**          | ![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white) |
| **Entornos de Desarrollo** | ![Windows](https://img.shields.io/badge/Windows-0078D6?style=for-the-badge&logo=windows&logoColor=white) ![Linux](https://img.shields.io/badge/Linux-FCC624?style=for-the-badge&logo=linux&logoColor=black) ![macOS](https://img.shields.io/badge/macOS-000000?style=for-the-badge&logo=apple&logoColor=white) ![VS Code](https://img.shields.io/badge/VS%20Code-007ACC?style=for-the-badge&logo=visualstudiocode&logoColor=white) |
| **Control de Versiones**   | ![Git](https://img.shields.io/badge/Git-F05032?style=for-the-badge&logo=git&logoColor=white) ![GitHub](https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white) |
| **Documentación y Diseño** | Manual de identidad corporativa,Panel de distribución de trabajo |




## Instalación

Sigue estos pasos para instalar y ejecutar el proyecto en tu entorno local:

### 1. Clonar el repositorio
git clone https://github.com/FaiberAbril/CopMalaga.git

### 2.Instalar dependencias de PHP (Laravel)
composer install

### 3.Instalar dependencias de Node (Frontend)
npm install

### 4.Configurar variables de entorno
Copia el archivo .env.example a un nuevo archivo .env:

cp .env.example .env

Edita el archivo .env y configura tu base de datos MySQL:

DB_DATABASE=copmalaga

DB_USERNAME=tu_usuario

DB_PASSWORD=tu_contraseña

### 5. Generar la clave de la aplicación
php artisan key:generate

### 6. Migrar la base de datos
php artisan migrate --seed

#### 7. Levantar el servidor de desarrollo
php artisan serve

La aplicación estará disponible en:
  * http://localhost:8000

### 8.Compilar los assets (JS/CSS) 
En otra terminal:

npm run dev


###  Requisitos Previos

Antes de comenzar asegúrate de tener instalado en tu sistema:

PHP 8.x

Composer

Node.js
 y npm

MySQL

Git

###  Autor: Equipo Cooperativa Escolar
Proyecto  con fines educativos.

---










    
## Colaboradores

- ADSO(2929185)

