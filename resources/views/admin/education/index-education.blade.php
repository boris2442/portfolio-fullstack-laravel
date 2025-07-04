@extends('layouts.admin.layout-admin')
@section('title', 'index education dashboard')
@section('content')
    <main class=''>

        <!--==================== EDUCATIONS ====================-->
        <section class="educations w-full " id="educations">
            <div class="titlebar">
                <h1>Educations </h1>
                <button class="open-modal">New Education</button>
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
                <form action="{{ route('education.index') }}" method="get">
                    @csrf

                    <div class="table-search">
                        <div>
                            <select class="search-select " name="title" id="">
                                <option value="">Filter Education</option>
                            </select>
                        </div>
                        <div class="flex gap-5 ml-2 relative">

                            <input class="" type="text" name="institution"
                                placeholder="Rechercher le titre de l'institution..." value="{{ Request::get('institution') }}">
                            <button class="min-w-30 h-12 ">Recherche</button>
                            <a href="">
                                <button class="min-w-30 h-12 delete">Réinitialiser</button>
                            </a>
                        </div>
                        
                    </div>
                </form>
                <div class="education_table-heading">
                    <p>Institution</p>
                    <p>Period</p>
                    <p>Degree</p>
                    <p>Department</p>
                    <p>Actions</p>
                </div>
                <!-- item 1 -->
                @foreach ($educations as $education)
                    <div class="education_table-items">
                        <p>{{ $education->institution }}</p>
                        <p>{{ $education->period }}</p>
                        <p>{{ $education->degree }}</p>
                        <p>{{ $education->departement }}</p>
                        <div class='flex items-center'>
                            <button class="btn-icon success">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            {{-- <button class="btn-icon danger" >
                                <i class="far fa-trash-alt"></i>
                            </button> --}}
                            <form method='post' action="{{ route('education.destroy', ['id' => $education->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button class="danger p-2 h-[30px] w-[30px] rounded-full " type="submit"
                                    onClick="return confirm('Are you sure you to delete this product?')"> <i
                                        class="far fa-trash-alt justify-center items-center flex"></i></button>
                            </form>
                        </div>
                    </div>
                @endforeach
                {{ $educations->links() }}

            </div>
            <!-------------- EDUCATION MODAL --------------->
            <div class="modal">
                <form method='POST' action="{{ route('education.store') }}">
                    @csrf
                    <div class="modal-content">
                        <h2>Create Education</h2>
                        <span class="close-modal">×</span>
                        <hr>
                        <div>
                            <label>Institution</label>
                            <input type="text" name="institution" />

                            <label>Period</label>
                            <input type="text" name="period" />

                            <label>Degree</label>
                            <input type="text" name="degree" />

                            <label>Department</label>
                            <input type="text" name="departement" />
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
        </section>

    </main>
    <script src="{{ asset('template/assets/js/admin.js') }}"></script>
@endsection
