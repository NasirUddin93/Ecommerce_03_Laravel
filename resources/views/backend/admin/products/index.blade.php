@extends('backend.admin.layouts.app')

@section('content')
<div class="container mx-auto py-6">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Products</h1>
        <a href="{{ route('admin.products.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Add Product</a>
    </div>

    @if (session('success'))
        <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-4 py-2 text-left">#</th>
                    <th class="border px-4 py-2 text-left">Name</th>
                    <th class="border px-4 py-2 text-left">Category</th>
                    <th class="border px-4 py-2 text-left">Price</th>
                    <th class="border px-4 py-2 text-left">Stock</th>
                    <th class="border px-4 py-2 text-left">Image</th>
                    <th class="border px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="border px-4 py-2">{{ $product->name }}</td>
                        <td class="border px-4 py-2">{{ $product->category->name ?? 'N/A' }}</td>
                        <td class="border px-4 py-2">{{ number_format($product->price, 2) }}</td>
                        <td class="border px-4 py-2">{{ $product->stock }}</td>
                        <td class="border px-4 py-2">
                            @if ($product->images && $product->images->count() > 0)
                                <img src="{{ asset('storage/'.$product->images->first()->image_path) }}" alt="Product" class="w-16 h-16 object-cover rounded">
                            @elseif($product->image)
                                <img src="{{ asset('storage/'.$product->image) }}" alt="Product" class="w-16 h-16 object-cover rounded">
                            @else
                                N/A
                            @endif
                        </td>
                        <td class="border px-4 py-2 space-x-2">
                            <a href="{{ route('admin.products.show', $product->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Show</a>
                            <a href="{{ route('admin.products.edit', $product->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Edit</a>
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 text-white px-2 py-1 rounded hover:bg-red-700">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-4">No products found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
