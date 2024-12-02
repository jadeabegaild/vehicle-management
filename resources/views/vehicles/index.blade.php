<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Vehicle') }}
        </h2>
    </x-slot>

    <div class="card" style="background-color: #78A617; color: #fff;">
    <img src="vehicle_image.jpg" class="card-img-top" alt="Vehicle">
    <div class="card-body">
        <h5 class="card-title">Vehicle Name</h5>
        <p class="card-text">Type: Sedan</p>
        <p class="card-text">Seats: 4</p>
        <p class="card-text">Price: $100/day</p>
        <p class="card-text">Status: Available</p>
        <a href="#" class="btn btn-dark">Rent Now</a>
    </div>
</div>

</x-app-layout>

