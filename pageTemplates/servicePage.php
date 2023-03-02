<?php
    /* 
        TEMPLATE NAME: Service Page
    */
        
    get_header(); 
    the_post();
?>

    <main class="service">
        <?php get_template_part('/libs/pageHeader'); ?>
        
        <?php //get_template_part('/pageTemplates/products/productsHeader'); ?>
        
        <div class="services">
            <div class="container">
                <div class="service--item">
                    <div class="service--img">
                        <img src="<?php echo THEME_URL; ?>_dev/img/serwis/serwis_maszyn_przeciskowych.jpg" alt="">
                    </div>
                    <div class="service--text">
                        <h2>serwis maszyn <span>przeciskowych</span></h2>
                        <p>Świadczymy pełen zakres usług w obszarze przeglądów i napraw urządzeń do przecisków, młotów do wbijania rur stalowych i przewoźnych sprężarek śrubowych (kompresorów). Posiadamy pełen dostęp do części zamiennych do urządzeń przeciskowych wszystkich producentów oraz dysponujemy szeroką ofertą urządzeń nowych i używanych.</p>
                        <p>W serwisie znajdą Państwo dwa stanowiska serwisowe do maszyn przeciskowych oraz kolejne dwa stanowiska do wykonywania napraw mechanicznych. Ponadto dysponujemy profesjonalną narzędziownią, która umożliwia m.in. regenerację gwintów oraz naprawę maszyn do których części zamienne nie są dostępne.</p>
                        <p>Serwisujemy maszyny wszystkich marek, m.in. produkcji Niemieckiej, Polskiej, Szwajcarskiej, Ukraińskiej, Amerykańskiej.</p>
                    </div>
                </div>
                <div class="service--item">
                    <div class="service--text">
                        <h2>serwis przyczep <br/><span>i wciągarek kablowych</span></h2>
                        <p>Oferujemy szeroki wachlarz usług w zakresie napraw i przeglądów przyczep i wciągarek linowych. Wykonujemy przeglądy maszyn, naprawy gwarancyjne, pogwarancyjne oraz dostarczamy części zamienne. Z naszego doświadczenia korzystają często również Klienci, którzy posiadają maszyny różnych marek m.in. Bagela, Thaler, Wamet, OMAC, Volta-Macchine.</p>
                    </div>
                    <div class="service--img">
                        <img src="<?php echo THEME_URL; ?>_dev/img/serwis/serwis_przyczep_wciagarek_kablowych.jpg" alt="serwis przyczep i wciągarek kablowych">
                    </div>
                </div>
                <div class="service--item">
                    <div class="service--img">
                        <img src="<?php echo THEME_URL; ?>_dev/img/serwis/serwis_maszyn_przeciskowych.jpg" alt="">
                    </div>
                    <div class="service--text">
                        <h2>naprawa kompresorów <span>(sprężarek)</span></h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit</p>
                    </div>
                </div>
            </div>
        </div>

        <?php get_template_part('/pageTemplates/servicePage/whyUs'); ?>
        <?php get_template_part('/pageTemplates/servicePage/steps'); ?>
        <?php get_template_part('/pageTemplates/servicePage/form'); ?>
        <?php get_template_part('/libs/advantages'); ?>



    </main>

<?php get_footer(); ?>