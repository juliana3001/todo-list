<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background: #f0f2f5; }
        .navbar { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important; }
        .navbar-brand { font-weight: 600; font-size: 1.2rem; }
        .card { border: none; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); }
        .card-header { background: white; border-bottom: 1px solid #f0f0f0; border-radius: 12px 12px 0 0 !important; padding: 1.25rem 1.5rem; }
        .task-card { transition: transform 0.15s ease, box-shadow 0.15s ease; }
        .task-card:hover { transform: translateY(-2px); box-shadow: 0 4px 16px rgba(0,0,0,0.12); }
        .task-completed { background: #f8fff8; border-left: 4px solid #28a745 !important; }
        .task-pending { border-left: 4px solid #667eea !important; }
        .btn-primary { background: linear-gradient(135deg, #667eea, #764ba2); border: none; border-radius: 8px; }
        .btn-primary:hover { background: linear-gradient(135deg, #5a6fd6, #6a4393); }
        .btn-toggle-done { background: #28a745; border: none; border-radius: 8px; width: 36px; height: 36px; }
        .btn-toggle-pending { background: white; border: 2px solid #dee2e6; border-radius: 8px; width: 36px; height: 36px; color: #aaa; }
        .btn-toggle-pending:hover { border-color: #28a745; color: #28a745; }
        .badge-count { background: rgba(255,255,255,0.2); border-radius: 20px; padding: 2px 10px; font-size: 13px; }
        .empty-state { padding: 3rem; text-align: center; }
        .empty-icon { font-size: 3rem; margin-bottom: 1rem; }
        .form-control { border-radius: 8px; border: 1.5px solid #e0e0e0; padding: 10px 14px; }
        .form-control:focus { border-color: #667eea; box-shadow: 0 0 0 3px rgba(102,126,234,0.15); }
        .progress-bar { background: linear-gradient(135deg, #667eea, #764ba2); }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('tasks.index') }}">
                ✅ Lista de Tareas
            </a>
        </div>
    </nav>

    <div class="container" style="max-width: 720px;">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show border-0 rounded-3 mb-4">
                ✓ {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>