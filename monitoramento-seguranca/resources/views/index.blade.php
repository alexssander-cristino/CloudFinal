<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Monitoramento de Segurança</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial,Helvetica,sans-serif;
        }

        body{
            background:#f4f6f9;
        }

        header{
            background:#1f2937;
            color:white;
            padding:25px;
        }

        h1{
            font-size:30px;
        }

        .container{
            width:90%;
            max-width:1200px;
            margin:40px auto;
        }

        .cards{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
            gap:20px;
        }

        .card{
            background:white;
            border-radius:12px;
            padding:25px;
            box-shadow:0 5px 15px rgba(0,0,0,.08);
        }

        .numero{
            font-size:40px;
            font-weight:bold;
            color:#2563eb;
            margin-top:15px;
        }

        table{
            width:100%;
            margin-top:40px;
            border-collapse:collapse;
            background:white;
        }

        th{
            background:#2563eb;
            color:white;
            padding:15px;
        }

        td{
            padding:15px;
            border-bottom:1px solid #ddd;
        }

        .online{
            color:green;
            font-weight:bold;
        }

        .offline{
            color:red;
            font-weight:bold;
        }

    </style>

</head>
<body>

<header>

    <h1>Sistema de Monitoramento de Segurança</h1>

    <p>Dashboard da API</p>

</header>

<div class="container">

    <div class="cards">

        <div class="card">

            <h3>Câmeras</h3>

            <div class="numero">
                {{ $cameras }}
            </div>

        </div>

        <div class="card">

            <h3>Sensores</h3>

            <div class="numero">
                {{ $sensores }}
            </div>

        </div>

        <div class="card">

            <h3>Fabricantes</h3>

            <div class="numero">
                {{ $fabricantes }}
            </div>

        </div>

        <div class="card">

            <h3>Locais</h3>

            <div class="numero">
                {{ $locais }}
            </div>

        </div>

    </div>

    <table>

        <thead>

            <tr>

                <th>API</th>

                <th>Status</th>

            </tr>

        </thead>

        <tbody>

            <tr>

                <td>/api/cameras</td>

                <td class="online">ONLINE</td>

            </tr>

            <tr>

                <td>/api/sensores</td>

                <td class="online">ONLINE</td>

            </tr>

            <tr>

                <td>/api/status</td>

                <td class="online">ONLINE</td>

            </tr>

        </tbody>

    </table>

</div>

</body>
</html>