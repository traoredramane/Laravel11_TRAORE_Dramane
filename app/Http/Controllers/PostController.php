<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
class PostController extends Controller
{
  
  public function liste_post() 
  {
    $posts = Post::all();
     return view('post.liste', compact('posts'));
  } 
  
  public function ajouter3_post()
  
  {
    $tags = Tag::all();
    $posts = Post::all();
    return view('post.ajouter3', compact('posts','tags'));
    
  }
  
 public function ajouter3_post_traitement(Request $request)
 {
   
  $request->validate([
    'titre' => 'required',
    'contenu' => 'required',
  ]);
  
  $post = new Post();
  $post->titre = $request->titre;
  $post->contenu = $request->contenu;
  $post->save();
  
  $tags = $request->tag_id;
  
  $post->tags()->attach($tags);
  
  return redirect('/ajouter3')->with('status', 'L\'Post a bien eté ajouter avec succés.');
 }
 
 public function update3_post($id){
   
   $posts = Post::find($id);
   
   return view('post.update3', compact('posts'));
 }
  
  
 public function update3_post_traitement(Request $request){
  $request->validate([
    'titre' => 'required',
    'contenu' => 'required',
    
  ]);
  
  $post = Post::find($request->id);
  $post->titre = $request->titre;
  $post->contenu = $request->contenu;
  $post->update();
  
  return redirect('/post')->with('status', 'L\'post a bien eté modifié avec succés.');
 }
  
  
  public function delete_post($id){
    $post = Post::find($id);
    $post->delete();
    return redirect('/post')->with('status', 'L\'post a bien eté supprimé avec succés.');
  }
  
}
