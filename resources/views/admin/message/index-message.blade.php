@extends('layouts.admin.layout-admin')
@section('title', 'index message dashboard')
@section('content')
<main>

    <section class="messages">
        @if (session()->has('error'))
        <div class='bg-red-300 text-red-500 px-4 py-2'>
            {{ session('error') }}</div>
        @endif

        @if (session()->has('success'))
        <div class='bg-green-300 text-green-600 px-4 py-2'>{{ session('success') }}</div>
        @endif

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
                    {{-- <p>Status</p> --}}
                    <p>Actions</p>
                </div>
                <!-- item 1 -->
                @foreach($messages as $message)
                <div class="message_table-items">
                    <p>{{ $message->name }}</p>
                    <p>{{ $message->email }}</p>
                    <p>{{ $message->project }} </p>
                    <p>{{ $message->description }}</p>
                    {{-- <p>
                        <span class="badge_read">
                            Read
                        </span>
                        <span class="badge_unread">
                            Unread
                        </span>
                    </p> --}}
                    <div>
                        <form method='post' action="{{ route('message.destroy', $message->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="danger" type="submit"
                                onClick="return confirm('Are you sure you to delete this messages?')"> <i
                                    class=" far fa-trash-alt"></i>
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</main>
<script src="asset('template/assets/js/admin.js')"></script>

@endsection