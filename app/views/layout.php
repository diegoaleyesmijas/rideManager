<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RideManager</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * { font-family: 'Inter', sans-serif; }
        body { background-color: #ffffff; color: #1a1a1a; }
        
        /* NAVBAR */
        .navbar { 
            background: #ffffff !important; 
            border-bottom: 3px solid #CC0000;
            padding: 16px 0;
        }
        .navbar-brand { 
            font-weight: 900; 
            font-size: 1.4rem;
            color: #CC0000 !important; 
            letter-spacing: -0.5px;
        }
        .navbar-brand span { color: #1a1a1a; }
        .nav-link { 
            color: #1a1a1a !important; 
            font-weight: 500;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            padding: 8px 16px !important;
            transition: color 0.2s;
        }
        .nav-link:hover { color: #CC0000 !important; }

        /* BUTTONS */
        .btn-primary { 
            background-color: #CC0000; 
            border-color: #CC0000;
            border-radius: 0;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            font-size: 0.85rem;
            padding: 12px 24px;
        }
        .btn-primary:hover { 
            background-color: #aa0000; 
            border-color: #aa0000; 
        }
        .btn-outline-secondary {
            border-radius: 0;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            font-size: 0.85rem;
            padding: 12px 24px;
        }

        /* CARDS */
        .card { 
            border: 1px solid #e8e8e8; 
            border-radius: 0;
            box-shadow: none;
        }
        .card:hover {
            border-color: #CC0000;
            transition: border-color 0.2s;
        }

        /* TABLE */
        .table thead th {
            background: #1a1a1a;
            color: #ffffff;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 1px;
            border: none;
        }
        .table td { 
            vertical-align: middle;
            border-color: #f0f0f0;
        }

        /* HERO */
        .hero {
            background: #1a1a1a;
            color: white;
            padding: 80px 0;
            margin-bottom: 60px;
        }
        .hero h1 {
            font-size: 3.5rem;
            font-weight: 900;
            letter-spacing: -2px;
            line-height: 1;
        }
        .hero h1 span { color: #CC0000; }
        .hero p {
            font-size: 1rem;
            color: #999;
            font-weight: 300;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        /* BADGES */
        .badge-disponible { 
            background: none;
            color: #00aa44;
            font-weight: 600;
            font-size: 0.85rem;
        }
        .badge-nodisponible { 
            background: none;
            color: #CC0000;
            font-weight: 600;
            font-size: 0.85rem;
        }

        /* FOOTER */
        footer {
            background: #1a1a1a;
            color: #666;
            padding: 30px 0;
            margin-top: 80px;
            font-size: 0.85rem;
        }
        footer span { color: #CC0000; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.php">RIDE<span>MANAGER</span></a>
        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="index.php">Inicio</a>
            <a class="nav-link" href="index.php?action=motos">Motos</a>
            <a class="nav-link" href="index.php?action=clientes">Clientes</a>
            <a class="nav-link" href="index.php?action=alquiler">Nuevo Alquiler</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <?= $content ?>
</div>

<footer>
    <div class="container">
        <span>RIDEMANAGER</span> · Sistema de gestión de alquiler de motos · PHP MVC + MySQL
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>