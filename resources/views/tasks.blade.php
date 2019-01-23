
<div class="col-md-6" style="float:left; width:20vw;">
    <table style="border-collapse: collapse;">
        <thead>
            <tr >
                <th style="border: 1px solid grey; padding:5px 15px;"> id</th>
                <th style="border: 1px solid grey; padding:5px 15px;"> name</th>
                <th style="border: 1px solid grey; padding:5px 15px;"> counter  </th>
            </tr>
        </thead>
        <tbody>
             @foreach($tasks as $task)
              <tr>
                  <td style="border: 1px solid grey; padding:5px 15px;"> {{$task->id}} </td>
                  <td style="border: 1px solid grey; padding:5px 15px;"><a href="task/{{$task->id}}"> {{$task->name}} </a></td>
                  <td style="border: 1px solid grey; padding:5px 15px;"> {{$task->counter}} </td>
              </tr>
             @endforeach
       </tbody>
    </table>
</div>

<div class="col-md-6" style="float:left; width:20vw;">
    <table style="border-collapse: collapse;">
        <thead>
            <tr>
                <th style="border: 1px solid grey; padding:5px 15px;"> id</th>
                <th style="border: 1px solid grey; padding:5px 15px;"> task_id</th>
                <th style="border: 1px solid grey; padding:5px 15px;"> status  </th>
                <th style="border: 1px solid grey; padding:5px 15px;"> created_at </th>
            </tr>
        </thead>
        <tbody>
             @foreach($logs as $log)
              <tr>
                  <td style="border: 1px solid grey; padding:5px 15px;"> {{$log->id}} </td>
                  <td style="border: 1px solid grey; padding:5px 15px;">{{$log->task_id}}</td>
                  <td style="border: 1px solid grey; padding:5px 15px;"> {{$log->status}}</td>
                  <td style="border: 1px solid grey; padding:5px 15px;"> {{$log->created_at}}</td>
              </tr>
             @endforeach
       </tbody>
    </table>
</div>
