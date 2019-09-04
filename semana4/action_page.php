<? php
	echo  " Su Nombre es: " . $ _GET [ ' Nombre ' ];
	$ archivo = fopen ( ' usuario.txt ' , ' a ' );
	fwrite ( $ archivo , $ _GET [ ' Nombre ' ] . " \ n " );
? >
