<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Author</title>
</head>


<body>
  
  <table>
  <tr>
    <th>Author</th>
    <th>Book</th>
  </tr>
  @foreach ($authors as $author)
  <tr>
    <td>
      {{$author->getDetail()}}
    </td>
    <td>
      @if ($author->book != null)
      {{ $author->book->getTitle() }}
      @endif
    </td>
  </tr>
  @endforeach
</table>

</body>
</html>

