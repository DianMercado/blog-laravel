@extends('layouts.app')
@section('title', 'Trainers Edit')
@section('content')
{!!Form::model($trainer,['route'=>['trainers.update',$trainer],'method'=>'PUT','files'=>true])!!}
@include('form')
{{Form::submit('Actualizar',['class'=>'btn btn-primary'])}}
{!!Form::close()!!}
@endsection
