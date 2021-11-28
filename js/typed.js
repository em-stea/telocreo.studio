//Home Typed Text
const typed = new Typed(".typed", {
  strings: [
    "<b class='textTyped'>creatividad</b>",
    "<b class='textTyped'>estrategia</b>",
    "<b class='textTyped'>compromiso</b>",
    "<b class='textTyped'>innovación</b>",
    "<b class='textTyped'>originalidad</b>",
    "<b class='textTyped'>vanguardia</b>",
    "<b class='textTyped'>empatía</b>",
    "<b class='textTyped'>y compromiso</b>",
  ],
  //stringsElement: "#cadenas-texto", // ID del elemento que contiene cadenas de texto a mostrar.
  typeSpeed: 50, // Velocidad en mlisegundos para poner una letra,
  startDelay: 2000, // Tiempo de retraso en iniciar la animacion. Aplica tambien cuando termina y vuelve a iniciar,
  backSpeed: 75, // Velocidad en milisegundos para borrrar una letra,
  smartBackspace: false, // Eliminar solamente las palabras que sean nuevas en una cadena de texto.
  shuffle: false, // Alterar el orden en el que escribe las palabras.
  backDelay: 800, // Tiempo de espera despues de que termina de escribir una palabra.
  loop: true, // Repetir el array de strings
  loopCount: false, // Cantidad de veces a repetir el array.  false = infinite
  showCursor: true, // Mostrar cursor palpitanto
  cursorChar: "|", // Caracter para el cursor
  contentType: "html", // 'html' o 'null' para texto sin formato
});
