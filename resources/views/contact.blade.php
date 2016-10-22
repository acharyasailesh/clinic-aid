@extends('layout.main')
@section('contact')
    @if (count($errors)>0)
        <div class="alert alert-warning">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Something is missing</strong>

            @foreach($errors->all() as $error)
                {{$error}}
            @endforeach
        </div>

    @endif



    @include('inc.contactcontent')


@endsection


