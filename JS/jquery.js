$(function() {//para que realize esto despues de cargar el DOM
    $("#test").html("Funciona!");
});

$(function() {//para ver los atributos de un elemento attr, class, id, etc.
  var val = $("p").attr("id");
  alert(val);
});
// alerts "www.sololearn.com"

$(function() {// tambien puedes modificar los atributos de un elemento
//  $("a").attr("href", "http://www.jquery.com");
});


$(function() {// Y borrar atributos de elementos
    $("table").removeAttr("border");
    $("table").removeAttr("class");
});

$(function() {
  $("#test").append("<br>Perfecto");
});

$(function() {//antes y despues de el elemento seleccionad lo inserta de el mismo elemento
    $("#test").after("<b>Welcome</b>");
});


$(function() {//manejo eficiente de eventos(si me convence)
    $("#name").keydown(function() {
        $("#msg").html($("#name").val());
    });
});

/*
text() sets or returns the text content of selected elements.
html() sets or returns the content of selected elements (including HTML markup).
val() sets or returns the value of form fields.
attr() sets or returns the value of attributes.
removeAttr() removes the specified attribute.
*/
