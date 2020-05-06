<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Runtarck</title>
</head>
<body>
    <header class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">LPTF</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Units</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Jobs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Skills</a>
      </li>
    </ul>
    </header>
    <main class="container-fluid">
        <div class="col-12 justify-content-center">
            <h1><center>LaPlateforme_</center></h1>
        </div>
        <div class="row justify-content-around">
            <div class="card row col-3 bg-light" style="width: 20rem;">
                <img src="images/yikes.jpg" class="card-img-top" alt="...">
                <div class="card-body bg-light">
                    <h5 class="card-title">Un Papillon</h5>
                        <p class="card-text">Un papillon, c'est un peu comme une chenille, mais avec des ailes.<br>Ne pas ingérer.</p>
                        <a href="#" class="btn btn-primary">Commander votre propre papillon</a>
                </div>
            </div>
            <div class="row card w-75 col-7 bg-light">
                <div class="card-body bg-light">
                    <h2 class="card-title">Bonjour,monde!</h2>
                    <p class="card-text">Il existe blabla blabla blabla bla bla bla bla blabblablbalbal.</p><br><br><br><br><br><br><br><br><br><br><br><br>
                    <a href="#" class=" btn btn-primary">Rebooter le Monde</a>
                    <div class="spinner-border text-info" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="row justify-content-end align-items-flex-end">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                    </div>
                </div>
            </div>
            <div class="row col-2 bg-light">
                <ul class="list-group col-12 bg-light">
                    <li class="list-group-item active">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                </ul>
            </div>
        </div>
        <br><br>
        <div class="row justify-content-center">
            <div class="row justify-content-center col-12">
                <span>Installation de AI 9000</span>
            </div>
            <div class="col-6 progress">
                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="col-12">
            <form>
            <h5>Recevez votre copie gratuite !</h5>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputLogin4">Login</label>
                        <input type="text" class="form-control" id="inputLogin4">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="password" class="form-control" id="inputEmail4">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="inputPassword4">Password</label>
                        <input type="text" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="inputPassword4">Password confirmation</label>
                        <input type="text" class="form-control" id="inputPassword4">
                    </div>
                </div>
                <div class="row justify-content-end">
                    <input type="checkbox" id="autoSizingCheck"><br><br>
                        <label class="form-check-label" for="autoSizingCheck">
                            Check me out !
                        </label>
                </div>
                <div class="row justify-content-end">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>