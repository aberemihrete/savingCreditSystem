@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">{{ __('managers  Edit') }}</div>
 <div class="card-body">
 <form method="POST" action="{{ route('managers/register') }}"
>
 @csrf
 <div class="form-group row">
 <label for="Fname" class="col-md-4 col-formlabel text-md-right">{{ __('Fname') }}</label>
 <div class="col-md-6">
 <input id="Fname" type="text" class="formcontrol @error('name') isinvalid @enderror" name="Fname" value="{{ old('Fname') }}" required autocomplete="
Fname" autofocus>
 @error('Fname')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="Lname" class="col-md-4 col-formlabel text-md-right">{{ __('Lname') }}</label>
 <div class="col-md-6">
 <input id="Lname" type="text" class="formcontrol @error('name') isinvalid @enderror" name="Lname" value="{{ old('Lname') }}" required autocomplete="
Lname" autofocus>
 @error('Lname')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
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
 <div class="form-group row">
 <label for="sex" class="col-md-4 col-formlabel text-md-right">{{ __('sex') }}</label>
 <div class="col-md-6">
 <input id="sex" type="text" class="formcontrol @error('name') isinvalid @enderror" name="sex" value="{{ old('sex') }}" required autocomplete="
sex" autofocus>
 @error('sex')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="zone" class="col-md-4 col-formlabel text-md-right">{{ __('zone') }}</label>
 <div class="col-md-6">
 <input id="zone" type="text" class="formcontrol @error('zone') isinvalid @enderror" name="zone" value="{{ old('zone') }}" required autocomplete
="zone">
 @error('zone')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="woreda" class="col-md-4 col-formlabel text-md-right">{{ __('woreda') }}</label>
 <div class="col-md-6">
 <input id="woreda" type="text" class="formcontrol @error('woreda') isinvalid @enderror" name="woreda" value="{{ old('woreda') }}" required autocomplete
="woreda">
 @error('woreda')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="address" class="col-md-4 col-formlabel text-md-right">{{ __('address') }}</label>
 <div class="col-md-6">
 <input id="address" type="text" class="formcontrol @error('quantity') isinvalid @enderror" name="address" value="{{ old('address') }}" required autocomplete
="address">
 @error('address')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
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
 {{ __('Update') }}
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