<div class="titlebar">
    <h1>About Me</h1>
    <button class="secondary">
        {{ $FormMode === 'edit' ? 'update' : '' }}
        Save Changes</button>
</div>
{{ $about }}
<div class="card-wrapper">
    <div class="wrapper_left">
        <div class="card">
            <label for="name">Full Name</label>
            @error('name')
                <span class='text-red-400'>{{ $message }}</span>
            @enderror()
            <input type="text" name="name" id="name" value="{{ isset($about->name) ? $about->name : '' }}">

            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ isset($about->email) ? $about->email : '' }}">
            @error('email')
                <span class='text-red-400'>{{ $message }}</span>
            @enderror()

            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" value="{{ isset($about->phone) ? $about->name : '' }}">
            @error('phone')
                <span class='text-red-400'>{{ $message }}</span>
            @enderror()

            <label for="adress">Address</label>
            <input type="text" name="adress" id="adress"
                value="{{ isset($about->adress) ? $about->adress : '' }}">
            @error('adress')
                <span class='text-red-400'>{{ $message }}</span>
            @enderror()

            <label for="description">Description</label>
            <textarea cols="10" rows="3" name="description">{{ isset($about->description) ? $about->description : '' }}</textarea>
            @error('description')
                <span class='text-red-400'>{{ $message }}</span>
            @enderror()
        </div>
        <div class="card">
            <label for="tagline">Tagline</label>
            <input type="text" name="tagline" id="tagline"
                value="{{ isset($about->tagline) ? $about->tagline : '' }}">
            @error('tagline')
                <span class='text-red-400'>{{ $message }}</span>
            @enderror()
        </div>

    </div>
    {{-- {{ $about->home_image }} --}}
    <div class="wrapper_right">
        <div class="card">
            <label for="fileimg" class="block mb-2 text-lg font-semiblod text-white bg-[#22c552] rounded-lg p-2">Home
                image</label>
            @error('home_image')
                <span class='text-red-400'>{{ $message }}</span>
            @enderror

            <img src="{{ isset($about->home_image) ? asset('storage/images/' . $about->home_image) : asset('storage/images/no-image.png') }}"
                class="avatar_img object-cover" id="homeImage-preview">
            {{-- {{ isset($about->home_image)? asset('') }}: ''  --}}

            {{-- ../../template/assets/img/avatar.jpg --}}

            <input type="file" id="fileimg" name='home_image' onChange="showHomeImageFile(event)"
                class="block w-full text-sm text-green-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:ring-2 focus:to-green-600-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100 transition">
        </div>
        <div class="card">
            <label for="fileimg"
                class="block mb-2 text-lg font-semiblod text-white bg-[#22c552] rounded-lg p-2 object-cover">Banner
                Image</label>
            <img src="{{ isset($about->banner_image) ? asset('storage/images/' . $about->banner_image) : asset('storage/images/no-image.png') }}"
                class="avatar_img object-cover" id="bannerImage-preview">
            <input type="file" name='banner_image' id="fileimg" onChange=bannerImageFile(event)
                class="block w-full text-sm text-green-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:ring-2 focus:to-green-600-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100 transition">

        </div>
        <div class="card">
            <p>CV</p>
            <input type="file" id="filecv">
        </div>
    </div>
</div>
<script>
    function showHomeImageFile(event) {
        let input = event.target;
        let reader = new FileReader();
        reader.onload = function() {
            let dataURL = reader.result;
            let output = document.getElementById('homeImage-preview');
            output.src = dataURL;
        }
        reader.readAsDataURL(input.files[0]);

    }

    function bannerImageFile(event) {
        let input = event.target;
        let reader = new FileReader();
        reader.onload = function() {
            let dataURL = reader.result;
            let output = document.getElementById('bannerImage-preview');
            output.src = dataURL;
        }
        reader.readAsDataURL(input.files[0]);

    }
</script>
