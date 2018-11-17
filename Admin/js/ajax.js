// JavaScript Document
 
// Función para recoger los datos de PHP según el navegador, se usa siempre.
function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
 
	try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		xmlhttp = false;
	}
}
 
if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
 
//Función para recoger los datos del formulario y enviarlos por post  
function enviarDatos(){
 
  //div donde se mostrará lo resultados
  divResultado = document.getElementById('resultado');
  //recogemos los valores de los inputs
  servicio_afectado=document.nuevo_evento.servicio_afectado.value;
  tipo_afectacion=document.nuevo_evento.tipo_afectacion.value;
  capa_afectada=document.nuevo_evento.capa_afectada.value;
  componente_afectado=document.nuevo_evento.componente_afectado.value;
  descripcion=document.nuevo_evento.descripcion.value;
  causa_origen=document.nuevo_evento.causa_origen.value;
  solucion_aplicada=document.nuevo_evento.solucion_aplicada.value;
  num_rcc=document.nuevo_evento.num_rcc.value;
  escalado_adm=document.nuevo_evento.escalado_adm.value;
  num_ticket=document.nuevo_evento.num_ticket.value;
  identificacion_incidente=document.nuevo_evento.identificacion_incidente.value;
  area_solucionadora=document.nuevo_evento.area_solucionadora.value;
  observaciones=document.nuevo_evento.observaciones.value;
  class_incidente=document.nuevo_evento.class_incidente.value;
  tipo_falla=document.nuevo_evento.tipo_falla.value;
  region=document.nuevo_evento.region.value;
  agencia=document.nuevo_evento.agencia.value;
  escalamiento_F=document.nuevo_evento.escalamiento_F.value;
  escalamiento_J=document.nuevo_evento.escalamiento_J.value;
  reportado=document.nuevo_evento.reportado.value;
  incidente=document.nuevo_evento.incidente.value;
  impacto=document.nuevo_evento.impacto.value;
  nombre_consultor=document.nuevo_evento.nombre_consultor.value;




 
  //instanciamos el objetoAjax
  ajax=objetoAjax();
 
  //uso del medotod POST
  //archivo que realizará la operacion
  //registro.php
  ajax.open("POST", "registro.php",true);
  //cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
  ajax.onreadystatechange=function() {
	  //la función responseText tiene todos los datos pedidos al servidor
  	if (ajax.readyState==4) {
  		//mostrar resultados en esta capa
		divResultado.innerHTML = ajax.responseText
  		//llamar a funcion para limpiar los inputs
		LimpiarCampos();
	}
 }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores a registro.php para que inserte los datos
	ajax.send("&servicio_afectado="+servicio_afectado+"&tipo_afectacion="+tipo_afectacion+"&capa_afectada="+capa_afectada+"&componente_afectado="+componente_afectado+"&descripcion="+descripcion
    +"&causa_origen="+causa_origen+"&solucion_aplicada="+solucion_aplicada+"&num_rcc="+num_rcc+"&escalado_adm="+escalado_adm+"&num_ticket="+num_ticket
    +"&identificacion_incidente="+identificacion_incidente+"&area_solucionadora="+area_solucionadora+"&observaciones="+observaciones+"&class_incidente="+class_incidente+"&tipo_falla="+tipo_falla
    +"&region="+region+"&agencia="+agencia+"&escalamiento_F="+escalamiento_F+"&escalamiento_J="+escalamiento_J+"&reportado="+reportado
    +"&incidente="+incidente+"&impacto="+impacto+"&nombre_consultor="+nombre_consultor)
}
 
//función para limpiar los campos
function LimpiarCampos(){
  document.nuevo_evento.servicio_afectado.value="";
  document.nuevo_evento.tipo_afectacion.value="";
  document.nuevo_evento.capa_afectada.value="";
  document.nuevo_evento.componente_afectado.value="";
  document.nuevo_evento.descripcion.value="";
  document.nuevo_evento.causa_origen.value="";
  document.nuevo_evento.solucion_aplicada.value="";
  document.nuevo_evento.num_rcc.value="";
  document.nuevo_evento.escalado_adm.value="";
  document.nuevo_evento.num_ticket.value="";
  document.nuevo_evento.identificacion_incidente.value="";
  document.nuevo_evento.area_solucionadora.value="";
  document.nuevo_evento.observaciones.value="";
  document.nuevo_evento.class_incidente.value="";
  document.nuevo_evento.tipo_falla.value="";
  document.nuevo_evento.region.value="";
  document.nuevo_evento.agencia.value="";
  document.nuevo_evento.escalamiento_F.value="";
  document.nuevo_evento.escalamiento_J.value="";
  document.nuevo_evento.reportado.value="";
  document.nuevo_evento.incidente.value="";
  document.nuevo_evento.impacto.value="";
  document.nuevo_evento.nombre_consultor.value="";
  document.nuevo_evento.servicio_afectado.focus();
}