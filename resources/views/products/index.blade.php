<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>All products:</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <a class="btn btn-primary" href="{{ route('products.create')}}">Unesi proizvod</a>
            </div>
        </div>
        <div class="row">
          <div class="col-12">
            <h3>Ispis svih proizvoda</h3>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#ID</th>
                  <th>Naziv</th>
                  <th>Proizvodac</th>
                  <th>Cijena</th>
                  <th>Kolicina</th>
                  <th>Uredi</th>
                  <th>Obrisi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $products as $product )
                  <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->naziv}}</td>
                    <td>{{$product->proizvodac}}</td>
                    <td>{{$product->cijena}}</td>
                    <td>{{$product->kolicina}}</td>
                    <td><a href="{{ route('products.edit',['product' => $product])}}" class="btn btn-warning">Uredi</a></td>
                    <td>
                      <form action ="{{route('products.delete',['product' => $product ])}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">Izbrisi</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>