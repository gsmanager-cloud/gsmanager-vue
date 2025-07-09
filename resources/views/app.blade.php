<!DOCTYPE html>
<html>
<head>
    <title inertia>{{ env('APP_NAME') }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

   @vite('resources/js/app.js')
    @inertiaHead
    @routes
</head>
<body>
@inertia
</body>
</html>
