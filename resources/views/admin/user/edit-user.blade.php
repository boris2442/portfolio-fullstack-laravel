@extends('layouts.admin.layout-admin')
@section('title', 'index user dashboard')
@section('content')
<main>

    <!--==================== USERS ====================-->
    <section class="users" id="users">
        {{-- <div class="titlebar">
            <h1>Users </h1>
            <button class="open-modal">New User</button>
        </div> --}}
        @if(session()->has('success'))
        <div class="bg-green-400 text-white p-2 rounded">
            {{ session('success') }}
        </div>
        @endif

        @if(session()->has('error'))
        <div class="bg-red-400 text-white p-2 rounded">
            {{ session('error') }}
        </div>
        @endif



    </section>
  
    <div class="">
        <form action="{{route('user.update', $user->id)}}" method="POST" enctype="multipart/form-data" class="modal-form ml-20"
            id="form-user" autocomplete="off">
            @csrf
            @method('PATCH')
            <div class="modal-content">
                <h2>Update User</h2>
                {{-- <span class="close-modal">×</span> --}}
                <hr>
                <div>
                    <label>Name</label>
                    <input type="text" name="name" value="{{ $user->name }}" />
                    @error('email')
                    <span class="text-red-400">{{$name}}</span>
                    @enderror

                    <label>Email</label>
                    <input type="text" name="email"  value="{{$user->email}}" />
                    @error('email')
                    <span class="text-red-400">{{$message}}</span>
                    @enderror
                    <label>image</label>
                    <input type="file" name="image" />
                    @error('image')
                    <span class="text-red-400">{{$message}}</span>
                    @enderror

                    <label>Biographie</label>
                  <textarea name="biographie" cols="20" rows="3">{!! $user->biographie !!}</textarea>

               

                    @error('email')
                    <span class="text-red-400">{{$biographie}}</span>
                    @enderror
                    <p>Type</p>
                    <select name="role" id="">
                        <option disabled>Select Role</option>
                        <option value="admin">Admin</option>
                        <option value="user">Standard User</option>
                    </select>

                    {{-- <label>Password</label> --}}
                    {{-- <input type="password" id="password" name="password" value="{{$user->password}}"> --}}
                </div>
                <hr>
                <div class="modal-footer">
                    <button class="close-modal">
                        Cancel
                    </button>
                    <button class="secondary close-modal">
                        <span><i class="fa fa-spinner fa-spin"></i></span>
                        Update
                    </button>
                </div>
            </div>
        </form>
    </div>
    </div>
</main>
<script src="{{asset('template/assets/js/admin.js')}}"></script>
@endsection