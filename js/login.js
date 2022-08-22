const btn_login = document.getElementById('btn-login');

btn_login.addEventListener('click', login);



function login(e){
   
    e.preventDefault();

    const usuario = document.getElementById('usuario').value.trim();
    const password = document.getElementById('password').value.trim();
    
    const guardar_sesion = document.getElementById('guardar_sesion').checked;

    const mensaje = document.getElementById('mensaje');

    
    //direccion base
    const url_home = document.getElementById('url').value;


    document.getElementById('mensaje').innerText = '';
    mensaje.classList.remove('alert', 'alert-danger', 'mensaje');
    

    if(usuario.length < 1){
        mensaje.classList.add('alert', 'alert-danger');
        document.getElementById('mensaje').innerText = 'Ingresar Usuario JS';
        return;
    }
    if(password.length < 1){
        mensaje.classList.add('alert', 'alert-danger');
        document.getElementById('mensaje').innerHTML = 'Ingresar Password JS';
        return;
    }

    const url = 'login/iniciar_sesion';
    const xhttp = new XMLHttpRequest();
     
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            //console.log(typeof this.responseText);
            
            let respuesta = JSON.parse(this.responseText);
            //console.log('respuesta' + typeof respuesta);
            //console.log('respuesta' + respuesta['respuesta']);
            
            if (respuesta['codigo'] == "0"){
                mensaje.classList.add('alert', 'alert-danger');
                document.getElementById('mensaje').innerText = respuesta['respuesta'];
            }else if(respuesta['codigo'] == "1"){
                //console.log(url_home);
                window.location.href = url_home;
                
            }else{
                mensaje.classList.add('alert', 'alert-danger');
                document.getElementById('mensaje').innerText = "Algo salió mal, intenta de nuevo";
            }

             
        }
    }
    

    xhttp.open('POST', url, true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("&usuario=" + usuario +"&password=" + password +"&guardar_sesion="+ guardar_sesion);

    
}