@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
<form action="{{ route('tasks.store') }}" method="post">
  {{ csrf_field() }}
  Task name:
  <br />
  <input type="text" name="name" required />
  <br /><br />
  Task description:
  <br />
  <textarea name="description" required></textarea>
  <br /><br />
  Start time:
  <br />
  <input type="date" name="task_date" class="date" required />
  <br /><br />
  <input type="submit" value="Save" />
</form>
</div>
</div>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script>
    $('.date').datepicker({
        autoclose: true,
        dateFormat: "yy-mm-dd"
    });
</script>

@endsection