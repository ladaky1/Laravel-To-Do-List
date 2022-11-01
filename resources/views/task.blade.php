<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>
        body{
            background-color: silver;
        }
    </style>
    
    <title>To-Do list</title>
</head>
<body>
        <section style="padding-top: 60px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"><h2>All tasks</h2> 
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                  <a href="/" class="btn btn-success">Add new task</a>
                                </div>
                            </div>
                            <div class="card-body">
                                
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Task name</th>
                                            <th>Created at</th>
                                            <th>Updated at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($tasks as $task)
                                            <tr>
                                                <td>{{$task->id}}</td>
                                                <td>{{$task->name}}</td>
                                                <td>{{$task->created_at}}</td>
                                                <td>{{$task->updated_at}}</td>
                                                <td>
                                                    <a href="/edit-task/{{$task->id}}" class="btn btn-warning">Edit</a>
                                                    <a href="/delete-task/{{$task->id}}" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$tasks->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>