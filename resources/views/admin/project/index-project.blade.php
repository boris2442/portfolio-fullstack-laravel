@extends('layouts.admin.layout-admin')
@section('title', 'index project dashboard')
@section('content')
<main>

    <!--==================== PROJECTS ====================-->
    <section class="projects" id="projects">
        <div class="titlebar">
            <h1>Projects </h1>
            <button class="btn__open--modal">New Project</button>
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

            <div class="project_table-heading">
                <p>Image</p>
                <p>Title</p>
                <p>Description</p>
                <p>Link</p>
                <p>Actions</p>
            </div>
            <!-- item 1 -->
            @foreach($projects as $project)
            <div class="project_table-items">
                <p>

                    <img src="{{  $project->image ? asset($project->image) : asset('template/assets/img/avatar.jpg') }}"
                        alt="image de {{$project->name}}" class="project_img-list object-cover">
                </p>
                <p>{{$project->title}}</p>
                <p>{{$project->description}}</p>
                <p>{{$project->link}}</p>
                <div>
                    <a href="{{ route('project.update', $project->id) }}" class="btn-icon success">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <form action="{{ route('project.destroy', $project->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn-icon danger"
                            onClick="return confirm('Are you sure you want to delete this project?')">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
            <div class="">{{$projects->links()}}</div>

        </div>
    </section>
    <!--===================ADD PROJECT ====================-->
    <section class="about" id="project">
        <form action="{{ route('project.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            @if(session()->has('success'))
            <div class="bg-green-400 text-white p-2">
                {{ session('success') }}
            </div>
            @endif

            @if(session()->has('error'))
            <div class="bg-red-400 text-white p-2">
                {{ session('error') }}
            </div>
            @endif

            <div class="titlebar">
                <h1>Create Project </h1>
                {{-- <button>Save Project</button> --}}
            </div>
            <div class="card-wrapper">
                <div class="wrapper_left">
                    <div class="card">
                        <label>Title</label>
                        <input type="text" name="title" value="{{ old('title') }}" />
                        @error('title')
                        <div class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </div>
                        @enderror

                        <label>Description</label>
                        <textarea cols="10" rows="5" name="description"></textarea>
                        @error('description')
                        <div class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </div>
                        @enderror
                        <label>Link</label>
                        <input type="text" name="link" value="{{ old('link') }}" />
                         @error('link')
                        <div class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="wrapper_right">
                    <div class="card">
                        <img src="{{ asset('template/assets/img/no-image.png') }}" alt="" class="project_img">
                        <input type="file" name="image" value="{{ old('image') }}">
                    </div>
                </div>

            </div>
            <div class="titlebar">
                <h1></h1>
                <button type="submit">Saved Project</button>
            </div>
        </form>
    </section>
    <!--===================EDIT PROJECT ====================-->
    <section class="about" id="project">
        <form action="{{ route('project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="titlebar">
                <h1>Edit Project </h1>
                {{-- <button>Update Project</button> --}}
            </div>
            <div class="card-wrapper">
                <div class="wrapper_left">
                    <div class="card">

                        <label>Title</label>
                        <input type="text" class="input" name="title" value="{{ $project->title }}" />
                        @error('title')
                        <div class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </div>
                        @enderror

                        <label>Description</label>
                        <textarea cols="10" rows="5" name="description">{{ $project->description }}</textarea>
                        @error('description')
                        <div class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </div>
                        @enderror

                        <label>Link</label>
                        <input type="text" class="input" name="link" value="{{ $project->link }}" />
                        @error('link')
                        <div class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>
                </div>

                <div class="wrapper_right ">
                    <div class="card">
                        <img src="{{ asset('template/assets/img/no-image.png') }}" alt="" class="project_img">
                        <input type="file" name="image">
                        @error('image')
                        <div class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="titlebar">
                <h1></h1>
                <button>Update Project</button>

            </div>
        </form>
    </section><br><br><br>
    </div>
</main>
<script src="{{asset('template/assets/js/admin.js')}}"></script>
@endsection