@extends('layouts.admin.layout-admin')
@section('content')
    <main>
        {{-- @dump($medias); --}}

        <!--==================== MEDIAS SETTING ====================-->
        @if (session()->has('error'))
            <div class='bg-red-300 text-red-500 px-4 py-2'>
                {{ session('error') }}</div>
        @endif
        @if (session()->has('success'))
            <div class='bg-green-300 text-green-600 px-4 py-2 m-2'>{{ session('success') }}</div>
        @endif
        <div class="card">
            <h2>Social media</h2>
            <div class="social_table-heading">
                <p>Link</p>
                <p>Icon</p>
                <p></p>
            </div>
            <!-- item 1 -->
            @foreach ($medias as $media)
                <div class="social_table-items">
                    <p>{{ $media->link }}</p>
                    <button class="service_table-icon">
                        <i class=" {{ $media->icon }}"></i>
                    </button>
                    {{-- <button class="danger">
                        delete
                    </button> --}}

                    <form method='post' action="{{ route('destroy.medias', $media->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="px-5 py-2 bg-red-500 rounded-md text-white text-lg shadow-md" type="submit"
                            onClick="return confirm('Are you sure you to delete this media?')">Delete</button>
                    </form>
                </div>
            @endforeach
            <br>
            @include('admin.medias.form-media')
        </div>
        {{-- </card> --}}

    </main>
@endsection
