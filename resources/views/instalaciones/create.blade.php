<div>
    <h1>Create Instalación</h1>
    <form action="{{ route('instalaciones.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="is_available">Is Available</label>
            <input type="checkbox" class="form-check-input" id="is_available" name="is_available">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
