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
                        <p>Actions</p>
                    </div>
                    <!-- item 1 -->
                    <div class="user_table-items">
                        <p>
                            <img src="../../template/assets/img/avatar.jpg" alt="" class="user_img-list">
                        </p>
                        <p>Backend Developer</p>
                        <p>Backend Developer</p>
                        <div>
                            <button class="btn success">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            <button class="btn danger" >
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </section>
            <!-------------- USER MODAL --------------->
            <div class="modal " >
                <div class="modal-content">
                    <h2>Create User</h2>
                    <span class="close-modal">×</span>
                    <hr>
                    <div>
                        <label>Name</label>
                        <input type="text" />

                        <label>Email</label>
                        <input type="text" />
                        
                        <label>Bio</label>
                        <textarea cols="20" rows="3"></textarea>
                       
                        <p>Type</p>
                        <select name="" id="">
                            <option disabled>Select Role</option>
                            <option value="admin">Admin</option>
                            <option value="user">Standard User</option>
                        </select>

                        <label>Password</label>
                        <input  type="password" id="password" >
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
            </div>
        </div>
    </main>
    <script src="{{asset('template/assets/js/admin.js')}}"></script>
@endsection