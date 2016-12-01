@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
				<h3>Task List</h3>
				</div>
				<div class="panel-body">
				<form action="{{url('/')}}">
				<div class="form-group">

				</div>
				</form>

				<table class="table">
				<tr>
				<td>SL</td>
				<td>Name</td>
				<td>Status</td>
				<td>Action</td>
				</tr>
                  <?php $i=1; ?>

                  	 @foreach($data as $row)
                  	 <tr>
                  	 <td> {{ $i }}</td>
                  	 <td> {{ $row->name }}</td>
                  	 <td> {{ $row->status }}</td>
                  	 <td>
                          <a href="#" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger">Delete</a>
                  	 </td>
                  	 </tr>
                  	 <?php $i++; ?>
                  	 @endforeach

				</table>




				</div>
			</div>



		</div>
	</div>
</div>
@endsection
