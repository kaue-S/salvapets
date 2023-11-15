<?php
 require_once "cabecalho.php";
?>

<article class="bloco1">
    <div class="paragrafo">
        <h1>Encontre e adote <br> um pet para você.</h1><br>
        <h2>Você não pode comprar amor, mas você pode adotar ele. <br> Adote um pet para fazer companhia</h2>
    </div>
        
    <img src="imagens/mina.png" alt="">
   
    <section class="pesquisa">
        <div class="campo-pesquisa">
            <label for="">especie: </label><br>
            <select name="" id="">
                <option value="">-</option>
                <option value="">Cão</option>
                <option value="">Gato</option>
            </select>
        </div>
        <div class="campo-pesquisa">
            <label for="">Sexo: </label><br>
            <select name="" id="">
                <option value="">-</option>
                <option value="">Macho</option>
                <option value="">Fêmea</option>
            </select>
        </div>
        <div class="campo-pesquisa">
            <label for="">Raça: </label><br>
            <select name="" id="">
                <option value="">-</option>
                <option value=""></option>
                <option value=""></option>
            </select>
        </div>
        <div class="campo-pesquisa">
            <label for="">Cidade: </label><br>
            <select name="" id="">
                <option value="">-</option>
                <option value=""></option>
                <option value=""></option>
            </select>
        </div>
        <button type="submit" class="bi bi-search botoes"> Buscar</button>
    </section>
</article>