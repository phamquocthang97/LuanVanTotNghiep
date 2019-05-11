<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
   	<base href="{{asset('')}}">
</head>


<body>
    @foreach($sanpham as $s)
		{{$s->TenHH}}<br>
		<img src="source/images/product/{{$s->Hinh}}" alt="hinh">
    @endforeach
</body>
</html>