@component('mail::message')
    # Contact Form Mail


    Full Name: {{ $data['name'] }}

    Email Address: {{ $data['email'] }}

    Mobile Number: {{ $data['mobile'] }}

    Subject: {{ $data['subject'] }}



    Message:

    {{ $data['message'] }}


@endcomponent
