@extends('layouts.dashboard_master')

@section('content')
<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Tags</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="d-flex justify-content-end mb-5">
        <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#restore">Restore Trash</a>
    </div>
     <!-- Modal -->
     <div class="modal fade" id="restore" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-header">
                            <h2>Restore Of All Trashes </h2>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        {{-- <th scope="col">Status</th> --}}
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($trashes as $trash)
                                        <tr>
                                            <th scope="row">{{ $trashes->firstItem() + $loop->index }}</th>
                                            <td>{{ $trash->title }}</td>
                                            <td>
                                                <form action="{{ route('tag.restore', $trash->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="badge bg-success">
                                                        Restore
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td class="text-danger text-center" colspan="3"><b>No Data Found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-7">
        <div class="card">
            <div class="card-header">
                Tags List
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            {{-- <th scope="col">Status</th> --}}
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($tags as $tag)
                            <tr>
                                <th scope="row">{{ $tags->firstItem() + $loop->index }}</th>
                                <td>{{ $tag->title }}</td>
                                <td>
                                    {{-- <a href="{{ route('category.edit.view',$category->slug) }}" class="badge bg-warning">Edit</a>
                                    <button type="button" class="badge bg-info" data-bs-toggle="modal"
                                        data-bs-target="#inventoryOfCategory{{ $category->id }}">
                                        Inventory
                                    </button> --}}
                                    <form action="{{ route('tag.delete', $tag->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="badge bg-danger">
                                            Delete
                                        </button>
                                    </form>
                                    {{-- <form action="{{ route('category.status', $category->id) }}" method="POST">
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
                                    </form> --}}
                                </td>
                            </tr>

                            @empty
                            <tr>
                                <td class="text-danger text-center" colspan="3"><b>No Data Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $tags->links() }}
            </div>
        </div>
    </div>

    <div class="col-5">
        <div class="card">
            <div class="card-header">
                Tags Insert
            </div>
            <div class="card-body">
                <form action="{{ route('tag.insert') }}" method="POST">
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
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
