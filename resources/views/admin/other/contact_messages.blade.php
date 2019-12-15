@extends('layouts.admin-master')

@section('styles')
      <link rel="stylesheet" type="text/css" href="{{ URL::to('css/modal.css') }}">
@endsection

@section('content')
       <div class="container">

          <section class="list">
               @if(count($contact_messages)==0)
                    No Messages
               @endif
               @foreach($contact_messages as $contact_message)
                    <article data-message="{{ $contact_message->body }}" data-id="{{ $contact_message->id }}" class="contact-message">
                         <div class="message-info">
                              <h3>{{ $contact_message->subject }}</h3>
                              <span class="info">Sender: {{ $contact_message->sender }} | {{ $contact_message->created_at }}</span>
                         </div>
                         <div class="edit">
                              <nav>
                                  <ul>
                                      <li><a href="#">Show Message</a></li>
                                      <li><a href="#" class="danger">Delete</a></li>
                                  </ul> 
                              </nav>
                         </div>
                    </article>
               @endforeach
          </section>
          @if($contact_messages->lastPage() >1)
            <section class="pagination">
                @if($contact_messages->currentPage() !== 1)
                         <a href="{{ $contact_messages->previousPageUrl() }}"><i class="fa fa-caret-left"></i></a>
                @endif

                @if($contact_messages->currentPage() !== $contact_messages->lastPage())
                         <a href="{{ $contact_messages->nextPageUrl() }}"><i class="fa fa-caret-right"></i></a>
                @endif
            </section>
          @endif
     </div>
     <div class="modal" id="contact-message-info">
          <button class="btn" id="modal-close">Close</button>
      </div>
@endsection

@section('scripts')
       <script type="text/javascript">
       	    var token="{{ Session::token() }}";
       </script>
       <script type="text/javascript" src="{{ URL::to('js/modal.js') }}"></script>
       <script type="text/javascript" src="{{ URL::to('js/contact_messages.js') }}"></script>
@endsection