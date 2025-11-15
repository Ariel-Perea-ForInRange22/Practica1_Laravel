<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo - Laravel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .container {
            background: white;
            padding: 3rem 4rem;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            text-align: center;
            max-width: 600px;
        }
        
        h1 {
            color: #f5576c;
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        
        .nombre {
            color: #f093fb;
            font-weight: bold;
            text-transform: capitalize;
        }
        
        p {
            color: #666;
            font-size: 1.1rem;
            margin-top: 1rem;
        }
        
        .icon {
            font-size: 4rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="icon">👋</div>
        <h1>Hola, <span class="nombre"><?php echo e($nombre); ?></span></h1>
        <p>Bienvenido a la página de saludo dinámico de Laravel</p>
        <p style="margin-top: 2rem; font-size: 0.9rem; color: #999;">
            Esta página recibe el parámetro de la URL y lo muestra dinámicamente
        </p>
    </div>
</body>
</html>
<?php /**PATH C:\Users\Nefta\practica1\resources\views/saludo.blade.php ENDPATH**/ ?>