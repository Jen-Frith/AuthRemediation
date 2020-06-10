@section('css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection
@section('content')
    
<div class="container my-5">
    <div class="container d-flex justify-content-center">
        <div class="section-title dark">
           <h2>Modification du <span>team</span> welcome</h2>
       </div>
       
       </div>


    <form action="{{route('team.update', $team->id)}}" method="post" enctype="multipart/form-data">
        @csrf 
        @method('put')
    <div>
        <label for="" class="w-25" style="color: #2be6ab">Image</label>
        <input class="" type="file" name='img' id='img'>
    </div>
    @if ($errors->has('img'))
    <strong style="color: red">{{ $errors->first('img') }}</strong>

@endif

<div class="form-row mt-5">
    <input type="text" value="{{$team->name}}" class="input-text" id="input" name="name" placeholder="Veuillez insérer votre nom svp..." />
    <label class="label-helper" for="input">Nom</label>
   @if ($errors->has('name'))
  <strong style="color: red">{{ $errors->first('name') }}</strong>

@endif </div>

<div class="form-row">
    <input type="text"  value="{{$team->function}}" class="input-text" id="input" name="function" placeholder="Veuillez insérer votre fonction svp..." />
    <label class="label-helper" for="input">Fonction</label>
   @if ($errors->has('function'))
  <strong style="color: red">{{ $errors->first('function') }}</strong>

@endif </div>

<div class="form-row ">
    <input type="text"  value="{{$team->title}}" class="input-text" id="input" name="title" placeholder="Veuillez insérer votre titre de la section svp...">
    <label class="label-helper" for="input">Titre de la section</label>
   @if ($errors->has('title'))
  <strong style="color: red">{{ $errors->first('title') }}</strong>

@endif </div>



<div class="container d-flex justify-content-center">
    
    <button type="submit" class="site-btn  mt-5">
       Valider Modification
    </button>
</div>
    </form>

</div>

@endsection