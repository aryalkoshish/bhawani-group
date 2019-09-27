@component('mail::message')
<strong>Email :</strong>{{$data['email']}}
<strong>subject: </strong>{{$data['subject']}}
<strong>Message</strong>
{{$data['message']}}
@endcomponent