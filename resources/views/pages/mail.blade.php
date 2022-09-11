<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$config->name}} - E-mail</title>
</head>
<body>
    <table width="100%" style="font-size: 16px;">
        <tr>
            <th>
                <h1 style="text-align: center">Contato</h1>
                <p style="text-align: center">{{$config->name ?? ''}}</p>
            </th>
        </tr>
        <tr>
            <td>
                Nome: {{$params['name'] ?? ''}}
            </td>
        </tr>
        <tr>
            <td>
                E-mail: {{$params['email'] ?? ''}}
            </td>
        </tr>
        <tr>
            <td>
                Assunto: {{$params['subject'] ?? ''}}
            </td>
        </tr>
        <tr>
            <td>
                Telefone: {{$params['phone'] ?? ''}}
            </td>
        </tr>
        <tr>
            <td style="padding: 10px 0">
                <p>{{$params['message'] ?? ''}}</p>
                <hr>
            </td>
        </tr>
        <tr>
            <td style="padding: 10px 0;">
                <p style="margin: 0;">{{$config->name}}</p>
                <p style="margin: 0;">{{$config->phone}}</p>
                <p style="margin: 0;">{{$config->address}}, {{$config->address_number}} {{$config->complement}}</p>
                <p style="margin: 0;">{{$config->address_district}}, {{$config->city}}/{{$config->state}}</p>

                <p style="text-align: center;">{{$config->text}}</p>
            </td>
        </tr>
    </table>
</body>
</html>
