document.addEventListener('DOMContentLoaded', function(){
    form_connect_login = document.getElementById('form_connect_login');
    if(form_connect_login){
        form_connect_login.addEventListener('submit', function(e){
            e.preventDefault();
            connect_user_login();
        });

        }
    });


    function connect_user_login(){
        loader_action_status('show');
        url = base+'/api-js/connect/login';
        
        var http = new XMLHttpRequest();
        http.open('POST', url, true);
        http.setRequestHeader('X-CSRF-TOKEN', csrftoken);
        http.onreadystatechange = function(){
            if(this.readyState == '4' && this.status == "200"){
                data = this.responseText;
                data = JSON.parse(data);
                if(data.type == "error"){
                    mdalert(data);
                }
                if(data.type == "success"){
                    window.location.href = base;
                }

            }
            if(this.status != 200){
                mdalert({title: 'MIE Tienda', type: 'error', msg: 'Ha ocurrido un error'});
                //mdalert({tittle: 'alert', type: 'error', msg: 'Ha ocurrido un error desconocido'})
                alert('Usuario o clave Incorrecto');
            }
            loader_action_status('hide');
        }
        http.send(new FormData(document.getElementById('form_connect_login')));
    }