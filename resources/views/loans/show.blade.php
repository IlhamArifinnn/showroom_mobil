@extends('_layouts.main')

@section('content')
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-title-md2 font-bold text-black">
                    Loan Details
                </h2>
            </div>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Car</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $loan->car->name }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">User</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $loan->user->name }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Loan Date</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $loan->loan_date }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Return Date</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $loan->return_date }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Total Cost</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $loan->total_cost }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Status</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $loan->status }}</p>
                </div>
            </div>
        </div>
    </main>
@endsection
