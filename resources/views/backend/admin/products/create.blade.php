@extends('backend.admin.layouts.app')

@section('content')
<div class="container mx-auto py-6 px-6 max-w-3xl">
    <h1 class="text-2xl font-bold mb-4">Add New Product</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div>
            <label class="block font-semibold mb-1">Name</label>
            <input type="text" name="name" class="w-full border rounded px-3 py-2" value="{{ old('name') }}" required>
        </div>

        <div>
            <label class="block font-semibold mb-1">Description</label>
            <textarea name="description" class="w-full border rounded px-3 py-2" rows="3">{{ old('description') }}</textarea>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block font-semibold mb-1">Price</label>
                <input type="number" step="0.01" name="price" class="w-full border rounded px-3 py-2" value="{{ old('price') }}" required>
            </div>
            <div>
                <label class="block font-semibold mb-1">Stock</label>
                <input type="number" name="stock" class="w-full border rounded px-3 py-2" value="{{ old('stock') }}" required>
            </div>
        </div>

        <div>
            <label class="block font-semibold mb-1">Category</label>
            <select name="category_id" class="w-full border rounded px-3 py-2" required>
                <option value="">-- Select Category --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id')==$category->id?'selected':'' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block font-semibold mb-1">Product Images (Multiple)</label>
            <input type="file" name="images[]" id="images" class="w-full border rounded px-3 py-2" multiple>
            <div id="preview" class="flex flex-wrap gap-2 mt-2"></div>
        </div>

        <div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Save Product</button>
            <a href="{{ route('admin.products.index') }}" class="ml-2 text-gray-600 hover:underline">Cancel</a>
        </div>
    </form>
</div>
@endsection

@section('scripts')

<script>
    $('#images').on('change', function() {
        $('#preview').empty();
        for (let file of this.files) {
            let reader = new FileReader();
            reader.onload = function(e) {
                $('#preview').append(
                    `<img src="${e.target.result}" class="w-20 h-20 object-cover rounded border">`
                );
            }
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection
