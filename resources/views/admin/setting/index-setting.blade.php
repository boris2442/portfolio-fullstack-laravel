@extends('layouts.admin.layout-admin');
@section('title', 'seeting du dashboard')
@section('content')
    <main>
        <!--==================== SETTING ====================-->
        <section class="setting" id="setting">
            <div class="setting-wrapper">
                <div class="setting_nav">
                    <div class="setting-titlebar">
                        <img src="../../template/assets/img/avatar.jpg" alt="" class="setting-avatar">
                        <p>Natalia Brakux</p>
                    </div>
                    <nav class="nav">
                        <div class="nav-setting-wrapper">
                            <div class="nav-list">
                                <ul class="nav-list-item-setting">
                                    <li>
                                        <a href="about.html" class="nav-active">
                                            <span><i class="fas fa-cog"></i></span><span>General Setting</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav-list-item-setting">
                                    <li>
                                        <a href="media.html">
                                            <span><i class="fas fa-cog"></i></span><span>My social media</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="setting_content">
                    <section class="about" id="about">
                        <div class="titlebar">
                            <h1>General Setting</h1>
                            <button>Save Changes</button>
                        </div>
                        <div class="card-wrapper">
                            <div class="wrapper_left">
                                <div class="card">
                                    <label>Full Name</label>
                                    <input type="text">

                                    <label>Email</label>
                                    <input type="email">

                                    <label>Phone</label>
                                    <input type="text">

                                    <label>Address</label>
                                    <input type="text">

                                    <label>Description</label>
                                    <textarea cols="10" rows="5"></textarea>
                                </div>
                                <div class="card">
                                    <label>Tagline</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="wrapper_right">
                                <div class="card">
                                    <img src="../../template/assets/img/avatar.jpg" class="avatar_img">
                                    <input type="file" id="fileimg">
                                </div>
                                <div class="card">
                                    <p>CV</p>
                                    <input type="file" id="filecv" />
                                </div>
                            </div>
                        </div>

                        <div class="titlebar">
                            <h1></h1>
                            <button>Save Changes</button>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </main>
    <script src="{{ asset('template/assets/js/admin.js') }}"></script>
@endsection
