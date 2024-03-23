<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-6 bg-secondary text-light">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="col-8 mt-1">
                        <label for="naziv" class="form-label">Unesite naziv proizvoda:</label>
                        <input type="text" class="form-control" name="naziv">
                    </div>
                    <div class="col-8 mt-1">
                        <label for="proizvodac" class="form-label">Unesite proizvodaca proizvoda:</label>
                        <input type="text" class="form-control" name="proizvodac">
                    </div>
                    <div class="col-8 mt-1">
                        <label for="cijena" class="form-label">Unesite cijenu proizvoda:</label>
                        <input type="text" class="form-control" name="cijena">
                    </div>
                    <div class="col-8 mt-1">
                        <label for="kolicina" class="form-label">Unesite kolicinu proizvoda:</label>
                        <input type="text" class="form-control" name="kolicina">
                    </div>
                    <div class="col-8 mt-3 mb-3">
                        <input type="submit" class="btn btn-primary form-control" value="Unesi">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>