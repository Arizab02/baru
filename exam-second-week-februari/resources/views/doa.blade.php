<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        {{json_encode($data['data']['judul'], JSON_UNESCAPED_UNICODE)}}
    </h1><br>
    <P>
        {{json_encode($data['data']['arab'], JSON_UNESCAPED_UNICODE)}}
    </P>
    <br>
    <p>
        {{json_encode($data['data']['indo'], JSON_UNESCAPED_UNICODE)}}
    </p>
</body>
</html>
