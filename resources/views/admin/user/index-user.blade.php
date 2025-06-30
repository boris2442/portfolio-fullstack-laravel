@extends('layouts.admin.layout-admin')
@section('title', 'index user dashboard')
@section('content')
<main>

    <!--==================== USERS ====================-->
    <section class="users" id="users">
        <div class="titlebar">
            <h1>Users </h1>
            <button class="open-modal">New User</button>
        </div>
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


        <div class="table">

            <div class="table-filter">
                <div>
                    <ul class="table-filter-list">
                        <li>
                            <p class="table-filter-link link-active">All</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="table-search">
                <div>
                    <select class="search-select" name="" id="">
                        <option value="">Filter User</option>
                    </select>
                </div>
                <div class="relative">
                    <input class="search-input" type="text" name="search" placeholder="Search User...">
                </div>
            </div>

            <div class="user_table-heading">
                <p>Photo</p>
                <p>Name</p>
                <p>Role</p>
                <p>description</p>
                <p>Actions</p>
            </div>
            <!-- item 1 -->
            @foreach($users as $user)
            <div class="user_table-items">
                <p>
                    <img src="{{ $user->image ? asset('images/users/' . $user->image) : asset('template/assets/img/avatar.jpg') }}"
                        alt="image de {{ $user->name }}" class="user_img-list">
                </p>
                <p>{{$user->name}}</p>
                <p>{{$user->role}}</p>
                <p>{{$user->biographie}}</p>
                <div>
                    <button class="btn success">
                        <i class="fas fa-pencil-alt"></i>
                    </button>
                    {{-- --}}
                    <form action="{{route('user.destroy', $user->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn danger" onClick="return confirm('are you sure to delete this user!?')">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </form>

                </div>
            </div>

        </div>
        @endforeach
    </section>
    <!-------------- USER MODAL --------------->
    <div class="modal ">
        <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data" class="modal-form"
            id="form-user" autocomplete="off">
            @csrf
            <div class="modal-content">
                <h2>Create User</h2>
                <span class="close-modal">×</span>
                <hr>
                <div>
                    <label>Name</label>
                    <input type="text" name="name" />
                    @error('email')
                    <span class="text-red-400">{{$name}}</span>
                    @enderror

                    <label>Email</label>
                    <input type="text" name="email" />
                    @error('email')
                    <span class="text-red-400">{{$message}}</span>
                    @enderror
                    <label>image</label>
                    <input type="file" name="image" />
                    @error('image')
                    <span class="text-red-400">{{$message}}</span>
                    @enderror

                    <label>Biographie</label>
                    <textarea cols="20" rows="3" name="biographie"></textarea>
                    @error('email')
                    <span class="text-red-400">{{$biographie}}</span>
                    @enderror
                    <p>Type</p>
                    <select name="role" id="">
                        <option disabled>Select Role</option>
                        <option value="admin">Admin</option>
                        <option value="user">Standard User</option>
                    </select>

                    <label>Password</label>
                    <input type="password" id="password" name="password">
                </div>
                <hr>
                <div class="modal-footer">
                    <button class="close-modal">
                        Cancel
                    </button>
                    <button class="secondary close-modal">
                        <span><i class="fa fa-spinner fa-spin"></i></span>
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
    </div>
</main>
<script src="{{asset('template/assets/js/admin.js')}}"></script>
@endsection