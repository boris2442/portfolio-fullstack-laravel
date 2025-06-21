@extends('layouts.admin.layout-admin')
@section('title', 'index message dashboard')
@section('content')
    <main>

        <section class="messages">
            <div class="messages_container">
                <div class="titlebar">
                    <h1>Messages </h1>
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
                                <option value="">Filter Message</option>
                            </select>
                        </div>
                        <div class="relative">
                            <input class="search-input" type="text" name="search" placeholder="Search Message...">
                        </div>
                    </div>

                    <div class="message_table-heading">
                        <p>Name</p>
                        <p>Email</p>
                        <p>Subject</p>
                        <p>Description</p>
                        <p>Status</p>
                        <p>Actions</p>
                    </div>
                    <!-- item 1 -->
                    <div class="message_table-items">
                        <p>Name</p>
                        <p>email</p>
                        <p>subject of message </p>
                        <p>description description description description description description</p>
                        <p>
                            <span class="badge_read">
                                Read
                            </span>
                            <span class="badge_unread">
                                Unread
                            </span>
                        </p>
                        <div>
                            <button class="btn danger">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
    <script src="asset('template/assets/js/admin.js')"></script>

@endsection
