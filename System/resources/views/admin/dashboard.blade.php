<x-admin>
    <div class="row">
        <div class="col-12">
            <h2 class="mb-4">Panel de Control</h2>
            <div class="alert alert-success">
                Has iniciado sesión correctamente como <strong>{{ Auth::user()->name }}</strong>
            </div>
        </div>
    </div>
</x-admin>
