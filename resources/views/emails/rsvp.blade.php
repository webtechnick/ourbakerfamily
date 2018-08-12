@component('mail::message')
# New RSVP from {{ $name }}

@component('mail::table')
| Name | Email |
|------|------:|
| {{ $name }} | {{ $email }} |
@endcomponent

{{ $message }}

Plus one? {{ $plusone ? 'Yes' : 'No'}}

Your friendly bot,<br>
OurBakerFamily
@endcomponent