@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8 bg-[#E8F5F7] p-6 rounded-md">
    <div class="flex items-center justify-between mb-4">
        <h1 class="text-3xl font-bold font-playfair-display text-[#1EAEDB]">Add New User</h1>
    </div>
    <form action="{{ route('users.store') }}" method="POST" class="bg-white p-6 border border-gray-300">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                required>
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" id="password"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        </div>

        <button type="submit"
            class="flex items-center bg-[#1EAEDB] text-white px-4 py-2 rounded-3xl font-bold hover:bg-[#6BAE75] transition-colors">
            Add User
        </button>
    </form>
</div>
@endsection