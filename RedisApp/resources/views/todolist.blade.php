@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row is-center">
        <div class="addtodo col-6">
            Number of todos : {{ count($todos) }}
        </div>
        <div class="addtodo col-6">
            <form action="/todolist/add">
                <button class="create" type="button" name="button">New todo</button>
            </form>
        </div>
        @foreach ($todos as $todoId)
            <div class="todolist col-sm-12 col-md-6 col-lg-3">
                <div class="labelitem">
                    <a href="/tasks/{{ $todoId }}">
                        {{ \App\Todo::getTodoTitle($todoId) }}
                        {{ \App\Todo::getTodoDate($todoId) }}
                    </a>
                </div>
                <div class="progressbar">
                    <div class="progressbarresult" style='width:50%'></div>
                    <div class="progressbarlabel">50%</div>
                </div>
                <div class="buttonholder">
                <button class="delete">Supprimer</button></div>
            </div>
        @endforeach
    </div>
</div>
@endsection
