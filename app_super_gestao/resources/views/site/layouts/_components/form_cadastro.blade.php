
{{ $slot }}
<form action={{ route('site.cadastro') }} method="post">
    
    @csrf
    <input name="email" type="text" placeholder="E-mail" class="{{ $classe }}">
    <br>
    <input name="senha" type="text" placeholder="Senha" class="{{ $classe }}">
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
    <p> Já tem uma conta? realize seu <a href="{{ route('site.login') }}">login</a></li></p>
</form>