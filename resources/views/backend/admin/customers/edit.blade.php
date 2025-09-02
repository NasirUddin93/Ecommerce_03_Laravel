@extends('backend.admin.layouts.app')

@section('content')
<div class="container mx-auto max-w-lg">
    <h1 class="text-2xl font-bold mb-6">Edit Customer</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-800 p-4 mb-4 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Name -->
        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-700" for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $customer->name) }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-700" for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email', $customer->email) }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Password (Optional) -->
        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-700" for="password">Password <span class="text-gray-500 text-sm">(Leave blank to keep current)</span></label>
            <input type="password" id="password" name="password"
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Submit -->
        <div class="flex justify-between items-center">
            <a href="{{ route('admin.customers.index') }}"
               class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">
               Cancel
            </a>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                Update Customer
            </button>
        </div>
    </form>
</div>
@endsection
