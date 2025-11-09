<?php
get_header();
?>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/style/footer.css' ); ?>">
<main id="primary" class="site-main">
    <section class="error-404 not-found">
        <br>
        <br>
        <br>
        <br>
        <h1 class="page-title">Experimentální odchylka 404: Stránka se zřítila do epistemologického vakua.</h1>
        <br>
        <br>
        <div class="page-content">
            <p>
                Je nám s nejhlubší lítostí a vědeckou pokorou oznámit, že požadovaný dokument nebyl nalezen. 
                Dle posledních záznamů hraběcí společnosti pro aplikovanou stropologii se stránka pravděpodobně odtrhla od rámce reality 
                a nyní se vznáší v nadpozemské sféře, kde čas i kód ztrácejí smysl.
            </p>

            <p>
                Analýza architektonické integrity systému ukazuje, že k chybě došlo v důsledku vertikální destabilizace mezi záhlavím a patičkou,
                pročež stránka klesla pod vlastní úroveň stropu. Tento jev, známý v odborné literatuře jako 
                <em>fenomén digitální sklepní inverze</em>, bývá nezvratný.
            </p>

            <p>
                Doporučujeme návrat do hlavní struktury prostoru — tedy na <a href="<?php echo home_url(); ?>">úvodní stránku</a> — 
                a přehodnocení stropních konstant. Alternativně lze použít následující vyhledávací aparát:
            </p>

            <?php
            get_search_form(); // Přidá vyhledávací formulář
            ?>

            <div class="widget-area">
                <div class="recent-posts">
                    <h2>Úřední záznam o přeživších subjektech</h2>
                    <p>
                        Níže uvádíme seznam pěti posledních entit, které přežily kolaps struktury:
                    </p>
                    <ul>
                        <a href="https://necyklopedie.org/wiki/Milo%C5%A1_Zeman">Entita č. 1</a>
                    </ul>
                    <ul>
                        <a href="https://necyklopedie.org/wiki/Klement_Gottwald">Entita č. 2</a>
                    </ul>
                    <ul>
                        <a href="https://necyklopedie.org/wiki/Chuck_Norris">Entita č. 3</a>
                    </ul>
                    <ul>
                        <a href="https://necyklopedie.org/wiki/Matematika">Entita č. 4</a>
                    </ul>
                    <ul>
                        <a href="https://necyklopedie.org/wiki/AAAAAAAAA!">Entita č. 5</a>
                    </ul>
                </div>
            </div>

            <blockquote>
                <p>
                    „Není-li stránky, jest strop. Není-li stropu, pak jsme my sami stropem.“
                    <br>
                    — prof. h.c. mult. Jakub Kořínský, <em>Traktát o nemožnosti horizontální existence</em>, 2025
                </p>
            </blockquote>
        </div>
    </section>
</main>

<?php
get_footer();
?>
