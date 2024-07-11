@extends('_layouts.main')

@section('content')
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-title-md2 font-bold text-black">
                    Edit Loan
                </h2>
            </div>

            <form action="{{ route('loans.update', $loan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <div>
                        <label for="car_id" class="block text-sm font-medium text-gray-700">Car</label>
                        <select name="car_id" id="car_id"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            required>
                            @foreach ($cars as $car)
                                <option value="{{ $car->id }}" {{ $loan->car_id == $car->id ? 'selected' : '' }}>
                                    {{ $car->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="user_id" class="block text-sm font-medium text-gray-700">User</label>
                        <select name="user_id" id="user_id"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            required>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}" {{ $loan->user_id == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="loan_date" class="block text-sm font-medium text-gray-700">Loan Date</label>
                        <input type="date" name="loan_date" id="loan_date" value="{{ $loan->loan_date }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            required>
                    </div>
                    <div>
                        <label for="return_date" class="block text-sm font-medium text-gray-700">Return Date</label>
                        <input type="date" name="return_date" id="return_date" value="{{ $loan->return_date }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="total_cost" class="block text-sm font-medium text-gray-700">Total Cost</label>
                        <input type="number" name="total_cost" id="total_cost" value="{{ $loan->total_cost }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                        <select name="status" id="status"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            required>
                            <option value="pending" {{ $loan->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="approved" {{ $loan->status == 'approved' ? 'selected' : '' }}>Approved</option>
                            <option value="rejected" {{ $loan->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                            <option value="returned" {{ $loan->status == 'returned' ? 'selected' : '' }}>Returned</option>
                        </select>
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit"
                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </main>
@endsection
