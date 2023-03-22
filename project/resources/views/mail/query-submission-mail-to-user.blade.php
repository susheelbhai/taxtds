<x-mail::message>
# Thank you for get in touch with {{ config('app.name') }}

Dear {{ $data->name ?? '' }},

We have received your query and our team will get in touch with you soon

The details submitted by you are as folloows.

Name : {{ $data->name ?? '' }}

Email : {{ $data->email ?? '' }}

Phone : {{ $data->phone ?? '' }}

Message : {{ $data->message ?? '' }}

<x-mail::button :url="route('home')">
Visit Website
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
