# Blog de German - Expresiones Regulares

Blog personal desarrollado con PHP usando el patrón MVC, con validaciones de formularios mediante expresiones regulares para formatos de El Salvador.

## Características

- **Patrón MVC**: Arquitectura Modelo-Vista-Controlador
- **Docker**: Ambiente containerizado con Apache y PHP
- **Validaciones**: Expresiones regulares para email, teléfono y DUI de El Salvador
- **Responsive**: Diseño adaptable a dispositivos móviles

## Secciones del Blog

- **Mi Perfil**: Información personal y profesional
- **Mi Lenguaje Favorito**: Lenguajes de programación preferidos
- **Contactar**: Formulario con validaciones específicas

## Instalación y Uso

### Con Docker (Recomendado)

```bash
# Clonar el repositorio
git clone https://github.com/Geer27/BlogExpresionesRegulares.git
cd BlogExpresionesRegulares

# Levantar el contenedor
docker compose up --build

# Acceder al sitio
http://localhost:8080
```

### Sin Docker

Requiere Apache y PHP 8.1+

1. Configurar el DocumentRoot hacia la carpeta del proyecto
2. Habilitar mod_rewrite en Apache
3. Acceder al sitio web

## Validaciones Implementadas

- **Email**: Formato estándar de correo electrónico
- **Teléfono**: Formato `####-####` o `+503 ####-####`
- **DUI**: Formato `########-#` (8 dígitos, guión, 1 dígito)

## Estructura del Proyecto

```
blog_web/
├── app/
│   ├── controllers/
│   │   └── HomeController.php
│   └── views/
│       ├── layout.php
│       ├── home.php
│       ├── inicio.php
│       ├── lenguaje.php
│       └── contactar.php
├── public/
│   └── css/
│       └── style.css
├── index.php
├── Dockerfile
└── docker-compose.yml
```

## Autor

German Daniel Hernández Pinto