@component('mail::message')
# Complaint Form Mail


<strong>Full Name:</strong> {{ $data['name'] }}

<strong>Email Address:</strong> {{ $data['email'] }}


<strong>Message:</strong>

{{ $data['message'] }}


@endcomponent
