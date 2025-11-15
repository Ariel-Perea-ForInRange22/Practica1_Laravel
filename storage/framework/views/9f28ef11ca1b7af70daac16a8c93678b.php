<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel - Asignación 1</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background: white;
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            text-align: center;
            max-width: 700px;
            width: 100%;
        }
        
        .logo {
            width: 120px;
            height: 120px;
            margin: 0 auto 2rem;
            background: #ff2d20;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 4rem;
            font-weight: bold;
            box-shadow: 0 10px 30px rgba(255, 45, 32, 0.3);
        }
        
        h1 {
            color: #2a5298;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        
        p {
            color: #666;
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 2rem;
        }
        
        .links {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 2rem;
        }
        
        .btn {
            display: inline-block;
            padding: 1rem 2rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-weight: bold;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
        }
        
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
        }
        
        .btn-secondary {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            box-shadow: 0 5px 15px rgba(245, 87, 108, 0.3);
        }
        
        .btn-secondary:hover {
            box-shadow: 0 8px 25px rgba(245, 87, 108, 0.4);
        }
        
        .info-box {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 10px;
            margin-top: 2rem;
            border-left: 4px solid #667eea;
        }
        
        .info-box h3 {
            color: #2a5298;
            margin-bottom: 0.5rem;
        }
        
        .info-box ul {
            text-align: left;
            color: #666;
            line-height: 2;
            list-style-position: inside;
        }
        
        @media (max-width: 600px) {
            .container {
                padding: 2rem 1.5rem;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            .links {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">L</div>
        <h1>Asignación 1: Laravel</h1>
        <p>
            Bienvenido al proyecto de Fundamentos de Laravel.<br>
            Este proyecto implementa rutas, controladores y vistas Blade.
        </p>
        
        <div class="links">
            <a href="/bienvenida" class="btn">Ir a Bienvenida</a>
            <a href="/saludo/Estudiante" class="btn btn-secondary">Probar Saludo</a>
        </div>
        
        <div class="info-box">
            <h3>Rutas Disponibles:</h3>
            <ul>
                <li><strong>/bienvenida</strong> - Página de bienvenida estática</li>
                <li><strong>/saludo/{nombre}</strong> - Saludo personalizado dinámico</li>
            </ul>
        </div>
        
        <p style="margin-top: 2rem; font-size: 0.9rem; color: #999;">
            Desarrollado como parte del curso de Laravel<br>
            15 de Noviembre, 2025
        </p>
    </div>
</body>
</html>
<?php /**PATH C:\Users\Nefta\practica1\resources\views/welcome.blade.php ENDPATH**/ ?>