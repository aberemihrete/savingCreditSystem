
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">{{ __('Employee Registration') }}</div>
 <div class="card-body">
 <form method="POST" action="{{ route('Employee/register') }}"
>
 @csrf
 <div class="form-group row">
 <label for="Fname" class="col-md-4 col-formlabel text-md-right">{{ __('Fname') }}</label>
 <div class="col-md-6">
 <input id="Fname" type="text" class="formcontrol @error('Fname') isinvalid @enderror" name="Fname" value="{{ old('Fname') }}" required autocomplete="F
name" autofocus>
 @error('Fname')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="Lname" class="col-md-4 col-formlabel text-md-right">{{ __('Lname') }}</label>
 <div class="col-md-6">
 <input id="Lname" type="text" class="formcontrol @error('Lname') isinvalid @enderror" name="Lname" value="{{ old('Lname') }}" required autocomplete="L
name" autofocus>
 @error('Lname')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="id" class="col-md-4 col-formlabel text-md-right">{{ __('id') }}</label>
 <div class="col-md-6">
 <input id="id" type="text" class="formcontrol @error('id') isinvalid @enderror" name="id" value="{{ old('id') }}" required autocomplete="
id" autofocus>
 @error('id')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group"> 
 <label for="sex" class="col-md-4 col-formlabel text-md-right">{{ __('sex') }}</label>
    <label class="radio-inline">
    <input type="radio" id="sex" name="sex" value="M">M</label>

    <label class="radio-inline">
    <input type="radio" id="sex" name="sex" value="F">F</label>
 </div>
 
 @csrf
 <div class="form-group row">
 <label for="address" class="col-md-4 col-formlabel text-md-right">{{ __('address') }}</label>
 <div class="col-md-6">
 <input id="address" type="text" class="formcontrol @error('name') isinvalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="
address" autofocus>
 @error('address')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="phone" class="col-md-4 col-formlabel text-md-right">{{ __('phone') }}</label>
 <div class="col-md-6">
 <input id="phone" type="text" class="formcontrol @error('phone') isinvalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="
phone" autofocus>
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
 {{ __('Register') }}
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