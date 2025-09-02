@extends('backend.admin.layouts.app')

@section('content')
<div class="container mx-auto py-6">
    <h1 class="text-2xl font-bold mb-4">Edit Product</h1>

    <div class="bg-white shadow rounded-lg p-6">
        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Name --}}
            <div class="mb-4">
                <label class="block font-medium mb-1">Name</label>
                <input type="text" name="name" value="{{ old('name', $product->name) }}"
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring" required>
            </div>

            {{-- Description --}}
            <div class="mb-4">
                <label class="block font-medium mb-1">Description</label>
                <textarea name="description" rows="4"
                          class="w-full border rounded px-3 py-2 focus:outline-none focus:ring">{{ old('description', $product->description) }}</textarea>
            </div>

            {{-- Price --}}
            <div class="mb-4">
                <label class="block font-medium mb-1">Price</label>
                <input type="number" name="price" step="0.01" value="{{ old('price', $product->price) }}"
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring" required>
            </div>

            {{-- Stock --}}
            <div class="mb-4">
                <label class="block font-medium mb-1">Stock</label>
                <input type="number" name="stock" value="{{ old('stock', $product->stock) }}"
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring" required>
            </div>

            {{-- Category --}}
            <div class="mb-4">
                <label class="block font-medium mb-1">Category</label>
                <select name="category_id" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring" required>
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            {{-- Existing Images --}}
            <div class="mb-4">
                <label class="block font-medium mb-1">Existing Images</label>
                <div class="flex flex-wrap gap-4">
                    @forelse($product->images as $image)
                        <div class="relative inline-block m-2" id="image-{{ $image->id }}">
                            <img src="{{ asset('storage/' . $image->image_path) }}"
                                alt="Image" class="w-32 h-32 object-cover rounded">
                            <button type="button"
                                    class="delete-image bg-red-600 text-white px-2 py-1 text-xs rounded absolute top-0 right-0"
                                    data-id="{{ $image->id }}">
                                X
                            </button>
                        </div>
                    @empty
                        <p>No images uploaded.</p>
                    @endforelse
                </div>
            </div>

            {{-- Upload New Images --}}
            <div class="mb-4">
                <label class="block font-medium mb-1">Add New Images</label>
                <input type="file" name="images[]" multiple
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring"
                       accept="image/*" onchange="previewImages(event)">
                <div id="preview" class="flex flex-wrap gap-4 mt-2"></div>
            </div>

            <div class="flex gap-4">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
                <a href="{{ route('admin.products.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Cancel</a>
            </div>
        </form>
    </div>
</div>

{{-- Preview Script --}}
<script>
function previewImages(event) {
    let preview = document.getElementById('preview');
    preview.innerHTML = '';
    Array.from(event.target.files).forEach(file => {
        let reader = new FileReader();
        reader.onload = e => {
            let img = document.createElement('img');
            img.src = e.target.result;
            img.className = 'w-32 h-32 object-cover rounded shadow';
            preview.appendChild(img);
        };
        reader.readAsDataURL(file);
    });
}
</script>
{{-- Delete Image Script --}}
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
<script>
$(document).ready(function() {
    $('.delete-image').on('click', function() {
        if(!confirm('Delete this image?')) return;

        let imageId = $(this).data('id');
        let token = '{{ csrf_token() }}';
        let url = '{{ route("admin.product-images.destroy", ":id") }}'.replace(':id', imageId);

        $.ajax({
            url: url,
            type: 'DELETE',
            data: { _token: token },
            success: function(response) {
                if (response.success) {
                    $('#image-' + imageId).remove(); // instantly updates page
                } else {
                    alert(response.message || 'Something went wrong.');
                }
            },
            error: function(xhr) {
                console.error(xhr.responseText);
                alert('Error deleting image.');
            }
        });
    });
});
</script>


@endsection
