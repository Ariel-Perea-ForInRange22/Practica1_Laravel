# INSTRUCCIONES DE INSTALACIÓN Y USO

## 🔧 Prerrequisitos

Antes de ejecutar este proyecto, necesitas tener instalado:

1. **PHP 8.0 o superior**
   - Descargar desde: https://windows.php.net/download/
   - O usar XAMPP: https://www.apachefriends.org/

2. **Composer**
   - Descargar desde: https://getcomposer.org/download/
   - Seguir las instrucciones de instalación para Windows

3. **Git** (para clonar y gestionar el repositorio)
   - Descargar desde: https://git-scm.com/download/win

## 📥 Instalación Paso a Paso

### Paso 1: Verificar instalaciones
Abre PowerShell y verifica que todo esté instalado:

```powershell
php --version
# Debería mostrar: PHP 8.x.x

composer --version
# Debería mostrar: Composer version x.x.x

git --version
# Debería mostrar: git version x.x.x
```

### Paso 2: Clonar o usar el proyecto
Si ya tienes el proyecto en `c:\Users\Nefta\practica1`, salta al Paso 3.

Si vas a clonar desde GitHub:
```powershell
cd c:\Users\Nefta
git clone [URL-DEL-REPOSITORIO] practica1
cd practica1
```

### Paso 3: Instalar dependencias de Laravel
```powershell
cd c:\Users\Nefta\practica1
composer install
```

Este comando descargará todas las dependencias de Laravel en la carpeta `/vendor`.

**Nota**: Este paso puede tomar varios minutos la primera vez.

### Paso 4: Crear archivo de configuración
```powershell
# Si existe .env.example, copiarlo
copy .env.example .env

# Si NO existe, crear uno básico (ver contenido abajo)
```

**Contenido mínimo para .env:**
```env
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_LEVEL=debug
```

### Paso 5: Generar clave de aplicación
```powershell
php artisan key:generate
```

Este comando generará una clave única para tu aplicación y la guardará en `.env`.

### Paso 6: Iniciar el servidor de desarrollo
```powershell
php artisan serve
```

Deberías ver:
```
Starting Laravel development server: http://127.0.0.1:8000
```

**¡IMPORTANTE!**: Deja esta ventana de PowerShell abierta mientras usas la aplicación.

## 🌐 Probar las Rutas

Con el servidor ejecutándose, abre tu navegador y visita:

### 1. Ruta de Bienvenida
```
http://localhost:8000/bienvenida
```
o
```
http://127.0.0.1:8000/bienvenida
```

**Resultado esperado**: Página con el mensaje "Bienvenido a mi primera aplicación de Laravel"

### 2. Ruta de Saludo
```
http://localhost:8000/saludo/Carlos
```

**Resultado esperado**: Página con el mensaje "Hola, Carlos"

**Prueba con diferentes nombres**:
- http://localhost:8000/saludo/Maria
- http://localhost:8000/saludo/Juan
- http://localhost:8000/saludo/TuNombre

## 📸 Tomar Capturas de Pantalla

### Para Windows:

**Método 1: Herramienta de Recortes**
1. Presiona `Win + Shift + S`
2. Selecciona el área de la pantalla
3. La captura se guarda en el portapapeles
4. Pégala en Paint o Word

**Método 2: Captura completa**
1. Presiona `Win + PrtScr`
2. La imagen se guarda en: `C:\Users\Nefta\Pictures\Screenshots\`

### Capturas necesarias:

#### Captura 1: /bienvenida
- URL visible: `http://localhost:8000/bienvenida`
- Contenido: Mensaje de bienvenida completo
- Nombre sugerido: `captura_bienvenida.png`

#### Captura 2: /saludo/Carlos
- URL visible: `http://localhost:8000/saludo/Carlos`
- Contenido: "Hola, Carlos"
- Nombre sugerido: `captura_saludo_carlos.png`

#### Captura 3: /saludo/Maria
- URL visible: `http://localhost:8000/saludo/Maria`
- Contenido: "Hola, Maria"
- Nombre sugerido: `captura_saludo_maria.png`

#### Capturas adicionales (opcional):
- Código del controlador en VS Code
- Archivo de rutas (web.php)
- Estructura de archivos del proyecto

### Organizar capturas:
```powershell
# Crear carpeta para capturas
mkdir c:\Users\Nefta\practica1\screenshots

# Mover tus capturas ahí
# (manualmente desde el explorador)
```

## 🐛 Solución de Problemas Comunes

### Error: "composer: command not found"
**Solución**: Composer no está instalado o no está en el PATH.
- Reinstala Composer desde getcomposer.org
- Cierra y reabre PowerShell

### Error: "php: command not found"
**Solución**: PHP no está instalado o no está en el PATH.
- Instala PHP o XAMPP
- Agrega PHP al PATH del sistema

### Error: "Class 'App\Http\Controllers\PaginaController' not found"
**Solución**: 
```powershell
composer dump-autoload
```

### Error: "View [bienvenida] not found"
**Solución**: Verifica que existe el archivo:
```
c:\Users\Nefta\practica1\resources\views\bienvenida.blade.php
```

### El servidor no inicia
**Solución 1**: El puerto 8000 está ocupado
```powershell
php artisan serve --port=8080
```
Luego usa: `http://localhost:8080`

**Solución 2**: Permisos insuficientes
```powershell
# Ejecuta PowerShell como Administrador
```

### Error: "No application encryption key has been specified"
**Solución**:
```powershell
php artisan key:generate
```

## 🛑 Detener el Servidor

Para detener el servidor de Laravel:
1. Ve a la ventana de PowerShell donde está corriendo
2. Presiona `Ctrl + C`
3. Confirma con `S` (Sí)

## 🔄 Reiniciar el Servidor

Si haces cambios en el código:
1. No necesitas reiniciar para cambios en vistas (.blade.php)
2. Para cambios en controladores o rutas:
   - Detén el servidor (Ctrl + C)
   - Inícialo de nuevo: `php artisan serve`

## 📦 Preparar para GitHub

### Antes de subir a GitHub:

1. **Verificar .gitignore**:
```powershell
# Verificar que .gitignore existe
cat .gitignore

# Debería incluir:
# /vendor
# /node_modules
# .env
```

2. **Verificar tamaño del proyecto**:
```powershell
# SIN /vendor: ~5-10 MB
# CON /vendor: ~100+ MB

# Si /vendor está incluido, eliminarlo:
rm -r vendor
```

3. **Inicializar Git**:
```powershell
git init
git add .
git commit -m "Asignación 1: Fundamentos de Laravel"
```

4. **Subir a GitHub**:
```powershell
git remote add origin https://github.com/TU_USUARIO/TU_REPOSITORIO.git
git branch -M main
git push -u origin main
```

## 📚 Comandos Útiles de Laravel

```powershell
# Ver lista de rutas definidas
php artisan route:list

# Limpiar caché
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Crear un nuevo controlador
php artisan make:controller NombreController

# Ver versión de Laravel
php artisan --version

# Ayuda sobre comandos
php artisan help serve
```

## 🎓 Recursos Adicionales

- **Documentación oficial de Laravel**: https://laravel.com/docs
- **Laracasts** (tutoriales en video): https://laracasts.com
- **Laravel News**: https://laravel-news.com
- **Comunidad en español**: https://laravel.io/forum

## ✅ Checklist de Verificación

Antes de considerar el proyecto completo, verifica:

- [ ] PHP está instalado y funciona
- [ ] Composer está instalado y funciona
- [ ] Dependencias instaladas (`composer install` ejecutado)
- [ ] Archivo .env existe y tiene APP_KEY
- [ ] Servidor inicia correctamente (`php artisan serve`)
- [ ] Ruta /bienvenida funciona
- [ ] Ruta /saludo/{nombre} funciona con diferentes nombres
- [ ] Capturas de pantalla tomadas y guardadas
- [ ] Proyecto no incluye carpeta /vendor en Git
- [ ] README.md está completo
- [ ] Código está comentado y limpio

---

**Fecha**: 15 de Noviembre, 2025  
**Proyecto**: Asignación 1 - Fundamentos de Laravel

¡Éxito con tu proyecto! 🚀
