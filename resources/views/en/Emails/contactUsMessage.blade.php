@extends('en.Emails.Layouts.Master') //Lu custom

@section('message_content')

<p>Hi there,</p>
<p>You have received a message from <b>{{ (isset($sender_name)) }}</b>.</p>
<p style="padding: 10px; margin:10px; border: 1px solid #f3f3f3;">
    {{$message_content}}
</p>

<p>
    You can contact <b>{{ (isset($sender_name)) }}</b> directly at <a href='mailto:{{ (isset($sender_email)) }}'>{{ (isset($sender_email)) }}</a>, or by replying to this email.
</p>
@stop

@section('footer')


@stop