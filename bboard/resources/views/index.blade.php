<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Объявления</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <h1 class="my-3 text-center">Объявления</h1>
    @if (count($bbs) > 0)
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Товар</th>
            <th>Цена, руб.</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        @foreach($bbs as $bb)
        <tr>
            <td><h3>{{ $bb->title }}</h3></td>
            <td>{{ $bb->price }}</td>
            <td>
                <a href="/{{ $bb->id }}">Подробнее...</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @endif
</div>
</body>
</html>
