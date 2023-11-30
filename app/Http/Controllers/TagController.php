<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Post;
class TagController extends Controller
{
  
  public function liste_tag() 
  {
    $tags = Tag::all();
     return view('tag.liste', compact('tags'));
  } 
  
  public function ajouter4_tag()
  
  {
    $tags = Tag::all();
    return view('tag.ajouter4', compact('tags'));
    
  }
  
 public function ajouter4_tag_traitement(Request $request)
 {
   
  $request->validate([
    'nom' => 'required',
  ]);
  
  $tag = new Tag();
  $tag->nom = $request->nom;
  $tag->save();
  
  return redirect('/ajouter4')->with('status', 'L\'tag a bien eté ajouter avec succés.');
 }
 
 public function update4_tag($id){
   
   $tags = Tag::find($id);
   
   return view('tag.update4', compact('tags'));
 }
  
  
 public function update4_tag_traitement(Request $request){
  $request->validate([
    'nom' => 'required',
   
    
  ]);
  
  $tag = Tag::find($request->id);
  $tag->nom = $request->nom;
  $tag->update();
  
  return redirect('/tag')->with('status', 'L\'Tag a bien eté modifié avec succés.');
 }
  
  
  public function delete_tag($id){
    $tag = Tag::find($id);
    $tag->delete();
    return redirect('/tag')->with('status', 'L\'tag a bien eté supprimé avec succés.');
  }
  
}
