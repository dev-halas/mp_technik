<?php
    /* 
        TEMPLATE NAME: About Page
    */
        
    get_header(); 

?>

    <main id="about" class="about">
        
        <?php get_template_part('/libs/pageHeader'); ?>

        <section class="about-wrapper">
            <div class="about-text-icons">
                <div class="about-text">
                    <p>MP-TECHNIK jest prężnie rozwijającą się firmą na terenie Polski i Europy. Zaopatrujemy naszych Klientów w odpowiednio dobrany asortyment maszyn, urządzeń i akcesoriów dla określonej branży. Działamy na wielu płaszczyznach: energetyka, teletechnika,wod-kan.
                    <br/><br/>
                    Nieustannie się rozwijamy oraz pragniemy zostać ekspertami w najmniejszym calu w każdej dziedzinie naszej działalności. Świadczymy pełen zakres usług w obszarze przeglądów oraz przeprowadzamy różnego rodzaju renowacje oraz naprawy m.in. urządzeń do przecisków, młotów do wbijania rur stalowych, kompresorów i wciągarek linowych. Jesteśmy subdealerem firmy JL MASKINER w zakresie sprzedaży maszyn do przecisków marki HAMMERHEAD.</p>
                </div>
                <div class="about-icons">
                    <div class="about-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32.003" height="48" viewBox="0 0 32.003 48">
                            <g id="layer1" transform="translate(-3.174 -280.596)">
                                <path id="path31836" d="M22.336,280.6a.8.8,0,0,0-.614.342l-18.4,26.4a.8.8,0,0,0,.656,1.258H16.707l-1.528,19.139a.8.8,0,0,0,1.452.52l18.4-26.4a.8.8,0,0,0-.655-1.258H21.645l1.53-19.141a.8.8,0,0,0-.839-.863Z" transform="translate(0)" fill="#3592ee"/>
                            </g>
                        </svg>
                        <p>energetyka</p>
                    </div>
                    <div class="about-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="47.375" height="48" viewBox="0 0 47.375 48">
                            <path id="station" d="M26.212,27.9l15,22.5h-30Zm-2.75-6a3.866,3.866,0,0,1-.25-5.25,3.72,3.72,0,0,1,5.5-.25h.25a3.624,3.624,0,0,1-.25,5.25A3.866,3.866,0,0,1,23.462,21.9Zm-14-19.5,3.5,3.5a18.862,18.862,0,0,0,0,26.5l-3.5,3.5a23.689,23.689,0,0,1,0-33.5Zm33.5,0a23.689,23.689,0,0,1,0,33.5l-3.5-3.5a18.862,18.862,0,0,0,0-26.5Zm-26.5,7,3.5,3.5a8.457,8.457,0,0,0,0,12.25l-3.5,3.75A14.04,14.04,0,0,1,16.462,9.4Zm19.5,0a14.039,14.039,0,0,1,0,19.5l-3.5-3.5a8.457,8.457,0,0,0,0-12.25c0-.25,3.5-3.75,3.5-3.75Z" transform="translate(-2.525 -2.4)" fill="#3592ee"/>
                        </svg>
                        <p>teletechnika</p>
                    </div>
                    <div class="about-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34.936" height="48" viewBox="0 0 34.936 48">
                            <path id="Path_1287" data-name="Path 1287" d="M24.778.373a1,1,0,0,0-1.746.376c-.207.392-1.225,1.778-2.3,3.243-4.962,6.757-14.2,19.335-14.2,26.538a17.468,17.468,0,1,0,34.936,0c0-9.34-16.008-29.312-16.69-30.157Z" transform="translate(-6.532 0)" fill="#3592ee"/>
                        </svg>
                        <p>wod-kan</p>
                    </div>
                </div>
            </div>
            <div class="about-images">
                <div class="about-image">
                    <div class="about-image-parent">
                        <div>
                            <img src="<?php echo THEME_URL; ?>_dev/img/working-area-modern-office.jpg" alt="nowoczesne biuro">
                        </div>
                        <div>
                            <img src="<?php echo THEME_URL; ?>_dev/img/minimalist-empty-room.jpg" alt="minimalistyczne pomieszczenie">
                        </div>
                    </div>
                    <div class="about-image-parent">
                        <div>
                            <img src="<?php echo THEME_URL; ?>_dev/img/mptechnik-product.jpg" alt="sprężarka-kompresor">
                        </div>
                        <div>
                            <img src="<?php echo THEME_URL; ?>_dev/img/large-modern-warehouse-building.jpg" alt="nowoczesna hala">
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-experience">
                <h2 class="mb-100">
                    wieloletnie
                    <div>doświadczenie</div>
                </h2>
                <div class="about-text">
                    <p>Posiadamy wieloletnie doświadczenie oraz szeroką wiedzę specjalistyczną. Liczne certyfikaty czołowych instytutów oraz ośrodków badawczo – szkoleniowych są najlepszym oraz zauważalnym potwierdzeniem naszych kompetencji. Niewątpliwie zależy nam na dobru Klienta, dlatego produkty proponowane naszym konsumentom spełniają najwyższe panujące normy. Zachęcamy do skorzystania z ofert firmy MP-TECHNIK, a następnie wypełnienia formularzu zgłoszeniowego, który znajduje się w kontakcie.</p>
                </div>
            </div>
            <div class="about-knowledge">
                <div class="about-knowledge-title">
                    <h2 class="mb-100">
                        specjalistyczna
                        <div>wiedza</div>
                    </h2>
                </div>
                <div class="about-image">
                    <img src="<?php echo THEME_URL; ?>_dev/img/certificate-1.jpg" alt="certyfikat ukończenia kursu kwalifikującego">
                    <img src="<?php echo THEME_URL; ?>_dev/img/certificate-2.jpg" alt="certyfikat ukończenia kursu rachunkowości">
                    <img src="<?php echo THEME_URL; ?>_dev/img/certificate-1.jpg" alt="certyfikat ukończenia kursu kwalifikującego">
                    <img src="<?php echo THEME_URL; ?>_dev/img/certificate-2.jpg" alt="certyfikat ukończenia kursu rachunkowości">
                </div>
                <div class="about-knowledge--bottom">
                    <a href = "#" class="contact-btn">
                        <span>kontakt</span>
                    </a>
                </div>
            </div>

            <?php get_template_part('/libs/advantages'); ?>
        </section>
        
    </main>

<?php get_footer(); ?>