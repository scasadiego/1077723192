function consumirApi(endPoint){
    fetch(endPoint)
        .then(response => response.json())
        .then(Usuarios=>{
            var mayor=usuario.cantidad;
            Usuarios.forEach(usuario => {
                const current= usuario.cantidad;
                if(current>mayor){
                    mayor=current;
                }
            });
        })
    return mayor;
}