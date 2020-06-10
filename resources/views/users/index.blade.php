

<link href="{{ asset('css/app.css') }}" rel="stylesheet">

    



<div class="container d-flex">
  <div class="section-title dark">
    <h2>Modification des <span>users</span> du welcome</h2>
  </div>
  
</div>
<div class="d-flex justify-content-start">
  <a href="{{route('user.create')}}" class='btn btn-primary '>Ajouter</a>
  
</div>
@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
<table class="table container">
    <thead>
      <tr>
        <th scope="col">Date de crétion</th>
      <th scope="col">Name</th>
      <th scope="col">Function</th>

        <th scope="col">Settings</th>

      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
      <td>{{$user->created_at}}</td>
 <td>{{$user->name}}</td>
 <td>{{$user->email}}</td>
      <td>
        <a href="{{route('user.edit' , $user->id)}}" class='btn btn-warning text-white'>Edit</a>
        <form action="{{route('user.destroy' , $user->id)}}" method="post">
          @csrf
          @method('delete')
          <button class='btn btn-danger my-3'>Delete</button>
        </form>
      </td>
      </tr>
      @endforeach
    </tbody>
</table>
