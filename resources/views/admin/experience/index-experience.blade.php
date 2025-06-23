@extends('layouts.admin.layout-admin');
@section('title', 'index experience dashboard')
@section('content')

<main>

    <!--==================== EXPERIENCES ====================-->
    <section class="experiences" id="experiences">
        <div class="titlebar">
            <h1>Experiences </h1>
            <button class="open-modal">New Experience</button>
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
                        <option value="">Filter Experience</option>
                    </select>
                </div>
                <div class="relative">
                    <input class="search-input" type="text" name="search" placeholder="Search Experience...">
                </div>
            </div>
            <div class="experience_table-heading">
                <p>Company</p>
                <p>Period</p>
                <p>Position</p>
                <p>Actions</p>
            </div>
            <!-- item 1 -->
            {{-- <div class="experience_table-items"> --}}
                @foreach ($experiences as $experience)</p>
                <div class="experience_table-items">
                    <p>{{ $experience->company }}</p>
                    <p>{{ $experience->period }}</p>
                    <p>{{ $experience->position }}</p>
                    <div>
                        <button class="btn-icon success">
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                        <form action="{{ route('experience.destroy', $experience->id) }}" method="POST"
                            class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-icon danger" onclick="return confirm('Are you sure you want to delete this experience?');">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
                // {{-- <div class="experience_table-items">
                    // <p>Backend Developer</p>
                    // <p>Backend Developer</p>
                    // <p>Backend Developer</p>
                    // <div>
                        // <button class="btn-icon success">
                            // <i class="fas fa-pencil-alt"></i>
                            // </button>
                        // <button class="btn-icon danger">
                            // <i class="far fa-trash-alt"></i>
                            // </button>
                        // </div>
                    // </div> --}}

            </div>

            <!-------------- EXPERIENCE MODAL --------------->
            <div class="modal">
                <div class="modal-content">
                    <form action="{{ route('experience.store') }}" method="POST">
                        @csrf
                        <h2>Create Experience</h2>
                        <span class="close-modal">×</span>
                        <hr>
                        <div>
                            <p>Company</p>
                            <input type="text" name="company" value="{{ @old('company') }}" />
                            @if ($errors->has('company'))
                            <span class="text-danger">{{ $errors->first('company') }}</span>
                            @endif
                            <p>Period</p>
                            <input type="text" name="period" value="{{ @old('period') }}" />
                            @if ($errors->has('period'))
                            <span class="text-danger">{{ $errors->first('period') }}</span>
                            @endif
                            <p>Position</p>
                            <input type="text" name="position" value="{{ @old('position') }}" />
                            @if ($errors->has('position'))
                            <span class="text-danger">{{ $errors->first('position') }}</span>
                            @endif
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <button class="close-modal">Cancel</button>
                            <button class="secondary close-modal">
                                <span><i class="fa fa-spinner fa-spin"></i></span>Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
    </section>

</main>
<script src="asset('template/assets/js/admin.js')"></script>
@endsection