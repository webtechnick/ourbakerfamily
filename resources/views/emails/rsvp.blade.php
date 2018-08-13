@component('mail::message')
# New RSVP from {{ $name }}

@component('mail::table')
| Answer | Souls |
|:-------|------:|
| {{ $accept }} | {{ $count }} |
@endcomponent

{{ $message }}

Your friendly bot,<br>
OurBakerFamily
@endcomponent