@extends('layouts.dashboard_master')

@section('content')

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Role Management</h1>
        </div>
    </div>
</div>

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-header">
         Modarators List
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    @if (auth()->user()->role == 'admin')
                    <th scope="col">Handle</th>
                    @endif
                  </tr>
                </thead>
                <tbody>
                    @foreach ($modarate_users as $user)
                  <tr>
                    <th scope="row">{{ $loop->index+1  }}</th>
                    <td>{{ $user->name}}</td>
                    <td>{{ $user->email}}</td>
                    <td>
                        <span class="badge bg-primary">{{ $user->role}}</span>
                    </td>
                   @if (auth()->user()->role == 'admin')
                     <td>
                         <a class="btn btn-danger btn-sm">Delete</a>
                     </td>


                   @endif
                  </tr>
                   @endforeach
                </tbody>
              </table>
        </div>
    </div>
 @if (auth()->user()->role == 'admin')
       <div class="col-8">
           <div class="card">
               <div class="card-header">
                   New Modarator assign
               </div>
               <div class="card-body">
                   <form action="{{ route('role.assign')}}" method="POST">
                       @csrf
                       <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">Username</label>
                         <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                         @error('name')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror
                       </div>
                       <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Email address</label>
                           <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                           @error('email')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                         </div>
                       <div class="mb-3">
                         <label for="exampleInputPassword1" class="form-label">Password</label>
                         <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                         @error('password')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror
                       </div>
                       <div class="mb-3">
                           <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                           <input type="password" class="form-control" name="password_confirmation">
                         </div>

                       <button type="submit" class="btn btn-primary">Submit</button>
                     </form>
               </div>
           </div>
       </div>
   @else
   <div class="col-8">
    <div class="card">
        <div class="card-header">
         All User List
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($specific_users as $user)
                  <tr>
                    <th scope="row">{{ $loop->index+1  }}</th>
                    <td>{{ $user->name}}</td>
                    <td>{{ $user->email}}</td>
                    <td>
                        <span class="badge bg-primary">{{ $user->role}}</span>
                    </td>
                  </tr>
                   @endforeach
                </tbody>
              </table>
        </div>
    </div>
 @if (auth()->user()->role == 'admin')
       <div class="col-8">
           <div class="card">
               <div class="card-header">
                   New Modarator assign
               </div>
               <div class="card-body">
                   <form action="{{ route('role.assign')}}" method="POST">
                       @csrf
                       <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">Username</label>
                         <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                         @error('name')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror
                       </div>
                       <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Email address</label>
                           <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                           @error('email')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                         </div>
                       <div class="mb-3">
                         <label for="exampleInputPassword1" class="form-label">Password</label>
                         <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                         @error('password')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror
                       </div>
                       <div class="mb-3">
                           <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                           <input type="password" class="form-control" name="password_confirmation">
                         </div>

                       <button type="submit" class="btn btn-primary">Submit</button>
                     </form>
               </div>
           </div>
       </div>
   </div>
 @endif
</div>


 @endif
</div>




@if (auth()->user()->role == 'admin')
    <div class="row">
     <div class="col-6">
      <div class="card">
        <div class="card-header">Role Assign</div>
        <div class="card-body">
        <form action="{{ route('role.all.assign')}}" method="POST">
          @csrf
          <div class="mb-3">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Users</label>

             <select  class="form-control" name="user_id" >
          @foreach ($specific_users as $user)
                <option value="{{ $user->id}}">{{ $user->name}}</option>
          @endforeach
             </select>
            </div>
              <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Role assign</label>

             <select  class="form-control" name="role_name" >
              <option value="modarator">Modarator</option>
              <option value="author">Author</option>
              <option value="member">Member</option>
              <option value="visitor">Visitor</option>
             </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        </div>
      </div>
     </div>
    </div>
    @else

@endif

@endsection

@section('footer_script')

@if (session('new_modarator'))

<script>
    Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: {{ session('new_modarator')}},
  showConfirmButton: false,
  timer: 10000,
})
</script>

@endif

@endsection
