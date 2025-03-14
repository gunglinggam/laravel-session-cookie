<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>halaman salam</title>
</head>
<body>
   <h1>selamat datang, {{$name}}!</h1>
   <form method="POST" action="/submit-name">
   @csrf
   <input type="text" name="name" placeholder="isi nama">
   <button type="submit">submit</button>
   </form>
</body>
</html>