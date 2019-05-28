$(document).ready(function(){
    setInterval(
        function(){
            $('#seccionRecargar').load('http://192.168.1.107/referidos/public/vicidial');
        },5000
    );
});