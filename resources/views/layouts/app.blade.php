<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cochera</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2rem; background: #f8fafc; }
        .container { max-width: 900px; margin: auto; background: #fff; padding: 1.5rem; border-radius: 8px; }
        .header { display: flex; justify-content: space-between; align-items: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
        th, td { border-bottom: 1px solid #e2e8f0; padding: .6rem; text-align: left; }
        .actions { display: flex; gap: .5rem; }
        .btn { background: #2563eb; color: #fff; border: none; padding: .45rem .7rem; border-radius: 4px; cursor: pointer; text-decoration: none; display:inline-block; }
        .btn-danger { background: #dc2626; }
        .btn-secondary { background: #4b5563; }
        label { display:block; font-weight:600; margin-top:.8rem; }
        input, textarea, select { width:100%; padding:.45rem; margin-top:.3rem; }
        .alert { background: #dcfce7; color: #166534; padding: .7rem; border-radius: 6px; margin: .8rem 0; }
        .errors { background: #fee2e2; color: #7f1d1d; padding:.7rem; border-radius: 6px; margin:.8rem 0; }
    </style>
</head>
<body>
<div class="container">
    @yield('content')
</div>
</body>
</html>
