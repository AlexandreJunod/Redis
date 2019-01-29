@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="todoitem col-12">
                    <table>
                        @foreach($tasks as $taskId)
                            <tr>
                                <td style="width:25px;">
                                    {{--<form id="updatecheckbox" action="/tasks" method="post">--}}
                                    {{--@method('PUT')--}}
                                    {{--@csrf--}}
                                    <input value="{{ $todoId }}" name="todoId" class="hidden d-none">

                                    {{--<input type="hidden" name="checkboxesFinished[{{ $taskId }}]" value="off"/>--}}
                                    <input type="checkbox"
                                           name="checkboxesFinished[{{ $taskId }}]"
                                           value="{{ (\App\Task::getTaskFinished($taskId)) ? "on": "off" }}"
                                            {{ (\App\Task::getTaskFinished($taskId)) ? "checked": "" }}/>
                                    {{--</form>--}}
                                </td>

                                <td>
                                    {{ \App\Task::getTaskName($taskId) }}
                                </td>

                                <td>
                                    <form method="post" action="/tasks">
                                        @csrf
                                        @method("DELETE")
                                        <input value="{{ $todoId }}" name="todoId" class="hidden d-none">
                                        <input type="hidden" name="taskId" value="{{ $taskId }}"/>
                                        <button class="delete" type="submit" name="buttonTask" value="add">Supprimer
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="row justify-content-center align-items-center mt-4">
                    <form method="post" action="/tasks" id="updateForm">
                        @csrf
                        @method('PUT')
                        <input value="{{ $todoId }}" name="todoId" class="hidden d-none">
                        @foreach($tasks as $taskId)
                            <input type="hidden"
                                   name="_checkboxesFinished[{{ $taskId }}]"
                                   value="{{ (\App\Task::getTaskFinished($taskId)) ? "on": "off" }}"
                                    {{ (\App\Task::getTaskFinished($taskId)) ? "checked": "" }} />
                        @endforeach
                        <button class="update" type="submit" name="buttonTask" value="add">
                            Mettre à jour
                        </button>
                    </form>
                </div>
                </form>
            </div>
            <div class="col-4">
                <form method="post" action="/tasks">
                    @csrf
                    <input value="{{ $todoId }}" name="todoId" class="hidden d-none">
                    <div class="todoitem col-12">
                        <textarea name="newTask" rows="3" cols="60"></textarea>
                        <button class="create" type="submit" name="buttonTask" value="add">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
