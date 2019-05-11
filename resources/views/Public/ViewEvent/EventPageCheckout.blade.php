@extends('Public.ViewEvent.Layouts.EventPage')

@section('head')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    /** Lu: Adding custom script for qaxe */
    <script type="text/javascript" src="/assets/custom/common/js/jquery.js"></script>
    <script type="text/javascript" src="/assets/custom/common/js/holder-profile-photo.js"></script>
    /** End adding custom scripts */
@stop

@section('content')
    @include('Public.ViewEvent.Partials.EventHeaderSection')

    @include('Public.ViewEvent.Partials.EventCreateOrderSection')
    <script>var OrderExpires = {{strtotime($expires)}};</script>
    @include('Public.ViewEvent.Partials.EventFooterSection')
@stop

