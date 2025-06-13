@extends('layouts.admin.layout-admin')
@section('content')
<main>
         <!--==================== ABOUT ====================-->
            <section class="about" id="about">
                <form action="">
                @include('admin.abouts.form-about')
            </form>
            </section>
         <!--==================== END ABOUT ====================-->
</main>


@endsection