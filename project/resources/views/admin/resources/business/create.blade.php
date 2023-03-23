<x-admin-layout>

    @php
        $details = [
            [
                'id'=>'01',
                'name'=> 'Company Details',
                'form'=> [
                    ['name'=> 'salutation', 'lbl'=>'Salutation',  'options'=> $salutations],
                    ['name'=> 'category', 'lbl'=>'Category', 'options'=> $categories],
                    ['name'=> 'business_name', 'lbl'=>'Business Name'],
                    ['name'=> 'registration_number', 'lbl'=>'Registration Number'],
                    ['name'=> 'gst_number', 'lbl'=>'Gst Number'],
                    ['name'=> 'website', 'lbl'=>'Website', 'type'=>'url'],
                    ['name'=> 'logo', 'lbl'=>'Logo', 'image'=>true],
                    ['name'=> 'display_img', 'lbl'=>'Display Image', 'image'=>true],
                    ['name'=> 'map_src', 'lbl'=>'Map Embad src', 'type'=>'textarea'],
                    ['name'=> 'short_description', 'lbl'=>'Short Description', 'type'=>'textarea'],
                    ['name'=> 'long_description', 'lbl'=>'Long Description', 'type'=>'editor'],
                    ['name'=> 'services', 'lbl'=>'Services(List all services here)', 'type'=>'editor'],
                ]
            ], 
            [
                'id'=>'02',
                'name'=> 'Company Address',
                'form'=> [
                    ['name'=> 'address', 'lbl'=>'Address'],
                    ['name'=> 'city', 'lbl'=>'City'],
                    ['name'=> 'pin', 'lbl'=>'Pin'],
                    ['name'=> 'state', 'lbl'=>'State'],
                ]
            ], 
            [
                'id'=>'03',
                'name'=> 'Contact Person',
                'form'=> [
                    ['name'=> 'contact_person_name', 'lbl'=>'Contact Person Name'],
                    ['name'=> 'contact_person_email', 'lbl'=>'Contact Person Email'],
                    ['name'=> 'contact_person_phone', 'lbl'=>'Contact Person Phone'],
                    ['name'=> 'contact_person_alt_phone', 'lbl'=>'Contact Person Alternate Phone'],
                ]
            ], 
            [
                'id'=>'04',
                'name'=> 'Social Media',
                'form'=> [
                    ['name'=> 'facebook', 'lbl'=>'Facebook URL'],
                    ['name'=> 'twitter', 'lbl'=>'Twitter URL'],
                    ['name'=> 'linkedin', 'lbl'=>'Linkedin URL'],
                    ['name'=> 'youtube', 'lbl'=>'Youtube URL'],
                    ['name'=> 'instagram', 'lbl'=>'Instagram URL'],
                ]
            ], 
            [
                'id'=>'05',
                'name'=> 'Confirm Details',
                'complete'=> [
                    ['name'=> 'business', 'lbl'=>'Business', 'type'=>'text'],
                    ['name'=> 'Name', 'lbl'=>'Name', 'type'=>'text'],
                    ['name'=> 'Name', 'lbl'=>'Name', 'type'=>'text'],
                ]
            ], 
        ];
    @endphp
    <x-admin.form.form_wizard1 heading="Add Business" :details="$details" :action="route('admin.business.store')">

        
    </x-admin.form.form_wizard1>

</x-admin-layout>
