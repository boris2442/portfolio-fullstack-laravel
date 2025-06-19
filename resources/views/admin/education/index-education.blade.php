@extends('layouts.admin.layout-admin')
@section('content')
  <main>
        
             <!--==================== EDUCATIONS ====================-->
             <section class="educations" id="educations">
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
                    <div class="table-search">
                        <div>
                            <select class="search-select" name="" id="">
                                <option value="">Filter Service</option>
                            </select>
                        </div>
                        <div class="relative">
                            <input class="search-input" type="text" name="search" placeholder="Search Service...">
                        </div>
                    </div>
        
                    <div class="education_table-heading">
                        <p>Institution</p> 
                        <p>Period</p>
                        <p>Degree</p>
                        <p>Department</p>
                        <p>Actions</p>
                    </div>
                    <!-- item 1 -->
                    <div class="education_table-items">
                        <p>Backend Developer</p>
                        <p>Backend Developer</p>
                        <p>Backend Developer</p>
                        <p>Backend Developer</p>
                        <div>
                            <button class="btn-icon success">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            <button class="btn-icon danger" >
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>

                </div>
                <!-------------- EDUCATION MODAL --------------->
                <div class="modal" >
                    <div class="modal-content">
                        <h2>Create Education</h2>
                        <span class="close-modal">×</span>
                        <hr>
                        <div>
                            <label>Institution</label>
                            <input type="text" />

                            <label>Period</label>
                            <input type="text" />

                            <label>Degree</label>
                            <input type="text" />

                            <label>Department</label>
                            <input type="text" />
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
            </section>
        
    </main>
    <script src="{{asset('template/assets/js/admin.js')}}"></script>

@endsection