@extends('layout.app')


@section('contenu')

    <main>
        <div class="container1">
            <h1>Formulaire de commande</h1>
            <form action="#" method="post">
            <!-- Name input field -->
            <input type="text" name="name" placeholder="Nom complet" required>
            
            <!-- Email input field -->
            <input type="email" name="email" placeholder="Adresse email" required>
            
            <!-- Phone number input field -->
            <input type="tel" name="phone" placeholder="Numéro de téléphone" required>
            <!-- delivered input field -->

            <input type="text" name="name" placeholder="Lieu de livraison" required>
            
            <!-- Product select field -->
            <select name="product" required>
                <option value="" disabled selected>Matiere de l'article</option>
                <option value="product1">Acier inoxidable</option>
                <option value="product2">Article en OR </option>
                <option value="product3">Article en diamant  </option>
            </select>
            
            <!-- Submit button -->
            <input type="submit" value="Commander">
            <!-- <a href="paiement.html"><h2>payer</h2></a> -->
            </form>
        </div>
    </main>
@stop