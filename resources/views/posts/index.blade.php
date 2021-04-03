<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BLog Posts</title>
</head>
<body>
  <div class="container">
    <h1>BLog Posts</h1>
    <ul>

      @forelse ($posts as $post)
        <li><a href="">{{ $post->title }}</a></li>
      @empty
        <li>No Posts Yet</li>
      @endforelse
    </ul>
  </div>
</body>
</html>