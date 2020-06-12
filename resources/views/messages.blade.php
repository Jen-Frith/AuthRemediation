@include('layouts.app')





<link href="{{ asset('css/app.css') }}" rel="stylesheet">

    



<div class="container d-flex">
  <div class="section-title dark">
    <h2>Apercu des <span>messages</span> du welcome</h2>
  </div>
  
</div>

<table class="table container">
    <thead>
      <tr>
        <th scope="col">Username</th>
      <th scope="col">Message Subject</th>
      <th scope="col">Message</th>

        <th scope="col">Settings</th>

      </tr>
    </thead>
    <tbody>
      @foreach($messages as $message)
      <tr>
      <td>{{$message->username}}</td>
 <td>{{$message->messageSubject}}</td>
 <td>{{$message->messageContent}}</td>
      <td>

       
  
       
        
        

       
       
        <form action="{{route('message.destroy' , $message->id)}}" method="post">
          @csrf
          @method('delete')
          <button class='btn btn-danger my-3'>Delete</button>
        </form>
      </td>
      </tr>
      @endforeach
    </tbody>
</table>
