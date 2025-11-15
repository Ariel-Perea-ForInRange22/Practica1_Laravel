# Asignación 1: Fundamentos de Laravel - Rutas, Controladores y Vistas

## 📋 Descripción del Proyecto

Este proyecto implementa los fundamentos de Laravel para manejar solicitudes web mediante rutas, controladores y vistas Blade. La aplicación demuestra tanto el enrutamiento estático como dinámico.

## 🎯 Objetivo

Familiarizarse con el patrón fundamental de Laravel para manejar solicitudes web:
1. **Definir rutas** en el archivo de enrutamiento
2. **Conectar rutas a controladores** para manejar la lógica
3. **Pasar datos a vistas Blade** para presentar información al usuario

## 🚀 Funcionalidades Implementadas

### 1. Ruta Estática de Bienvenida (`/bienvenida`)
- **URL**: `http://localhost:8000/bienvenida`
- **Controlador**: `PaginaController@bienvenida`
- **Vista**: `resources/views/bienvenida.blade.php`
- **Descripción**: Muestra un mensaje estático de bienvenida

### 2. Ruta Dinámica de Saludo (`/saludo/{nombre}`)
- **URL**: `http://localhost:8000/saludo/Carlos`
- **Controlador**: `PaginaController@saludo`
- **Vista**: `resources/views/saludo.blade.php`
- **Descripción**: Muestra un saludo personalizado usando el parámetro de la URL

## 📁 Estructura del Proyecto

```
practica1/
├── app/
│   └── Http/
│       └── Controllers/
│           └── PaginaController.php    # Controlador con métodos bienvenida() y saludo()
├── resources/
│   └── views/
│       ├── bienvenida.blade.php       # Vista estática
│       └── saludo.blade.php           # Vista dinámica con parámetro
├── routes/
│   └── web.php                        # Definición de rutas
├── .gitignore                         # Excluye /vendor y otros archivos
├── composer.json                      # Dependencias del proyecto
└── README.md                          # Este archivo
```

## 🔧 Requisitos Previos

- PHP >= 8.0
- Composer
- Laravel 10.x

## 📥 Instalación

### Paso 1: Clonar el repositorio
```bash
git clone [URL-DEL-REPOSITORIO]
cd practica1
```

### Paso 2: Instalar dependencias
```bash
composer install
```

### Paso 3: Configurar el archivo .env
```bash
cp .env.example .env
php artisan key:generate
```

### Paso 4: Iniciar el servidor de desarrollo
```bash
php artisan serve
```

El servidor se iniciará en `http://localhost:8000`

## 🧪 Probar la Aplicación

### Ruta de Bienvenida
Visita: `http://localhost:8000/bienvenida`

Deberías ver: "Bienvenido a mi primera aplicación de Laravel"

### Ruta de Saludo
Visita: `http://localhost:8000/saludo/Carlos`

Deberías ver: "Hola, Carlos"

Puedes cambiar "Carlos" por cualquier nombre en la URL.

## 💡 Explicación Técnica

### 1. **Rutas (routes/web.php)**
```php
Route::get('/bienvenida', [PaginaController::class, 'bienvenida']);
Route::get('/saludo/{nombre}', [PaginaController::class, 'saludo']);
```
Las rutas capturan las peticiones HTTP GET y las dirigen al controlador apropiado.

### 2. **Controlador (app/Http/Controllers/PaginaController.php)**
```php
public function bienvenida()
{
    return view('bienvenida');
}

public function saludo($nombre)
{
    return view('saludo', ['nombre' => $nombre]);
}
```
El controlador procesa la solicitud y retorna la vista correspondiente con los datos necesarios.

### 3. **Vistas Blade (resources/views/)**
- `bienvenida.blade.php`: Vista estática con HTML y CSS
- `saludo.blade.php`: Vista dinámica que utiliza `{{ $nombre }}` para mostrar el parámetro

## 📸 Capturas de Pantalla

### Ruta /bienvenida
![Captura de /bienvenida](screenshots/bienvenida.png)

### Ruta /saludo/{nombre}
![Captura de /saludo/Carlos](screenshots/saludo-carlos.png)
![Captura de /saludo/Maria](screenshots/saludo-maria.png)

## 🤔 Preguntas de Reflexión

### 1. ¿Qué es el enrutamiento en Laravel y por qué es importante?
El enrutamiento en Laravel es el mecanismo que captura las peticiones HTTP entrantes y las dirige a la lógica de aplicación apropiada (controladores, closures, etc.). Es importante porque:
- Define los puntos de entrada de la aplicación
- Proporciona una forma organizada de manejar diferentes URLs
- Permite la separación de responsabilidades entre rutas, controladores y vistas

### 2. ¿Cuál es la diferencia entre una ruta estática y una ruta dinámica?
- **Ruta Estática**: Tiene una URL fija que no cambia. Ejemplo: `/bienvenida` siempre responde de la misma manera.
- **Ruta Dinámica**: Acepta parámetros variables en la URL. Ejemplo: `/saludo/{nombre}` puede ser `/saludo/Carlos`, `/saludo/Maria`, etc., y el comportamiento cambia según el parámetro.

### 3. ¿Qué papel juega el controlador en el patrón MVC de Laravel?
El controlador actúa como intermediario entre las rutas y las vistas. Su papel es:
- Recibir la solicitud desde la ruta
- Procesar la lógica de negocio
- Interactuar con modelos (si es necesario)
- Preparar los datos
- Retornar la vista apropiada con los datos procesados

### 4. ¿Cómo se pasan datos desde un controlador a una vista en Laravel?
Se pueden pasar datos de varias formas:
```php
// Método 1: Array asociativo
return view('nombre-vista', ['variable' => $valor]);

// Método 2: Método with()
return view('nombre-vista')->with('variable', $valor);

// Método 3: Método compact()
return view('nombre-vista', compact('variable'));
```

### 5. ¿Qué es Blade y qué ventajas ofrece para el desarrollo de vistas?
Blade es el motor de plantillas de Laravel. Sus ventajas incluyen:
- Sintaxis simple y expresiva: `{{ $variable }}`
- Escape automático de XSS para seguridad
- Herencia de plantillas con `@extends` y `@section`
- Directivas de control: `@if`, `@foreach`, `@while`
- Componentes reutilizables
- No añade sobrecarga de rendimiento (se compila a PHP puro)

## 📚 Conceptos Clave Aprendidos

1. ✅ Definición de rutas en `routes/web.php`
2. ✅ Creación de controladores con Artisan
3. ✅ Métodos de controlador que retornan vistas
4. ✅ Paso de parámetros desde URLs a controladores
5. ✅ Paso de datos desde controladores a vistas
6. ✅ Uso de sintaxis Blade para mostrar variables
7. ✅ Estructura MVC en Laravel

## 👨‍💻 Autor

[Tu Nombre]
[Tu Email]

## 📅 Fecha de Entrega

15 de Noviembre, 2025

## 📄 Licencia

Este proyecto es parte de una asignación académica.

---

**Nota**: Este proyecto ha sido creado como parte de la Asignación 1 del curso de Laravel. Para más información sobre Laravel, visita [laravel.com](https://laravel.com).
