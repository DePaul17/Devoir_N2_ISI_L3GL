<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="offre-card" style="width: 500px; margin: 0 auto;">
            <form action="{{ route('classe.store')}}" method="POST" class="row">
                @csrf
                <div class="form-group col-md-12 my-3">
                    <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom">
                </div>
                <div class="form-group col-md-12 my-3">
                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
                </div>
                
                <div class="form-group col-md-12 my-3">
                    <input type="text" class="form-control" name="semestre1" id="semestre1" placeholder="semestre1">
                </div>
                <div class="form-group col-md-12 my-3">
                    <input type="text" class="form-control" name="matiere" id="matiere" placeholder="matiere">
                </div>
                <div class="form-group col-md-12 my-3">
                    <input type="number" class="form-control" name="note1" id="note1" placeholder="note1">
                </div>
                <div class="form-group col-md-12 my-3">
                    <input type="number" class="form-control" name="examen" id="examen" placeholder="examen">
                </div>
                
                <div class="form-group col-md-4 ">
                    <button class="btn btn-success">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>