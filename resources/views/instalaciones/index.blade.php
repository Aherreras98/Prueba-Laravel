<div>
    <h1>Instalaciones</h1>
    <p>Bienvenido a la página de instalaciones. Aquí podrás ver todas las instalaciones disponibles.</p>
    <a href="{{ url('/instalaciones/create') }}" class="btn btn-primary">Crear instalación</a>
    <div class="mt-4">
        @forelse($instalaciones ?? [] as $instalacion)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $instalacion->name }}</h5>
                    <p class="card-text">{{ $instalacion->description }}</p>
                    <p class="card-text"><small class="text-muted">Disponible: {{ $instalacion->is_available ? 'Sí' : 'No' }}</small></p>
                </div>
            </div>
        @empty
            <p>No hay instalaciones para mostrar.</p>
        @endforelse
    </div>
</div>
