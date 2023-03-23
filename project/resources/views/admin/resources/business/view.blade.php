<x-admin-layout>

    @php
        $details = [
            [
                'name' => 'Company Details',
                'data' => [['name' => 'Category', 'value' => $data['category']->name ?? ''], 
                ['name'=>'Salutation', 'value'=> $data['salutation']->name ?? ''],
                 ['name' => 'Business Name', 'value' => $data->business_name], ['name' => 'Registration Number', 'value' => $data->registration_number], ['name' => 'Gst Number', 'value' => $data->gst_number], ['name' => 'Logo', 'value' => url('storage/business/images', $data->logo), 'image' => true], ['name' => 'Display Image', 'value' => url('storage/business/images', $data->display_img), 'image' => true], ['name' => 'Short Description', 'value' => $data->short_description], ['name' => 'Long Description', 'value' => $data->long_description]],
            ],
            [
                'name' => 'Company Address',
                'data' => [['name' => 'Address', 'value' => $data->business_address], ['name' => 'City', 'value' => $data->business_city], ['name' => 'Pin', 'value' => $data->business_pin], ['name' => 'State', 'value' => $data->business_state]],
            ],
            [
                'name' => 'Contact Person',
                'data' => [['name' => 'Contact Person Name', 'value' => $data->contact_person_name], ['name' => 'Contact Person Email', 'value' => $data->contact_person_email], ['name' => 'Contact Person Phone', 'value' => $data->contact_person_phone], ['name' => 'Contact Person Alternate Phone', 'value' => $data->contact_person_alt_phone]],
            ],
        ];
    @endphp
    <x-admin.detail-page.page1 heading="View Business Detail" :details="$details" :editUrl="route('admin.business.store')">

        <x-slot name="footer">



            <table>
                <tr>
                    <td class="text-center"> <a class="btn btn-primary"
                            href="{{ route('admin.business.edit', $data->id) }}">Edit</a> </td>
                    <td class="text-center">
                        @if ($data->is_approved == 1)
                            <button class="btn btn-success"> <i class="fas fa-check-circle"></i> Approved </button>
                        @else
                            <form action="{{ route('admin.business.approve') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <button class="btn btn-primary" type="submit">Approve Now</button>
                            </form>
                        @endif
                    </td>
                    <td class="text-center">
                        @if($data->is_approved==1) 
                        @if($data->is_active==0) 
                        <form action="{{ route('admin.business.activate') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $data->id }}">
                            <button class="btn btn-primary" type="submit">Activate Now</button>
                        </form>
                        @else
                        <form action="{{ route('admin.business.deactivate') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $data->id }}">
                            <button class="btn btn-primary" type="submit">Deactivate Now</button>
                        </form>
                        @endif
                        @else
                        <button class="btn btn-danger"> Not Approved </button> 
    
                        @endif
    
                        
                        
                    </td>
                </tr>
            </table>
        </x-slot>
    </x-admin.detail-page.page1>



    <x-admin.card.card1 heading="All Banner Images (Please add at-least 3 images)">

        <form action="{{ route('admin.business.add_banner_img') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="business_id" value="{{ $data->id }}">
            <x-partner.form.input-img1 name="banner_img" lbl="Select Banner Img" type="file" required="required" />
            <button class="btn btn-primary" type="submit">Upload Image</button>
        </form>


        <div class="row">
            @foreach ($banner_img as $i)
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.business.delete_banner_img') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $i->id }}">
                                <img src="{{ url('/storage/business/images/', $i->name) }}" alt=""
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
