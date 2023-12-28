@extends('layouts.dashboard_master')

@section('content')
<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Blogs</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="card">
        <div class="card-header">
            Blogs List
        </div>
        <div class="card-body">
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Action</th>
                   @if (auth()->user()->role == 'admin')
                     <th scope="col">Featured</th>
                   @endif
                  </tr>
                </thead>
                <tbody>
                    @if (auth()->user()->role == 'admin')
                    @forelse ($admin_blogs as $blog)
                    <tr>
                      <th scope="row">{{ $loop->index+1 }}</th>
                      <td>
                        <img src="{{ asset('uploads/blog') }}/{{ $blog->image }}" style="width: 80px; height:80px;">
                      </td>
                      <td>{{ $blog->title }}</td>
                      <td>{{ $blog->RelationwithUser->name }}</td>
                      <td>{{ $blog->RelationwithCategory->title }}</td>
                      <td>
                        <a href="{{ route('blog.edit.show',$blog->id)  }}" class="btn btn-primary">Edit</a>
                      </td>

                      @if (auth()->user()->role == 'admin')
                        <td>
                          @if ($blog->feature == 'active')
                          <a href="{{ route('blog.feature.button',$blog->id)  }}" class="btn btn-success">Featured</a>
                        @else
                          <a href="{{ route('blog.feature.button',$blog->id)  }}" class="btn btn-danger">Featured</a>
                        @endif
                      </td>
                      @else

                      @endif
                    </tr>
                    @empty
                    <tr>
                        <td class="text-danger text-center" colspan="5">No Date Found</td>
                    </tr>
                  @endforelse

                    @else

                    @forelse ($blogs as $blog)
                      <tr>
                        <th scope="row">{{ $loop->index+1 }}</th>
                        <td>
                          <img src="{{ asset('uploads/blog') }}/{{ $blog->image }}" style="width: 80px; height:80px;">
                        </td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->RelationwithUser->name }}</td>
                        <td>{{ $blog->RelationwithCategory->title }}</td>
                        <td>
                          <a href="{{ route('blog.edit.show',$blog->id)  }}" class="btn btn-primary">Edit</a>
                        </td>
                      </tr>
                      @empty
                      <tr>
                          <td class="text-danger text-center" colspan="5">No Date Found</td>
                      </tr>
                    @endforelse

                    @endif
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection
