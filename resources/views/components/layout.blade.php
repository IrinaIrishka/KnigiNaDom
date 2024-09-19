<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
    <title>KnigiNaDom</title>
   
    <link href="/css/app.css" rel="stylesheet" />
    <script src="/js/scripts.js" type =  "text/javascript"></script>
</head>
<body>

 {{$slot}}
</body>
</html>