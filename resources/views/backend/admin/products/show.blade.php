@extends('backend.admin.layouts.app')

@section('content')
<div class="container mx-auto py-6">
    <h1 class="text-2xl font-bold mb-4">Product Details</h1>

    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-semibold mb-2">{{ $product->name }}</h2>
        <p class="text-gray-700 mb-4">{{ $product->description }}</p>

        <div class="mb-4">
            <strong>Price:</strong> {{ number_format($product->price, 2) }} TK
        </div>
        <div class="mb-4">
            <strong>Stock:</strong> {{ $product->stock }}
        </div>
        <div class="mb-4">
            <strong>Category:</strong> {{ $product->category->name ?? 'N/A' }}
        </div>

        {{-- Images --}}
        <div class="mb-4">
            <strong>Images:</strong>
            <div class="flex flex-wrap gap-4 mt-2">
                @forelse($product->images as $image)
                    <img src="{{ asset('storage/' . $image->image_path) }}"
                         alt="{{ $product->name }}"
                         class="w-32 h-32 object-cover rounded shadow">
                @empty
                    <p>No images available.</p>
                @endforelse
            </div>
        </div>

        <div class="flex gap-4 mt-6">
            <a href="{{ route('admin.products.edit', $product->id) }}"
               class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">Edit</a>
            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                  onsubmit="return confirm('Are you sure you want to delete this product?');">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">Delete</button>
            </form>
            <a href="{{ route('admin.products.index') }}"
               class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600">Back</a>
        </div>
    </div>
</div>
@endsection
