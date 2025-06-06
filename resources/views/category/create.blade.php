<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">   
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Challenge</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body class="bg-gray-100">

<div class="max-w-4xl mx-auto py-8">

    @if(session('status'))
        <div class='bg-green-100 text-green-700 px-4 py-3 rounded mb-4'>
            {{ session('status') }}
        </div>
    @endif

    <div class="bg-white shadow-md rounded-xl p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold">Add Categories</h2>
            <a href="{{ url('categories') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium">
                Back
            </a>
        </div>

        <form action="{{ url('categories/create') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Name -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                <input type="text" name="name" value="{{ old('name') }}"
                       class="w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                @error('name')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <!-- Description -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea name="description" rows="3"
                          class="w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('description') }}</textarea>
                @error('description')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <!-- Is Active -->
            <div class="flex items-center space-x-2">
                <input type="checkbox" name="is_active"
                       class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                       {{ old('is_active') == true ? 'checked' : '' }} />
                <label class="text-sm text-gray-700">Is Active</label>
            </div>
            @error('is_active')
                <span class="text-sm text-red-600">{{ $message }}</span>
            @enderror

            <!-- Submit Button -->
            <div>
                <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-md shadow-sm text-sm font-medium">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
