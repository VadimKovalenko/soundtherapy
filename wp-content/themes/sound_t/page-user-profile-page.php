<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sound_t
 */

get_header(); ?>
	<style>
		html {
			min-height: 100%;
			position: relative;
		}

		body {
			margin-bottom: 80px;			
		}

		footer {
			position: absolute;
		}

		.radio-inline {
			margin-right: 15px;
		}

		h3, h4 {
			text-align: center;
		}

		.profile-main-info>div {
			display: inline-block;
			width:100%;
		}

		.profile-main-info>div>input {
			margin-bottom: 20px;
			
		}

		.profile-main-info>div>label {
			float: left;
			width: 40%;
			padding-top: 5px;
		}

		.submit-usr-info {
			margin-right: auto;
			margin-left: auto;
    		display: block;
    		background: #acce43;
		    color: #fff !important;
		    text-decoration: none;
		    font-family: 'adamcg proregular', sans-serif;
		    font-size: 14px;
		    text-transform: uppercase;
		    padding: 5px 30px 5px 30px;
		    border-radius: 20px;
		}

		.user-profile-container fieldset.profile-additional-info {
			margin-bottom: 15px;
			border-bottom: 1px solid #c0c0c0 !important;
		}

		.user-profile-container fieldset.profile-main-info {
			border-bottom: 1px solid #c0c0c0 !important;
		}

		.user-profile-container fieldset {
			border-bottom: none;
		}

		.profile-ear-block-feel .additional-info,
		.profile-vertigo .additional-info {
			border: 1px solid #c0c0c0;
			padding: 10px;
		}

		.profile-ear-block-feel .additional-info>p,
		.profile-vertigo .additional-info>p {
			margin-top: 5px;
			margin-bottom: 15px;
		}
	</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="fw-container user-profile-container">
				<h3><b>KWESTIONARIUSZ CHARAKTERYSTYKI SZUMU USZNEGO</b></h3>
				<form action="">
					<div class="form-group">
						<div class="fw-col-md-12">
							<fieldset id="profile-main-info" class="profile-main-info">
								<h4><b>DANE OSOBOWE</b></h4>
								<div>
									<label for="user_name">IMIĘ</label>
									<input type="text" name="user_name">
								</div>
								<br>								
								<div>
									<label for="user_lastname">NAZWISKO</label>
									<input type="text" name="user_lastname">
								</div>
								<br>
								<div>
									<label for="user_birth">DATA URODZENIA (DZIEŃ-MIESIĄC-ROK):</label>
									<input type="date" name="user_birth">
								</div>
								<br>
								<div>
									<label for="user_pesel">PESEL</label>
									<input type="text" name="user_pesel">
								</div>
								<br>
								<div>
									<label for="user_adress">ADRES DO KORESPONDENCJI:</label>
									<input type="text" name="user_adress">
								</div>
								<br>
								<div>
									<label for="user_tel">TEL.:</label>
									<input type="text" name="user_tel">
								</div>
								<br>
								<div>
									<label for="user_date_research">DATA BADANIA(DZIEŃ-MIESIĄC-ROK):</label>
									<input type="date" name="user_date_research">
								</div>
								<br>
							</fieldset>

							<h4><b>CHARAKTERYSTYKA SZUMU USZNEGO</b></h4>

							<fieldset id = "profile_where_noise">
								<label for="">1. Gdzie odczuwa Pan(i) szum uszny?</label>
								<br>
								<label class="radio-inline" for="profile_where_noise">
			                      <input type="radio" name="profile_where_noise" id="profile_where_noise1" value="Orange">
			                      W obu uszach jednakowo
			                    </label>
			                    <br>
			                    <label class="radio-inline" for="profile_where_noise">
			                      <input type="radio" name="profile_where_noise" id="profile_where_noise2" value="Orange">
			                      W obu uszach, ale w każdym słyszę inny dźwięk
			                    </label>
			                    <br>
			                    <label class="radio-inline" for="profile_where_noise">
			                      <input type="radio" name="profile_where_noise" id="profile_where_noise3" value="Orange">
			                      Tylko w lewym uchu
			                    </label>
			                    <br>
			                    <label class="radio-inline" for="profile_where_noise">
			                      <input type="radio" name="profile_where_noise" id="profile_where_noise4" value="Orange">
			                      Tylko w prawym uchu
			                    </label>
			                    <br>
			                    <label class="radio-inline" for="profile_where_noise">
			                      <input type="radio" name="profile_where_noise" id="profile_where_noise5" value="Orange">
			                      W głowie
			                    </label>
			                    <br>
			                    <label class="radio-inline" for="profile_where_noise">
			                      <input type="radio" name="profile_where_noise" id="profile_where_noise6" value="Orange">
			                      Trudno powiedzieć, zdarza się, że słyszę szum w obu uszach, w jednym uchu, w głowie
			                    </label>
		                    </fieldset>

		                    <fieldset id="profile_how_long_noise">
		                    	<label for="profile_how_long_noise">2. Jak długo odczuwa Pan(i) szum uszny? (w miesiącach)</label>
		                    	<input type="text" name="profile_how_long_noise">
		                    </fieldset>

		                    <fieldset id="profile_noise_reason">
								<label for="">3. Czy pamięta Pan(i) jakieś zdarzenie/zdarzenia ze swojego życia, które mogłoby przyczynić się do pojawienia się szumu usznego (np. uraz głowy, przewlekły stres, długotrwała praca w hałasie, itp.)?</label>
								<br>
								<label class="radio-inline" for="profile_noise_reason">
			                      <input type="radio" name="profile_noise_reason" id="profile_noise_reason1" value="Orange">
			                      Nie
			                    </label>
			                    <span class="additional-info-wrap">
			                        <label class="radio-inline" for="profile_noise_reason">
			                          <input type="radio" name="profile_noise_reason" id="profile_noise_reason2" value="Other">
			                          Tak
			                        </label>
			                        <div class="additional-info hide">
			                              <textarea id="profile_noise_reason2_1" name="profile_noise_reason2_1_2" placeholder="Jeśli tak, proszę opisać jakie i kiedy miały miejsce?" class="form-control" disabled=""></textarea>
			                        </div>
			                        <div class="additional-info hide">
			                              <textarea id="profile_noise_reason2_2" name="profile_noise_reason2_2_2" placeholder="Jak dużo czasu upłynęło od tego zdarzenia do momentu pojawienia się szumu usznego?" class="form-control" disabled=""></textarea>
			                        </div>
			                    </span>
		                    </fieldset>

							<fieldset>
								<label for="profile_noise_changed">4. Czy odczuwany przez Panią/Pana szum uszny zmienił się od czasu kiedy pojawił się po raz pierwszy?</label>
								<br>
								<label class="radio-inline" for="profile_noise_changed">
			                      <input type="radio" name="profile_noise_changed" id="profile_noise_changed1" value="Orange">
			                      Nie
			                    </label>
			                    <span class="additional-info-wrap">
			                        <label class="radio-inline" for="profile_noise_changed">
			                          <input type="radio" name="profile_noise_changed" id="profile_noise_changed2" value="Other">
			                          Tak
			                        </label>
			                        <div class="additional-info hide">
			                              <textarea id="profile_noise_changed_descr" name="profile_noise_changed_descr" placeholder="Jeśli tak, proszę opisać w jaki sposób" class="form-control" disabled=""></textarea>
			                        </div>
			                    </span>
		                    </fieldset>

		                    <fieldset id="profile_noise_periodic">
								<label for="">5. Czy Pani/Pana szum uszny jest stały czy zmienia się (np. utrzymuje się przez pewien czas potem znowu pojawia się, zanika, itd.)?</label>
								<br>
								<label class="radio-inline" for="profile_noise_periodic">
			                      <input type="radio" name="profile_noise_periodic" id="profile_noise_periodic1" value="Orange">
			                      Jest względnie stały , jednostajny
			                    </label>
			                    <span class="additional-info-wrap">
			                        <label class="radio-inline" for="Radios_Other">
			                          <input type="radio" name="profile_noise_periodic" id="profile_noise_periodic2" value="Other">
			                          Zmienia się w ciągu godziny/dnia
			                        </label>
			                        <div class="additional-info hide">
			                              <textarea id="profile_noise_periodic3" name="profile_noise_periodic" placeholder="Jeśli Pani/Pana szum uszny zmienia się, to jak często i jak bardzo? Proszę opisać" class="form-control" disabled=""></textarea>
			                        </div>
			                    </span>
		                    </fieldset>

		                    <fieldset id="profile_noise_eval">
		                    	<label for="profile_noise_eval">7. Proszę ocenić uporczywość Pani/Pana szumu usznego</label>
		                    	<select name="profile_noise_eval" id="">
		                    		<option value="">Prosze wybrać</option>
		                    		<option value="">1 (Łagodny)</option>
		                    		<option value="">2</option>
		                    		<option value="">3</option>
		                    		<option value="">4</option>
		                    		<option value="">5</option>
		                    		<option value="">6</option>
		                    		<option value="">7</option>
		                    		<option value="">8</option>
		                    		<option value="">9</option>
		                    		<option value="">10 (Bardzo uporczywy)</option>
		                    	</select>
		                    </fieldset>

							<fieldset id="profile_noise_situation">
								<label for="profile_noise_situation">8. W których sytuacjach szum uszny szczególnie się nasila?</label>
								<label class="checkbox-inline" for="profile_noise_situation">
			                      <input type="checkbox" name="profile_noise_situation" id="profile_noise_situation1" value="Apple">
			                      Zawsze słyszę go tak samo
			                    </label>
			                    <br>
			                    <label class="checkbox-inline" for="profile_noise_situation">
			                      <input type="checkbox" name="profile_noise_situation" id="profile_noise_situation2" value="Orange">
			                      W dzień
			                    </label>
			                    <br>
			                    <label class="checkbox-inline" for="Checkbox">
			                      <input type="checkbox" name="profile_noise_situation" id="profile_noise_situation3" value="Bananas">
			                      Pod wpływem stresu/kiedy jestem zdenerwowany(a)
			                    </label>
			                    <br>
			                    <label class="checkbox-inline" for="Checkboxe">
			                      <input type="checkbox" name="profile_noise_situation" id="profile_noise_situation4" value="Kumquats">
			                      Po wypiciu kawy
			                    </label>
			                    <br>
			                    <label class="checkbox-inline" for="Checkboxe">
			                      <input type="checkbox" name="profile_noise_situation" id="profile_noise_situation5" value="Kumquats">
			                      Po dłuższym przebywaniu w hałasie (np. na koncercie)
			                    </label>			                    
			                    <br>
			                    <label class="checkbox-inline" for="Checkboxe">
			                      <input type="checkbox" name="profile_noise_situation" id="profile_noise_situation6" value="Kumquats">
			                      W nocy, przed zaśnięciem 
			                    </label>			                    
			                    <br>
			                    <label class="checkbox-inline" for="Checkboxe">
			                      <input type="checkbox" name="profile_noise_situation" id="profile_noise_situation7" value="Kumquats">
			                      Kiedy jestem zrelaksowany(a) 
			                    </label>			                    
			                    <br>
			                    <label class="checkbox-inline" for="Checkboxe">
			                      <input type="checkbox" name="profile_noise_situation" id="profile_noise_situation8" value="Kumquats">
			                      Pod wpływem alkoholu 
			                    </label>			                    
			                    <br>
			                    <label class="checkbox-inline" for="Checkboxe">
			                      <input type="checkbox" name="profile_noise_situation" id="profile_noise_situation9" value="Kumquats">
			                      Po zapaleniu papierosa 
			                    </label>			                    
			                    <br>
			                    <label class="checkbox-inline" for="Checkboxe">
			                      <input type="checkbox" name="profile_noise_situation" id="profile_noise_situation10" value="Kumquats">
			                      Podczas i/lub po wysiłku fizycznym 
			                    </label>
			                    <br>
			                    <span class="additional-info-wrap">
			                        <label class="checkbox-inline" for="Checkboxes_Grape">
			                          <input type="checkbox" name="Checkboxes" id="Checkboxes_Grape" value="Grape">
			                          Podczas alergii na...
			                        </label>
			                        <div class="additional-info hide">
			                              <input type="text" id="CheckboxesNameOfGrape" name="CheckboxesNameOfGrape" placeholder="proszę wymienić  alergeny" class="form-control" disabled="">
			                        </div>
			                    </span>
			                    <br>
			                    <span class="additional-info-wrap">
			                        <label class="checkbox-inline" for="Checkboxes_Other">
			                          <input type="checkbox" name="Checkboxes" id="Checkboxes_Other" value="Other">
			                          Po przyjęciu leków...
			                        </label>
			                        <div class="additional-info hide">
			                              <input type="text" id="CheckboxesOther" name="CheckboxesOther" placeholder="proszę wymienić jakich" class="form-control" disabled="">
			                        </div>
			                    </span>			                    
			                    <br>
			                    <span class="additional-info-wrap">
			                        <label class="checkbox-inline" for="Checkboxes_Other">
			                          <input type="checkbox" name="Checkboxes" id="Checkboxes_Other" value="Other">
			                          Po zjedzeniu/wypiciu...
			                        </label>
			                        <div class="additional-info hide">
			                              <input type="text" id="CheckboxesOther" name="CheckboxesOther" placeholder="proszę wpisać czego" class="form-control" disabled="">
			                        </div>
			                    </span>
			                    <br>
			                    <label class="checkbox-inline" for="Checkboxes_Kumquats">
			                      <input type="checkbox" name="Checkboxes" id="Checkboxes_Kumquats" value="Kumquats">
			                      Kiedy są niekorzystne warunki atmosferyczne, zmienia się pogoda 
			                    </label>
			                    <br>		                    
			                    <label class="checkbox-inline" for="Checkboxes_Kumquats">
			                      <input type="checkbox" name="Checkboxes" id="Checkboxes_Kumquats" value="Kumquats">
			                      Kiedy mam skoki ciśnienia krwi 
			                    </label>			                    
			                    <br>		                    
			                    <label class="checkbox-inline" for="Checkboxes_Kumquats">
			                      <input type="checkbox" name="Checkboxes" id="Checkboxes_Kumquats" value="Kumquats">
			                      Kiedy wykonuję ruchy głowy, skręty szyi, zaciskam zęby 
			                    </label>
			                    <br>			                    
			                    <span class="additional-info-wrap">
			                        <label class="checkbox-inline" for="Checkboxes_Other">
			                          <input type="checkbox" name="Checkboxes" id="Checkboxes_Other" value="Other">
			                          Inne
			                        </label>
			                        <div class="additional-info hide">
			                              <textarea name="" id="" cols="30" rows="10" placeholder="Proszę opisać"></textarea>
			                        </div>
			                    </span>
							</fieldset>

							<fieldset id="profile_noise_percentage">
								<label for="profile_noise_percentage">9. Zakładając, że cały dzień (bez snu) to 100%, proszę podać przez średnio ile procent dnia jest Pan(i) świadomy/a obecności szumu</label>
								<textarea name="profile_noise_percentage" id="" cols="30" rows="10"></textarea>
							</fieldset>

							<fieldset id="profile_noise_frequency">
								<label for="">10. Czy potrafi Pan(i) oszacować częstotliwość (wysokość) dźwięku szumu usznego?  </label>
								<br>
								<label class="radio-inline" for="profile_noise_frequency">
			                      <input type="radio" name="profile_noise_frequency" id="profile_noise_frequency1" value="Orange">
			                      Nie
			                    </label>
								<span class="additional-info-wrap">
			                        <label class="radio-inline" for="profile_noise_frequency">
			                          <input type="radio" name="profile_noise_frequency" id="profile_noise_frequency2" value="Other">
			                          Tak
			                        </label>
			                        <div class="additional-info hide">
			                        	<p>Jeśli tak, proszę oszacować wysokość dźwięku na skali. </p>
			                            <select name="profile_noise_frequency" id="">
			                            	<option value="">Prosze wybrać</option>
				                    		<option value="">1 (niski)</option>
				                    		<option value="">2</option>
				                    		<option value="">3</option>
				                    		<option value="">4</option>
				                    		<option value="">5</option>
				                    		<option value="">6</option>
				                    		<option value="">7</option>
				                    		<option value="">8</option>
				                    		<option value="">9</option>
				                    		<option value="">10 (wysoki)</option>
		                    			</select>
			                        </div>
			                    </span>
							</fieldset>
							
							<fieldset id="profile_noise_ frequency">
								<label for="profile_noise_ frequency">11. Czy głośność Pani/Pana szumu usznego jest stała?   </label>
								<br>
								<label class="radio-inline" for="profile_noise_frequency">
			                      <input type="radio" name="profile_noise_frequency" id="profile_noise_frequency1" value="Orange">
			                      Nie
			                    </label>
			                    <label class="radio-inline" for="profile_noise_frequency">
			                      <input type="radio" name="profile_noise_frequency" id="profile_noise_frequency1" value="Orange">
			                      Tak
			                    </label>
							</fieldset>

							<fieldset id="profile_noise_descr">
								<label for="profile_noise_descr">12. Proszę opisać dźwięk szumu usznego.</label>
								<br>
								<label class="checkbox-inline" for="profile_noise_descr1">
			                      <input type="checkbox" name="profile_noise_descr" id="profile_noise_descr1" value="Apple">
			                      Gwizdanie
			                    </label>
			                    <br>
			                    <label class="checkbox-inline" for="profile_noise_descr2">
			                      <input type="checkbox" name="profile_noise_descr" id="profile_noise_descr2" value="Orange">
			                      Syczenie
			                    </label>
			                    <br>
			                    <label class="checkbox-inline" for="profile_noise_descr3">
			                      <input type="checkbox" name="profile_noise_descr" id="profile_noise_descr3" value="Bananas">
			                      Dzwonienie
			                    </label>
			                    <br>
			                    <label class="checkbox-inline" for="profile_noise_descr4">
			                      <input type="checkbox" name="profile_noise_descr" id="profile_noise_descr4" value="Kumquats">
			                      Pulsowanie/łomotanie
			                    </label>
			                    <br>
			                    <label class="checkbox-inline" for="profile_noise_descr5">
			                      <input type="checkbox" name="profile_noise_descr" id="profile_noise_descr5" value="Kumquats">
			                      Świergotanie
			                    </label>			                    
			                    <br>
			                    <label class="checkbox-inline" for="profile_noise_descr6">
			                      <input type="checkbox" name="profile_noise_descr" id="profile_noise_descr6" value="Kumquats">
			                      Świergotanie 
			                    </label>			                    
			                    <br>
			                    <label class="checkbox-inline" for="profile_noise_descr7">
			                      <input type="checkbox" name="profile_noise_descr" id="profile_noise_descr7" value="Kumquats">
			                      Brzęczenie 
			                    </label>
			                    <br>
			                    <label class="checkbox-inline" for="profile_noise_descr7">
			                      <input type="checkbox" name="profile_noise_descr" id="profile_noise_descr7" value="Kumquats">
			                      Szum 
			                    </label>
			                    <br>
			                    <label class="checkbox-inline" for="profile_noise_descr7">
			                      <input type="checkbox" name="profile_noise_descr" id="profile_noise_descr7" value="Kumquats">
			                      Głosy 
			                    </label>
			                    <br>			                    
			                    <span class="additional-info-wrap">
			                        <label class="checkbox-inline" for="profile_noise_descr8">
			                          <input type="checkbox" name="profile_noise_descr7" id="profile_noise_descr8" value="Other">
			                          Inne
			                        </label>
			                        <div class="additional-info hide">
			                              <textarea name="" id="" cols="30" rows="10" placeholder="Proszę opisać"></textarea>
			                        </div>
			                    </span>
							</fieldset>

							<fieldset id="profile_bad_hearing">
								<label for="">13. Czy ma Pan(i) niedosłuch?</label>
								<br>
								<label class="radio-inline" for="profile_bad_hearing1">
			                      <input type="radio" name="profile_bad_hearing" id="profile_bad_hearing1" value="Orange">
			                      Nie
			                    </label>
			                    <label class="radio-inline" for="profile_bad_hearing2">
			                      <input type="radio" name="profile_bad_hearing" id="profile_bad_hearing2" value="Orange">
			                      Tak
			                    </label>
							</fieldset>

							<fieldset id="profile_aerophone">
								<label for="">14. Czy używa Pan(i) aparatu słuchowego?</label>
								<br>
								<label class="radio-inline" for="profile_aerophone1">
			                      <input type="radio" name="profile_aerophone" id="profile_aerophone1" value="Orange">
			                      Nie
			                    </label>
			                    <label class="radio-inline" for="profile_aerophone2">
			                      <input type="radio" name="profile_aerophone" id="profile_aerophone2" value="Orange">
			                      Tak
			                    </label>
							</fieldset>

							<fieldset id="profile_noise_ now">
								<label for="">15. Czy w tej chwili słyszy Pan(i) szum uszny?</label>
								<br>
								<label class="radio-inline" for="profile_noise_ now1">
			                      <input type="radio" name="profile_noise_ now" id="profile_noise_ now1" value="Orange">
			                      Nie
			                    </label>
			                    <label class="radio-inline" for="profile_noise_ now2">
			                      <input type="radio" name="profile_noise_ now" id="profile_noise_ now2" value="Orange">
			                      Tak
			                    </label>								
							</fieldset>

							<fieldset id="profile_smoking">
								<label for="">16. Jak często Pan(i) pali?</label>
								<br>
								<label class="radio-inline" for="profile_smoking1">
			                      <input type="radio" name="profile_smoking" id="profile_smoking1" value="Orange">
			                      Nie palę
			                    </label>
			                    <label class="radio-inline" for="profile_smoking2">
			                      <input type="radio" name="profile_smoking" id="profile_smoking2" value="Orange">
			                      1-5 razy dzienne
			                    </label>			                    
			                    <label class="radio-inline" for="profile_smoking3">
			                      <input type="radio" name="profile_smoking" id="profile_smoking3" value="Orange">
			                      Częściej niż 5 razy dziennie
			                    </label>								
							</fieldset>

							<fieldset id="profile_drink">
								<label for="">17. Jak często pije Pan(i) kawę, herbatę lub wodę gazowaną?</label>
								<br>
								<label class="radio-inline" for="profile_drink1">
			                      <input type="radio" name="profile_drink" id="profile_drink1" value="Orange">
			                      0-1 raz dziennie
			                    </label>
			                    <label class="radio-inline" for="profile_drink2">
			                      <input type="radio" name="profile_drink" id="profile_drink2" value="Orange">
			                      2-3 razy dziennie
			                    </label>			                    
			                    <label class="radio-inline" for="profile_drink3">
			                      <input type="radio" name="profile_drink" id="profile_drink3" value="Orange">
			                      Częściej niż 2-3 razy dziennie
			                    </label>								
							</fieldset>

							<fieldset id="profile_head_injury">
								<label for="">18. Czy miał(a) Pan(i) kiedyś uraz głowy? </label>
								<br>
								<label class="radio-inline" for="profile_head_injury">
			                      <input type="radio" name="profile_head_injury" id="profile_head_injury1" value="Orange">
			                      Nie
			                    </label>
			                    <span class="additional-info-wrap">
			                        <label class="radio-inline" for="profile_head_injury">
			                          <input type="radio" name="profile_head_injury" id="profile_head_injury2" value="Other">
			                          Tak
			                        </label>
			                        <div class="additional-info hide">
			                              <textarea id="profile_head_injury3" name="profile_head_injury" placeholder="Proszę opisać jaki i kiedy miał miejsce" class="form-control" disabled=""></textarea>
			                        </div>
			                    </span>
							</fieldset>

							<fieldset id="profile_loud_sound">
								<label for="">19. Czy był(a) Pan(i) kiedyś narażony/narażona na hałas (tak głośny, że trzeba było krzyczeć do osoby, która stała w niewielkiej odległości?)</label>
								<br>
								<label class="radio-inline" for="profile_loud_sound">
			                      <input type="radio" name="profile_loud_sound" id="profile_loud_sound1" value="Orange">
			                      Nie
			                    </label>
			                    <span class="additional-info-wrap">
			                        <label class="radio-inline" for="profile_loud_sound">
			                          <input type="radio" name="profile_loud_sound" id="profile_loud_sound2" value="Other">
			                          Tak
			                        </label>
			                        <div class="additional-info hide">
			                              <textarea id="profile_loud_sound3" name="profile_loud_sound" placeholder="Proszę opisać jaki hałas  i kiedy miał miejsce" class="form-control" disabled=""></textarea>
			                        </div>
			                    </span>
							</fieldset>
	
							<fieldset id = "profile_ear_protection">
								<label for="">20. Czy chroni Pan(i) uszy przed głośnymi dźwiękami (np. stosując zatyczki do uszu)? </label>
								<br>							
								<label class="radio-inline" for="profile_ear_protection1">
			                      <input type="radio" name="profile_ear_protection" id="profile_ear_protection1" value="Orange">
			                      Nie
			                    </label>
			                    <label class="radio-inline" for="profile_ear_protection2">
			                      <input type="radio" name="profile_ear_protection" id="profile_ear_protection2" value="Orange">
			                      Tak
			                    </label>
							</fieldset>

							<fieldset id = "profile_custom_ear_protection">
								<label for="">21. Czy ma Pan(i) jakiś skuteczny sposób „wyciszania” szumu usznego?</label>
								<br>
								<label class="radio-inline" for="profile_custom_ear_protection">
			                      <input type="radio" name="profile_custom_ear_protection" id="profile_custom_ear_protection1" value="Orange">
			                      Nie
			                    </label>
			                    <span class="additional-info-wrap">
			                        <label class="radio-inline" for="profile_custom_ear_protection">
			                          <input type="radio" name="profile_custom_ear_protection" id="profile_custom_ear_protection2" value="Other">
			                          Tak
			                        </label>
			                        <div class="additional-info hide">
			                              <textarea id="profile_custom_ear_protection3" name="profile_custom_ear_protection" placeholder="Jeśli tak, proszę go opisać" class="form-control" disabled=""></textarea>
			                        </div>
			                    </span>
							</fieldset>

							<fieldset id="profile_ear_block_feel" class="profile-ear-block-feel">
								<label for="">22. Czy ma Pan(i) uczucie zatkanych uszu?</label>
								<br>
								 <span class="additional-info-wrap">
								 	<label class="radio-inline" for="profile_ear_block_feel">
			                      	<input type="radio" name="profile_ear_block_feel" id="profile_ear_block_feel1" value="Orange">
			                      	Bardzo często
			                    	</label>
			                        <div class="additional-info hide">
			                             <p>Jeśli tak, czy wówczas zmienia się szum uszny?</p>
			                             <label class="radio-inline" for="profile_ear_block_feel1_1">
					                      <input type="radio" name="profile_ear_block_feel1_1" id="profile_ear_block_feel1_1_1" value="Orange">
					                      Nie
					                    </label>
					                    <label class="radio-inline" for="profile_ear_block_feel1_1">
					                      <input type="radio" name="profile_ear_block_feel1_1" id="profile_ear_block_feel1_1_2" value="Orange">
					                      Tak
					                    </label>
			                        </div>
			                    </span>								
			                    <br>
			                    <span class="additional-info-wrap">
									<label class="radio-inline" for="profile_ear_block_feel">
				                      <input type="radio" name="profile_ear_block_feel" id="profile_ear_block_feel2" value="Orange">
				                      Często
				                    </label>
			                        <div class="additional-info hide">
			                             <p>Jeśli tak, czy wówczas zmienia się szum uszny?</p>
			                             <label class="radio-inline" for="profile_ear_block_feel2_1">
					                      <input type="radio" name="profile_ear_block_feel2_1" id="profile_ear_block_feel2_1_1" value="Orange">
					                      Nie
					                    </label>
					                    <label class="radio-inline" for="profile_ear_block_feel2_1">
					                      <input type="radio" name="profile_ear_block_feel2_1" id="profile_ear_block_feel2_1_2" value="Orange">
					                      Tak
					                    </label>
			                        </div>
			                    </span>			                    
			                    <br>
			                    <span class="additional-info-wrap">
									<label class="radio-inline" for="profile_ear_block_feel">
				                      <input type="radio" name="profile_ear_block_feel" id="profile_ear_block_feel3" value="Orange">
				                      Czasami
				                    </label>
			                        <div class="additional-info hide">
			                             <p>Jeśli tak, czy wówczas zmienia się szum uszny?</p>
			                             <label class="radio-inline" for="profile_ear_block_feel3_1">
					                      <input type="radio" name="profile_ear_block_feel3_1" id="profile_ear_block_feel3_1_1" value="Orange">
					                      Nie
					                    </label>
					                    <label class="radio-inline" for="profile_ear_block_feel3_1">
					                      <input type="radio" name="profile_ear_block_feel3_1" id="profile_ear_block_feel3_1_2" value="Orange">
					                      Tak
					                    </label>
			                        </div>
			                    </span>			                    
			                    <br>
			                    <span class="additional-info-wrap">
									<label class="radio-inline" for="profile_ear_block_feel">
				                      <input type="radio" name="profile_ear_block_feel" id="profile_ear_block_feel4" value="Orange">
				                      Rzadko
				                    </label>
			                        <div class="additional-info hide">
			                             <p>Jeśli tak, czy wówczas zmienia się szum uszny?</p>
			                             <label class="radio-inline" for="profile_ear_block_feel4_1">
					                      <input type="radio" name="profile_ear_block_feel4_1" id="profile_ear_block_feel4_1_1" value="Orange">
					                      Nie
					                    </label>
					                    <label class="radio-inline" for="profile_ear_block_feel4_1">
					                      <input type="radio" name="profile_ear_block_feel4_1" id="profile_ear_block_feel4_1_2" value="Orange">
					                      Tak
					                    </label>
			                        </div>
			                    </span>			                    
			                    <br>
								<label class="radio-inline" for="profile_ear_block_feel">
			                      <input type="radio" name="profile_ear_block_feel" id="profile_ear_block_feel5" value="Orange">
			                      Nie zdarza się
			                    </label>								
							</fieldset>

							<fieldset id="profile_vertigo" class="profile-vertigo">
								<label for="">23. Czy miewa Pan(i) zawroty głowy?</label>
								<br>
								 <span class="additional-info-wrap">
								 	<label class="radio-inline" for="profile_vertigo">
			                      	<input type="radio" name="profile_vertigo" id="profile_vertigo1" value="Orange">
			                      	Bardzo często
			                    	</label>
			                        <div class="additional-info hide">
			                             <p>Jeśli tak, czy wówczas zmienia się szum uszny?</p>
			                             <label class="radio-inline" for="profile_vertigo1_1">
					                      <input type="radio" name="profile_vertigo1_1" id="profile_vertigo1_1_1" value="Orange">
					                      Nie
					                    </label>
					                    <label class="radio-inline" for="profile_vertigo1_1">
					                      <input type="radio" name="profile_vertigo1_1" id="profile_vertigo1_1_2" value="Orange">
					                      Tak
					                    </label>
			                        </div>
			                    </span>								
			                    <br>
			                    <span class="additional-info-wrap">
									<label class="radio-inline" for="profile_vertigo">
				                      <input type="radio" name="profile_vertigo" id="profile_vertigo2" value="Orange">
				                      Często
				                    </label>
			                        <div class="additional-info hide">
			                             <p>Jeśli tak, czy wówczas zmienia się szum uszny?</p>
			                             <label class="radio-inline" for="profile_vertigo2_1">
					                      <input type="radio" name="profile_vertigo2_1" id="profile_vertigo2_1_1" value="Orange">
					                      Nie
					                    </label>
					                    <label class="radio-inline" for="profile_vertigo2_1">
					                      <input type="radio" name="profile_vertigo2_1" id="profile_vertigo2_1_2" value="Orange">
					                      Tak
					                    </label>
			                        </div>
			                    </span>			                    
			                    <br>
			                    <span class="additional-info-wrap">
									<label class="radio-inline" for="profile_vertigo">
				                      <input type="radio" name="profile_vertigo" id="profile_vertigo3" value="Orange">
				                      Czasami
				                    </label>
			                        <div class="additional-info hide">
			                             <p>Jeśli tak, czy wówczas zmienia się szum uszny?</p>
			                             <label class="radio-inline" for="profile_vertigo3_1">
					                      <input type="radio" name="profile_vertigo3_1" id="profile_vertigo3_1_1" value="Orange">
					                      Nie
					                    </label>
					                    <label class="radio-inline" for="profile_vertigo3_1">
					                      <input type="radio" name="profile_vertigo3_1" id="profile_vertigo3_1_2" value="Orange">
					                      Tak
					                    </label>
			                        </div>
			                    </span>			                    
			                    <br>
			                    <span class="additional-info-wrap">
									<label class="radio-inline" for="profile_vertigo">
				                      <input type="radio" name="profile_vertigo" id="profile_vertigo4" value="Orange">
				                      Rzadko
				                    </label>
			                        <div class="additional-info hide">
			                             <p>Jeśli tak, czy wówczas zmienia się szum uszny?</p>
			                             <label class="radio-inline" for="profile_vertigo4_1">
					                      <input type="radio" name="profile_vertigo4_1" id="profile_vertigo4_1_1" value="Orange">
					                      Nie
					                    </label>
					                    <label class="radio-inline" for="profile_vertigo4_1">
					                      <input type="radio" name="profile_vertigo4_1" id="profile_vertigo4_1_2" value="Orange">
					                      Tak
					                    </label>
			                        </div>
			                    </span>			                    
			                    <br>
								<label class="radio-inline" for="profile_vertigo">
			                      <input type="radio" name="profile_vertigo" id="profile_vertigo5" value="Orange">
			                      Nie zdarza się
			                    </label>								
							</fieldset>

							<fieldset id="profile_doctor">
								<label for="">24. Czy przebywa Pan(i) pod opieką lekarza specjalisty (poza IFPS)?</label>
								<br>
								<label class="radio-inline" for="profile_doctor1">
			                      <input type="radio" name="profile_doctor" id="profile_doctor1" value="Orange">
			                      Nie
			                    </label>
			                    <span class="additional-info-wrap">
			                        <label class="radio-inline" for="profile_doctor">
			                          <input type="radio" name="profile_doctor" id="profile_doctor2" value="Other">
			                          Tak
			                        </label>
			                        <div class="additional-info hide">
			                              <textarea id="profile_doctor3" name="profile_doctor" placeholder="Jeśli tak, proszę podać jakiego" class="form-control" disabled=""></textarea>
			                        </div>
			                    </span>
							</fieldset>

							<fieldset id="profile_medicine">
								<label for="">25. Czy bierze Pan(i) przewlekle leki?</label>
								<br>
								<label class="radio-inline" for="profile_medicine1">
			                      <input type="radio" name="profile_medicine" id="profile_medicine1" value="Orange">
			                      Nie
			                    </label>
			                    <span class="additional-info-wrap">
			                        <label class="radio-inline" for="profile_medicine">
			                          <input type="radio" name="profile_medicine" id="profile_medicine2" value="Other">
			                          Tak
			                        </label>
			                        <div class="additional-info hide">
			                              <textarea id="profile_medicine3" name="profile_medicine" placeholder="Jeśli tak, proszę wymienić jakie:" class="form-control" disabled=""></textarea>
			                        </div>
			                    </span>
							</fieldset>

							<fieldset id="profile_additional_info" class="profile-additional-info">
								<label class="radio-inline" for="profile_additional_info">Uwagi</label>
								<textarea id="profile_additional_info1" name="profile_additional_info" placeholder="" class="form-control"></textarea>
							</fieldset>

							<button type="submit" class="submit-usr-info">Submit</button>							

						</div>
					</div>
				</form>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
