<?= getTemplate('emails/_header') ?>

<p style="text-align:center;"><a href="http://kilometrydobra.pl/" target="_blank"><img src="http://kilometrydobra.pl/wp-content/themes/kd/images/horizontal-logo.png" alt="Kilometry Dobra" /></a></p>
<p>
    <?php if (!empty($content)): ?>
        <?= $content ?>
    <?php else: ?>
        Szanowny Darczyńco,<br><br>
        Dziękujemy za zainteresowanie kampanią Kilometry Dobra.<br><br>
        Dobrych powodów by pomagać jest wiele, dlatego są z nami organizacje, które zbierają pieniądze na: cele społeczne,
        sport, kulturę, edukację, środowisko, kościół. W Kilometrach Dobra masz gwarancję, że dobrze wydajesz swoje pieniądze –
        sam wybierasz rodzaj pomocy, organizację, której pomagasz oraz cel, który wspierasz.<br><br>
        Zapraszamy do oglądania relacji z postępów kampanii na stronach<br>
        <a href="https://www.facebook.com/kilometrydobra">https://www.facebook.com/kilometrydobra</a><br>
        <a href="http://www.kilometrydobra.pl/">http://www.kilometrydobra.pl/</a><br><br>
        <br><br>
        Pozdrawiamy,<br>
        zespół Kilometrów Dobra
    <?php endif ?>
</p>

<?= getTemplate('emails/_footer') ?>
