@extends('Shared.Layouts.MasterWithoutMenus')

@section('title')
    @lang("Organiser.select_organiser")
@stop

@section('head')
    <style>
        .modal-header {
            background-color: transparent !important;
            color: #666 !important;
            text-shadow: none !important;;
        }
    </style>
@stop

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel">
                <div class="panel-body">
                    <div class="logo">
                        {!!HTML::image('assets/images/logo-dark.png')!!}
                    </div>

                    <h5>@lang("Organiser.continue_to"):</h5>
                    <div class="list-group">
                        @foreach($organisers as $organiser)
                            <a href="{{route('showOrganiserHome', ['organiser_id'=>$organiser->id] )}}"
                               class="list-group-item">
                                {{$organiser->name}}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
