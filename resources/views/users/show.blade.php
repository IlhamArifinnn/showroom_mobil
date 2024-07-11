@extends('_layouts.main')

@section('content')
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-title-md2 font-bold text-black">
                    User Details
                </h2>
            </div>

            <div class="flex flex-col gap-10">
                <div class="rounded-sm border border-stroke bg-white shadow-default">
                    <div class="border-b border-stroke py-4 px-6.5">
                        <h3 class="font-medium text-black">
                            User Information
                        </h3>
                    </div>
                    <div class="p-6.5">
                        <div class="mb-4.5">
                            <label class="mb-2.5 block text-black">
                                Full Name
                            </label>
                            <p class="text-sm text-gray-600">{{ $user->fullname }}</p>
                        </div>

                        <div class="mb-4.5">
                            <label class="mb-2.5 block text-black">
                                Username
                            </label>
                            <p class="text-sm text-gray-600">{{ $user->username }}</p>
                        </div>

                        <div class="mb-4.5">
                            <label class="mb-2.5 block text-black">
                                Email
                            </label>
                            <p class="text-sm text-gray-600">{{ $user->email }}</p>
                        </div>

                        <div class="flex justify-end space-x-4">
                            <a href="{{ route('users.edit', $user->id) }}"
                                class="inline-flex items-center justify-center rounded-md border border-primary py-2 px-6 text-center font-medium text-primary hover:bg-opacity-90">
                                Edit
                            </a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="inline-flex items-center justify-center rounded-md border border-primary bg-primary py-2 px-6 text-center font-medium text-white hover:bg-opacity-90"
                                    onclick="return confirm('Are you sure you want to delete?')">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
