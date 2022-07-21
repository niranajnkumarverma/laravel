<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Laravel 8 CRUD Tutorial From Scratch</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Laravel 8 CRUD Example Tutorial</h2>
</div>

<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('customers.create') }}"> Create customer</a>
</div>
</div>
</div>
<!-- @if ($message = Session::get('success'))   
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif -->
@if (Session::has(success))
<div class="alert alert-success">{{Session::get('success')}}</div>
@endif
@if (Session::has(error))
<div class="alert alert-danger">{{Session::get('error')}}</div>
@endif
<table class="table table-bordered">
<tr>
<th>S.No</th>
<th>customer Name</th>
<th>customer Email</th>
<th>customer Address</th>
<th width="280px">Action</th>
</tr>
@foreach ($customers as $customer)
<tr>
<td>{{ $customer->id }}</td>
<td>{{ $customer->name }}</td>
<td>{{ $customer->email }}</td>
<td>{{ $customer->address }}</td>
<td>
<form action="{{ route('customers.destroy',$customer->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('customers.edit',$customer->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
<!-- {!! $customers->links() !!} -->
</body>
</html>