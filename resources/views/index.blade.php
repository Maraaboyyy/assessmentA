<!DOCTYPE html>
<html>
<head>
    <title>List Mashable Article Links</title>
</head>
<body>
    <h1>List Article Links:</h1>
    
    @foreach($links as $link)
        <a href="{{ $link }}" target="_blank">{{ $link }}</a><br>
    @endforeach

</body>
</html>
