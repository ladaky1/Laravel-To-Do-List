<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>To-Do list</title>
</head>
<body>
        <section style="padding-top: 60px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            <div class="card-header">
                                <h2>Edit task</h2>
                            </div>
                            <div class="card-body">
                        
                                <form method="POST" action="{{route('task.update')}}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$task->id}}">
                                    <div class="form-group">
                                        <label for="name"><h5>Edit Name</h5></label> 
                                        <input type="text" name="name" class="form-control" placeholder="Edit Task Name" value="{{$task->name}}" > <br>
                                    </div>

                                    <div class="form-group">
                                        <label for="title"><h5>Edit Title</h5></label>
                                        <textarea name="title" class="form-control" rows="3">{{$task->title}}</textarea> <br>
                                    </div>

                                    <div class="form-group">
                                        <label for="status"><h5>Status</h5></label>
                                        <select name="is_completed" class="form-control">
                                            <option value="1">Completed</option>
                                            <option value="0">Incompleted</option>
                                        </select>
                                    </div> <br>

                                    <button type="submit" class="btn btn-success"> Edit task</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>