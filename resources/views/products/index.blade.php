<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Create</title>
    <style>
        .row{
            padding-top: 20px;
            padding-left: 200px;
            padding-right: 200px;
        }
    </style>
</head>

<body>


    <div class="row">
        @if(session('info'))
            <div class="alert alert-success">
                {{ session('info') }}
            </div>
        @endif

    </div>
    <div class="row">
        <a class="btn btn-success" href="{{ route('products.create')}}"> Ajout Produit </a>

    </div>

    <div class="row">

    <table class="table table-striped">

        <tr><th>Nom</th>

            <th>Détails</th>
            <th colspan="3" class="col-3">Action</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->detail }}</td>
                <td><a class="btn btn-primary" href="{{ route('products.show', $product->id) }}">Voir</a></td>
                <td><a class="btn btn-warning" href="{{ route('products.edit', $product->id) }}">Modifier</a></td>
                <td>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce produit?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    </div>








</body>
</html>
