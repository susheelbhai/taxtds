<x-admin-layout>

    @php
        $details = [
            ['name'=> 'name','lbl'=> 'category Name', ],
            ['name'=> 'icon','lbl'=> 'Icon', ],
            ['name'=> 'is_active','lbl'=> 'Active Status', 'type'=>'switch' ],
        ];
    @endphp
    <x-admin.form.form1 method="post" heading="Add Category" :details="$details" :action="route('admin.category.store')" />

</x-admin-layout>
