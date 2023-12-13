<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Product Details</title>
</head>
<style>
     .custom-container {
        max-width: 700px;
        margin: auto;
        padding-top: 40px;
        border-radius: 10px;
    }

    .form {
        padding-top: 40px;
    }
</style>
<body>


    <div class="container-fluid custom-container">

        <table>
            <tr>
                <td><h2>Détails du produit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2></td>
                <td><a class="btn btn-primary" href="{{route('products.index')}}">Retour</a></td>
            </tr>
        </table>

        <br>
        <br>

        <div class="mb-3">
            <label for="productName" class="form-label">Nom :</label>
            <input type="text" class="form-control" id="productName" value="{{ $product->name }}" readonly>
        </div>

        <div class="mb-3">
            <label for="productDetail" class="form-label">Détail :</label>
            <textarea class="form-control" id="productDetail" rows="3" readonly>{{ $product->detail }}</textarea>
        </div>

        <div class="mb-3">
            <label for="productCategory">Catégorie :</label>
            <input type="text" class="form-control" id="productCategory" value="{{ $product->Categorie }}" readonly>
        </div>

        <div class="mb-3">
            <label for="productPoints">Points de vente :</label>
            <input type="text" class="form-control" id="productPoints" value="{{ $product->pointVente }}" readonly>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
