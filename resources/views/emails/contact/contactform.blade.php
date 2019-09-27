@component('mail::message')
<strong>Email :</strong>{{$data['to']}}
<strong>subject: </strong>{{$data['subject']}}
<strong>Message</strong>
{{$data['message']}}
@endcomponent
