@extends('_layouts/main')

@section('content')
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <h2 class="mb-7.5 mt-10 text-title-md2 font-bold text-black">
                Cars List
            </h2>

            <div class="grid grid-cols-1 gap-7.5 sm:grid-cols-2 xl:grid-cols-4">
                @foreach ($cars as $car)
                    <div class="rounded-sm border border-stroke bg-white shadow-default">
                        <a href="#" class="block px-4 pt-4">
                            <img class="object-cover h-60 w-96" src="src/images/car/{{ $car->photo }}" alt="cars" />
                        </a>

                        <div class="p-6 overflow-hidden">
                            <h4 class="mb-3 text-xl font-semibold text-black">
                                <a href="#">{{ $car->name }}</a>
                            </h4>
                            <p class="font-medium">
                                {{ $car->cost_per_day }} per Day
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </main>
@endsection
