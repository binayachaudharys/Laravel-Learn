<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning

    </title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    @foreach ($posts as $post)
<div class="art"> 
<h1><a href="/post/<?= $post->slug ?>"><?= $post->title ?></a></h1>
<article> </article>
</div>
@endforeach
    
</body>
</html>