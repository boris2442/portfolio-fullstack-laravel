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
            @include('admin.medias.form-media')
        </div>
        {{-- </card> --}}

    </main>
@endsection
