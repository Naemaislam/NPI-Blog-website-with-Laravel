@extends('layouts.dashboard_master')

@section('content')
<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Product Create Page</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="card">
        <div class="card-header">
            Product Inserting
        </div>
        <div class="card-body">
            <form action="{{ route('shop.edit',$shops->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <img src="{{ asset('uploads/shop') }}/{{ $shops->image }}" alt="" style="width: 150px;height:150px">
                </div>
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
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $shops->title }}">
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Rate </label>
                    <input type="text" class="form-control @error('rate') is-invalid @enderror" name="rate" value="{{ $shops->rate }}">
                    {{-- <select name="category_id" class="form-control">
                    <option >Select a rate</option>
                  @foreach ($categories as $category)
                     <option value="{{ $category->id }}"
                     @if ($blog->category_id == $category->id)
                         selected
                     @endif

                        >{{ $category->title }}</option>
                  @endforeach
                </select> --}}
                    @error('rate')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Price </label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $shops->price }}">
                    @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Date </label>
                    <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ $shops->date }}">
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


@endsection
{{--
@section('footer_script')
<script>
    $(document).ready(function() {
  $('#summernote2').summernote();
});
</script>

@endsection --}}
