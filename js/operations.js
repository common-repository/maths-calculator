/*Javascript Code For Calculator*/

/*To Find Square Root*/
function sqrt() {
    var inputNumsqrt = document.calculator.answer.value;
    var resultsqrt = Math.sqrt(inputNumsqrt);
    document.calculator.answer.value = resultsqrt;
}

/*To Find Square*/
function power() {
    var inputNumsquare = document.calculator.answer.value;
    var resultsquare = inputNumsquare * inputNumsquare;
    document.calculator.answer.value = resultsquare;
}

/*Find Round Values*/
function round() {
    var inputNumround = document.calculator.answer.value;
    var resultround = Math.round(inputNumround, 2);
    document.calculator.answer.value = resultround;
}

/*Find Sine Values*/
function sin() {
    var inputsin = document.calculator.answer.value;
    var resultsin = Math.sin(inputsin);
    document.calculator.answer.value = resultsin;
}

/*Find Cosine Values*/
function cos() {
    var inputcos = document.calculator.answer.value;
    var resultcos = Math.cos(inputcos);
    document.calculator.answer.value = resultcos;
}

/*Find Tangent Value*/
function tan() {
    var inputtan = document.calculator.answer.value;
    var resulttan = Math.tan(inputtan);
    document.calculator.answer.value = resulttan;
}