@extends('layouts.default', ['title' => 'Contact'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                <h2>Get In Touch</h2>
                <p class="text-muted">If you having trouble with this service, please <a href="mailto:{{ config('laracarte.admin_support_email') }}" target="_blank">ask for help.</a></p>

                <form action="{{ route('contact.store') }}" method="POST" novalidate>

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required="required" value="{{ old('name') }}">
                        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" id="email" class="form-control" required="required" value="{{ old('email') }}">
                        {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" cols="10" rows="10" required="required" class="form-control">{{ old('message') }}</textarea>
                        {!! $errors->first('message', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-secondary btn-block">Submit Enquiry &raquo;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection