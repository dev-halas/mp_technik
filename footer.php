</body>

<?php wp_footer(); ?>
<footer class="footer animate fadeInBottomLow d-200">
	<div class="footerWrapper">
			<div class="footerInner">
				<div class="footerLeft">
					<div class="footerLeft--col footerContact">
						<div class="footer--item">
							<span>Dane kontaktowe</span>
							<p>
								Witaszyczki 26,<br/>
								63-230 Witaszyce
							</p>
							<p>
								<a href="mailto: biuro@mp-technik.com.pl">biuro@mp-technik.com.pl</a><br/>
								dział handlowy: <a href="tel: +48 695 438 850">+48 695 438 850</a><br/>
								dział techniczny: <a href="tel: +48 531 747 877">+48 531 747 877</a>
							</p>
						</div>
					</div>
					<div class="footerLeft--col">
						<div class="footer--item">
							<span>Sklep</span>
							<?php wp_nav_menu(['theme_location' => 'footer_shop']); ?>
						</div>
					</div>
					<div class="footerLeft--col">
						<div class="footer--item">
							<span>Firma</span>
							<?php wp_nav_menu(['theme_location' => 'footer_company']); ?>
						</div>
					</div>
					<div class="footerLeft--col footerContact">
						<div class="footer--item">
							<span>Oferta</span>
							<?php wp_nav_menu(['theme_location' => 'footer_offer']); ?>
						</div>
					</div>
				</div>
				<div class="footerRight">
					<div class="footerMap">
						<div id="map"></div>
					</div>
					<div class="footerCTA">
						<div class="footerCTA--icons">
							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="8.433" height="16.24" viewBox="0 0 8.433 16.24">
									<g id="facebook-app-symbol" transform="translate(0)">
										<path id="f_1_" d="M42.764,16.24V8.833h2.485l.373-2.888H42.764V4.1C42.764,3.266,43,2.7,44.2,2.7h1.528V.113A20.716,20.716,0,0,0,43.5,0a3.479,3.479,0,0,0-3.713,3.816V5.945H37.29V8.833h2.493V16.24Z" transform="translate(-37.29)" fill="#fff"/>
									</g>
								</svg>
							</a>
							<a href="#">
								<svg id="XMLID_822_" xmlns="http://www.w3.org/2000/svg" width="17.919" height="12.611" viewBox="0 0 17.919 12.611">
									<path id="XMLID_823_" d="M17.221,47c-.647-.769-1.841-1.083-4.122-1.083H4.82c-2.333,0-3.547.334-4.192,1.152C0,47.868,0,49.044,0,50.671v3.1c0,3.153.745,4.754,4.82,4.754H13.1c1.978,0,3.074-.277,3.783-.955.727-.7,1.037-1.832,1.037-3.8v-3.1C17.919,48.955,17.871,47.772,17.221,47ZM11.5,52.651,7.745,54.616A.578.578,0,0,1,6.9,54.1V50.186a.578.578,0,0,1,.844-.513L11.5,51.625a.578.578,0,0,1,0,1.025Z" transform="translate(0 -45.917)" fill="#fff"/>
								</svg>
							</a>
							<a href="#" class="allegro">
								<img src="<?php echo THEME_URL; ?>_dev/img/allegro-logo.png" alt="">
							</a>
							<a href="#" class="olx">
								<img src="<?php echo THEME_URL; ?>_dev/img/olx.png" alt="">
							</a>
							<a href="#" class="sprzedajemy">
								<img src="<?php echo THEME_URL; ?>_dev/img/sprzedajemy.png" alt="">
							</a>
						</div>
						<div class="footerCTA--text">
							<span>Potrzebujesz pomocy?</span>
							<span>Zadzwoń</span>
							<a href="tel: +48 695 438 850" target="_blank">
								<svg xmlns="http://www.w3.org/2000/svg" width="35.194" height="34.388" viewBox="0 0 35.194 34.388">
									<g id="customer-support" transform="translate(-0.643 -1.361)">
										<path id="Path_1299" data-name="Path 1299" d="M33.676,16.256a15.445,15.445,0,0,0-30.871,0A3.633,3.633,0,0,0,.643,19.573v4.075a3.634,3.634,0,0,0,3.63,3.63,2.351,2.351,0,0,0,2.349-2.349V18.291A2.344,2.344,0,0,0,4.5,15.966a13.762,13.762,0,0,1,27.472,0,2.344,2.344,0,0,0-2.116,2.325v6.638a2.343,2.343,0,0,0,2.147,2.328v1.677A3.43,3.43,0,0,1,28.58,32.36H26.043a2.522,2.522,0,0,0-2.395-1.7H21.034a2.51,2.51,0,0,0-1.066.233A2.552,2.552,0,0,0,18.486,33.2a2.55,2.55,0,0,0,2.547,2.547h2.615a2.557,2.557,0,0,0,2.4-1.705H28.58a5.115,5.115,0,0,0,5.11-5.109V26.957a3.632,3.632,0,0,0,2.147-3.31V19.572a3.633,3.633,0,0,0-2.161-3.316ZM4.937,18.291v6.638a.666.666,0,0,1-.665.665,1.949,1.949,0,0,1-1.946-1.946V19.572a1.948,1.948,0,0,1,1.946-1.946.666.666,0,0,1,.665.665ZM24.493,33.382a.868.868,0,0,1-.845.684H21.033a.863.863,0,0,1-.358-1.649.837.837,0,0,1,.358-.078h2.615a.867.867,0,0,1,.845,1.043Zm9.66-9.734a1.949,1.949,0,0,1-1.946,1.946.666.666,0,0,1-.665-.665V18.291a.666.666,0,0,1,.665-.665,1.949,1.949,0,0,1,1.946,1.946Z" transform="translate(0)" fill="#3592ee"/>
										<path id="Path_1300" data-name="Path 1300" d="M30.4,30.331a3.571,3.571,0,0,0,3.567-3.567V19.5A3.571,3.571,0,0,0,30.4,15.929H19.5A3.571,3.571,0,0,0,15.931,19.5v7.268A3.571,3.571,0,0,0,19.5,30.331h.067v1.883a1.748,1.748,0,0,0,1.746,1.753,1.712,1.712,0,0,0,1.232-.52l3.133-3.116Zm-5.663-1.439-3.391,3.372a.042.042,0,0,1-.058.013.056.056,0,0,1-.039-.063V29.489a.842.842,0,0,0-.842-.842H19.5a1.885,1.885,0,0,1-1.883-1.883V19.5A1.885,1.885,0,0,1,19.5,17.613H30.4A1.887,1.887,0,0,1,32.283,19.5v7.268A1.885,1.885,0,0,1,30.4,28.647H25.33a.842.842,0,0,0-.594.245Z" transform="translate(-6.709 -6.393)" fill="#3592ee"/>
										<path id="Path_1301" data-name="Path 1301" d="M23.742,26.787a1.242,1.242,0,1,0,1.243,1.242A1.244,1.244,0,0,0,23.742,26.787Z" transform="translate(-9.591 -11.157)" fill="#3592ee"/>
										<path id="Path_1302" data-name="Path 1302" d="M31.028,26.787a1.242,1.242,0,1,0,1.243,1.242A1.244,1.244,0,0,0,31.028,26.787Z" transform="translate(-12.789 -11.157)" fill="#3592ee"/>
										<path id="Path_1303" data-name="Path 1303" d="M38.314,26.787a1.242,1.242,0,1,0,1.243,1.242A1.244,1.244,0,0,0,38.314,26.787Z" transform="translate(-15.986 -11.157)" fill="#3592ee"/>
									</g>
								</svg>
								<span>+48 695 438 850</span>
							</a> 
						</div>
						<a href="mailto: biuro@mp-technik.com.pl" class="footerCTA--mail">
							<svg id="paper-plane" xmlns="http://www.w3.org/2000/svg" width="20.903" height="20.032" viewBox="0 0 20.903 20.032">
								<path id="Path_1304" data-name="Path 1304" d="M8.75,17.612v4.04a.653.653,0,0,0,1.179.387l2.363-3.216Z" transform="translate(-1.129 -2.273)" fill="#fff"/>
								<path id="Path_1305" data-name="Path 1305" d="M20.629.121a.653.653,0,0,0-.681-.047L.351,10.308a.653.653,0,0,0,.091,1.2l5.448,1.862,11.6-9.92L8.514,14.264l9.13,3.121a.668.668,0,0,0,.211.035.653.653,0,0,0,.646-.557L20.9.75a.654.654,0,0,0-.267-.629Z" transform="translate(0 0)" fill="#fff"/>
							</svg>
							<span>napisz do nas</span>
						</a>
					</div>
				</div>
		</div>
	</div>
	<div class="footer--copyright"></div>
</footer>
    
<!-- Javascript-->

<script src="<?php echo THEME_URL ?>public/swiper.js"></script>
<script src="<?php echo THEME_URL ?>public/bundle.js"></script>
<script src="<?php echo THEME_URL ?>public/map.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaPiQlYXG53c8H0c9UxK_zT2WZxyPghe0&callback=initMap"></script>