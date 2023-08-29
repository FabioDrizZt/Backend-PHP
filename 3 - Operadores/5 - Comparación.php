<?php

// --------------------------------
// -- Comparación
// --------------------------------

/*
== ¿Son los valores iguales?
=== ¿Son los valores iguales y del mismo tipo?
!= ¿Los valores no son iguales entre sí?
<> ¿Los valores no son iguales entre sí?
!== ¿Los valores no son iguales y del mismo tipo?
> El valor es mayor que
>= El valor es mayor o igual que
< El valor es menor que
<= El valor es menor o igual que
*/

var_dump(8.000=="8");
var_dump(8.0000===8.0);
var_dump(8!="8.0");
var_dump(8<>8);
var_dump(8!=="8.0");
var_dump(8!==8);
var_dump(8>8);
var_dump(8>=8);
var_dump(8<8);
var_dump(8<=8);