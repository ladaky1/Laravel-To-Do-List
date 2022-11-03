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
                                <h2>Add new To-Do task</h2>
                            </div>
                            <div class="card-body">
                            
                                <form method="POST" action="{{route('task.create')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name"><h5>Task Name</h4></label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Task Name" required> <br>
                                    </div>

                                    <div class="form-group">
                                        <label for="title"><h5>Task Title</h5></label>
                                        <textarea name="title" class="form-control" rows="3" placeholder="Enter Task Title" required></textarea> <br>
                                    </div>

                                    <button type="submit" class="btn btn-success"> Add new Task</button>
                                    <a href="/tasks" class="btn btn-primary">View Todos</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>