<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Pretty Caravan</title>
    @vite('resources/css/app.css')
</head>
<body>
<x-navbar/>
{{$slot}}
</body>

<script>
    document.addEventListener('scroll', function () {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 50) {
            navbar.classList.remove('bg-transparent');
            navbar.classList.add('bg-gray-800', 'shadow-lg');
        } else {
            navbar.classList.add('bg-transparent');
            navbar.classList.remove('bg-gray-800', 'shadow-lg');
        }
    });
</script>
<script src="https://kit.fontawesome.com/25659b9d77.js" crossorigin="anonymous"></script>

</html>
