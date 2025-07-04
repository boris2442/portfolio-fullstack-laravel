@extends('layouts.admin.layout-admin');
@section('title', 'index experience dashboard')
@section('content')

<main>

    <!--==================== EXPERIENCES ====================-->
    <section class="experiences" id="experiences">



        <form action="{{ route('experience.update', $experience->id) }}" method="POST">
            @method('PATCH')
            @csrf
            <h2>Update Experience</h2>
            {{-- <span class="close-modal">×</span> --}}
            <hr>
            <div>
                <p>Company</p>
                <input type="text" name="company" value="{{$experience->company }}" />
                @if ($errors->has('company'))
                <span class="text-danger">{{ $errors->first('company') }}</span>
                @endif
                <p>Period</p>
                <input type="text" name="period" value="{{$experience->period }}" />
                @if ($errors->has('period'))
                <span class="text-danger">{{ $errors->first('period') }}</span>
                @endif
                <p>Position</p>
                <input type="text" name="position" value="{{$experience->position }}" />
                @if ($errors->has('position'))
                <span class="text-danger">{{ $errors->first('position') }}</span>
                @endif
            </div>
            <hr>
            <div class="modal-footer">
                {{-- <button class="close-modal">Cancel</button> --}}
                <button class="secondary close-modal">
                    <span><i class="fa fa-spinner fa-spin"></i></span>Save
                </button>
            </div>
        </form>
    </section>

</main>
<script src="asset('template/assets/js/admin.js')"></script>
@endsection