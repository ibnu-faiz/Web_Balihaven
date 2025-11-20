@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8 bg-[#E8F5F7] p-6 rounded-md">
    <div class="flex items-center justify-between mb-4">
        <h1 class="text-3xl font-bold font-playfair-display text-[#1EAEDB]">Edit User</h1>
    </div>
    <form action="{{ route('users.update', $user->id) }}" method="POST" class="bg-white p-6 border border-gray-300">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" value="{{ $user->name }}"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" value="{{ $user->email }}"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <button type="submit"
            class="flex items-center bg-[#1EAEDB] text-white px-4 py-2 rounded-3xl font-bold hover:bg-[#6BAE75] transition-colors">Update</button>
    </form>
</div>
@endsection