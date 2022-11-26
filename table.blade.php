<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div style="display: flex; align-content: center; justify-content: center; margin-top: 5rem;">
    <div>
        <table class="table table-striped">
            <tr>
                <th>View</th>
                <th>ID</th>
                <th>headline</th>
                <th>released</th>
                <th>releaseDate</th>
            </tr>
            @foreach($releases as $row)
                <tr>
                    <td>
                        <a href="/fetchAPI/{{$row['id']}}">
                            <i class="fa-solid fa-eye" id="{{$row['id']}}" ></i>
                        </a>
                    </td>
                    <td>
                        <a href="https://encore.mediaroom.com/api/newsfeed_releases/get.php?{{$row['id']}}">
                            {{$row['id']}}
                        </a>
                    </td>
                    <td>{{$row['headline']}}</td>
                    <td>{{$row['released']}}</td>
                    <td>{{$row['releaseDate']}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
