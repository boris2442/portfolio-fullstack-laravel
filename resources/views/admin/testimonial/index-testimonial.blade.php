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
                            <button class="btn-icon danger" >
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
                    <button>Save Testimonial</button>
                </div>
                <div class="card-wrapper">
                    <div class="wrapper_left">
                        <div class="card">
                            <label>Name</label>
                            <input type="text" />
                            
                            <label>Function</label>
                            <input type="text" />

                            <label>Testimony</label>
                            <textarea cols="10" rows="5" ></textarea>
                        </div>
                    </div>
                    
                    <div class="wrapper_right">
                        <div class="card">
                            <img src="../../template/assets/img/avatar.jpg" class="avatar_img">
                            <input type="file" id="fileimg" >  
                        </div>  
                    </div>
                    
                </div>
                <div class="titlebar">
                    <h1></h1>
                    <button>Save Testimonial</button>
                </div>
            </section>
             <!--===================EDIT Testimonial ====================-->
             <section class="about">
                <div class="titlebar">
                    <h1>Edit Testimonial </h1>
                    <button>Update Testimonial</button>
                </div>
                <div class="card-wrapper">
                    <div class="wrapper_left">
                        <div class="card">

                            <label>Name</label>
                            <input type="text" />
                            
                            <label>Function</label>
                            <input type="text" />

                            <label>Testimony</label>
                            <textarea cols="10" rows="5" ></textarea>
                                
                        </div>
                    </div>
                    
                    <div class="wrapper_right">
                        <div class="card">
                            <label>Image</label>
                            <img src="../../template/assets/img/avatar.jpg" alt="" class="project_img">
                            <input type="file">
                            <br><br><br>
                        </div>    
                    </div>
                    
                </div>
                <div class="titlebar">
                    <h1></h1>
                    <button>Update Testimonial</button>
                </div>
            </section><br><br><br>
        
    </main>
    <script src="{{asset('template/assets/js/admin.js')}}"></script>
@endsection