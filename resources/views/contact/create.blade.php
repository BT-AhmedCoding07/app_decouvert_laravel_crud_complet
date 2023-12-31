@extends('layout')

@section('content')
<h1>Contactez-nous!!!</h1> 
@if (!session()->has('message'))
    <form action="/contact" method="POST">
        @csrf
        <div class="form-group row">
            <div class="col-md-12">
                <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" placeholder="Votre pseudo..." value="{{ old('name')}}">
                @error('name')
                <div class="invalid-feedback">
                        {{$errors->first('name')}}
                </div>
                @enderror
            </div>
        </div>
        <br>
        <div class="form-group row">
            <div class="col-md-12">
                <input type="email" class="form-control @error('email') is-invalid @enderror"  name="email" placeholder="Votre email..." value="{{ old('email')}}">
                @error('email')
                <div class="invalid-feedback">
                        {{$errors->first('email')}}
                </div>
                @enderror
            </div>
        </div>
        <br>
        <div class="form-group row">
            <div class="col-md-12">
                <textarea class="form-control  @error('message') is-invalid @enderror" cols="30" rows="10" name="message">
                    {{ old('message') }}
                </textarea>
                @error('message')
                <div class="invalid-feedback">
                        {{$errors->first('message')}}
                </div>
                @enderror
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Envoyer votre message</button>
    </form> 
@endif

@endsection

