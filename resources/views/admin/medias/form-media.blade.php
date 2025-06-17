<form method="POST" action="{{ route('store-medias') }}">
    @csrf
    <div class="social_table-heading">

        <div class="">
            <p>Link</p>
            @error('link')
                <span class='text-red-400'>{{ $message }}</span>
            @enderror
        </div>
        <div class="">
            <span style="color:#006fbb;">(Find your icon class: Font Awesome)</span>
            @error('icon')
                <span class='text-red-400'>{{ $message }}</span>
            @enderror
        </div>
        <p></p>
    </div>
    <p></p>
    <div class="social_table-items">
        <input type="text" name='link' placeholder='veuillez entrer une url valide' value="{{ old('link') }}">

        <input type="text" name='icon' placeholder='veuilez entrer une icone' value="{{ old('icon') }}">

        <button>
            Add Media
        </button>
    </div>
</form>
