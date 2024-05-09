
{{ $slot }}
<form action={{ route('site.login') }} method="post">
    
    @csrf
    <input name="email" type="text" placeholder="E-mail" class="{{ $classe }}">
    <br>
    <input name="senha" type="text" placeholder="Senha" class="{{ $classe }}">
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
    <p> Não tem uma conta? realize seu <a href="{{ route('site.cadastro') }}">cadastro</a></li></p>
</form>