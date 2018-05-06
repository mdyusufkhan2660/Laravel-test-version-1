<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <ul>
        @foreach($tasks as $task)
            <li>
            	<a href="/tasks/{{ $task->id }}">
            		{{ $task->id }}
            	</a>
            </li>
        @endforeach
    </ul>
</body>
</html>