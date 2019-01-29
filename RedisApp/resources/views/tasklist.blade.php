@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-7">
                <form action="/tasks" method="post">
                    @method('PUT')
                    @csrf
                    <input value="{{ $todoId }}" name="todoId" class="hidden d-none">
                    <div class="todoitem col-12">
                        <table>
                            @foreach($tasks as $taskId)
                                <tr>
                                    <td style="width:25px;">
                                        <input type="hidden" name="checkboxesFinished[{{ $taskId }}]" value="off"/>
                                        <input type="checkbox"
                                               name="checkboxesFinished[{{ $taskId }}]"
                                                {{ (\App\Task::getTaskFinished($taskId)) ? "checked": "" }} />
                                    </td>
                                    <td>
                                        {{ \App\Task::getTaskName($taskId) }}
                                    </td>
                                    <td>
                                        <button type="submit" name="buttonTask" value="delete">Supprimer</button>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="row justify-content-center align-items-center mt-4">
                        <button type="submit" name="buttonTask" value="add">Mettre à jour</button>
                    </div>
                </form>
            </div>
            <div class="col-5">
                <form method="post" action="/tasks">
                    @csrf
                    <input value="{{ $todoId }}" name="todoId" class="hidden d-none">
                    <div class="todoitem col-12">
                        <textarea name="newTask" rows="3" cols="60"></textarea>
                        <button type="submit" name="buttonTask" value="add">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
