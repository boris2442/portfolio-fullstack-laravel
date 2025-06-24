@extends('layouts.admin.layout-admin')
@section('title', 'index testimonials dashboard')
@section('content')
<main>

    <!--==================== PROJECTS ====================-->
    <section class="testimonials" id="projects">
        <div class="titlebar">
            <h1>Testimonials </h1>
            <button class="btn__open--modal">New Testimonial</button>
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
                        <option value="">Filter Project</option>
                    </select>
                </div>
                <div class="relative">
                    <input class="search-input" type="text" name="search" placeholder="Search Project...">
                </div>
            </div>

            <div class="testimonial_table-heading">
                <p>Photo</p>
                <p>name</p>
                <p>Function</p>
                <p>Testimony</p>
                <p>Rating</p>
                <p>Actions</p>
            </div>
            <!-- item 1 -->
            <div class="testimonial_table-items">
                <p>
                    <img src="../../template/assets/img/avatar.jpg" alt="" class="testimonial_img-list">
                </p>
                <p>Backend Developer</p>
                <p>Backend Developer</p>
                <p>Backend Developer</p>
                <p>5/5</p>
                <div>
                    <button class="btn-icon success">
                        <i class="fas fa-pencil-alt"></i>
                    </button>
                    <button class="btn-icon danger">
                        <i class="far fa-trash-alt"></i>
                    </button>
                </div>
            </div>
            <div class="table-paginate">
                <div class="pagination">
                    <a href="#" class="btn">&laquo;</a>
                    <a href="#" class="btn active">1</a>
                    <a href="#" class="btn">2</a>
                    <a href="#" class="btn">3</a>
                    <a href="#" class="btn">&raquo;</a>
                </div>
            </div>
        </div>
    </section>
    <!--===================ADD testimonials ====================-->
    <section class="about">

        <div class="titlebar">
            <h1>Create Testimonial </h1>
            {{-- <button>Save Testimonial</button> --}}
        </div>
        <form action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-wrapper">
                <div class="wrapper_left">
                    <div class="card">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" />
                        @error('name')
                        <div class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </div>
                        @enderror

                        <label>Function</label>
                        <input type="text" name="function" value="{{ old('function') }}" />
                        @error('function')
                        <div class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </div>
                        @enderror

                        <label>Testimony</label>
                        <textarea cols="10" rows="5" name="testimony">{{ old('testimony') }}</textarea>
                        @error('testimony')
                        <div class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="wrapper_right">
                    <div class="card">
                        <img src="{{ asset('template/assets/img/avatar.jpg') }}" class="avatar_img">
                        <input type="file" id="fileimg" name="image">
                    </div>
                </div>

            </div>
            <div class="titlebar">
                <h1></h1>
                <button type="submit">Save Testimonial</button>
            </div>
        </form>
    </section>
    <!--===================EDIT Testimonial ====================-->
    @include('admin.testimonial.edit-testimonial')

</main>
<script src="{{asset('template/assets/js/admin.js')}}"></script>
@endsection