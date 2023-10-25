<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROJET 11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
  <div class="row">
    <div class="col s12">
      <h1>AJOUTER UN POST - LARAVEL11</h1>
      <hr>
    
    @if (session('status'))
    <div class="alert alert-success">
    {{ session('status') }}
    </div>
    @endif
    
    <ul>
    
      @foreach ($errors->all() as $error)
      <li class="alert alert-danger">{{ $error }} </li>
      @endforeach
    </ul>
   
    
      <form action="/ajouter3/traitement" method="POST">
      @csrf
      
  <div class="mb-3">
    <label for="Titre" class="form-label">Titre</label>
    <input type="texte" class="form-control" id="Titre" name="titre">
  </div>
  
  <div class="mb-3">
    <label for="Contenu" class="form-label">Contenu</label>
    <input type="texte" class="form-control" id="Contenu" name="contenu">
  </div>


  <div class="form-floating">
    <div> <label for="tag" class="form-label">Tag</label></div>
     <select class="form-select" id="tag_id" aria-label="Floating label select example" name="tag_id">
       <option value="selected">selectionné un Tag</option>                                                                                                                                                                                                                                     as $ville)
       @foreach($tags as $tag)
      <option value="{{$tag->id}}">{{$tag->nom}} </option>
       @endforeach
     </select>
  
  
 <br>
  <button type="submit" class="btn btn-primary">AJOUTER UN POST</button>
  
  <br> <br>
  
  <a href="/post" class="btn btn-danger">Revenir à la liste des posts</a>
  
</form>
    
    </div>
   
  </div>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
