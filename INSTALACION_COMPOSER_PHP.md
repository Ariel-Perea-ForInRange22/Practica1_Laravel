# GUÍA DE INSTALACIÓN DE COMPOSER Y PHP EN WINDOWS

## ⚠️ IMPORTANTE: LEE ESTO PRIMERO

Para ejecutar este proyecto de Laravel, necesitas tener instalado:
1. **PHP 8.0 o superior**
2. **Composer** (gestor de dependencias de PHP)

Si ya los tienes instalados, salta directamente a la sección "Instalar el Proyecto".

---

## OPCIÓN 1: INSTALACIÓN RÁPIDA CON LARAGON (RECOMENDADO PARA PRINCIPIANTES)

Laragon es un entorno de desarrollo todo-en-uno para Windows que incluye PHP, Composer, MySQL y más.

### Paso 1: Descargar Laragon
1. Ve a: https://laragon.org/download/
2. Descarga la versión "Laragon Full"
3. Tamaño aproximado: ~100 MB

### Paso 2: Instalar Laragon
1. Ejecuta el instalador descargado
2. Acepta la ubicación predeterminada: `C:\laragon`
3. Completa la instalación (toma ~5 minutos)

### Paso 3: Iniciar Laragon
1. Abre Laragon desde el menú de inicio
2. Haz clic en "Start All"
3. Laragon iniciará Apache, MySQL y otros servicios

### Paso 4: Verificar instalación
1. Abre PowerShell
2. Ejecuta:
```powershell
php --version
composer --version
```

### Paso 5: Usar el proyecto
1. Copia la carpeta `practica1` a `C:\laragon\www\`
2. En PowerShell:
```powershell
cd C:\laragon\www\practica1
composer install
php artisan serve
```

---

## OPCIÓN 2: INSTALACIÓN CON XAMPP + COMPOSER (INTERMEDIO)

### Paso 1: Instalar XAMPP

1. **Descargar XAMPP**
   - Ve a: https://www.apachefriends.org/download.html
   - Descarga la versión para Windows con PHP 8.0 o superior
   - Tamaño: ~150 MB

2. **Instalar XAMPP**
   - Ejecuta el instalador
   - Selecciona componentes: Apache, MySQL, PHP, phpMyAdmin
   - Instala en: `C:\xampp` (ubicación predeterminada)
   - Completa la instalación

3. **Verificar PHP**
   - Abre PowerShell
   - Ejecuta: `C:\xampp\php\php.exe --version`
   
4. **Agregar PHP al PATH**
   - Abre "Variables de entorno" desde el menú de Windows
   - Edita la variable "Path" del usuario
   - Añade: `C:\xampp\php`
   - Haz clic en "Aceptar"
   - Cierra y reabre PowerShell
   - Verifica: `php --version`

### Paso 2: Instalar Composer

1. **Descargar Composer**
   - Ve a: https://getcomposer.org/download/
   - Descarga "Composer-Setup.exe"
   - Tamaño: ~2 MB

2. **Instalar Composer**
   - Ejecuta el instalador
   - Cuando pregunte por PHP, selecciona: `C:\xampp\php\php.exe`
   - Completa la instalación
   - Composer se añadirá automáticamente al PATH

3. **Verificar Composer**
   - Abre PowerShell (nueva ventana)
   - Ejecuta: `composer --version`
   - Deberías ver algo como: "Composer version 2.x.x"

---

## OPCIÓN 3: INSTALACIÓN MANUAL DE PHP + COMPOSER (AVANZADO)

### Paso 1: Instalar PHP manualmente

1. **Descargar PHP**
   - Ve a: https://windows.php.net/download/
   - Descarga "PHP 8.x Thread Safe" (archivo ZIP)
   - Ejemplo: `php-8.2.x-Win32-vs16-x64.zip`

2. **Extraer PHP**
   - Extrae el ZIP a: `C:\PHP`
   - Deberías tener archivos como: `C:\PHP\php.exe`

3. **Configurar PHP**
   - En la carpeta `C:\PHP`, encuentra `php.ini-development`
   - Cópialo y renómbralo a `php.ini`
   - Abre `php.ini` con un editor de texto
   
4. **Habilitar extensiones necesarias**
   Busca y descomenta (quita el `;` al inicio) estas líneas:
   ```ini
   extension=curl
   extension=fileinfo
   extension=gd
   extension=mbstring
   extension=openssl
   extension=pdo_mysql
   extension=mysqli
   ```

5. **Agregar PHP al PATH**
   - Abre "Variables de entorno"
   - Edita "Path" del usuario
   - Añade: `C:\PHP`
   - Guarda y cierra
   - Reabre PowerShell
   - Verifica: `php --version`

### Paso 2: Instalar Composer

1. **Descargar Composer manualmente**
   - Ve a: https://getcomposer.org/download/
   - Descarga `composer.phar`

2. **Instalar Composer globalmente**
   ```powershell
   # Crea una carpeta para Composer
   mkdir C:\composer
   
   # Mueve composer.phar allí
   move composer.phar C:\composer\composer.phar
   
   # Crea un archivo batch
   echo @php "C:\composer\composer.phar" %* > C:\composer\composer.bat
   ```

3. **Agregar Composer al PATH**
   - Añade `C:\composer` al PATH del sistema
   - Reabre PowerShell
   - Verifica: `composer --version`

---

## VERIFICACIÓN FINAL DE INSTALACIÓN

Después de instalar PHP y Composer, verifica que todo funciona:

```powershell
# Verificar PHP
php --version
# Debe mostrar: PHP 8.x.x

# Verificar Composer
composer --version
# Debe mostrar: Composer version 2.x.x

# Verificar extensiones de PHP
php -m
# Debe listar extensiones como: curl, mbstring, openssl, pdo_mysql
```

---

## INSTALAR EL PROYECTO LARAVEL

Una vez que tienes PHP y Composer instalados:

```powershell
# 1. Navegar al proyecto
cd c:\Users\Nefta\practica1

# 2. Instalar dependencias de Laravel
composer install
# Esto descargará todas las librerías necesarias (toma 2-5 minutos)

# 3. Copiar archivo de configuración
copy .env.example .env

# 4. Generar clave de aplicación
php artisan key:generate

# 5. Iniciar el servidor
php artisan serve
```

Deberías ver:
```
Starting Laravel development server: http://127.0.0.1:8000
```

---

## PROBAR LA APLICACIÓN

Con el servidor ejecutándose, abre tu navegador:

1. **Página principal**: http://localhost:8000
2. **Ruta de bienvenida**: http://localhost:8000/bienvenida
3. **Ruta de saludo**: http://localhost:8000/saludo/TuNombre

---

## SOLUCIÓN DE PROBLEMAS

### Error: "php: command not found" o "composer: command not found"

**Causa**: PHP o Composer no están en el PATH del sistema.

**Solución**:
1. Cierra TODAS las ventanas de PowerShell
2. Reabre PowerShell
3. Intenta de nuevo
4. Si persiste, verifica la configuración del PATH

### Error: "Failed to open stream: No such file or directory"

**Causa**: Faltan archivos o carpetas.

**Solución**:
```powershell
composer install
php artisan key:generate
```

### Error: "The Zip extension is not loaded"

**Causa**: Extensión ZIP de PHP no habilitada.

**Solución**:
1. Abre `php.ini` (ubicación depende de tu instalación)
2. Busca: `;extension=zip`
3. Quita el `;` para que quede: `extension=zip`
4. Guarda el archivo
5. Reinicia PowerShell

### Error: "The openssl extension is required"

**Causa**: Extensión OpenSSL no habilitada.

**Solución**:
1. En `php.ini`, descomenta: `extension=openssl`
2. Guarda y reinicia PowerShell

### El puerto 8000 está ocupado

**Solución**: Usa otro puerto
```powershell
php artisan serve --port=8080
```

Luego accede a: http://localhost:8080

---

## EXTENSIONES DE PHP REQUERIDAS PARA LARAVEL

Asegúrate de que estas extensiones están habilitadas en `php.ini`:

```ini
extension=curl
extension=fileinfo
extension=gd
extension=mbstring
extension=openssl
extension=pdo_mysql
extension=mysqli
extension=zip
```

Para verificar qué extensiones están cargadas:
```powershell
php -m
```

---

## RECURSOS ADICIONALES

### Documentación oficial:
- PHP: https://www.php.net/docs.php
- Composer: https://getcomposer.org/doc/
- Laravel: https://laravel.com/docs

### Videotutoriales (en español):
- "Instalar PHP y Composer en Windows" en YouTube
- "Laravel desde cero" en Platzi o Udemy

### Comunidades de ayuda:
- Stack Overflow en español: https://es.stackoverflow.com/
- Laravel en español: https://laravel.io/forum
- Discord de Laravel (canal en español)

---

## ALTERNATIVA: USAR DOCKER (PARA USUARIOS AVANZADOS)

Si tienes experiencia con Docker, puedes usar Laravel Sail:

```powershell
# Clonar proyecto
git clone [URL] practica1
cd practica1

# Instalar dependencias con Docker
docker run --rm -v ${PWD}:/app composer install

# Usar Laravel Sail
./vendor/bin/sail up
```

---

## CHECKLIST DE INSTALACIÓN COMPLETA

- [ ] PHP 8.0+ instalado
- [ ] Composer instalado
- [ ] PHP en el PATH del sistema
- [ ] Composer en el PATH del sistema
- [ ] Extensiones de PHP habilitadas
- [ ] `composer install` ejecutado exitosamente
- [ ] Archivo `.env` creado
- [ ] `php artisan key:generate` ejecutado
- [ ] Servidor Laravel iniciado con `php artisan serve`
- [ ] Aplicación accesible en http://localhost:8000
- [ ] Ruta /bienvenida funciona
- [ ] Ruta /saludo/{nombre} funciona

---

## TIEMPO ESTIMADO DE INSTALACIÓN

- **Opción 1 (Laragon)**: 15-20 minutos
- **Opción 2 (XAMPP + Composer)**: 25-30 minutos
- **Opción 3 (Manual)**: 35-45 minutos

---

## SIGUIENTE PASO

Una vez que la aplicación esté funcionando:
1. Toma capturas de pantalla de las rutas
2. Lee el archivo `GUIA_PDF_ENTREGA.md`
3. Prepara tu PDF de entrega
4. Sube el proyecto a GitHub

---

**Nota**: Si encuentras algún problema no cubierto en esta guía, busca el error específico en Google añadiendo "Laravel Windows" a tu búsqueda.

¡Buena suerte! 🚀
