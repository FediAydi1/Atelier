<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Create</title>
</head>
<style>
     .custom-container{

        max-width: 700px;
        margin: auto;
        padding-top: 40px; /* Ajoutez un padding pour espacer le contenu du formulaire du bord du conteneur */
        border-radius: 10px; /* Ajoutez un bord arrondi au conteneur si vous le souhaitez */

    }

    .form {
        padding-top: 40px;
    }
</style>
<body>

    <form action="{{ route('products.store') }}" method="post">
        @csrf

        <div class="container-fluid custom-container">

            <table>
                <tr>
                    <td><h2>Creer un nouveau produit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2></td>
                    <td><a class="btn btn-primary" href="{{route('products.index')}}">Retour</a></td>
                </tr>
            </table>
            <br>
            <br>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nom :</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{ old('name')}}">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Détail :</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="detail">{{ old('detail') }}</textarea>
                @error('detail')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="Categorieid">Catégorie :</label>
                <input type="text" class="form-control" id="Categorieid" name="Categorie" value="{{ old('Categorie') }}">
                @error('Categorie')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <br>
            <div>
                <label for="pointVente">Points de vente :</label>
                <input type="text" class="form-control" id="pointVente" name="pointVente" value="{{ old('pointVente') }}">
                @error('pointVente')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <input class="btn btn-primary" type="submit" value="Valider" />
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>





