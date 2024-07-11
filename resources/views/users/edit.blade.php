@extends('_layouts.main')

@section('content')
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-title-md2 font-bold text-black">
                    Edit User
                </h2>
            </div>

            <div class="flex flex-col gap-10">
                <div class="rounded-sm border border-stroke bg-white shadow-default">
                    <div class="border-b border-stroke py-4 px-6.5">
                        <h3 class="font-medium text-black">
                            User Information
                        </h3>
                    </div>
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="p-6.5">
                            <div class="mb-4.5">
                                <label class="mb-2.5 block text-black">
                                    Full Name
                                </label>
                                <input type="text" name="fullname" value="{{ $user->fullname }}" placeholder="Enter your full name"
                                    class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary"
                                    required>
                            </div>

                            <div class="mb-4.5">
                                <label class="mb-2.5 block text-black">
                                    Username
                                </label>
                                <input type="text" name="username" value="{{ $user->username }}" placeholder="Enter your username"
                                    class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary"
                                    required>
                            </div>

                            <div class="mb-4.5">
                                <label class="mb-2.5 block text-black">
                                    Email
                                </label>
                                <input type="email" name="email" value="{{ $user->email }}" placeholder="Enter your email address"
                                    class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary"
                                    required>
                            </div>

                            <button class="flex w-full justify-center rounded bg-primary p-3 font-medium text-gray">
                                Update User
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
