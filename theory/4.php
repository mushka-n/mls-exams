<?php

    session_start();

    if(!isset($_SESSION["theme"])){
        $_SESSION["theme"] = "light";
    } 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MathProfile</title>

    <!-- Favicon -->
    <link rel="icon" href="../imgs/icons/favicon.png" type="image/x-icon">

    <!--Bootsrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!--jQuerry -->
    <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>

    <!-- MathJax -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

   <link rel="stylesheet" type="text/css" href="../css/<?php echo $_SESSION["theme"]; ?>.css" id="theme-link">
   <link rel="stylesheet" href="../css/style.css">
    
    <!-- Скрипты -->
    <script src="../js/scripts.js"> </script>
</head>
<body>
    
   <div class="menu" id="menu">
   
       <div class="container">
   
           <div class="row">
   
               <span class="menu-logo menu-block"><a href="../index.php" class="menu-block-a"><img src="../imgs/icons/favicon.png" alt="" id="menu-logo"><span>Math<br>Profile</span></a></span>
   
               <span class="menu-user menu-block" ><?= $_SESSION['user']['full_name'] ?></span>
   
               <span class="menu-login-logout menu-block"><a href="../vendor/logout.php" class="menu-block-a" id='login-logout'>Выход</a></span>
   
           </div>
       </div>
       <div class="theme-switch" id="theme-switch"></div>
   </div> 


    <div class="menu-skipper"></div>

    <div class="theory">
    	<div class="container">

          <div class="theory-header theory-header-main">Задание 4</div>

          </span><em>Случайным</em> называется событие, которое нельзя точно предсказать заранее. Оно может либо произойти, либо нет. </p><p>Вы выиграли в лотерею &mdash; случайное событие. Пригласили друзей отпраздновать выигрыш, а они по дороге к вам застряли в лифте &mdash; тоже случайное событие. Правда, мастер оказался поблизости и освободил всю компанию через десять минут &mdash; и это тоже можно считать счастливой случайностью&hellip;</p>
          <p>Наша жизнь полна случайных событий. О каждом из них можно сказать, что оно произойдет с некоторой<span> </span><em>вероятностью</em>. Скорее всего, вы интуитивно знакомы с этим понятием. Теперь мы дадим математическое определение вероятности.</p>
          <p>Начнем с самого простого примера. Вы бросаете монетку. Орел или решка?</p>
          <p>Такое действие, которое может привести к одному из нескольких результатов, в теории вероятностей называют<span> </span><em>испытанием</em>.</p>
          <p>Орел и решка &mdash; два возможных<span> </span><em>исхода</em><span> </span>испытания.</p>
          <p>Орел выпадет в одном случае из двух возможных. Говорят, что<span> </span><em>вероятность</em><span> </span>того, что монетка упадет орлом, равна<span>$$1/2$$.</p>
          <p>Бросим игральную кость. У кубика шесть граней, поэтому возможных исходов тоже шесть.</p>
          <p>Например, вы загадали, что выпадет три очка. Это один исход из шести возможных. В теории вероятностей он будет называться<span> </span><em>благоприятным исходом</em>.</p>
          <p>Вероятность выпадения тройки равна<span> </span><span>$$1/6$$<span> </span>(один благоприятный исход из шести возможных).</p>
          <p>Вероятность четверки &mdash; тоже<span> </span><span>$$1/6$$
          <p>А вот вероятность появления семерки равна нулю. Ведь грани с семью точками на кубике нет.</p>
          <p><em>Вероятность события равна отношению числа благоприятных исходов к общему числу исходов.</em></p>
          <p>Очевидно, что вероятность не может быть больше единицы.</p>
          <p>Вот другой пример. В пакете $$25$$ яблок, из них<span> </span><span>$$8$$ &mdash; красные, остальные &mdash; зеленые. Ни формой, ни размером яблоки не отличаются. Вы запускаете в пакет руку и наугад вынимаете яблоко. Вероятность вытащить красное яблоко равна<span> </span> $$8/25$$, а зеленое &mdash;<span> </span>$$17/25$$.</p>
          <p>Вероятность достать красное или зеленое яблоко равна<span> </span> $$\frac{8}{25}+\frac{17}{25}=1$$.</p>

          <div class="example">
            <em>В фирме такси в данный момент свободно 15 машин: 2 красных, 9 желтых и 4 зеленых. По вызову выехала одна из машин, случайно оказавшихся ближе всего к заказчице. Найдите вероятность того, что к ней приедет желтое такси.</em>
            <div class="example-solution-header">Решение:</div>
            <p>Всего имеется 15 машин, то есть к заказчице приедет одна из пятнадцати. Желтых — девять, и значит, вероятность приезда именно желтой машины равна 9/15, то есть 0,6.</p>
            <div class="example-answer">Ответ: 0,6.</div>
          </div>

          <div class="example">
            <p><em>
              В чемпионате по гимнастике участвуют 20 спортсменок: 8 из России, 7 из США, остальные — из Китая. Порядок, в котором выступают гимнастки, определяется жребием. Найдите вероятность того, что спортсменка, выступающая последней, окажется из Китая.
              </em>
            </p>
            <div class="example-solution-header">Решение:</div>
            <p>
              Давайте представим, что все спортсменки одновременно подошли к шляпе и вытянули из нее бумажки с номерами. Кому-то из них достанется двадцатый номер. Вероятность того, что его вытянет китайская спортсменка, равен 5/20 (поскольку из Китая — 5 спортсменок). Ответ: 0,25.
            </p>
            <div class="example-answer">Ответ: 0,25.</div>
          </div>


          <div class="example">
            <p><em>Монета брошена три раза. Какова вероятность двух «орлов» и одной «решки»?</em></p>
             <div class="example-solution-header">Решение:</div>
            <p>Заметим, что задачу можно сформулировать по-другому: бросили три монеты одновременно. На решение это не повлияет.</p>
            <p>Как вы думаете, сколько здесь возможных исходов?</p>
            <p>Бросаем монету. У этого действия два возможных исхода: орел и решка</p>
            <p>Две монеты — уже четыре исхода:</p>

            <ul>
            <li>орел  орел</li>
            <li>орел  решка</li>
            <li>решка орел</li>
            <li>решка решка</li>
            </ul>
            <p>Три монеты? Правильно, 8. исходов, так как $$2\times2\times2=2^{3}=8$$</p>

            <p>Вот они:</p>
            <ul>
            <li>орел  орел  орел</li>
            <li>орел  орел  решка</li>
            <li>орел  решка орел</li>
            <li>решка орел  орел</li>
            <li>орел  решка решка</li>
            <li>решка орел  решка</li>
            <li>решка решка орел</li>
            <li>решка решка решка</li>
            </ul>
            <p>Два орла и одна решка выпадают в трех случаях из восьми.</p>

             <div class="example-answer">Ответ: 3/8.</div>
          </div>

          <p class="theory-header-semi theory-header-semi-noborder">Логика перебора</p>

          <div class="example">
            <p><em>В кармане у Пети было 2 монеты по 5 рублей и 4 монеты по 10 рублей. Петя, не глядя, переложил какие-то 3 монеты в другой карман. Найдите вероятность того, что пятирублевые монеты лежат теперь в разных карманах.</em></p>
             <div class="example-solution-header">Решение:</div>
            <p>Мы знаем, что вероятность события равна отношению числа благоприятных исходов к общему числу исходов. Но как посчитать все эти исходы?</p>
            <p>Можно, конечно, обозначить пятирублевые монеты цифрами 1, а десятирублевые цифрами 2 — а затем посчитать, сколькими способами можно выбрать три элемента из набора 1 1 2 2 2 2.</p>
            <p>Однако есть более простое решение:</p>
            <p>Кодируем монеты числами: 1, 2 (это пятирублёвые), 3, 4, 5, 6 (это десятирублёвые). Условие задачи можно теперь сформулировать так:</p>
            <p>Есть шесть фишек с номерами от 1 до 6. Сколькими способами можно разложить их по двум карманам поровну, так чтобы фишки с номерами 1 и 2 не оказались вместе?</p>
            <p>Давайте запишем, что у нас в первом кармане.</p>
            <p>Для этого составим все возможные комбинации из набора 1 2 3 4 5 6. Набор из трёх фишек будет трёхзначным числом. Очевидно, что в наших условиях 1 2 3 и 2 3 1 — это один и тот же набор фишек. Чтобы ничего не пропустить и не повториться, располагаем соответствующие трехзначные числа по возрастанию:</p>

            <p>123, 124, 125, 126...</p>
            <p>А дальше? Мы же говорили, что располагаем числа по возрастанию. Значит, следующее — 134, а затем:</p>
            <p>135, 136, 145, 146, 156.</p>
            <p>Все! Мы перебрали все возможные комбинации, начинающиеся на 1. Продолжаем:</p>
            <p>234, 235, 236, 245, 246, 256, 345, 346, 356, 456.</p>
            <p>Всего 20 возможных исходов.</p>
            <p>У нас есть условие — фишки с номерами 1 и 2 не должны оказаться вместе. Это значит, например, что комбинация 356 нам не подходит — она означает, что фишки 1 и 2 обе оказались в не в первом, а во втором кармане. Благоприятные для нас исходы — такие, где есть либо только 1, либо только 2. Вот они:</p>

            <p>134, 135, 136, 145, 146, 156, 234, 235, 236, 245, 246, 256 – всего 12 благоприятных исходов.</p>
            <p>Тогда искомая вероятность равна 12/20.</p>
             <div class="example-answer">Ответ: 0.6.</div>
          </div>


          <p class="theory-header-semi theory-header-semi-noborder">Сумма и произведение событий. Комбинации событий</p>

          <div class="example">
            <p></em>Вероятность того, что новый электрический чайник прослужит больше года, равна 0,93. Вероятность того, что он прослужит больше двух лет, равна 0,87. Найдите вероятность того, что он прослужит меньше двух лет, но больше года.</em></p>
            <div class="example-solution-header">Решение:</div>
            <p>Проработав год, чайник может либо сломаться на второй год, либо благополучно служить и после 2 лет работы.</p>
            <p>Пусть $$p$$ – вероятность того, что чайник прослужил больше года.</p>

            <p>$$p_{1}$$  – вероятность того, что он сломается на второй год, $$p_{2}$$  – вероятность того, что он прослужит больше двух лет. Очевидно, $$p= p_{1}+p_{2}$$. </p>

            <p>Тогда $$p_{1}=p-p_{2}=0,93-0,87=0,06$$. </p>

            <div class="example-answer">Ответ: 0.6.</div>
          </div>


          <p>
            События, взаимоисключающие друг друга в рамках данной задачи, называются <em>несовместными</em> . Появление одного из несовместных событий исключает появление других.
          </p>
          <p>
            <em>Сумма двух событий</em> – термин, означающий, что произошло или первое событие, или второе, или оба сразу.
          </p>
           <p>
            Вероятность суммы несовместных событий равна сумме их вероятностей.
            В нашей задаче события «чайник сломался на второй год работы» и «чайник работает больше двух лет» - несовместные. Чайник или сломался, или остается в рабочем состоянии.
          </p>



          <div class="example">
            <p><em>На рисунке изображён лабиринт. Паук заползает в лабиринт в точке «Вход». Развернуться и ползти назад паук не может. На каждом разветвлении паук выбирает путь, по которому ещё не полз. Считая выбор дальнейшего пути случайным, определите, с какой вероятностью паук выйдет через выход А.</em></p>
            <img src="pics/41.jpg" alt="" class="theory-image">
            <p>Пронумеруем развилки, на которых паук может случайным образом свернуть в ту или другую сторону.</p>
            <img src="pics/42.jpg" alt="" class="theory-image">
            <p>Он может либо выйти в выход D, и вероятность этого события равна $$\frac{1}{2}$$.  Либо уйти дальше в лабиринт. На второй развилке он может либо свернуть в тупик, либо выйти в выход В (с вероятностью $$\frac{1}{2}\cdot \frac{1}{2}=\frac{1}{4}$$.  На каждой развилке вероятность свернуть в ту или другую сторону равна $$\frac{1}{2}$$,  а поскольку развилок пять, вероятность выбраться через выход А равна $$\frac{1}{32}$$,  то есть 0,03125.</p>
            <div class="example-answer">Ответ: 0,03125.</div>
          </div>

          <p>
            События А и В называют <em>независимыми</em>, если вероятность появления события А не меняет вероятности появления события В.
          </p>
          <p>В нашей задаче так и есть: неразумный паук сворачивает налево или направо случайным образом, независимо от того, что он делал до этого.</p>
          <p>Для нескольких независимых событий вероятность того, что все они произойдут, равна произведению вероятностей.</p>

    	</div>
    </div>


    
</body>
</html>