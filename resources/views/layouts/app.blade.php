       
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laravel Quickstart - Basic</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>
    <div class="container">
        <div class="header shadow-sm rounded mt-3 mb-2">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <h2 class="ps-2">Task List</h2>
                <i class="fa-solid fa-bars"></i>
            </nav>
        </div>

        @yield('content')
    </div>
</body>

</html>
