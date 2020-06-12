@include('layouts.app')

@if (session()->has('success'))
    <h1>{{ session('success') }}</h1>
@endif

  <section class="contact-wrap">
    <form action="{{route('message.store')}}" class="contact-form" method="post">
     @csrf
   
      <div class="col-sm-12">
        <div class="input-block">
          <label for="">Message Subject</label>
          <input type="text" class="form-control" name="a">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="input-block textarea">
          <label for="">Drop your message here</label>
          <textarea rows="3" type="text" class="form-control" name="b"></textarea>
        </div>
      </div>
      <div class="col-sm-12">
        <button class="square-button">Send</button>
      </div>
    </form>
  </section>
  
  <!-- follow me template -->
  <div class="made-with-love">
    Made with 
    <i>♥</i> by Me
  </div>