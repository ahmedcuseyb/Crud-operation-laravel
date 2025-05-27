    <x-slot name="title">
        Categories
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <button>
                            Categories
                        </button>
                        <h4>
                            <a href="{{ url('categories/create') }}" class="btn btn-primary float-end">Add Category</a>
                    </div>
                    <div class="card-body">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Is Active</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td>{{ $category->is_active ? 'Yes' : 'No' }}</td>
                                        <td>
                                          <a href="{{ url('categories/'.$category->id.'/edit') }}" class="btn btn-warning">Edit</a>

                                            {{-- <a href="{{ url('categories/edit/'.$category->id) }}" class="btn btn-warning">Edit</a> --}}
                                           
                                           <a  href="{{ url('categories/'.$category->id.'/delete') }}" class="btn-danget mx-3">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
