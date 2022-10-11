<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"></head>
<body>

    @if (isset ($uz))
    <div class="alert alert-success" role="alert">
        {{$uz}}
    </div>
    @endif

    @if (isset ($ez))
    <div class="alert alert-warning" role="alert">
        {{$ez}}
    </div>
    @endif

    @if (isset ($az))
    <div class="alert alert-danger" role="alert">
        {{$az}}
    </div>
    @endif


   


    
</body>
</html>