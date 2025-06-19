@extends('layouts.admin.layout-admin')
@section('content')
    <main>

        <!--==================== SKILLS ====================-->
        <section class="skills" id="skills">
            <div class="titlebar">
                <h1>Skills </h1>
                <button class="open-modal">New Skill</button>
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
                            <option value="">Filter Skills</option>
                        </select>
                    </div>
                    <div class="relative">
                        <input class="search-input" type="text" name="search" placeholder="Search Skill...">
                    </div>
                </div>

                <div class="skill_table-heading">
                    <p>Name</p>
                    <p>Proficiency</p>
                    <p>Service</p>
                    <p>Actions</p>
                </div>
                <!-- item 1 -->
                <div class="skill_table-items">
                    <p>PHP</p>
                    <div class="table_skills-bar">
                        <span class="table_skills-percentage" style="width: 90%;"></span>
                        <strong>90%</strong>
                    </div>
                    <p>Backend Developer</p>
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
            <!-------------- SKILLS MODAL --------------->
            <div class="modal ">
                <div class="modal-content">
                    <h2>Create Skill</h2>
                    <span class="close-modal">×</span>
                    <hr>
                    <div>
                        <p>Name</p>
                        <input type="text" class="input" />

                        <p>Proficiency</p>
                        <input type="text" class="input" />

                        <p>Service</p>
                        <select class="inputSelect" name="" id="">
                            <option value="">Front-end developer</option>
                            <option value="">Backend developer</option>
                        </select>
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
    <script src="{{ asset('template/assets/js/admin.js') }}"></script>
@endsection
