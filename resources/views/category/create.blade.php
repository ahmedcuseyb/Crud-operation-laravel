<x-slot name="title">
    Add Categories
</x-slot>

<div class="max-w-4xl mx-auto py-8">


    @if(session('status'))
    <div class='alert alert-success mb-4'>
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

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                <input type="text" name="name" value="{{ old('name') }}">
                  @error('name') <span class="text-danger"l>{{ $message }}</span>@enderror  
                
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea name="description" rows="3">{{ old('description') }}</textarea>
                  @error('description') <span class="text-danger"l>{{ $message }}</span>@enderror  

            </div>

            <div class="flex items-center space-x-2">
                <input type="checkbox" name="is_active"
                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                    {{ old('is_active') == true ? 'checked' : '' }} />
                @error('is_active') <span class="text-danger"l>{{ $message }}</span>@enderror  

                <label class="text-sm text-gray-700">Is Active</label>
            </div>

            <div>
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-md shadow-sm text-sm font-medium">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>
