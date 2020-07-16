@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')

<link href="{{ asset('css/style.css') }}" rel="stylesheet"> 

 <form style="width:90%;" class="modal-content animate" action="action_page.php" method="post">
    <div class="imgcontainer">
       <img src="{{asset('img/logo CACI.png')}}"  alt="Logo_CDMX" style="width:70%;">
    </div>
    <div class="container">
      <label for="uname"><b>Nombre de usuario</b></label>
       <input type="text" placeholder="Nombre de usuario" name="uname" required>
       <br><br>
       <label for="psw"><b>Contraseña:</b></label>
       <input type="password" placeholder="Contraseña" name="psw" required>
        <br><br>
      <button type="submit">Entrar</button>
    <!-- <span class="psw">¿Aún no tienes cuenta? <a style="color: #00b140;" href="regístro">Regístro</a></span> -->
    </div>
  </form>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
@endsection

 

