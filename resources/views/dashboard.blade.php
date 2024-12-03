<x-app-layout>
   
    <!-- //BAGO -->
    <div class="container">
        <h1 class="mb-4">Available Vehicles</h1>

        <div class="row">
        @foreach ($vehicles as $vehicle)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $vehicle->name }}</h5>
                            <p class="card-text">
                                <strong>Type:</strong> {{ $vehicle->type }} <br>
                                <strong>Seats:</strong> {{ $vehicle->seats }} <br>
                                <strong>Price:</strong> ${{ number_format($vehicle->price, 2) }} <br>
                                <strong>Available:</strong> {{ $vehicle->is_available ? 'Yes' : 'No' }}
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            @if ($vehicle->is_available)
                                <button 
                                    class="btn btn-primary btn-sm" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#rentVehicleModal" 
                                    data-id="{{ $vehicle->id }}" 
                                    data-name="{{ $vehicle->name }}" 
                                    data-type="{{ $vehicle->type }}" 
                                    data-price="{{ $vehicle->price }}">
                                    Rent Vehicle
                                </button>
                            @else
                                <button class="btn btn-secondary btn-sm" disabled>Not Available</button>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

</x-app-layout>
