@extends('layouts.app')
@section('content')


<div class="container">


                <fieldset class="formAvaliação">
                        <legend>Avaliar</legend>
                                <label><img class="margin-foto" src="{{ url("storage/imagens/".$autonomo->foto)}}" alt="{{$autonomo->foto}}"/></label><br />
                <label><strong>Nome:</strong> {{$autonomo->user->name}}</label><br />
                <strong>Escolha uma nota de 1 a 5</strong><br />
                             Nota 1: <input name="nota" type="radio" value="1"/ >
                             Nota 2: <input name="nota" type="radio" value="2"/>
                             Nota 3: <input name="nota" type="radio" value="3"/>
                             Nota 4: <input name="nota" type="radio" value="4"/>
                             Nota 5: <input name="nota" type="radio" value="5"/>
                             <label>Escreva um comentario sobre o serviço que foi prestado.</label>
                             <textarea cols=60 name="descricao" rows="5" name="opiniao" maxlength="500" wrap="hard" placeholder="Escreva uma descrição dos serviços que você faz"></textarea>   
                </fieldset>
  

</div>


@endsection