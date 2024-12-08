<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

{{-- @php
  $tasks = [];
@endphp
@forelse ($tasks as $task)
  ・{{$task->task}} <br>
@empty
  検索結果はありません<br>
@endforelse --}}


  {{-- @foreach ($tasks as $task)
      ・{{$task->task}}<br>
  @endforeach --}}

  {{-- loopで表示 --}}
  {{-- @foreach ($tasks as $task)
    {{$loop->iteration}}: {{$task->task}} <br>
  @endforeach --}}

  @foreach ($tasks as $task)
    ・{{Str::limit($task->task, 10)}} <br>
  @endforeach

  {{-- リンク作成 --}}
  {{-- {{html()->a('/', 'トップ')}} --}}
  {{-- セレクトタブを出力 --}}
  {{html()->select('task', Arr::pluck($tasks, 'task'))}}

</body>
</html>