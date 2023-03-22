<x-mail::message>
# Welcome To TaxTDS

Dear {{ $data->name ?? '' }},

Thankyou for Signup with the Taxtds.com India’s first specific business and finance directory.Taxtds.com is all about helping people to getting their Business and Tax Expert at single platform. It is fast, accurate and extremely easy to use. Taxtds vision is reach out to maximum people who need Business, Finance and Tax Experts or listed services mention here .
	  
Our Offerings:
•	Quick & Easy Signup
•	Reached to our Tax & GST and Others Customer easy. 
•	Back Office Services to serve you better
•	Data integrity is our priority 
•	Timely & reliable research inputs through various mediums (SMS/Emails)
Thank you for join us. 


<x-mail::button :url="route('partner.dashboard')">
Dashboard
</x-mail::button>

Best Regards,<br>
{{ config('app.name') }}
</x-mail::message>
