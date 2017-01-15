@extends('main')

@section('title','| Contact ')

@section('main content')



      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
                  <h1>Contact me</h1>
          </div>

       <form >
         <div class="form-group">
           <label name="email">Eamil:</label>
           <input type="text" class="form-control" id="email" name="email">
         </div>

         <div class="form-group">
           <label name="subject">Subject:</label>
           <input type="text" class="form-control" id="email" name="subject">
         </div>

         <div class="form-group">
           <label name="message">Message:</label>
           <textarea type="text" class="form-control" id="meassage" name="meassage">Please text what you want to tell me here.....</textarea>
         </div>

         <input type="submit" value="Submit Message" class="btn btn-warning">

       </form>
        </div>
      </div>

@endsection
