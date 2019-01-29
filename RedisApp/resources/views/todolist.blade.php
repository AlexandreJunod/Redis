@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row is-center">
        <div class="addtodo col-6">
            Number of todos : {{ count($todos) }}
        </div>
        <div class="addtodo col-6">
            <form action="/todo/add" method="post">
                @csrf
                <input type="text" name="newTodo">
                <button class="create" name="button">New todo</button>
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
                <div class="buttonholder">
                    <form action="/todo/destroy" method="post">
                        @csrf
                        <button name="todoId" value="{{$todoId}}" class="delete">Supprimer</button></div>
                    </form>
                </div>
        @endforeach
    </div>
</div>
@endsection
