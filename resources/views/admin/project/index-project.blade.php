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
            <div class="project_table-items">
                <p>
                    <img src="../../template/assets/img/no-image.png" alt="" class="project_img-list">
                </p>
                <p>Backend Developer</p>
                <p>Backend Developer</p>
                <p>Backend Developer</p>
                <div>
                    <button class="btn success">
                        <i class="fas fa-pencil-alt"></i>
                    </button>
                    <button class="btn danger">
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
    <!--===================ADD PROJECT ====================-->
    <section class="about" id="project">
        <form>
            <div class="titlebar">
                <h1>Create Project </h1>
                <button>Save Project</button>
            </div>
            <div class="card-wrapper">
                <div class="wrapper_left">
                    <div class="card">
                        <label>Title</label>
                        <input type="text" name="title" />

                        <label>Description</label>
                        <textarea cols="10" rows="5" name="description"></textarea>

                        <label>Link</label>
                        <input type="text"  name="link"/>
                    </div>
                </div>

                <div class="wrapper_right">
                    <div class="card">
                        <img src="../../template/assets/img/no-image.png" alt="" class="project_img">
                        <input type="file" name="image">
                    </div>
                </div>

            </div>
            <div class="titlebar">
                <h1></h1>
                <button>Save Project</button>
            </div>
        </form>
    </section>
    <!--===================EDIT PROJECT ====================-->
    <section class="about" id="project">
        <div class="titlebar">
            <h1>Edit Project </h1>
            <button>Update Project</button>
        </div>
        <div class="card-wrapper">
            <div class="wrapper_left">
                <div class="card">

                    <label>Title</label>
                    <input type="text" class="input" />

                    <label>Description</label>
                    <textarea cols="10" rows="5"></textarea>

                    <label>Link</label>
                    <input type="text" class="input" />

                </div>
            </div>

            <div class="wrapper_right ">
                <div class="card">
                    <img src="../../template/assets/img/no-image.png" alt="" class="project_img">
                    <input type="file">
                </div>
            </div>

        </div>
        <div class="titlebar">
            <h1></h1>
            <button>Update Project</button>
        </div>
    </section><br><br><br>
    </div>
</main>
<script src="../../template/assets/js/admin.js"></script>
@endsection