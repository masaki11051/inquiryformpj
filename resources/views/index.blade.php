<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
   <title>トップページ</title>
      <style>
   </style>
</head>
<body>
  <div class="todo">
              <form action="/" method="POST">
                @csrf
                <label>氏名</label><br>
                <input class="input-name"" type="text" name="name"><br>
                <label>メールアドレス</label><br>
                <input class="input-address"" type="text" name="mailaddress"><br>
                <button >送信する</button>
              </form>
   </div>
</body>
</html>