<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body id="page-top">

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container" style="padding: 40px;">
        <h2 class="text-center text-uppercase text-white">Ejercicio 3</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">3. La aplicación deberá mostrar el monto total a pagar según los días, la cantidad de personas y el tipo de habitación. Considerar que la cantidad máxima de personas en una habitación matrimonial es 4.</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <form action=" /cine/storage " method="get">
                {{ csrf_field() }}
                <label for="">Ingrese su edad: </label>
                <input type="text" class="form-control">
                <label for="">Ingrese su condicion: </label>
                <input type="text" class="form-control">
                <input type="submit" class="btn btn-success mt-3">
            </form>
          </div>
        </div>
        <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light" href=" {{url('/')}} ">
            <i class="fa fa-download mr-2"></i>
            Regresar
          </a>
        </div>
      </div>
    </section>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>