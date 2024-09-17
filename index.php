<?php require "partials/header.php"  ?>

<!-- As a link -->


<!-- As a heading -->
<div class=" bg-light mx-auto">
 
    <h2 class="text-center">Seleccione una palabra</h2>

</div>

    <form class="col-5 mx-auto" action="colores-def.php" method="POST">
        <label for="valor">Elija una palabra</label>
        <select name="valor" id="valor">
            <option value="esfuerzo">esfuerzo</option>
            <option value="inclusion">inclusion</option>
            <option value="compañia">compañia</option>
            <option value="bienestar">bienestar</option>
            <option value="consentimiento"> consentimiento</option> 
        </select>

        <input type="submit" value="Ver mensaje">
    </form>
    


<? require "partials/footer.php"  ?>

