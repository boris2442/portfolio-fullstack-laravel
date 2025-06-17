@extends('layouts.admin.layout-admin')
@section('content')
    <main>
        {{-- @dump($medias); --}}

        <!--==================== MEDIAS SETTING ====================-->
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
                    <button class="danger">
                        delete
                    </button>
                </div>
            @endforeach
            <br>
            <form action="">
                <div class="social_table-heading">
                    <p>Link</p>
                    <span style="color:#006fbb;">(Find your icon class: Font Awesome)</span>
                    <p></p>
                </div>
                <p></p>
                <div class="social_table-items">
                    <input type="text">
                    <input type="text">
                    <button>
                        Add Media
                    </button>
                </div>
            </form>
        </div>
        {{-- </card> --}}



    </main>
@endsection
