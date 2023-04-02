@extends('layouts')

@section('contenu')
<h4>Liste de produits : <a href="{{route('produits.create')}}">Nouveau</a> </h4>  
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nom</th>
        <th scope="col">Prix</th>
        <th scope="col">Quantite</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($produits as $produit)
        <tr>
            <th scope="row">{{$produit->id}}</th>
            <td>{{$produit->nom}}</td>
            <td>{{$produit->prix}}</td>
            <td>{{$produit->quantite}}</td>
            <td><a href="{{route('produits.edit',$produit->id)}}">Modifier </a>
              <form 
              method="post" 
              action="{{route('produits.destroy', $produit->id)}}"
              onsubmit="return confirm('Are you sur?')"
              >
              @csrf
              @method('DELETE')
              <button type="submit">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach  
     
      
    </tbody>
  </table> 
@endsection
