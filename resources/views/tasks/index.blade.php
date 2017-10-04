<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

			<ul>
                @foreach($tasks as $task)

                    <li>
                        <a href="/blog/public/tasks/{{$task->id}}">
                        	{{$task->body}}
                        </a>
                    </li>
                @endforeach

            </ul>

            <ul>
                @foreach($tasks as $task)

                    <li>
                        {{$task = App\Task::WhereLessId()}}
                    </li>
                @endforeach

            </ul>

            <ul>
              
                    <li>
                        {{$task = App\Task::WhereLessId()}}
                    </li>

                    <li>
                        {{$task = App\Task::WhereMoreId()}}
                    </li>
              
              		<li>
                        {{$task = App\Task::NotCompleted()}}
                    </li>

                    <li>
                        {{$task = App\Task::InComplete()->get()}}
                    </li>

                    <li>
                        {{$task = App\Task::FindBody()}}
                    </li>

                    <li>
                        {{$task = App\Task::FindLastBody()}}
                    </li>

                 
                  
            </ul>



             <ul>
                @foreach($tasks as $task)

                    <li>
                        {{$task = App\Task::FindBody()}}
                    </li>
                @endforeach

            </ul>

        
            <ul>
                @foreach($tasks as $task)

                    <li>
                        {{$task->body}}
                    </li>
                @endforeach

            </ul> 
          

             

             

          

</body>
</html>