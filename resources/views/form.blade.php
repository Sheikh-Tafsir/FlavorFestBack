<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body>
        <form action="{{url('/')}}/login" method="post">
            @csrf
            <div class="container">
                <h1>Login</h1>
                <div>
                    <label for="">Name</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label for="">Password</label>
                    <input type="password" name="password">
                </div>
                <input type="submit">

            </div>
        </form>
    </body>
</html>
