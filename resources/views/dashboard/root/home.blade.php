@extends('layouts.dashboard_master')


@section('content')

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Dashboard</h1>
        </div>
    </div>
</div>

@if (auth()->user()->role =='admin')
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    Author Request Approve
                </div>
                <div class="card-body">
                    <table class="table table-success">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Request Send Time</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                       @foreach ($author_request as $req)
                  @if ($req->approve_status == false)
                         <tr>
                          <th scope="row">{{ $req->id}}</th>
                          <td>{{ $req->name}}</td>
                          <td>{{ $req->email}}</td>
                          <td>{{ \Carbon\Carbon::parse($req->created_at)->diffForHumans();}}</td>
                          <td>
                            <a href="{{ route('home.accept.author',$req->id)}}" class="badge bg-success">Accept</a>
                            <a href="{{ route('home.reject.author',$req->id)}}" class="badge bg-danger">Reject</a>
                          </td>
                        </tr>

                  @endif
                       @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>

    {{-- block --}}

    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    Author Block List
                </div>
                <div class="card-body">
                    <table class="table table-success">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            {{-- <th scope="col">Request Send Time</th> --}}
                            <th scope="col">Block Status</th>
                          </tr>
                        </thead>
                        <tbody>
                       @foreach ($author_request as $req)
                  @if ($req->approve_status == true)
                         <tr>
                          <th scope="row">{{ $req->id}}</th>
                          <td>{{ $req->name}}</td>
                          <td>{{ $req->email}}</td>

                          <td>
                            <a href="{{ route('home.block.author',$req->id)}}" class="badge bg-info">Block</a>

                          </td>
                        </tr>

                  @endif
                       @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>

@endif
@endsection
