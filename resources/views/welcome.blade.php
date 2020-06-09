<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{@csrf_token()}}">
    <title>Document</title>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/app.css">

</head>
<body>

    <div id="app">

        <div class="container mt-3 mb-3 text-center">
            <h2>{{$form->getTitle()}}</h2>
        </div>

        <example-component v-bind:data="{{json_encode($form->getBodyElements())}}"></example-component>

    </div>

    <script src="js/app.js"></script>
</body>
</html>