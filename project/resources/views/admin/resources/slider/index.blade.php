<x-admin-layout>

    <x-admin.card.card1 heading="All Banner Images">

        <form action="{{ route('admin.slider.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-partner.form.input-img1 name="banner_img" lbl="Select Banner Img" type="file" required="required" />
            <button class="btn btn-primary" type="submit">Upload Image</button>
        </form>


        <div class="row">
            @foreach ($data as $i)
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.slider.destroy', $i->id) }}" method="post"
                                enctype="multipart/form-data">
                                @method('DELETE')
                                @csrf
                                <img src="{{ url('/storage/common/images/sliders', $i->slider_img) }}" alt=""
                                    width="100%">
                                <button class="btn btn-danger" type="submit">Delete Image</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>



    </x-admin.card.card1>

</x-admin-layout>