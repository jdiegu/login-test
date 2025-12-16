<!-- Gradient Divider -->

<img src="https://user-images.githubusercontent.com/73097560/115834477-dbab4500-a447-11eb-908a-139a6edaec5c.gif">

<div align="center">

# 🚀 Proyecto Final – PHP con Laravel

### Sistema web con autenticación

Proyecto académico desarrollado como parte del curso de **PHP con Laravel**, enfocado en buenas prácticas, arquitectura MVC y desarrollo de APIs.

</div>

---

## 📌 Descripción

Este proyecto es una **aplicación web desarrollada con Laravel** que integra:

* Autenticación local y con Google
* Diseño con Tailwind CSS

El objetivo principal es demostrar el uso correcto del framework Laravel tanto a nivel backend como frontend.

---

## 🧠 Tecnologías utilizadas

| Tecnología       | Descripción                 |
| ---------------- | --------------------------- |
| **Laravel**      | Framework backend PHP       |
| **Blade**        | Motor de plantillas         |
| **Tailwind CSS** | Diseño moderno y responsivo |
| **SQLite**       | Base de datos               |
| **OAuth Google** | Autenticación externa       |

---

## 🔐 Autenticación

El sistema cuenta con dos métodos de autenticación:

* ✔️ Registro e inicio de sesión local
* ✔️ Inicio de sesión con cuenta de Google

Una vez autenticado, el usuario accede a un **Dashboard dinámico**, donde el contenido cambia según el estado de la sesión.

---

## ⚙️ Instalación y uso

1. Clonar el repositorio

```bash
git clone https://github.com/jdiegu/login-test.git
```

2. Instalar dependencias

```bash
composer install
npm install
```

3. Configurar variables de entorno

```bash
cp .env.example .env
php artisan key:generate
```

4. Ejecutar migraciones

```bash
php artisan migrate
```

5. Configurar el proyecto en google cloud

- Crear un proyecto en Google Cloud Console
- Habilitar OAuth 2.0
- Registrar el dominio y URI de redirección

Agregar las siguientes variables al archivo `.env`:

```bash
GOOGLE_CLIENT_ID
GOOGLE_CLIENT_SECRET 
```

5. Levantar el servidor

```bash
php artisan serve --host {tu dominio} --port=80
```

---

## 👤 Autor

**Juan Diego Morales**
Desarrollador · Estudiante de Ingeniería en Sistemas

<p align="center">
  <a href="https://github.com/jdiegu" target="_blank">
    <img src="https://skillicons.dev/icons?i=github" height="50" />
  </a>
  <br>
</p>

---

## 🎓 Contexto académico

Este proyecto fue desarrollado con fines **educativos**, como evidencia de aprendizaje en Laravel
<p align="center">
    <img src="https://skillicons.dev/icons?i=laravel" height="50" />
</p>

---

<div align="center">

✨ *Proyecto Final – Laravel* ✨

</div>
