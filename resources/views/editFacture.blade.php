<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GestionFacture</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <h1 id="title">Gestion Facture</h1>

            <form id="frm1" class="formCreate" method="post" action="saveF">
                @csrf
            <div class="componentFRMC">
                <label>Num Facture: </label>
                <input type='text' name='numF'>
            </div>

            <div class="componentFRMC">
                <label>objet: </label>
                <input type='text' name='objet'>
            </div>

            <div class="componentFRMC">
                <label>dateFacture: </label>
                <input type='date' name='dateF' class="dateF" >
            </div>
            <div class="componentFRMC">
                <label>client: </label>
                <input type='text' name='client' >
            </div>

            <div class="componentFRMC">
                <label>tauxTva : </label>
                <select name="tauxTva" id="">
                    <option value="0.1">10%</option>
                    <option value="0.2">20%</option>
                    <option value="0.3">30%</option>
                    <option value="0.4">40%</option>
                    <option value="0.5">50%</option>
                </select>
            </div>
            <div class="componentFRMC">
                <label>prixHt : </label>
                <input type='text' name='prixHt' readonly>
            </div>
            <div class="componentFRMC">
                <label>Tva : </label>
                <input type='text' name='tva' readonly>
            </div>
            <div class="componentFRMC">
                <label>prixTtc : </label>
                <input type='text' name='prixTtc'  readonly>
            </div>
            <div class="div_button">
                <input class="btnchercher" id="btnAdd" type="submit" value='Save' name='BTN'>
                <input class="btnchercher" id="btnVider" type="reset" value='reset'>
                <a class="btnchercher" id="btnDetail" href="saveDF">Detail</a>
            </div>
            
        </form>
    </div>
</body>
</html>