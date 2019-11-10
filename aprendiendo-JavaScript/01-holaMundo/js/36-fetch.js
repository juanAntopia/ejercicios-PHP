'use strict'

window.addEventListener('load', () => {
    var listado_usuarios = document.querySelector('#listado-usuarios');
    var usuario_janet = document.querySelector('#janet');
    var usuario_profesor = document.querySelector('#profesor');
    
    getUsers()
        .then(data => data.json())
        .then(users => {
            usersList(users.data);

            return getInfo();
        })
    
        .then(data => {
            usuario_profesor.innerHTML = data;
            return getJanet();
        })
    
    getJanet()
        .then(data => data.json())
        .then(janet => {
            janetUser(janet.data);
        })
        .catch(error => {
            alert('error en las peticiones');
        });
        
    
    function getUsers() {
        return fetch('https://reqres.in/api/users');
    }

    function getJanet() {
        return fetch('https://reqres.in/api/users/2');
    }

    function getInfo() {
        var profesor = {
            nombre: "Juan",
            apellidos: "Hernández",
            email: "juan_27angel@hotmail.com"
        };

        return new Promise((resolve, reject) => {
            var profesor_string = "";
            setTimeout(function(){
                profesor_string = JSON.stringify(profesor);

                if (typeof profesor_string != "string" || profesor_string == '') return reject('error');

                return resolve(profesor_string);
            }, 3000);

        });        
    }

    function usersList(usuarios) {
        usuarios.map((user, i) => {
            var nombre = document.createElement('h4');
            nombre.innerHTML = user.first_name + " " + user.last_name;
            listado_usuarios.appendChild(nombre);

            document.querySelector('.loading').style.display = "none";
        });   
    }

    function janetUser(user) {
        
        var nombre = document.createElement('h5');
        var avatar = document.createElement('img');

        nombre.innerHTML = user.first_name + " " + user.last_name;
        avatar.src = user.avatar;
        avatar.width = '100';
        avatar.height = '100';
        usuario_janet.appendChild(nombre);
        usuario_janet.appendChild(avatar);
        

        document.querySelector('#janet .loading').style.display = "none";
    }
    

});