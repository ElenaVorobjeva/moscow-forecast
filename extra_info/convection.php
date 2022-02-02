<div id="convection">
    <h2>Параметры для оценки рисков опасных явлений, связанных с развитием конвекции</h2>
    <h3 id="cape">Конвективная доступная потенциальная энергия (Convective Available Potential Energy, CAPE)</h3>
    <p>Показатель неустойчивости атмосферы. Численно равен количеству энергии частицы (массы) воздуха (Дж/кг), при ее вертикальном перемещении в атмосфере от уровня свободной конвекции до уровня нейтральной плавучести. Используется для качественной оценки конвекции и неблагоприятных явлений, связанных с ней.</p>
    <img class="formula" src="../assets/img/convection/formula1.png" alt="Формула CAPE">
    <div class="param_value">
        <p>EL – Уровень нейтральной плавучести</p>
        <p>LFC – Уровень свободной конвекции</p>
        <p>g – Ускорение свободного падения</p>
        <p>T<sub>v,p</sub> – Виртуальная температура частицы</p>
        <p>T<sub>v,e</sub> – Виртуальная температура окружающей массы воздуха</p>
    </div>
    <p>Опасные явления (ОЯ) погоды чаще всего наблюдаются при значениях CAPE выше 1000, однако не существует достоверно откалиброванных пороговых значений. CAPE зачастую используется как один из компонентов для диагностики отдельных типов опасных конвективных явлений (см. <a href="#stp" style="text-decoration: underline;">STP</a>, SCP).</p>
    <p>Есть разные способы определения начальной точки, от которой будет подниматься частица:</p>
    <ul>
        <li>Surface-based CAPE (SBCAPE) – оценивается энергия частицы, поднимающейся с поверхности Земли. </li>
        <li>Mixed Layer CAPE (MLCAPE) – оценивается энергия нижнего (100мб) перемешенного слоя атмосферы.</li>
        <li>Most Unstable CAPE (MUCAPE) – оценивается энергия самой неустойчивой частицы (объема).</li>
    </ul>
    <p>И в зависимости от этого получаются разные значения CAPE. НА картах COSMO-Ru выдается значение MLCAPE.</p>
    <div class="links_block">
        <a href="https://www.weather.gov/fwd/convectiveparameterscape">https://www.weather.gov/fwd/convectiveparameterscape</a>
        <a href="https://w1.weather.gov/glossary/index.php?word=cape">https://w1.weather.gov/glossary/index.php?word=cape</a>
    </div>

    <h3 id="k-index">K-index</h3>
    <p>Оценивает потенциал к развитию конвекции и гроз.</p>
    <img class="formula" src="../assets/img/convection/formula2.png" alt="Формула K-index">
    <div class="param_value">
        <p>T – Температура воздуха</p>
        <p>T<sub>d</sub> – Температура точки росы</p>
        <p>Численная индексация T и T<sub>d</sub> – изобарические поверхности в гПа.</p>
    </div>
    <table>
        <thead>
            <tr>
                <td>Значение K</td>
                <td>Интерпретация</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>&lt;20</td>
                <td>Вероятность гроз стремится к нулю</td>
            </tr>
            <tr>
                <td>20-30</td>
                <td>Вероятность формирования изолированных грозовых очагов</td>
            </tr>
            <tr>
                <td>&gt;35</td>
                <td>Высокая вероятность формирования многочисленных грозовых очагов</td>
            </tr>
        </tbody>
    </table>
    <div class="links_block">
        <p>Источник: NWS NOAA</p>
    </div>

    <h3 id="li">Lifted Index (Li)</h3>
    <p>Показатель устойчивости атмосферы. Характеризуется разностью температуры окружающего воздуха и температуры частицы, поднятой адиабатически до заданного уровня по вертикали (в практике – до уровня 500 гПа).</p>
    <img class="formula" src="../assets/img/convection/formula3.png" alt="Формула Li">
    <table>
        <thead>
            <tr>
                <td>Значение LI</td>
                <td>Интерпретация</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>&ge;6</td>
                <td>Атмосфера устойчива, конвекция невозможна</td>
            </tr>
            <tr>
                <td>0</td>
                <td>Атмосфера слабонеустойчива, возможна конвекция</td>
            </tr>
            <tr>
                <td>&le;-6</td>
                <td>Атмосфера крайне неустойчива, возможно развитие интенсивной конвекции и опасных явлений погоды</td>
            </tr>
        </tbody>
    </table>
    <div class="links_block">
        <p>Источник: NWS NOAA</p>
    </div>

    <h3 id="tt">Total Totals Intex (TT)</h3>
    <img class="formula" src="../assets/img/convection/formula4.png" alt="Формула TT">
    <table>
        <thead>
            <tr>
                <td>Значение TT</td>
                <td>Интерпретация</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>&lt;45</td>
                <td>Атмосфера устойчива, развитие конвекции маловероятно</td>
            </tr>
            <tr>
                <td>45-50</td>
                <td>Вероятно развитие грозовых очагов</td>
            </tr>
            <tr>
                <td>50-55</td>
                <td>Вероятно развитие опасных конвективных явлений</td>
            </tr>
            <tr>
                <td>55-60</td>
                <td>Высокая вероятность опасных конвективных явлений</td>
            </tr>
        </tbody>
    </table>
    <div class="links_block">
        <p>Источник: NWS NOAA</p>
    </div>

    <h3 id="sweat">Severe Weather Threat Index (SWEAT)</h3>
    <p>Оценивает риск возникновения опасных конвективных явлений.</p>
    <img class="formula" src="../assets/img/convection/formula5.png" alt="Формула SWEAT">
    <div class="param_value">
        <p>V – скорость ветра в узлах. Численная индексация – изобарические поверхности в гПа.</p>
        <p>ΔV – разность направлений ветра на уровнях 500 и 850 гПа в градусах.</p>
    </div>
    <table>
        <thead>
            <tr>
                <td>Значение SWEAT</td>
                <td>Интерпретация</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>150-300</td>
                <td>Вероятно возникновение конвекции и неблагоприятных явлений</td>
            </tr>
            <tr>
                <td>300-400</td>
                <td>Вероятно возникновение опасных конвективных явлений</td>
            </tr>
            <tr>
                <td>&gt;400</td>
                <td>Вероятно формирование смерчей</td>
            </tr>
        </tbody>
    </table>
    <div class="links_block">
        <p>Источник: NWS NOAA</p>
    </div>

    <h3 id="swi">Showalter Index (SI, SWI)</h3>
    <p>Показатель неустойчивости атмосферы</p>
    <img class="formula" src="../assets/img/convection/formula6.png" alt="Формула SI">
    <div class="param_value">
        <p>T<sub>p(850)</sub> – температура частицы воздуха, поднятой адиабатически с уровня 850 гПа до уровня 500 гПа.</p>
    </div>
    <table>
        <thead>
            <tr>
                <td>Значение SI</td>
                <td>Интерпретация</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>&gt;0</td>
                <td>Атмосфера устойчива</td>
            </tr>
            <tr>
                <td>0 – (-4)</td>
                <td>Атмосфера слабонеустойчива</td>
            </tr>
            <tr>
                <td>(-4) – (-7)</td>
                <td>Атмосфера сильнонеустойчива</td>
            </tr>
            <tr>
                <td>&lt;-8</td>
                <td>Атмосфера экстремально неустойчива</td>
            </tr>
        </tbody>
    </table>
    <div class="links_block">
        <p>Источник: NWS NOAA</p>
    </div>

    <h3 id="reflectability">Радиолокационная отражаемость</h3>
    <p>Радиолокационная отражаемость показывает отношение отправленного сигнала к пришедшему и измеряется в децибеллах. Эта величина сильно зависит от содержания гидрометеоров в атмосфере – чем больше и плотнее гидрометеоры, тем выше значение. На основе этой характеристики ЦАО рассчитывает вторичные продукты – облачность, осадки, ливни, грозы, град, шквалы.</p>
    <p>Поскольку в модели рассчитывается количество и состояние гидрометеоров, это позволяет получить поле прогностической отражаемости. Модельная радиолокационная отражаемость показывает, какую картину (по версии модели) наблюдал бы пользователь радиолокатора в прогностический срок. Такое поле позволяет анализировать процессы с наличием гидрометеоров.  Значения отражаемости выше 50 дБ указывают на потенциал к формированию опасных явлений (грозы, град, шквалы). Наличие такого поля дает возможность проводить верификацию с радарными данными.</p>
    <p>В конфигурации COSMO с шагом 2,2 км (и менее) конвекция считается явно, а в микрофизике появляется дополнительный гидрометеор – снежная крупа. В 6 км конфигурации глубокая конвекция параметризуется, потому значения отражаемости для опасных явлений будут занижены в этой версии.</p>
    <p>На прогностических картах предоставляется максимальное значение столбе атмосферы за 1 час. Это позволяет не пропустить опасные явления между сроками.</p>
    <figure>
        <img src="../assets/img/convection/pic1.png" alt="Прогностическая карта радиолокационной отражаемости на 15:00 UTC 17.04.2021">
        <img src="../assets/img/convection/pic2.jpg" alt="Фактическая карта радиолокационной отражаемости за тот же срок">
        <figcaption>Рис.1 Слева – прогностическая карта радиолокационной отражаемости на 15:00 UTC 17.04.2021, справа – фактическая карта радиолокационной отражаемости за тот же срок.</figcaption>
    </figure>

    <h3 id="lpi">Lightning Potential Index (LPI)</h3>
    <p>Индекс потенциала молний. Рассчитывается при помощи явно воспроизведенных моделью конвективных облаков, следовательно, применим для доменов COSMO-Ru с шагом сетки не более 2.2 км.</p>
    <p>Индекс пропорционален частоте разрядов молний (flash rate), однако, в настоящий момент перевод в эту величину затруднителен.</p>
    <img class="formula" src="../assets/img/convection/formula7.png" alt="Формула LPI">
    <div class="param_value">
        <p>f<sub>1</sub>, f<sub>2</sub>, g<sub>(w)</sub> – вспомогательные коэффициенты</p>
        <p>&epsilon; – функция, описывающая присутствие в облаке частиц воды твёрдой и жидкой фазы</p>
        <p>w – вертикальная скорость ветра</p>
        <p>Дробный член описывает зону электрификации между изотермами 0 &deg;C и -20 &deg;C.</p>
    </div>
    <figure>
        <img src="../assets/img/convection/pic3.png" alt="Прогностическая карта индекса LPI (сумма максимумов за предыдущие 3 часа) на 15:00 UTC 23.04.2021">
        <img src="../assets/img/convection/pic4.png" alt="Карта разрядов молний, зафиксированных сетью грозопеленгации за сутки 23.04.2021">
        <figcaption>Рис.2 Слева – прогностическая карта индекса LPI (сумма максимумов за предыдущие 3 часа) на 15:00 UTC 23.04.2021, справа – карта разрядов молний, зафиксированных сетью грозопеленгации за сутки 23.04.2021.</figcaption>
    </figure>
    <div class="links_block">
        <p>Источник: [Yair et. al, 2010]</p>
    </div>

    <h3 id="hail">Диаметр града (HailCast)</h3>
    <p>Применяется одномерная модель HailCast, адаптированная для COSMO из модели WRF. В качестве продукта можно оценить максимальный диаметр града (в мм) в узле сетки модели. Методика основана на явном моделировании конвективной облачности и применима для доменов модели COSMO-Ru с шагом сетки не более 2.2 км.</p>
    <div class="links_block">
        <p><a href="http://hailcast.aer.com/">http://hailcast.aer.com/</a>
    </div>

    <h3 id="sdi">Supercell Detection Index (SDI)</h3>
    <p>Индекс обнаружения суперячеек. В отличие от многих конвективных параметров (в частности SCP), данный индекс основан на явном воспроизведении моделью восходящих потоков конвективных ячеек. Следовательно, может применяться для доменов модели COSMO-Ru с шагом не более 2.2 км.</p>
    <img class="formula" src="../assets/img/convection/formula8.png" alt="Формула SDI">
    <table>
        <tr style="border-top: 1px solid #e8e9eb;">
            <td>|SDI| = 0.0003 1/с</td>
            <td>Минимальный порог для суперячеек</td>
        </tr>
        <tr>
            <td>|SDI| &gt; 0.003  1/с</td>
            <td>Значительный сигнал для суперячеек</td>
        </tr>
    </table>
    <p>Этот индекс «помечает» в прогностических полях те восходящие потоки, в которых присутствует вращение. Применим этот метод не только для суперячеек, но и для зон вращения в квазилинейных мезомасштабных конвективных системах.</p>
    <p>В COSMO рассчитываются две вариации индекса – SDI<sub>1</sub> и SDI<sub>2</sub>. В первом случае знак указывает на направление движения по вертикали. Положительные значения соответствуют завихренным восходящим потокам, отрицательные – завихренным нисходящим. В версии SDI<sub>2</sub> рассматриваются только восходящие потоки, а знак указывает на направление вращения. Положительные значения соответствуют мезоциклонам, вращающимся против часовой стрелки, отрицательные – по часовой. Для использования в оперативной практике рекомендуется индекс SDI<sub>2</sub>.</p>
    <p>Особенное внимание следует уделить ситуациям, когда индекс превышает «значительный сигнал» в областях с повышенными значениями параметра STP.</p>
    <div class="links_block">
        <p>[Wicker et. al, 2015]</p>
    </div>

    <h3 id="stp">Significant Tornado Parameter (STP)</h3>
    <p>Комплексный показатель риска формирования значительных смерчей.</p>
    <img class="formula" src="../assets/img/convection/formula9.png" alt="Формула STP">
    <div class="param_value">
        <p>MLLCL – Средний уровень конденсации</p>
    </div>
    <p>Под значительными (Significant) подразумеваются смерчи, имеющие категорию EF-2 и выше по шкале Фудзиты. Для оценки риска слабых смерчей данный параметр не применяется.</p>
    <p>Вероятность формирования значительных смерчей существует при значениях STP более 1. Чем больше индекс - тем выше вероятность формирования и возможная интенсивность смерчей.</p>
    <p>В данный момент этот параметр показывает большой процент ложных тревог. Рекомендуется использовать в комплексе с индексом SDI<sub>2</sub>.</p>
    <div class="links_block">
        <p>[Thompson et. al, 2004]</p>
    </div>

    <h3 id="srh">Относительная спиральность (Storm-Relative Helicity, SRH)</h3>
    <p>Показатель отношения направления движения конвективной ячейки к оси горизонтальной завихренности, сгенерированной вертикальным сдвигом ветра.</p>
    <p>Высокие значения относительной спиральности (выше 100 м<sup>2</sup>/c<sup>2</sup>) в слое 0-3 км характеризуют благоприятные условия для формирования вращения в мезомасштабных конвективных системах, а в слое 0-1 км – для формирования и эволюции смерчей [Thompson, 2004].</p>
    <img class="formula" src="../assets/img/convection/formula10.png" alt="Формула SRH">
    <div class="param_value">
        <p>V – вектор скорости ветра</p>
        <p>C – вектор скорости движения конвективной ячейки</p>
        <p>k – единичный вектор</p>
    </div>
</div>