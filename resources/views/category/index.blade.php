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

<div class="max-w-6xl mx-auto mt-10 px-4">
    <div class="bg-white shadow-lg rounded-lg p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Categories</h2>
            <a href="{{ url('categories/create') }}" 
               class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium">
               Add Category
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 text-sm text-left text-gray-700">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 border-b">ID</th>
                        <th class="px-4 py-2 border-b">Name</th>
                        <th class="px-4 py-2 border-b">Description</th>
                        <th class="px-4 py-2 border-b">Is Active</th>
                        <th class="px-4 py-2 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 border-b">{{ $category->id }}</td>
                            <td class="px-4 py-2 border-b">{{ $category->name }}</td>
                            <td class="px-4 py-2 border-b">{{ $category->description }}</td>
                            <td class="px-4 py-2 border-b">
                                {{ $category->is_active ? 'Yes' : 'No' }}
                            </td>
                            <td class="px-4 py-2 border-b flex gap-2">
                                <a href="{{ url('categories/'.$category->id.'/edit') }}"
                                   class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs">
                                   Edit
                                </a>

                                <a href="{{ url('categories/'.$category->id.'/delete') }}"
                                   class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">
                                   Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
