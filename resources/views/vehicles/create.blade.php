<!-- bago -->


<x-adminlayouts.app>

    <!-- Include Navigation -->
    

    <div class="container mt-4">

       
            <h1>Add Vehicle</h1>
            <form action="{{ route('vehicles.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" name="type" class="form-control" id="type" required>
                </div>
                <div class="mb-3">
                    <label for="seats" class="form-label">Seats</label>
                    <input type="number" name="seats" class="form-control" id="seats" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" id="price" step="0.01" required>
                </div>
                <div class="mb-3">
                    <label for="is_available" class="form-label">Available</label>
                    <select name="is_available" id="is_available" class="form-control" required>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Add Vehicle</button>
            </form>
        @endif

    </div>

</x-adminlayouts.app>
