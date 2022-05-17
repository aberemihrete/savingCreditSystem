<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">{{ ('Employee info edit') }}</div>
 <div class="card-body">
 <form method="POST" action="{{ route('managers/update') }}">
 @csrf
 <input type="hidden" value="{{ $managers->id }}" name ='id'>
 <div class="form-group row">
 <label for="Fname" class="col-md-4 col-form-label text-md-right">{{ ('Fname') }}</label>
 <div class="col-md-6">
 <input id="Fname" type="text" class="form-control @error('Fname') is-invalid @enderror" Fname="Fname" value="{{ $managers->Fname }}" autocomplete="Fname">
 @error('Fname')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="Lname" class="col-md-4 col-form-label text-md-right">{{ ('Lname') }}</label>
 <div class="col-md-6">
 <input id="Lname" type="text" class="form-control @error('Lname') is-invalid @enderror" Lname="Lname" value="{{ $managers->Lname }}" autocomplete="Lname">
 @error('Lname')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="id" class="col-md-4 col-form-label text-md-right">{{ ('id') }}</label>
 <div class="col-md-6">
 <input id="id" type="text" class="form-control @error('id') is-invalid @enderror" Lname="id" value="{{ $managers->id }}" autocomplete="id">
 @error('id')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="sex" class="col-md-4 col-form-label text-md-right">{{ ('sex') }}</label>
 <div class="col-md-6">
 <input id="sex" type="text" class="form-control @error('sex') is-invalid @enderror" name="sex" value="{{ $managers->sex }}" autocomplete="sex">
 @error('sex')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="zone" class="col-md-4 col-form-label text-md-right">{{ ('zone') }}</label>
 <div class="col-md-6">
 <input id="zone" type="text" class="form-control @error('zone') is-invalid @enderror" name="zone" value="{{ $managers->zone }}" autocomplete="zone">
 @error('zone')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="Woreda" class="col-md-4 col-form-label text-md-right">{{ ('Woreda') }}</label>
 <div class="col-md-6">
 <input id="Woreda" type="text" class="form-control @error('Woreda') is-invalid @enderror" name="Woreda" value="{{ $managers->woreda }}" autocomplete="woreda">
 @error('Woreda')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
</div>
 <div class="form-group row">
 <label for="address" class="col-md-4 col-form-label text-md-right">{{ ('address') }}</label>
 <div class="col-md-6">
 <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $managers->address }}" autocomplete="address">
 @error('address')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
</div>
 <div class="form-group row">
 <label for="phone" class="col-md-4 col-form-label text-md-right">{{ ('phone') }}</label>
 <div class="col-md-6">
 <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $managers->phone }}" autocomplete="phone">
 @error('phone')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
</div>
 <div class="form-group row mb-0">
 <div class="col-md-6 offset-md-4">
 <button type="submit" class="btn btn-primary">
     {{ ('update') }}
 </button>
 </div>
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection