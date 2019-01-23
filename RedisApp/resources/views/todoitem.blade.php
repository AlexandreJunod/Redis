<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RedisToDo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <a href="index.php"><div class="logo"></div></a>
        <div class="container">
            <div class="row is-center">
                <div class="todoitem col-sm-12 col-md-6 col-lg-3">
                    <table>
                        <tr>
                            <td style="width:25px;">
                                <input type="checkbox">
                            </td>
                            <td>
                                One
                            </td>
                        </tr>
                        <tr>
                            <td style="width:25px;">
                                <input type="checkbox">
                            </td>
                            <td>
                                Two
                            </td>
                        </tr>
                        <tr>
                            <td style="width:25px;">
                                <input type="checkbox">
                            </td>
                            <td>
                                Think about what to do, because i've nothing planed yet
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
