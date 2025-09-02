@extends('backend.admin.layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Customers List</h1>

    <table class="min-w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2">ID</th>
                <th class="border border-gray-300 px-4 py-2">Name</th>
                <th class="border border-gray-300 px-4 py-2">Email</th>
                <th class="border border-gray-300 px-4 py-2">Created At</th>
                <th class="border border-gray-300 px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($customers as $customer)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $customer->id }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $customer->name }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $customer->email }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $customer->created_at->format('d M Y') }}</td>
                    <td class="border border-gray-300 px-4 py-2 space-x-2">
                        <!-- Edit Button -->
                        <a href="{{ route('admin.customers.edit', $customer->id) }}"
                           class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded">
                            Edit
                        </a>

                        <!-- Delete Button -->
                        <form action="{{ route('admin.customers.destroy', $customer->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this customer?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center py-4">No customers found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
