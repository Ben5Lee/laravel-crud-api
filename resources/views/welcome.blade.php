<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test App</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    </head>

    <body>
    <form method="post" action="{{ route('savetask') }}">
            {{ csrf_field() }}
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="text" class="col-form-label">Add New Task:</label>
                </div>
                <div class="row">
                    <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
                <div class="row">
                    <input type="text" name="description" class="form-control" placeholder="Description">
                </div>
                <div class="row">
                    <input type="text" name="due_date" class="form-control" placeholder="Due Date">
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-secondary">Save Task</button>
                </div>
            </div>
        </form>
    </body>
</html>
