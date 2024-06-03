<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('blog.store')}}" method="post">
        @csrf
        @method('post')
        <div class="flex flex-col w-[30%]">
            <input name="judul" type="text" class="mb-3">
            <textarea name="konten" id="" cols="30" rows="10"></textarea>
            <button type="submit">Kirim</button>
        </div>
    </form>
</body>
</html>
