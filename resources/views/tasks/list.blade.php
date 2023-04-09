@extends('layoutcos')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
   <p>{{ $message }}</p>
</div>
@endif
<div class="panel panel-default">
   <div class="panel-heading">
      Lista comenzilor
      <br></br>
   </div>
   <div class="panel-body">
      <table class="table table-bordered table-stripped">
         <tr>
            <th width="20">ID Comanda</th>
           
            <th>Produse</th>
            <th width="300">Actiune</th>
         </tr>
         @if (count($orders) > 0) 
         @foreach ($orders as $key => $order)
         @if ($order->user->name == Auth::user()->name)
         <tr>
            <td>{{ $order->id }}</td>
          
            <td>
             <div class="panel panel-default">
                <div class="panel-body">
                <ul class="list-group">
                <?php $total = 0 ?>
                @foreach ($order->cart as $id => $details)
                  <?php $total += $details['price'] * $details['quantity'] ?>
                     <li class="list-group-item">
                         <img src={{ $details['photo'] }} width="150px">
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
            </td>
            <td>
               <a class="btn btn-success" href="{{ route('tasks.show',$order->id) }}">Vizualizare Comanda</a><br></br>
               {{-- <a class="btn btn-primary" href="{{ route('tasks.edit',$order->id) }}">Modificare</a> --}}
               {{ Form::open(['method' => 'DELETE','route' => ['tasks.destroy', $order->id],'style'=>'display:inline']) }}
               {{ Form::submit('Anulare Comanda', ['class' => 'btn btn-danger']) }}
               {{ Form::close() }}
            </td>
         </tr>
         @endif
         @endforeach
        
         @else
         <tr>
            <td colspan="4">Nu exista comenzi!</td>
         </tr>
         @endif
      </table>
   </div>
</div>
@endsection
