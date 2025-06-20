@extends('layouts.admin.layout-admin')
@section('content')
    <main>

        <!--==================== SERVICES ====================-->
        <section class="services" id="services">

            <div class="titlebar">
                <h1>Services</h1>

                <button class="open-modal">New Service</button>
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
                <form action="{{ route('service.index') }}" method="get">
                    <div class="table-search">
                        <div>
                            <select class="search-select " name="" id="">
                                <option value="">Filter Service</option>
                            </select>
                        </div>
                        <div class="flex gap-5 ml-2 relative">

                            <input class="" type="text" name="name"
                                placeholder="Rechercher le titre de service..." value="">
                            <button class="min-w-30 h-12 ">Recherche</button>
                            <a href="{{ route('service.index') }}">
                                <button class="min-w-30 h-12">Réinitialiser</button>
                            </a>
                        </div>

                    </div>
                </form>
                <div class="service_table-heading">
                    <p>Title</p>
                    <p>Icon</p>
                    <p>Description</p>
                    <p>Actions</p>
                </div>
                <!-- item 1 -->
                @foreach ($services as $service)
                    <div class="service_table-items">
                        <p>{{ $service->title }}</p>
                        <button class="service_table-icon">
                            <i class="{{ $service->icon }}"></i>
                        </button>
                        <p>{{ $service->description }}
                        </p>
                        <div>
                            {{-- <button class="btn-icon success">
                            <i class="fas fa-pencil-alt"></i>
                        </button> --}}
                            <form method='post' action="{{ route('destroy.service', $service->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="danger" type="submit"
                                    onClick="return confirm('Are you sure you to delete this services?')"> <i
                                        class=" far fa-trash-alt"></i>
                                </button>
                            </form>
                            <button class="btn-icon danger">
                                <i class="fas fa-pencil-alt  "></i>
                            </button>
                        </div>
                    </div>
                @endforeach


            </div>

            <!-------------- SERVICES MODAL --------------->
            <div class="modal ">
                <div class="modal-content">
                    <form method='post' action={{ route('service.store') }}>
                        @csrf
                        <h2>Create Service</h2>
                        <span class="close-modal">×</span>
                        <hr>
                        <div>
                            <label>Service Name</label>
                            <input type="text" name='title' value="{{ old('title') }}" />
                            @error('title')
                                <span class='text-red-500'>{{ $message }}</span>
                            @enderror
                            <label>Icon Class <span style="color:#006fbb;">(Find your suitable icon: Font
                                    Awesome)</span></label>

                            <input type="text" name='icon' value="{{ old('icon') }}" />
                            @error('icon')
                                <span class='text-red-500'>{{ $message }}</span>
                            @enderror()

                            <label>Description</label>
                            <textarea cols="10" rows="5" name='description'>{{ old('description') }}</textarea>
                            @error('description')
                                <span class='text-red-500'>{{ $message }}</span>
                            @enderror()
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <button class="close-modal">
                                Cancel
                            </button>
                            <button class="secondary close-modal" type='submit'>
                                <span><i class="fa fa-spinner fa-spin"></i></span>
                                Save
                            </button>
                        </div>
                    </form>
                </div>

            </div>
            </div>

            <div class="main-modal " :class="showModal ? 'show' : ''">
                <div class="modal">
                    <h2>
                        <span v-if="editMode">Edit </span>
                        <span v-else>Create </span> Service
                    </h2>
                    <span {{-- @click="closeModal" --}}>×</span>
                    <hr>
                    <div>
                        <label>Service Name</label>
                        <small style="color: red" v-if="errors.name"><span>
                                {{-- {{errors.name}} --}}
                            </span></small>
                        <input type="text" v-model="form.name" />

                        <label>Icon Class <span style="color:#006fbb;">(Find your suitable icon: Font
                                Awesome)</span></label>
                        <small style="color: red" v-if="errors.icon"><span>
                                {{-- {{errors.icon}} --}}
                            </span></small>
                        <input type="text" v-model="form.icon" />

                        <label>Description</label>
                        <small style="color: red" v-if="errors.description"><span>
                                {{-- {{errors.description}} --}}
                            </span></small>
                        <textarea cols="10" rows="5" v-model="form.description"></textarea>
                    </div>
                    <hr>
                    <div class="modal-footer">
                        <button {{-- @click="closeModal" --}}>Cancel</button>
                        <button class="secondary" {{-- @click="handleSave" --}}>
                            <span><i class="fa fa-spinner fa-spin" aria-hidden="true" v-if="isSubmit"></i></span>
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <script src="{{ asset('template/assets/js/admin.js') }}"></script>
@endsection
