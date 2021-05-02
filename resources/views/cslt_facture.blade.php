<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion facture</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>

<body>
    <h1> Liste Facture (<span style="color: #7868E6" >{{count($x)}}</span>) : </h1>
    <div class="main">    
    <form action="rechercherF" method="post">
        @csrf
        <div class="primary-button">
            
            <input class="inputChercher" type="text" placeholder="numFacture ou client" name="numF">  &ensp;&ensp;&ensp;
            <input class="inputChercher" type="date" placeholder="tappez date facture" name="dateF">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; 
            <input type="submit" class="btnchercher1" value="Rechercher" name="btn" id="btnR"> 
            &ensp;&ensp;&ensp;&ensp;&ensp;
            <a id="btnNew"  href="fact">New Facture</a>
              </div>
    </div><br><br><br>
            
            <div class="tableDyalna">
            <table  class='MyDG'>
            
                <thead><tr>
                <th>Num facture</th> 
                <th>objet</th>
                <th>Date facture</th>
                <th>Client</th>
                <th>Taux Tva</th>
                <th>Prix Ht</th>
                <th>tva</th>
                <th>Prix Ttc</th>
                <th style="text-align: center;">Actions</th>
                </tr></thead>
                <tbody>
                    @foreach($x as $it)
                    <tr>
                        <td>{{$it->numF}}</td>
                        <td>{{$it->objet}}</td>
                        <td>{{$it->dateF}}</td>
                        <td>{{$it->client}}</td>
                        <td>{{$it->tauxTva}}</td>
                        <td>{{$it->prixHt}}</td>
                        <td>{{$it->tva}}</td>
                        <td>{{$it->prixTtc}}</td>
                        <td style="text-align: center;">
                            <a href="supprimerF/{{$it->numF}}"><i class='far fa-trash-alt fa-1x'></i></a>&ensp;|&ensp;<a href="dfact"><i class='fas fa-edit fa-1x'></i></a>&ensp;&ensp;|&ensp;&ensp;<a href="saveDF"><i class="far fa-clipboard fa-1x"></i></a>
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