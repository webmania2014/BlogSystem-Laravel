@extends('main')
@section('title', '| Contact')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Contact Me</h1>
      <hr>
      <form class="" action="index.html" method="post">
        <div class="form-group">
          <label name="email" for="">Email:</label>
          <input type="text" id="email" name="email" class="form-control">
        </div>

        <div class="form-group">
          <label name="subject" for="">Subject:</label>
          <input type="text" id="subject" name="subject" class="form-control">
        </div>

        <div class="form-group">
          <label name="message" for="">Message:</label>
          <textarea id="message" name="message" class="form-control">Type your message here ... </textarea>
        </div>

        <input type="submit" value="Send Message" class="btn btn-success">
      </form>
    </div>
  </div>
@endsection
