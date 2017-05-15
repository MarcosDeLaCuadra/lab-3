

    var req = new XMLHttpRequest();

    req.open('GET', 'http://localhost/GetPost',true );

    req.onreadystatechange = function recibir(){

        if(req.readyState== 4)
        {
            //ya tengo la respuesta del servidor 
           // req.responseText
            //miDivHtml.innerHtml =req.responseText;

        }
        else{
            //miDivHtml.innerHtml='cargado';

        }
        /*
            0= open
            1=servidor
            3=cargando
            4=done

        */
    }
    req.send();