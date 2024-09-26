<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    <!-- Page background and structure -->
    <div class="flex min-h-screen bg-custom-page-orange">
        <!-- Left side with image -->
        <div class="hidden md:block w-1/2">
            <img src="{{ asset('images/BigBrew.jpg') }}" style="margin-top: 150px; margin-left: 80px;" class="object-cover">
        </div>

        <!-- Right side content -->
        <div class="w-full md:w-1/2 flex items-center justify-center ml-5"> <!-- Add margin-left here -->
            {{ $slot }}
        </div>
    </div>
</body>

</html>
