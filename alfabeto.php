<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alfabeto em Imagens</title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font: 400 1rem "GT Eesti Pro Display", sans-serif;
   
}

        @font-face {
        font-family: "GT Eesti Pro Display";
         src: url("/fonts/GT-Eesti-Display-Regular.otf");
        font-style: normal;
        font-weight: 400;
        font-display: swap;
}
        body {
            overflow: hidden;
            font-family: Arial, sans-serif;
            background: transparent;
        }
        .alfabeto {
            justify-content: space-around;
            display: flex;
            column-gap: 5vw;
            flex-wrap: wrap;
        }
        
        .letra {
            margin: 10px;
            text-align: center;
        }
        img {
            margin-top: 2vw;
            width: 300px;
            height: auto;
            border-radius: 1.5rem;
            box-shadow: 0px 10px 15px 0px #083838;
            
        }
        p{
            text-shadow: 0.1em 0.1em 0em #0e6d68;
            color: #f1f8f8;
            width: 300px;
            font-size: 1.35rem;
        }
        h3{
            padding-top: 0.7vw;
            padding-bottom: 0.5vw;
            font-size: 2rem;
            font-weight: 700;
            text-shadow: 0.1em 0.1em 0em #0e6d68;
            color: #ffbd59;
        }

        @media(max-width:650px){
            img{
                margin-top: 20vw;
            }
            h3{
                margin-top: 0.2vh;
            }
        }
    </style>
</head>
<body>



<div class="alfabeto">
    <?php
    // Pasta onde as imagens estão armazenadas
    $pastaImagens = 'alfabeto/';
    
    // Array com as letras do alfabeto
    $alfabeto = range('A', 'Z');  // Definindo corretamente a variável $alfabeto

    $explicacao_img = [
        'A' => 'Mão fechada com palma para a frente, polegar encostado ao lado do indicador, assim que e representado a letra A em libras. ',
        'B' => 'Mão aberta com dedos apontados para cima e unidos com palma para a frente, polegar dobrado tocando a palma da mão.',
        'C' => 'Mão com dedos curvados e unidos. ',
        'D' => 'Mão com indicador apontado para cima enquanto os demais dedos formam um círculo, assim que e representado a Letra D em libras. ',
        'E' => 'Mão com dedos curvados, palmas para a frente, assim que e representado a Letra E em libras. ',
        'F' => 'Mão com dedos mínimo, anular e médio apontados para cima, dedo indicador flexionado apontado para a frente e dedo polegar encostado ao lado do dedo indicador, assim que e representado a letra F em libras. ',
        'G' => 'Mão com dedos mínimo, anular e médio dobrados e encostados na palma. Dedo indicador apontado para cima com palma para a frente e dedo polegar encostado na lateral do indicador. ',
        'H' => 'Mão com dedos mínimo e anular dobrados e encostados na palma. Dedos médio e indicador apontados para cima. Dedo polegar colocado entre o dedo indicador e o dedo médio. Girar a mão pelo pulso, ficando com a palma para dentro. ',
        'I' => 'Mão fechada com palma para a frente com dedo mínimo apontado para cima, é assim que e representado o I em libras. ',
        'J' => 'Mão fechada com palma para a frente com dedo mínimo apontado para cima. Girar a mão pelo pulso, ficando a palma para dentro, assim que e representado a letra j em libras. ',
        'K' => 'Mão com dedos mínimo e anelar dobrados e encostados na palma. Dedos médio e indicador apontados para cima. Dedo polegar colocado entre o dedo médio. Mover a mão para cima, assim que e representado a letra k em libras.  ',
        'L' => 'Mão com dedos mínimo, anelar e médio dobrados e encostados na palma. Dedo indicador apontado para cima com palma para a frente e dedo polegar apontando para a esquerda, distante da lateral do dedo indicador.  ',
        'M' => 'Mão com dedos indicador, médio e anelar apontados para baixo e distendidos, demais dedos dobrados e unidos, escondidos.   ',
        'N' => 'Mão com dedos indicador e médio apontados para baixo, distendidos e unidos, demais dedos dobrados e unidos, escondidos.  ',
        'O' => 'Mão com os dedos fazendo formato de um círculo, palma para a esquerda. ',
        'P' => 'Mão com dedos mínimo e anelar dobrados e encostados na palma. Dedos médio e indicador apontados para frente, Dedo polegar colocado entre o dedo indicador e o dedo médio, assim que e representado a letra P em libras. ',
        'Q' => 'Mão com dedos mínimo, anelar e médio dobrados e encostados na palma. Dedo indicador apontado para baixo com palma para dentro e dedo polegar encostado na lateral do indicador, é assim que e representado a letra Q em libras.. ',
        'R' => 'Mão com palma para a frente com dedos mínimo, anelar e polegar dobrados e unidos na frente da palma. Dedos médio e indicador cruzados com indicador à frente esse e o R em libras..  ',
        'S' => 'Mão fechada com palma para frente com polegar à frente dos demais dedos esse e o S em libras. ',
        'T' => 'Mão com dedos mínimo, anelar e médio apontados para cima, dedo indicador flexionado apontado para a frente e dedo polegar encostado do lado de dentro do dedo indicador, e assim que e representado a letra T em libras. ',
        'U' => 'Mão com palma para a frente, com dedos indicador e médio apontados para cima, distendidos e unidos, demais dedos dobrados e unidos à frente da palma.  ',
        'V' => 'Mão com palma para a frente, com dedo indicador e médio apontados para cima, distendidos e separados, demais dedos dobrados e unidos à frente da palma.  ',
        'W' => 'Mão com dedos indicador, médio e anelar apontados para cima, distendidos e separados, demais dedos dobrados e unidos à frente da palma.  ',
        'X' => 'Mão com dedo indicador esticado e demais dedos fechados, mover a mão para trás e ao mesmo tempo flexionar o dedo indicador, é assim que em libra e representado a letra X em libras.  ',
        'Y' => 'Mão com palma para a frente, dedos polegar e mínimo distendidos, demais dedos fechados, é assim que e representado a letra Y em libras. ',
        'Z' => 'Mão com indicador apontados para cima, enquanto os demais dedos formam um círculo. Desenhar no ar a letra Z.  ',
    ];
    
    // Loop para exibir as imagens
    foreach ($alfabeto as $letra) {  // Usando $alfabeto com "a" minúsculo
        // Monta o caminho da imagem baseado na letra
        $caminhoImagem = $pastaImagens . $letra . '.png';
        
        // Verifica se a imagem existe antes de tentar exibi-la
        if (file_exists($caminhoImagem)) {
            echo '<div class="letra">';
            echo '<img data-aos="fade-up"
        data-aos-duration="1500" src="' . $caminhoImagem . '" alt="Letra ' . $letra . '">';
            echo '<h3 data-aos="fade-up"
        data-aos-duration="1500">Letra '. $letra.'</h3>';
            echo '<p data-aos="fade-up"
        data-aos-duration="1500">' . $explicacao_img[$letra] . '</p>';
            echo '</div>';
        } else {
            echo '<div class="letra">';
            echo '<h3>' . $letra . '</h3>';
            echo '<p>Imagem não disponível</p>';
            echo '</div>';
        }
    }
    ?>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>

</body>
</html>
