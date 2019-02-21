let post = (url = "",data = {},method = "",csrf_token = '') =>{
    return fetch(url, {
        method: method, // or 'PUT'
        headers:{
            "Content-Type": "application/json; charset=utf-8",
            'X-CSRF-TOKEN' : csrf_token
        },
        redirect: "follow", // manual, *follow, error
        referrer: "no-referrer", // no-referrer, *client
        body: JSON.stringify(data), // body data type must match "Content-Type" header
    }).then(resp => {
        if(resp.status == 500){
            return false;
        }else{
            return resp.json();
        }
    });
};

function size(data){
    var tam = 0;
    for(var i in data){
        tam++;
    }
    return tam;
}

function estado(tipo,text1 = "Activo", text2 = "Inactivo") {
    if(tipo == 1){
        return '<td><p style="color:green">'+text1+'</p></td>';
    }else{
        return '<td><p style="color:red">'+text2+'</p></td>';
    }
}

function isEmpty(obj) {
    for(var key in obj) {
        if(obj.hasOwnProperty(key))
            return false;
    }
    return true;
}


function eliminar(idProducto,idCategoria,text="",estado ="") {
    carrito = JSON.parse(localStorage.carrito);
    //delete(localStorage.carrito);
    var data = [];
    var indice = 0;
    for(var i in carrito){
        if(carrito[i].idCategoria == idCategoria && carrito[i].idProducto == idProducto){
            delete(carrito[i]);
            break;
        }
    }
    for(var i in carrito){
        if(carrito[i] != null){
            data.push({"idCategoria":carrito[i].idCategoria,"idProducto":carrito[i].idProducto});
        }
    }
    localStorage.carrito = JSON.stringify(data);
    loaderListaProductoPorComprar(text,estado);
}



function finalizada() {
    window.onfocus = vacia;
// Modificar a partir de aquí
    alert()
}
function vacia(){}