<!DOCTYPE html>
<html>

<body>




    <?php
    //Ejercicio 1
    /*
Crea un array asociativo con los siguientes datos y claves.
nombre: Sara, apellido: Martínez, edad: 23, ciudad: Barcelona.
Muestra los valores del array anterior uƟlizando foreach.
*/
    echo "<h1> Joan Marc Martinez Motis </h1>";
    echo "<h1>Ejercicio 1 </h1>";
    //Creacion Array asociativo
    $arrayEjercicio1 = array("nombre" => "Sara", "apellido" => "Martínez", "edad" => "23", "ciudad" => "Barcelona");
    //Foreach para recorrer el array asociativo
    foreach ($arrayEjercicio1 as $value) {
        echo "$value <br>";
    }







    //Ejercicio 2
    /*
Muestra los valores del array del ejercicio 1 mostrando la clave y el valor uƟlizando
foreach.
*/
    echo "<h1>Ejercicio 2 </h1>";
    //Foreach para recorrer el array tambien printea la clave y el valor
    foreach ($arrayEjercicio1 as $key => $value) {
        echo "$key : $value <br>";
    }







    //Ejercicio 3
    /*
Modifica la edad del primer array a 24. Vuelve a mostrar toda su información.
*/
    echo "<h1>Ejercicio 3 </h1>";
    //Dentro del Array selecciono la clave y le pongo otro valor
    $arrayEjercicio1["edad"] = "24";
    //Creo variable x que ira aumentando 
    $x = 1;
    //Foreach para recorrer el array y imprimo el valor de x para mostrar el numero de dato
    foreach ($arrayEjercicio1 as $key => $value) {
        echo "dato " . $x . "º : $value <br>";
        //Le sumo 1 a x
        $x++;
    }







    //Ejercicio 4
    /*
Borra la ciudad del array y vuelve a mostrar toda su información usando la función
var_dump.
*/
    echo "<h1>Ejercicio 4 </h1>";
    //Elimino el dato con clave ciudad con unset
    unset($arrayEjercicio1["ciudad"]);
    var_dump($arrayEjercicio1);








    //Ejercicio 5
    /*
Crear un nuevo array con un valor separado por coma a parƟr de la cadena de texto
$letters = “a,b,c,d,e,f”. Usando la función explode. Muestra su
información en orden descendente.
*/
    echo "<h1>Ejercicio 5 </h1>";
    //Creo variable String con la siguiente cadena de caracteres
    $letters = "a,b,c,d,e,f";
    //Al array le pongo como valor la explosion de la variable String letters
    //Explode separara cada valor por el separator indicado , en este caso ,
    $arrayEjercicio5 = explode(",", $letters);
    //Ordeno los valores del array al reves con rsort.
    rsort($arrayEjercicio5);
    //Cojo el numero de valores del array y los guardo en y con count
    $y = count($arrayEjercicio5);
    //Foreach para recorrer el array. Pongo la y para indicar el numero de la letra
    foreach ($arrayEjercicio5 as $key) {
        echo "letter " . $y . "º $key <br>";
        //Le resto 1 a y para ir disminuyendo su valor
        $y--;
    }








    //Ejercicio 6
    /*
Un profesor quiere registrar las notas de su clase en un array asociaƟvo. Las notas son
las siguientes:
Miguel: 5, Luís: 7, Marta: 10, Isabel: 8, Aitor: 4, Pepe: 1
Guarda los datos en un array asociaƟvo en el orden previo y muéstralos ordenados de
mayor a menor.
*/
    echo "<h1>Ejercicio 6 </h1>";
    //Creo el array asociativo
    $arrayEjercicio6 = array("Miguel" => "5", "Luis" => "7", "Marta" => "10", "Isabel" => "8", "Aitor" => "4", "Pepe" => "1");
    //Ordeno con el valor el array de manera de mayor a menor con arsort
    arsort($arrayEjercicio6);
    //Hago echo de esto para que no se repita en el foreach
    echo "Notas de los estudiantes:";
    //Foreach para recorrer el array e ir imprimiendo el nombre del estudiante y su nota
    foreach ($arrayEjercicio6 as $nombre => $value) {
        echo "$nombre : $value, ";
    }








    //Ejercicio 7
    /*
Calcula la media de las notas y muéstrala con solo 2 decimales. Además, muestra los
nombres de los alumnos cuya nota esté por encima de la media.
*/
    echo "<h1>Ejercicio 7 </h1>";
    //Creo la variable media para guardar la nota media de la clase
    $media = 0;
    //Creo la variable numEstudiantes para guardar el numero de estudiantes
    $numEstudiantes = count($arrayEjercicio6);
    //Con el foreach recorro el array y sumo el valor de las notas en la misma variable
    foreach ($arrayEjercicio6 as  $value) {
        $media = $media + $value;
    }
    //Entonces divido el valor de media con el numero de estudiantes y obtengo la media
    $media = $media / $numEstudiantes;
    //Imprimo la media de las notas pero redondeada a dos decimales con round
    echo " Media de las notas: " . round($media, 2) . " <br>";
    echo "Alumnos con nota per encima de la media: <br>";
    //hago un foreach para recorrer el array y solo imprimir los estudiantes los cuales su nota sea mayor a la media
    foreach ($arrayEjercicio6 as  $nombre => $value) {
        if ($value > $media) {
            echo "$nombre <br>";
        }
    }








    //Ejercicio 8
    /*
Busca en el array la nota más alta (debe hacerse mediante código). Muestra la nota y
el nombre del mejor alumno de la clase. Deberá funcionar para cualquier valor del
array.
*/
    echo "<h1>Ejercicio 8 </h1>";
    //Creo una variable para almacenar la nota mas alta
    $mejorNota = 0;
    //Recorro el arrray con foreach , si el valor que devuelve el array es mayor que el que esta guardado en
    //la variable, entonces este se guardara en la variable, obteniendo al final , la mejor nota
    foreach ($arrayEjercicio6 as $value) {
        if ($value > $mejorNota) {
            $mejorNota = $value;
        }
    }
    //Vuelvo a recorrer el array, si la nota guardada es igual a la que devuelve el array
    //entonces se printea el nombre del estudiante y la nota
    foreach ($arrayEjercicio6 as $nombre => $value) {
        if ($value == $mejorNota) {
            echo "La nota más alta es de $value el mejor alumno es $nombre .";
        }
    }










    //Ejercicio 9
    /*
 Una famosa tienda de cómics ha pedido una aplicación web que permita la gestión
del inventario de su tienda. Modificar tomando como base el fichero
miTiendaComics.php.
La tienda partirá de 4 cómics iniciales.
Para ello, la tienda pide realizar las siguientes tareas:
1) Calcular valor almacén total multiplicando stock por precio
a. Implementar función mostrarValorAlmacen(1 punto)
2) Para la semana del “manga”. Aplica una rebaja del 30% a todos los productos
que tengan por idioma “japonés”.
a. Arreglar la función aplicarDescuentoManga() (1 punto)
*/
    echo "<h1>Ejercicio 9 </h1>";
    // Definición del inventario de cómics
    $inventario = [
        'suspense_terror' => [
            ['titulo' => 'The Long Halloween', 'editorial' => 'DC', 'autor' => 'Tim Sale', 'idioma' => 'Inglés', 'precio' => 20, 'stock' => 10],
            ['titulo' => 'Uzumaki', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 15],
            ['titulo' => 'Tomie', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 20],
        ],
        'accion' => [
            ['titulo' => 'Berserk Deluxe Edition 1', 'editorial' => 'Dark Horse', 'autor' => 'Kentaro Miura', 'idioma' => 'Japonés', 'precio' => 30, 'stock' => 12],
        ],
        // Puedes agregar más categorías y cómics según sea necesario
    ];

    // main
    // antes descuento
    mostrarComicsEnTabla();
    mostrarValorAlmacen();
    aplicarDescuentoManga();
    // mostramos el inventario actualizado
    mostrarComicsEnTabla();
    mostrarValorAlmacen();

    function mostrarComicsEnTabla()
    {
        global $inventario;
        echo '<br>';
        echo '<table border="1">';
        echo '<tr><th>Categoría</th><th>Título</th><th>Editorial</th><th>Autor</th><th>Idioma</th><th>Precio</th><th>Stock</th></tr>';
        
        foreach ($inventario as $categoria => $comics ) {
            foreach ($comics as $comic) {
                echo '<tr>';
                echo "<td>$categoria</td>";
                echo "<td>{$comic['titulo']}</td>";
                echo "<td>{$comic['editorial']}</td>";
                echo "<td>{$comic['autor']}</td>";
                echo "<td>{$comic['idioma']}</td>";
                echo "<td>{$comic['precio']}</td>";
                echo "<td>{$comic['stock']}</td>";
                echo '</tr>';
            }
        }

        echo '</table>';
    }

    function mostrarValorAlmacen()
    {
        global $inventario;
        $total = 0;
        foreach ($inventario as $categoria => $comics ) {
            foreach ($comics as $comic) {
                // Sumamos al total multiplicando el precio por el stock
                $total += $comic['precio'] * $comic['stock'];
            }
        } 
        echo "Valor total del inventario: $total <br>";
    }
    //Usamos referencias ej: &$comic cuando queremos modificar el valor del array , sino no lo modificamos, somo lo "tomamos prestado".
    function aplicarDescuentoManga()
{
    global $inventario;
    echo "Aplicando descuento semana manga:<br>";
    foreach ($inventario as $categoria => &$comics) { // Usamos referencia aquí
        foreach ($comics as &$comic) { // También referencia aquí
            if ($comic['idioma'] == 'Japonés') {
                $comic['precio'] = $comic['precio'] * 0.7; // Aplicar descuento del 30%
                echo "Descuento aplicado a: {$comic['titulo']}<br>";
            }
        }
    }
}
    ?>

</body>

</html>