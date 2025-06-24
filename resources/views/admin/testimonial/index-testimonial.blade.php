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
            @foreach($testimonials as $testimonial)
            <div class="testimonial_table-items">
                <p>
                    <img src="{{  $testimonial->image ? asset($testimonial->image) : asset('template/assets/img/avatar.jpg') }}"
                        alt="image de {{$testimonial->name}}">
                </p>
                <p>{{$testimonial->name}}</p>
                <p>{{$testimonial->function}}</p>
                <p>{{$testimonial->testimony}}</p>
                <p>5/5</p>
                <div>
                    <a href="{{ route('testimonial.update', $testimonial->id) }}" class="btn-icon success">
                        <i class="fas fa-pencil-alt"></i>
                    </a>

                    <form action="{{ route('testimonial.destroy', $testimonial->id) }}" method="POST"
                        class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn-icon danger"
                            onClick="return confirm('Are you sure you want to delete this testimonial?')">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </form>
                </div>
            </div>
            @endforeach

            <div class="">{{$testimonials->links()}}</div>
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
                        <input type="file" id="fileimg" name="image" value="{{ old('image') }}" />

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
    {{-- @include('admin.testimonial.edit-testimonial') --}}

    <!--===================EDIT Testimonial ====================-->
    <section class="about">
        <form action="{{ route('testimonial.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="titlebar">
                <h1>Edit Testimonial </h1>
                <button>Update Testimonial</button>
            </div>
            <div class="card-wrapper">
                <div class="wrapper_left">
                    <div class="card">

                        <label>Name</label>
                        <input type="text" name="name" value="{{ $testimonial->name }}" />

                        <label>Function</label>
                        <input type="text" name="function" value="{{$testimonial->function  }}" />

                        <label>Testimony</label>
                        <textarea cols="10" rows="5" name="testimony">{{$testimonial->testimony  }}</textarea>

                    </div>
                </div>

                <div class="wrapper_right">
                    <div class="card">
                        <label>Image</label>
                        <img src="asset('template/assets/img/avatar.jpg')" alt="" class="project_img">
                        <input type="file" name="image" value="{{$testimonial->image}}" />

                        <br><br><br>
                    </div>
                </div>

            </div>
        </form>
        {{-- <div class="titlebar">
            <h1></h1>
            <button>Update Testimonial</button>
        </div> --}}
    </section><br><br><br>

</main>
<script src="{{asset('template/assets/js/admin.js')}}"></script>
@endsection