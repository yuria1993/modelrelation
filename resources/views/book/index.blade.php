<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book/title>
</head>
<body>
  
<table>
  <tr>
    <th>Books</th>
  </tr>
  @foreach ($books as $book)
  <tr>
    <td>
      {{$book->getTitle()}}
    </td>
  </tr>
  @endforeach
</table>


</body>
</html>