@extends('layouts.app')

@section('content')
<div class="w-full bg-[#E8F5F7] p-10"> <!-- Background #E8F5F7 -->
    <!-- Flex container untuk judul dan tombol -->
    <div class="flex items-center justify-between mb-4">
        <h1 class="text-3xl font-bold font-playfair-display text-[#1EAEDB]">Users</h1> <!-- Judul H1 -->
        <a href="{{ route('users.create') }}" 
           class="flex items-center bg-[#1EAEDB] text-white px-4 py-2 rounded-3xl font-bold hover:bg-[#6BAE75] transition-colors">Add New User</a>
    </div>
    <table class="table-auto w-full bg-white border-collapse border border-gray-300 shadow-md rounded-md">
        <thead class="bg-gray-100">
            <tr class="text-center">
                <th class="py-3 px-4 border border-gray-300">ID</th>
                <th class="py-3 px-4 border border-gray-300">Name</th>
                <th class="py-3 px-4 border border-gray-300">Email</th>
                <th class="py-3 px-4 border border-gray-300">Actions</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            @foreach ($users as $index => $user)
            <tr class="border hover:bg-gray-100 text-center">
                <td class="py-3 px-4 border border-gray-300">{{ $user->id }}</td>
                <td class="py-3 px-4 border border-gray-300">{{ $user->name }}</td>
                <td class="py-3 px-4 border border-gray-300">{{ $user->email }}</td>
                <td class="py-3 px-4 border border-gray-300 flex gap-2 justify-center">
                    <a href="{{ route('users.edit', $user->id) }}" 
                       class="flex items-center bg-[#1EAEDB] text-white px-4 py-2 rounded-3xl font-bold hover:bg-[#6BAE75] transition-colors">Edit</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="flex items-center bg-[#1EAEDB] text-white px-4 py-2 rounded-3xl font-bold hover:bg-[#6BAE75] transition-colors">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
