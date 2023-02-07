<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devoir</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-between mt-5">
            <h2> </h2> 
            <a href="{{ route('classe') }}" class="btn btn-primary">Voir la liste des etudiants ></a>
        </div> <br>
        <div class="card bg-secondary">
        <div class="offre-card" style="width: 500px; margin: 0 auto;">
            <h2> Ajouter un étudiant </h2> 
            <form action="{{ route('classe.store')}}" method="POST" class="row">
                @csrf
                <div class="form-group col-md-12 my-3">
                <label for="semestre">Prenom</label>
                    <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Entrez votre Prénom">
                </div>
                <div class="form-group col-md-12 my-3">
                <label for="semestre">Nom</label>
                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Entrez votre Nom">
                </div>
                
                <div class="form-group col-md-12 my-3">
                    <label for="semestre">Semestre</label>
                    <input type="text" class="form-control" name="semestre1" id="semestre1" placeholder="Entrez le semestre">
                </div>
                <div class="form-group col-md-12 my-3">
                <label for="semestre">Matiere</label>
                    <select class="form-control" name="matiere" id="matiere">
                        <option selected>choisir une matiere</option>
                        <option value="laravel">Java</option>
                        <option value="python">Python</option>
                        <option value="csharp">C</option>
                        <option value="cpp">JavaScript</option>
                    </select>
                </div>
                <div class="form-group col-md-12 my-3">
                <label for="semestre">Note</label>
                    <input type="number" class="form-control" name="note1" id="note1" placeholder="Entrez la note">
                </div>
                <div class="form-group col-md-12 my-3">
                <label for="semestre">Examen</label>
                    <input type="number" class="form-control" name="examen" id="examen" placeholder="Entrez la note de l'examen">
                </div> <br>
                
                <div class="form-group text-center">
                    <button class="btn btn-primary text-center">Enregistrer</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</body>
</html>