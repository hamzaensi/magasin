<div style="text-align: center">
    <a href="{{route('produits.index')}}">Back</a>
    <br><br>
    <form action="{{route('produits.store')}}" method="post">
     @csrf   
     <label for="nom">Nom</label>
     <input type="text" name="nom"> <br> <br>
     <label for="prix">Prix</label>
     <input type="text" name="prix"> <br> <br>
     <label for="quantite">Quantite</label> 
     <input type="text" name="quantite"> <br> <br>
     <input type="submit" value="Ajouter">
    </form>
    </div>
