function RemoveAcento(field) {
 
field = document.getElementById(field);
 
//Remove os caracteres especiais declarados abaixo:
document.getElementById(field.id).value = document.getElementById(field.id).value.replace(/[-[\]{}*+?%&amp;amp;amp;amp;@!?¨_:,;'"<>~=\\^$|#\b]/g, "");
 

//Trata as acentuações:

document.getElementById(field.id).value = document.getElementById(field.id).value.replace(/á/gi,"A");
document.getElementById(field.id).value = document.getElementById(field.id).value.replace(/à/gi,"A");
document.getElementById(field.id).value = document.getElementById(field.id).value.replace(/â/gi,"A");
document.getElementById(field.id).value = document.getElementById(field.id).value.replace(/ã/gi,"A");
document.getElementById(field.id).value = document.getElementById(field.id).value.replace(/ä/gi,"A");

//
document.getElementById(field.id).value = document.getElementById(field.id).value.replace(/é/gi,"E");
document.getElementById(field.id).value = document.getElementById(field.id).value.replace(/è/gi,"E");
document.getElementById(field.id).value = document.getElementById(field.id).value.replace(/ê/gi,"E");
document.getElementById(field.id).value = document.getElementById(field.id).value.replace(/ë/gi,"E");

//
document.getElementById(field.id).value = document.getElementById(field.id).value.replace(/í/gi,"I");
document.getElementById(field.id).value = document.getElementById(field.id).value.replace(/ì/gi,"I");
document.getElementById(field.id).value = document.getElementById(field.id).value.replace(/î/gi,"I");
document.getElementById(field.id).value = document.getElementById(field.id).value.replace(/ï/gi,"I");

//
document.getElementById(field.id).value = document.getElementById(field.id).value.replace(/ó/gi,"O");
document.getElementById(field.id).value = document.getElementById(field.id).value.replace(/ó/gi,"O");
document.getElementById(field.id).value = document.getElementById(field.id).value.replace(/ô/gi,"O");
document.getElementById(field.id).value = document.getElementById(field.id).value.replace(/ö/gi, "O");
document.getElementById(field.id).value = document.getElementById(field.id).value.replace(/õ/gi, "O");

//
document.getElementById(field.id).value = document.getElementById(field.id).value.replace(/ú/gi,"U");
document.getElementById(field.id).value = document.getElementById(field.id).value.replace(/ù/gi,"U");
document.getElementById(field.id).value = document.getElementById(field.id).value.replace(/û/gi,"U");
document.getElementById(field.id).value = document.getElementById(field.id).value.replace(/ü/gi,"U");

//
document.getElementById(field.id).value = document.getElementById(field.id).value.replace(/ç/gi,"C");
}