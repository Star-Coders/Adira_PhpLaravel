@extends('catalogo.home')
@section('pag')
<div class="row">
    <div class="col-12">
        {{$catalogo->links()}}
</div>
@endsection