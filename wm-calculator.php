<?php
function wm_calculator()
{?>
    <div id='wm-calculator' class="calculator-top">
        <form id="calculator-form" name="calculator">
            <input type="text" name="answer" Placeholder="Do Your Operations"/>
            <br>
            <input id="number-button" type="button" value=" 9 " onclick="calculator.answer.value += '9'"/>
            <input id="number-button" type="button" value=" 8 " onclick="calculator.answer.value += '8'"/>
            <input id="number-button" type="button" value=" 7 " onclick="calculator.answer.value += '7'"/>
            <input id="operations-actions" type="button" value=" + " onclick="calculator.answer.value += '+'"/>
            <input id="operations-actions" type="button" value=" % " onclick="calculator.answer.value += '%'"/>
            <input id="button-red" type="button" value=" clear " onclick="calculator.answer.value = ''"/>
            <br/>
            <input id="number-button" type="button" value=" 6 " onclick="calculator.answer.value += '6'"/>
            <input id="number-button" type="button" value=" 5 " onclick="calculator.answer.value += '5'"/>
            <input id="number-button" type="button" value=" 4 " onclick="calculator.answer.value += '4'"/>
            <input id="operations-actions" type="button" value=" - " onclick="calculator.answer.value += '-'"/>
            <input id="operations-actions" type="button" value="." onclick="calculator.answer.value += '.'"/>
            <input id="operations" type="button" name="inputtangent" value=" tan " onclick='tan()'/>
            </br>
            <input id="number-button" type="button" value=" 3 " onclick="calculator.answer.value += '3'"/>
            <input id="number-button" type="button" value=" 2 " onclick="calculator.answer.value += '2'"/>
            <input id="number-button" type="button" value=" 1 " onclick="calculator.answer.value += '1'"/>
            <input id="operations-actions" type="button" value=" x " onclick="calculator.answer.value += '*'"/>
            <input id="operations-actions" type="button" name="inputsqrt" value="&#8730;" onclick='sqrt()'>
            <input id="operations" type="button" name="inputsquare" value=" square " onclick='power()'/>
            </br>

            <input id="operations" type="button" name="inputround" value=" round " onclick='round()'/>
            <input id="number-button" type="button" value=" 0 " onclick="calculator.answer.value += '0'"/>
            <input id="button-red" type="button" value=" = "
                   onclick="calculator.answer.value = eval(calculator.answer.value)"/>
            <input id="operations-actions" type="button" value=" / " onclick="calculator.answer.value += '/'"/>
            <input id="operations-actions" type="button" name="inputsine" value=" sin " onclick='sin()'/>
            <input id="operations" type="button" name="inputcosine" value=" cos " onclick='cos()'/>

            </br>

        </form>
    </div>
<?php } ?>