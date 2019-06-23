@extends('en.Emails.Layouts.Master')

@section('message_content')
Hello {{$attendee->first_name}},<br><br>

You have been invited to the destination  <b>{{$attendee->order->event->title}}</b>.<br/>
Your ticket for the destination is attached to this email.

<br><br>
Regards
@stop
