@extends('layouts.dashboard_master')

@section('content')
<div class="row">

    <div class="col">
        <div class="page-description">
            <h1>Banners Create Page</h1>
        </div>
    </div>
</div>


{{-- @if (auth()->user()->role =='admin' || auth()->user()->role =='author')
    @if (auth()->user()->approve_status == 1) --}}
        <div class="row">
            <div class="card">
                <div class="card-header">
                    Banners Inserting
                </div>
                <div class="card-body">
                    <form action="{{ route('banner.create')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Image </label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
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
                            <label for="exampleInputEmail1" class="form-label">Category Names </label>
                            {{-- <input type="text" class="form-control @error('category') is-invalid @enderror" name="category"> --}}
                            <select name="category_id" class="form-control">
                            <option >Select a category</option>
                          @foreach ($categories as $category)
                             <option value="{{ $category->id }}" >{{ $category->title }}</option>
                          @endforeach
                        </select>
                            @error('category')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tags </label>
                            @foreach ($tags as $tag)
                            <br>
                                <input type="checkbox" id="tag_check{{ $tag->id}}" name="tag_id[]" value="{{ $tag->id}}">
                                <label for="tag_check{{ $tag->id}}" class="form-label">{{ $tag->title}}</label>
                                @endforeach
                        </div> --}}

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Description </label>
                            {{-- <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"> --}}
                           <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="6" id="summernote"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Date </label>
                            <input type="date" class="form-control @error('date') is-invalid @enderror" name="date">
                            @error('date')
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
    {{-- @endif
@endif --}}


@endsection

@section('footer_script')
<script>
    $(document).ready(function() {
  $('#summernote').summernote();
});
</script>

@endsection
