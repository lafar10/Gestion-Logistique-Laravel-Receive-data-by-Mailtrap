<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Facture PDF</title>

   <style type="text/css">
        table {
        border: 1px solid #ccc;
        border-collapse: collapse;
        margin: 0;
        padding: 0;
        width: 100%;
        table-layout: fixed;
        }

        table caption {
        font-size: 1.5em;
        margin: .5em 0 .75em;
        }

        table tr {
        background-color: #f8f8f8;
        border: 1px solid #ddd;
        padding: .35em;
        }

        table th,
        table td {
        padding: .625em;
        text-align: center;
        }

        table th {
        font-size: .85em;
        letter-spacing: .1em;
        text-transform: uppercase;
        }

        @media screen and (max-width: 600px) {
        table {
            border: 0;
        }

        table caption {
            font-size: 1.3em;
        }

        table thead {
            border: none;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }

        table tr {
            border-bottom: 3px solid #ddd;
            display: block;
            margin-bottom: .625em;
        }

        table td {
            border-bottom: 1px solid #ddd;
            display: block;
            font-size: .8em;
            text-align: right;
        }

        table td::before {
            /*
            * aria-label has no advantage, it won't be read inside a table
            content: attr(aria-label);
            */
            content: attr(data-label);
            float: left;
            font-weight: bold;
            text-transform: uppercase;
        }

        table td:last-child {
            border-bottom: 0;
        }
        }
        /* general styling */
        body {
        font-family: "Open Sans", sans-serif;
        line-height: 1.25;
        }
   </style>
</head>
<body style="font-family:Arial">
    <div align="center" >
        <div align="center">
            <i class="fas fa-truck-loading"></i>
            <h2 class="display-5" style="color:purple;">Fayaj Trans</h2>
            <h5>Facture N° :     |    Date : {{\Carbon\carbon::now()}}</h5>
            <hr style="width:320px;height:2px;">
        </div>
        <br>
        <br>
        <caption>Facture Détails</caption>
            <br>
            <br>
        <table>

            <thead>
              <tr>
                <th scope="col">Nom Complet</th>
                <th scope="col">Email</th>
                <th scope="col">Télé</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <td >{{$dataReceived['name']}} {{$dataReceived['prenom']}}</td>
                <td >{{$dataReceived['email']}}</td>
                <td >{{$dataReceived['tel']}}</td>
                
              </tr>
            </tbody>
          </table>

          <br>
          <br>

     <table >

            <thead>
                <tr>

                    <th scope="col">Lieu Départ</th>
                    <th scope="col">Lieu Arrivée</th>
                    <th scope="col">Véhicule</th>
                </tr>
              </thead>
              <tbody>
                <tr>

                 <td >{{$dataReceived['lieu_ramassage']}}</td>
                <td >{{$dataReceived['lieu_depose']}}</td>
                </tr>
              </tbody>
        </table>

    </div>


</body>
</html>
