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
    <div class="container"> <br>
        @if (count($classes)> 0)
            <div class="d-flex justify-content-between"> 
                <a href="{{ route('classe.create') }}" class="btn btn-primary"> < Ajouter un étudiant</a>
            </div> <br>
            <h2>Liste des étudiants </h2>
            <table class="table table-striped bg-secondary">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"> Prénom </th>
                        <th scope="col"> Nom </th>
                        <th scope="col"> Matière </th>
                        <th scope="col">Note1 </th>
                        <th scope="col"> Examen </th>
                        <th scope="col">Semestre1 </th>
                    </tr>
                </thead>
                
                <tbody>
                        @foreach ($classes as $classe)
                        <tr>
                            <th scope="row"> {{ $classe->id }} </th>
                            <td> {{ $classe->prenom }} </td>
                            <td> {{ $classe->nom }} </td>
                            <td> {{ $classe->matiere }} </td>
                            <td> {{ $classe->note1 }} </td>
                            <td> {{ $classe->examen }} </td>
                            <td> {{ $classe->semestre1 }} </td>
                        </tr>
                        @endforeach     
                    </tbody>
                </table>

                

                

            {{ $classes->links() }}
        @else
            <h2>Desole!! Aucun etudiant trouve...</h2>
        @endif
    </div> <br>
</body>
<!-- <p>L'etudiant avec la plus grande moyenne est: MOUYABI</p> -->
</html>