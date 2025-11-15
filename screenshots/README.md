# Instrucciones para Screenshots

Esta carpeta debe contener las capturas de pantalla de tu aplicación funcionando.

## Capturas Requeridas

### 1. captura_bienvenida.png
- **URL**: http://localhost:8000/bienvenida
- **Descripción**: Página de bienvenida estática
- **Debe mostrar**: "Bienvenido a mi primera aplicación de Laravel"

### 2. captura_saludo_ejemplo1.png
- **URL**: http://localhost:8000/saludo/Carlos
- **Descripción**: Saludo dinámico con el nombre "Carlos"
- **Debe mostrar**: "Hola, Carlos"

### 3. captura_saludo_ejemplo2.png
- **URL**: http://localhost:8000/saludo/Maria
- **Descripción**: Saludo dinámico con el nombre "Maria"
- **Debe mostrar**: "Hola, Maria"

## Capturas Opcionales (recomendadas)

### 4. captura_codigo_controlador.png
- Código del archivo `PaginaController.php` en tu editor

### 5. captura_rutas.png
- Código del archivo `web.php` mostrando las rutas definidas

### 6. captura_estructura_proyecto.png
- Explorador de archivos mostrando la estructura del proyecto

## Cómo Tomar las Capturas en Windows

### Método 1: Herramienta de Recortes (Win + Shift + S)
1. Presiona `Win + Shift + S`
2. Selecciona el área que quieres capturar
3. La imagen se copia al portapapeles
4. Pégala en Paint y guárdala aquí

### Método 2: Captura de Pantalla Completa (Win + PrtScr)
1. Presiona `Win + PrtScr`
2. La captura se guarda automáticamente en: `C:\Users\[Usuario]\Pictures\Screenshots\`
3. Copia el archivo a esta carpeta y renómbralo apropiadamente

### Método 3: Herramienta de Recortes Clásica
1. Busca "Herramienta de recortes" en el menú de inicio
2. Toma la captura
3. Guárdala en esta carpeta

## Consejos para Buenas Capturas

- Asegúrate de que la URL sea visible en la barra de direcciones
- Captura la ventana completa del navegador
- Usa un tamaño de ventana que muestre bien el contenido
- Las imágenes deben ser claras y legibles
- Formato recomendado: PNG (mejor calidad que JPG para texto)

## Incluir en el PDF

Estas capturas deben ser incluidas en tu documento PDF de entrega con:
- Pie de foto descriptivo
- Número de figura (Figura 1, Figura 2, etc.)
- Referencia en el texto

## No Subir a GitHub (Opcional)

Si las capturas son muy grandes, puedes:
1. Añadir `screenshots/*.png` al `.gitignore`
2. Incluirlas solo en el PDF
3. O subirlas a un servicio como Imgur y enlazarlas en el README
