<?php
    /* 
        TEMPLATE NAME: Contact Page
    */
        
    get_header(); 

?>

    <main>
        
        <div class="pageHeader">
            <div class="pageHeader--accent"></div>
            <div class="container pageHeader--inner">
                
                <div class="title--2colors">
                    <h2>kontakt <br/><span>dzień dobry!</span></h2>
                </div>
                <div class="pageHeader--socials">
                    <a href="#" class="pageHeader--social">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9.919" height="19.102" viewBox="0 0 9.919 19.102">
                            <g id="facebook-app-symbol" transform="translate(-37.29)">
                                <path id="f_1_" d="M43.729,19.1V10.39h2.923l.439-3.4H43.729V4.825c0-.983.272-1.653,1.683-1.653h1.8V.133A24.368,24.368,0,0,0,44.59,0C42,0,40.222,1.583,40.222,4.488v2.5H37.29v3.4h2.932V19.1Z" fill="#3592ee"/>
                            </g>
                        </svg>
                    </a>
                    <a href="#" class="pageHeader--social">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20.742" height="14.694" viewBox="0 0 20.742 14.694">
                            <g id="youtube" transform="translate(0 -59.72)">
                                <g id="Group_2" data-name="Group 2" transform="translate(0 59.72)">
                                <path id="Path_8" data-name="Path 8" d="M20.453,62.124a2.317,2.317,0,0,0-1.86-1.9,66.659,66.659,0,0,0-16.442,0,2.316,2.316,0,0,0-1.861,1.9,42.379,42.379,0,0,0,0,9.884,2.316,2.316,0,0,0,1.861,1.9,66.66,66.66,0,0,0,16.442,0,2.315,2.315,0,0,0,1.86-1.9A42.373,42.373,0,0,0,20.453,62.124Zm-11.811,8.4V63.61l5.186,3.457Z" transform="translate(0 -59.72)" fill="#3592ee"/>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="contact--wrapper">
            <div class="container">
                <div class="contact--cols">
                    <div class="contact--col">
                        <div class="contact--icons">
                            <div class="contact--icon">
                                <img src="<?php echo THEME_URL; ?>_dev/img/svg/contact.svg" alt="mp-technik kontakt">
                                <div class="contact--iconText">
                                    <p>
                                        Mateusz Kałmucki
                                        <a href="tel: +48 695 438 850">tel. +48 695 438 850</a>
                                    </p>
                                    <p>
                                        Paweł Łączniak
                                        <a href="tel: +48 531 747 877">tel. +48 531 747 877</a>
                                    </p>
                                    <p>
                                        <a href="mailto: biuro@mp-technik.com.pl">biuro@mp-technik.com.pl</a> 
                                    </p>
                                </div>
                            </div>
                            <div class="contact--icon">
                                <img src="<?php echo THEME_URL; ?>_dev/img/svg/clock.svg" alt="mp-technik kontakt">
                                <div class="contact--iconText">
                                    <p>
                                        Poniedziałek – Piątek <br/><strong>8:00 – 16:00</strong>
                                    </p>
                                    <p>
                                        Sobota <br/><strong>nieczynne</strong>
                                    </p>
                                    <small>
                                        *Na życzenie klienta otwieramy
                                        wcześniej i zamykamy później.
                                    </small>
                                </div>
                            </div>
                            <div class="contact--icon">
                                <img src="<?php echo THEME_URL; ?>_dev/img/svg/city.svg" alt="mp-technik kontakt">
                                <div class="contact--iconText">
                                    <p>
                                        <strong>
                                            Witaszyczki 26,<br/>
                                            63-230 Witaszyce<br/>
                                            MP-TECHNIK Sp. z o.o.
                                        </strong>
                                    </p>
                                    <p>
                                        NIP: 6172222327<br/>
                                        KRS: 0000938503<br/>
                                        REGON: 520831365
                                    </p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact--col">
                        <div class="contact--map">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container cForm">
                <div class="title--2colors">
                    <h2>
                        <span>napisz</span>
                        do nas
                    </h2>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="106" title="Contact"]'); ?>
            </div>
            <div class="container">
                <?php get_template_part('/libs/advantages'); ?>
            </div>
        </div>
        
    </main>

<?php get_footer(); ?>