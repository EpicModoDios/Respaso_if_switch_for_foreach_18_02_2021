

   <?php

    //COMO FUNCIONA EL CONDICIONAL "SWITCH"
    //EJEMPLO 1
    $usuario = (string) 'Thomas';
    switch ($usuario) {
        case 'Thomas':
            print_r(AccesoCorrecto($usuario));
            break;
        case 'Juan Diego':
            print_r(AccesoCorrecto($usuario));
            break;
        case 'Miguel':
            print_r(AccesoCorrecto($usuario));
            break;
        default:
            print_r(AccesoDenegado($usuario));
            break;
            }
    function AccesoCorrecto($usu){
        return (string) <<<FIN
            El usuario $usu tiene permiso de entrar al Discord
FIN;
            }
    function AccesoDenegado($usu){
        return (string) <<<FIN
            El usuario $usu no tiene permiso de ingresar al Discord
FIN;
            }


    //EJEMPLO 2
    $ListaNombres = (array) ["Thomas","Juan Diego"];
    switch ($ListaNombres) {
        case "Thomas":
                print_r("Hola Thomas");
            break;
        case "Juan Diego":
                print_r("Hola Juan Diego");
            break;
        case ["Thomas","Juan Diego"]:
                print_r("Hola a todos ");
            break;
        default:
        print_r("Identifiquese Correctamente Por Favor");
            break;
}


    //COMO FUNCIONA EL CICLO "FOR"
    //EJEMPLO 1
    for ($i=0; $i < 10; $i++) { 
        $cadena = <<<FIN
        $i <br>
FIN;
            print_r($cadena);
            goto CICLOFOR;
        }
    CICLOFOR: //Esto es un "label" Sirve para definir y llamar al Ciclo 


    //EJEMPLO 2
    
    for ($N=0; $N < 10; $N++) { 
        $NUMERO = <<<FIN
        $N <br>
FIN;
        if($N==3){
            print_r($NUMERO);
            goto ciclos;
        }
        
         
    }
    ciclos:
    for ($x=0; true;) { 
        print_r("Esto es el segundO Ciclo $x <br>");
        break;
    }


    //EJEMPLO 3
    $i=0;

    ciclos2:
    for ($u; $u <= 10;) { 
        $cadena2 = <<<FIN
        $u <br>
FIN;
        print_r($cadena2);
        ++$u;
        goto ciclos2;
    }


    //COMO FUNCIONA EL "FOR EACH"
    $lista = (array) ["Miguel", "Thomas", "William"];

    foreach ($lista as $key => $value) {
        $cadena = (string) <<<FIN
        $value <br>
FIN;
        print_r($cadena);
    }
    
?>