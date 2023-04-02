<div style="text-align: center">
    <a href="{{route('produits.index')}}">Back</a>
    <br><br>
    <form action="{{route('produits.update',$produit->id)}}" method="post">
     @csrf   
     <label for="nom">Nom</label>
     <input type="text" name="nom" value={{$produit->nom}}> <br> <br>
     <label for="prix">Prix</label>
     <input type="text" name="prix" value={{$produit->prix}}> <br> <br>
     <label for="quantite">Quantite</label> 
     <input type="text" name="quantite" value={{$produit->quantite}}> <br> <br>
     <input type="submit" value="Modifier">
    </form>
    </div>
