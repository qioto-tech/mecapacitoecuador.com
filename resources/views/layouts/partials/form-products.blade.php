@include('order.partials.errors')


{!! Form::open(['route' => 'order.store', 'method' => 'POST','id' => 'DataG', 'class'=>'form-horizontal']) !!}

  <div id="content-frm">
  </div>


{!!	csrf_field() !!}
{!! Form::close() !!}
