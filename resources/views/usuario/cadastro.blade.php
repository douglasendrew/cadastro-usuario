@extends('layout.base')
@section('title', 'Cadastro de Usuário')

@section('conteudo')
    <h2>Formulário</h2>   

    <form action="{{ route('cadastro') }}" method="post">

        {{ csrf_field() }}

        <div class="field">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" />

            @if ($errors->has('nome'))
                <div>
                    @foreach ($errors->get('nome') as $erro)
                        <strong class="error">{{ $erro }}</strong>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="field" style="margin-top: 20px;">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" />

            @if ($errors->has('email'))
                <div>
                    @foreach ($errors->get('email') as $erro)
                        <strong class="error">{{ $erro }}</strong>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="field" style="margin-top: 20px;">
            <label for="senha">Senha:</label>
            <input type="text" name="senha" id="senha" />

            @if ($errors->has('senha'))
                <div>
                    @foreach ($errors->get('senha') as $erro)
                        <strong class="error">{{ $erro }}</strong>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="field" style="margin-top: 20px;">
            <input type="submit" value="Cadastrar">
        </div>
    </form>
@endsection