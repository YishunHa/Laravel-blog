@extends('main')

@section('title','| Contact ')



@section('main content')



      <div class="row">
        <div class="col-md-12">
                  <h1>Contact me</h1>
        <hr>
       <form action="{{ url('contact')}}" method="POST">
         {{ csrf_field() }}
         <div class="form-group">
           <label name="email">Eamil:</label>
           <input class="form-control" id="email" name="email">
         </div>

         <div class="form-group">
           <label name="subject">Subject:</label>
           <input class="form-control" id="subject" name="subject">
         </div>

         <div class="form-group">
           <label name="message">Message:</label>
           <textarea class="form-control" id="message" name="message">Please text what you want to tell me here.....</textarea>
         </div>

         <input type="submit" value="Submit Message" class="btn btn-warning">

       </form>
        </div>
      </div>

@endsection
