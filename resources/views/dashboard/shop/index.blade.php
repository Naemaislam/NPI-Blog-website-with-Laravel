@extends('layouts.dashboard_master')

@section('content')
<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Shop</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="card">
        <div class="card-header">
            Product list
        </div>
        <div class="card-body">
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                   @if (auth()->user()->role == 'admin')
                     <th scope="col">Featured</th>
                   @endif
                  </tr>
                </thead>
                <tbody>
                    @if (auth()->user()->role == 'admin')
                    @forelse ($products as $shop)
                    <tr>
                      <th scope="row">{{ $loop->index+1 }}</th>
                      <td>
                        <img src="{{ asset('uploads/shop') }}/{{ $shop->image }}" style="width: 80px; height:80px;">
                      </td>
                      <td>{{ $shop->title }}</td>
                      <td>{{ $shop->rate }}</td>
                      <td>{{ $shop->price }}</td>
                      {{-- <td>{{ $blog->RelationwithUser->name }}</td>
                      <td>{{ $blog->RelationwithCategory->title }}</td> --}}
                      <td>
                        <a href="{{ route('shop.edit.show',$shop->id)  }}" class="btn btn-primary">Edit</a>
                      </td>

                      @if (auth()->user()->role == 'admin')
                        <td>
                          @if ($shop->feature == 'active')
                          <a href="{{ route('shop.feature.button',$shop->id)  }}" class="btn btn-success">Featured</a>
                        @else
                          <a href="{{ route('shop.feature.button',$shop->id)  }}" class="btn btn-danger">Featured</a>
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

                    @forelse ($shops as $shop)
                      <tr>
                        <th scope="row">{{ $loop->index+1 }}</th>
                        <td>
                          <img src="{{ asset('uploads/product') }}/{{ $shop->image }}" style="width: 80px; height:80px;">
                        </td>
                        <td>{{ $shop->title }}</td>
                        {{-- <td>{{ $blog->RelationwithUser->name }}</td>
                        <td>{{ $blog->RelationwithCategory->title }}</td> --}}
                        <td>
                          <a href="{{ route('shop.edit.show',$shop->id)  }}" class="btn btn-primary">Edit</a>
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
