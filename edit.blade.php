@extends('layouts.app')
@section('content')
    <div class="container form-margin">
        <div class="row justify-content-center">
            <div class="col-md-8 form-custom">
                <div class="card-header">{{__('Edit article')}}</div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{session('status')}}
                        </div>
                    @endif
                    @include('article.form')
                </div>
            </div>
        </div>
    </div>
@endsection
