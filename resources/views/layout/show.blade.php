@extends('layout.app')

@section('contenu') 
    
    
  <div class="product-description">
    <h1>{{$produit->nom}}</h1>
    <img src="{{$produit->img_url}}" alt="Image du produit" width="100px">
    <p>{{$produit->description}}</p>
    <ul>
      <li>Caractéristique 1</li>
      <li>Caractéristique 2</li>
      <li>Caractéristique 3</li>
    </ul>
    <p>{{$produit->prix}}</p>
    <button>Ajouter au panier</button>
  </div>    
@stop 