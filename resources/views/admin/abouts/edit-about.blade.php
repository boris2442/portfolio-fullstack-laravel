@extends('layouts.admin.layout-admin')
@section('title', 'editer about dashboard')
@section('content')
    <main>
        <!--==================== ABOUT ====================-->
        <section class="about" id="about">
            @if (session()->has('error'))
                <div class='bg-red-300 text-red-500 px-4 py-2'>
                    {{ session('error') }}</div>
            @endif

            @if (session()->has('success'))
                <div class='bg-green-300 text-green-600 px-4 py-2'>{{ session('success') }}</div>
            @endif




            <form action="{{ route('update-about', $about->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                @include('admin.abouts.form-about', [
                    'FormMode' => 'edit',
                ])
            </form>
        </section>
        <!--==================== END ABOUT ====================-->
    </main>
@endsection
