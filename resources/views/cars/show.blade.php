@extends('_layouts.main')

@section('content')
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-title-md2 font-bold text-black">
                    Car Details
                </h2>
            </div>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Name</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $car->name }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Photo</label>
                    <img src="{{ $car->photo }}" alt="{{ $car->name }}" class="mt-1 w-full rounded-md">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Type</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $car->type->name }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Cost per Day</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $car->cost_per_day }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Year</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $car->year }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">License Plate</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $car->license_plate }}</p>
                </div>
            </div>
        </div>
    </main>
@endsection
