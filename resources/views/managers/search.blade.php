@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('managers Detail') }}
 </div>
 <div class="card-body">
 id : {{ $managers->id }}
 <br>
 Fname : {{ $managers->Fname }}
 <br>
 <br>
 Lname : {{ $managers->Lname }}
 <br>
 sex : {{ $managers->sex }}
 <br>
 zone : {{ $managers->zone }}
 <br>
 woreda : {{ $managers->woreda }}
 <br>
 <br>
 address : {{ $managers->address }}
 <br>
 phone : {{ $managers->phone }}
 <br>
 </div>
 </div>
 </div>
 </div>
</div>
<div class="container ">
 <div class="col-md-8">
 <a class="btn btnsuccess" href="{{ route('managers/list') }}" role="button"> {{ __('Back') }}</a>
 </div>
</div>
@endsection