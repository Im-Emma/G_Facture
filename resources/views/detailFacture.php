<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GestionFacture</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">

</head>
<body>
    <div class="main">
        <h1 id="title">Gestion Detail Facture</h1>

            <form id="frm1" class="formCreate" method="get" action="saveDF">
                @csrf
            <div class="componentFRMC">
                <label>Num Detail Facture: </label>
                <input type='text' name='numDF'>
            </div>

            <div class="componentFRMC">
                <label>Num Facture: </label>
                <input type='text' name='numFfk'>
            </div>

            <div class="componentFRMC">
                <label>dateFacture: </label>
                <input type='date' name='dateF' class="dateF" >
            </div>
            <div class="componentFRMC">
                <label>designation: </label>
                <input type='text' name='designation' >
            </div>
            <div class="componentFRMC">
                <label>unite: </label>
                <input type='text' name='unite' >
            </div>
            <div class="componentFRMC">
                <label>qte: </label>
                <input type='number' name='qte' value="1" step="1" min="1" max="100">
            </div>
            <div class="componentFRMC">
                <label>prixUnite : </label>
                <input type='text' name='prixUnite'>
            </div>
            <div class="componentFRMC">
                <label>prixTotal : </label>
                <input type='text' name='prixTotal' readonly>
            </div>

            <div class="div_button">
                <input class="btnchercher" id="btnAdd" type="submit" value='Save' name='BTN'>
                <input class="btnchercher" id="btnVider" type="reset" value='reset'>
            </div>
    </div><br><br><br>
            
                    <div class="tableDyalna">
                    <table  class='MyDG'>
                        <thead><tr>
                        <th>Num Dfacture</th> 
                        <th>Designation</th>
                        <th>Unité</th>
                        <th>QTE</th>
                        <th>Prix Unite</th>
                        <th>Prix Totale</th>
                        <th style="text-align: center;">Action</th>
                        </tr></thead>
                        <tbody>
                         @foreach($x as $it)
                        <tr>
                            <td>{{$it->numDF}}</td>
                            <td>{{$it->designation}}</td>
                            <td>{{$it->unite}}</td>
                            <td>{{$it->qte}}</td>
                            <td>{{$it->prixUnite}}</td>
                            <td>{{$it->prixTotal}}</td>
                            <td style="text-align: center;">
                                <a href="supprimerDF/{{$it->numDF}}"><i class='far fa-trash-alt fa-1x'></i></a>&ensp;|&ensp;<a href="saveDF"><i class='fas fa-edit fa-1x'></i></a>&ensp;&ensp;|&ensp;&ensp;<a href="rechercherF"><i class="far fa-clipboard fa-1x"></i></a>
                            </td> 
                        </tr>
                        @endforeach
                </tbody>
            </table>
            <br>
        </form>
    </div>
</body>
</html>