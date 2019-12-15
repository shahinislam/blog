@extends('layouts.master')

@section('title')
        Contact
@endsection

@section('styles')
       <link rel="stylesheet" type="text/css" href="{{ URL::to('css/form.css') }}">
@endsection

@section('content')
        @include('includes.info-box')
        <form action="{{ route('contact.send') }}" method="post" id="contact-form">
        	<div class="input-group">
        		<label for="name">Your name</label>
        		<input type="text" name="name" id="name" value="{{ Request::old('name') }}" />
        	</div>
            <div class="input-group">
                <label for="email">Your E-mail</label>
                <input type="text" name="email" id="email"  value="{{ Request::old('email') }}" />
            </div>
        	<div class="input-group">
        		<label for="subject">Subject</label>
        		<input type="text" name="subject" id="subject"  value="{{ Request::old('subject') }}" />
        	</div>
        	<div class="input-group">
        		<label for="message">Your Message</label>
        		<textarea name="message" id="message" rows="10">{{ Request::old('message') }}</textarea>
        	</div>
        	<button type="submit" class="btn">Submit Message</button>
        	<input type="hidden" name="_token" value="{{ Session::token() }}" />
        </form>
@endsection  