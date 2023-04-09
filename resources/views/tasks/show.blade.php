@extends('layoutcos')
@section('content')
<div class="panel panel-default">
   <div class="container">
      <div class="pull-right" style="float: right">
         <a class="btn btn-primary" href="{{ route('tasks.index') }}">Inapoi</a>
      </div>
      <div class="form-group">
         <strong>Comanda Numarul: </strong> {{ $task->id }}
         <br/>
         <strong>Userul: </strong> {{ $task->user->name }}
      </div>
      <div class="form-group">
         <div class="panel panel-default">
            <div class="panel-body">
               <ul class="list-group">
                  <?php $total = 0 ?>
                  @foreach (unserialize($task->cart) as $id => $details)
                  <?php $total += $details['price'] * $details['quantity'] ?>
                  <li class="list-group-item">
                     <img src={{ $details['photo'] }}>
                     <span class="badge">${{ $details['price'] }}</span>
                     {{ $details['name'] }} | {{ $details['quantity'] }} Units
                  </li>
                  @endforeach
               </ul>
            </div>
            <div class="panel-footer">
               <strong>Total Price: ${{ $total }}</strong>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection
