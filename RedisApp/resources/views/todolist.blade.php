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
                <div class="addtodo col-6">
                    Number of todos : 5
                </div>
                <div class="addtodo col-6">
                    <form action="/todolist/add">
                        <button type="button" name="button">New todo</button>
                    </form>
                </div>
                <div class="todolist col-sm-12 col-md-6 col-lg-3">
                    <div class="labelitem"><a href="/todoitem">Maths</a></div>
                    <div class="progressbar">
                        <div class="progressbarresult" style='width:50%'></div>
                        <div class="progressbarlabel">50%</div>
                    </div>
                </div>
                <div class="todolist col-sm-12 col-md-6 col-lg-3">
                    <div class="labelitem"><a href="/todoitem">Physique</a></div>
                    <div class="progressbar">
                        <div class="progressbarresult" style='width:37%'></div>
                        <div class="progressbarlabel">37%</div>
                    </div>
                </div>
                <div class="todolist col-sm-12 col-md-6 col-lg-3">
                    <div class="labelitem"><a href="/todoitem">Science</a></div>
                    <div class="progressbar">
                        <div class="progressbarresult" style='width:71%'></div>
                        <div class="progressbarlabel">71%</div>
                    </div>
                </div>
                <div class="todolist col-sm-12 col-md-6 col-lg-3">
                    <div class="labelitem"><a href="/todoitem">Geometrie</a></div>
                    <div class="progressbar">
                        <div class="progressbarresult" style='width:13%'></div>
                        <div class="progressbarlabel">13%</div>
                    </div>
                </div>
                <div class="todolist col-sm-12 col-md-6 col-lg-3">
                    <div class="labelitem"><a href="/todoitem">Geometrie</a></div>
                    <div class="progressbar">
                        <div class="progressbarresult" style='width:13%'></div>
                        <div class="progressbarlabel">13%</div>
                    </div>
                </div>
                <div class="todolist col-sm-12 col-md-6 col-lg-3">
                    <div class="labelitem"><a href="/todoitem">Geometrie</a></div>
                    <div class="progressbar">
                        <div class="progressbarresult" style='width:13%'></div>
                        <div class="progressbarlabel">13%</div>
                    </div>
                </div>
                <div class="todolist col-sm-12 col-md-6 col-lg-3">
                    <div class="labelitem"><a href="/todoitem">Geometrie</a></div>
                    <div class="progressbar">
                        <div class="progressbarresult" style='width:13%'></div>
                        <div class="progressbarlabel">13%</div>
                    </div>
                </div>
                <div class="todolist col-sm-12 col-md-6 col-lg-3">
                    <div class="labelitem"><a href="/todoitem">Geometrie</a></div>
                    <div class="progressbar">
                        <div class="progressbarresult" style='width:13%'></div>
                        <div class="progressbarlabel">13%</div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
