<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROJET 11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container text-center">
  <div class="row">
    <div class="col s12">
      <h1>PROJET 11 LARAVEL</h1>
      <hr>
      <a href="/tuteur" class="btn btn-primary" style="margin-left: 60px">Liste des Tuteurs</a>
      <a href="/ajouter" class="btn btn-primary" style="margin-left: 60px">Ajouter un étudiant</a>
      <a href="/ajouter3" class="btn btn-primary" style="margin-left: 60px; background-color: rgb(162, 98, 15);">Ajouter un Post</a>
      <a href="/ajouter4" class="btn btn-primary" style="margin-left: 60px; background-color: rgb(162, 98, 15)">Ajouter une Tag</a>
      
    <hr>
    
    
    @if (session('status'))
    <div class="alert alert-success">
    {{ session('status') }}
    </div>
    @endif
    <table class="table">
    <thead>
    <tr>
    <th>#</th>
    <th>Nom</th>
    <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    
    @php
      $ide = 1;
    @endphp
    @foreach ($tags as $tag)

    <tr>
    <td>{{ $ide }}</td>
    <td>{{ $tag->nom }}</td>
    <td>
    <a href="/update4-post/{{ $tag->id }}" class="btn btn-info">Update</a>
    <a href="/delete-post/{{ $tag->id }}" class="btn btn-danger">Delate</a>
    </td>

    
    </tr>
     
    @php
      $ide += 1;
    @endphp
    
    @endforeach
    
    </tbody>
    </table>
   
    
    </div>
   
  </div>
  <a href="/post" class="btn btn-danger">Revenir à la liste des Posts</a>
  <a href="/post_tag" class="btn btn-danger" style="margin-left: 25px; background-color: rgb(162, 98, 15)">Revenir à la liste des Posts et Tags</a>
  
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
