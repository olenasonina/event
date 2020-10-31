@extends('master')

@section('title', 'MyEvent')

@section('content')

<div class="main" id="home">
    <div class="container h100">
        <div class="contentBox h100"></div>
    </div>
</div>
<div class="container-fluid">
<div class="board-main-content" style="height: 100vh">
    <div class="board-header"></div>
    <div class="board-desk">
        <div id="board">
            <div class="list-wrapper">
                <div class="todo_list">
                    <div class="todo_head">
                        <div class="icon">
                        <i class="far fa-calendar-alt"></i>
                        </div>
                        <div class="todo_text">My text</div>
                    </div>
                    <div class="todo_add">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        <div class="input-group">
                            <input type="text" class="form-control" name="task_detail" id="task_name" placeholder="Start typing here to create a task" aria-label="" aria-describedby="basic-addon1">
                            <div class="input-group-append">
                                <button class="btn" type="button" id="task_add_btn">Add Task</button>
                            </div>
                        </div>
                    </div>
                    <div class="task_list">
                        <ul class="list_group" id="list_group">    
                            <li class="list_item" id="list_item">
                                <input type="checkbox">
                                <a href="#" style="" data-id="">My task</a>
                                <div class="icon_group">
                                    <div class="arrows">
                                    <i class="fas fa-sort-up"></i>
                                    <i class="fas fa-sort-down"></i>
                                    </div>
                                    <div class="edit"><i class="fas fa-pen"></i></div>
                                    <div class="delite"><i class="fas fa-trash-alt"></i></div>
                                </div>                                    
                            </li>
                            <li class="list_item" id="list_item">
                                <input type="checkbox">
                                <a href="#" style="" data-id="">My task</a>
                                <div class="icon_group">
                                    <div class="arrows">
                                    <i class="fas fa-sort-up"></i>
                                    <i class="fas fa-sort-down"></i>
                                    </div>
                                    <div class="edit"><i class="fas fa-pen"></i></div>
                                    <div class="delite"><i class="fas fa-trash-alt"></i></div>
                                </div>                                    
                            </li>
                        </ul>    
                    </div>
                </div>
            </div>
            <div class="list-wrapper">
                <div class="todo_list">
                    <div class="todo_head">
                        <div class="icon">
                        <i class="far fa-calendar-alt"></i>
                        </div>
                        <div class="todo_text">My text</div>
                    </div>
                    <div class="todo_add">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        <div class="input-group">
                            <input type="text" class="form-control" name="task_detail" id="task_name" placeholder="Start typing here to create a task" aria-label="" aria-describedby="basic-addon1">
                            <div class="input-group-append">
                                <button class="btn" type="button" id="task_add_btn">Add Task</button>
                            </div>
                        </div>
                    </div>
                    <div class="task_list">
                        <ul class="list_group" id="list_group">    
                            <li class="list_item" id="list_item">
                                <input type="checkbox">
                                <a href="#" style="" data-id="">My task</a>
                                <div class="icon_group">
                                    <div class="arrows">
                                    <i class="fas fa-sort-up"></i>
                                    <i class="fas fa-sort-down"></i>
                                    </div>
                                    <div class="edit"><i class="fas fa-pen"></i></div>
                                    <div class="delite"><i class="fas fa-trash-alt"></i></div>
                                </div>                                    
                            </li>
                            <li class="list_item" id="list_item">
                                <input type="checkbox">
                                <a href="#" style="" data-id="">My task</a>
                                <div class="icon_group">
                                    <div class="arrows">
                                    <i class="fas fa-sort-up"></i>
                                    <i class="fas fa-sort-down"></i>
                                    </div>
                                    <div class="edit"><i class="fas fa-pen"></i></div>
                                    <div class="delite"><i class="fas fa-trash-alt"></i></div>
                                </div>                                    
                            </li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    <!-- Тут будет ToDo лист со всеми сервисами, для того, чтобы добавлять задачи по каждому из них, а также живочат с менеджером.
    <br>
    <form action="{{ route('index') }}" method="POST">
        <button type="submit" class="btn btn-danger">На главную</button>
        @csrf
    </form> -->
</div>




@endsection  