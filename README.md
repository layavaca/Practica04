# Practica04
 Con base al archivo PHP (Apuntes y ejercicios), se pide realizar los siguientes ajustes: 
 
a) Agregar roles a la tabla usuario. Un usuario puede tener un rol de “admin” o “user” b) Los usuarios con rol de “admin” pueden: modificar, eliminar y cambiar la contraseña de cualquier usuario de la base de datos. c) Los usuarios con rol de “user” pueden modificar, eliminar y cambiar la contraseña de su usuario. 
 
Luego, con base a estos ajustes realizados, se pide desarrollar una aplicación web usando PHP y Base de Datos que permita gestionar reuniones entre usuarios de la aplicación. De las reuniones se desea conocer la fecha y hora, lugar, coordenadas (latitud y longitud) remitente (quien invita), invitados (quienes asisten), motivo de la reunión y observaciones.  
 
Para lo cuál, se pide como mínimo los siguientes requerimientos: 
 
Usuario con  rol de user: 
 
d) Visualizar en su pagina principal (index.php) el listado de todas las reuniones agendadas, ordenados por las más recientes. e) Crear reuniones e invitar a otros usuarios de la aplicación web. f) Buscar en las reuniones agendadas. La búsqueda se realizará por el motivo de la reunión y se deberá aplicar Ajax para la búsqueda. g) Modificar los datos del usuario. h) Cambiar la contraseña del usuario. 
 
Usuario con rol de admin: 
 
i) No puede recibir ni invitar a reuniones. j) Visualizar en su pagina principal (index.php) el listado de todas las reuniones existentes, ordenados por los más recientes. k) Eliminar las reuniones de los usuarios con rol “user”. l) Eliminar, modificar y cambiar contraseña de los usuarios con rol “user”. 
 
Por último, se debe aplicar parámetros de seguridad a través del uso de sesiones. Para lo cuál, se debe tener en cuenta: 
 
m) Un usuario “anónimo”, es decir, un usuario que no ha iniciado sesión puede acceder únicamente a los archivos de la carpeta pública. 
