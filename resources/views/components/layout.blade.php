<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['/resources/js/app.js','resources/css/app.css'])
</head>

<body class="bg-black text-white">
    <div class="px-10">
        <nav class="flex justify-between items-center border-b py-4 border-white/15">
            <div class="text-white/10">
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg')}}" alt="">
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="">Jobs</a>
                <a href="">Carrers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>
            <div>
                <a href="">Post a Job</a>
            </div>
        </nav>
        <main class="mt-10 max-w-[986px] m-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
