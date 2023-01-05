<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1>create directive</h1>

    <form>
        <strong>Enter Something:</strong>
        <textarea name="body" class="form-control" style="height: 200px"></textarea>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>

    <p>Body:</p>
    {{-- <p>{!! nl2br($body) !!}</p> --}}
    <p>@nl2br($body)</p>
</div>

</body>
</html>
