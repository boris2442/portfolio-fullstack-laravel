<!--===================EDIT Testimonial ====================-->
<section class="about">
    <form action="{{ route('testimonial.update', $testimonial->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="titlebar">
            <h1>Edit Testimonial </h1>
            <button>Update Testimonial</button>
        </div>
        <div class="card-wrapper">
            <div class="wrapper_left">
                <div class="card">

                    <label>Name</label>
                    <input type="text" name="name" value="{{ $testimonial->name }}" />

                    <label>Function</label>
                    <input type="text" name="function"  value="{{$testimonial->function  }}"/>

                    <label>Testimony</label>
                    <textarea cols="10" rows="5" name="testimony">{{$testimonial->testimony  }}</textarea>

                </div>
            </div>

            <div class="wrapper_right">
                <div class="card">
                    <label>Image</label>
                    <img src="asset('template/assets/img/avatar.jpg')" alt="" class="project_img">
                    <input type="file" name="image">
                    <br><br><br>
                </div>
            </div>

        </div>
    </form>
        {{-- <div class="titlebar">
            <h1></h1>
            <button>Update Testimonial</button>
        </div> --}}
</section><br><br><br>