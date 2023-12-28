@extends('layouts.dashboard_master')

@section('content')
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Category Page</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-7">
            <div class="card">
                <div class="card-header">
                    Category List
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Slug</th>
                                {{-- <th scope="col">Status</th> --}}
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <th scope="row">{{ $categories->firstItem() + $loop->index }}</th>
                                    <td>{{ $category->title }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>
                                        <a href="{{ route('category.edit.view',$category->slug) }}" class="badge bg-warning">Edit</a>
                                        <button type="button" class="badge bg-info" data-bs-toggle="modal"
                                            data-bs-target="#inventoryOfCategory{{ $category->id }}">
                                            Inventory
                                        </button>
                                        <form action="{{ route('category.delete', $category->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="badge bg-danger">
                                                Delete
                                            </button>
                                        </form>
                                        <form action="{{ route('category.status', $category->id) }}" method="POST">
                                            @csrf
                                            @if ($category->status == 'active')
                                            <button type="submit" class="badge bg-success">
                                                {{ $category->status }}
                                            </button>
                                            @else
                                            <button type="submit" class="badge bg-danger">
                                                {{ $category->status }}
                                            </button>
                                            @endif
                                        </form>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="inventoryOfCategory{{ $category->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h2>Inventory Of ID No - {{ $category->id }}</h2>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="mb-3">
                                                            <img src="{{ asset('uploads/category') }}/{{ $category->image }}"
                                                                style="width: 150px; height:150px;">
                                                        </div>
                                                        <div class="mb-3">
                                                            <p>Category Title - {{ $category->title }}</p>
                                                        </div>
                                                        <div class="mb-3">
                                                            <p>Category Slug - {{ $category->slug }}</p>
                                                        </div>
                                                        <div class="mb-3">
                                                            <p>Category Description - {{ $category->description }}</p>
                                                        </div>
                                                        <div class="mb-3">
                                                            <p>Category Status - {{ $category->status }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $categories->links() }}
                </div>
            </div>
        </div>

        <div class="col-5">
            <div class="card">
                <div class="card-header">
                    Category Insert
                </div>
                <div class="card-body">
                    <form action="{{ route('category.insert') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Title </label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title">
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Slug </label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug">
                            @error('slug')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" rows="5" name="description"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_script')
    @if (session('category_success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: "{{ session('category_success') }}"
            })
        </script>
    @endif
@endsection
