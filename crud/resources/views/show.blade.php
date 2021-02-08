@extends('templates.template')

@section('content')
<h1 class="text-center"> Informações</h1>
<hr>

<div class="col-8 m-auto">
    @php
    $user=$book->find($book->id)->relUsers;
    @endphp

    <ul class="list-group">
        <li class="list-group-item">Titulo: {{$book->Titulo}} </li>
        <li class="list-group-item">Páginas: {{$book->Paginas}}</li>
        <li class="list-group-item">Preço: {{$book->Preço}} </li>
        <li class="list-group-item">Pertence a: {{$user->Nome}}</li>
        <li class="list-group-item">Email do dono: {{$user->Email}}</li>
    </ul>

    <br>


    </a>

</div>

<div class="text-center mt-3 mb-4">
    <a href="{{url("books")}}">
        <button class="btn btn-outline-primary"> Tela Inicial </button>
</div @endsection