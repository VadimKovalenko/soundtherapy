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
if (isset( $_POST['submitInfo'] ) && $_POST[user_name] !== '') {
	global $wpdb;
	$wpdb->show_errors();
	/*$noise_reason;
	if ($_POST[profile_noise_reason] == 'Nie') {
		return $noise_reason = $_POST[profile_noise_reason];
	}else{
		return $noise_reason =  $_POST[profile_noise_reason] . ' ' . $_POST[profile_noise_reason2_1_2] . ' ' . $_POST[profile_noise_reason2_2_2] 
	}*/
	$wpdb->insert("user_stat_profile",
	array(
		'user_stat_profile_firstname' => $_POST[user_name],
		'user_stat_profile_lastname' => $_POST[user_lastname],
		'user_stat_profile_birthdate' => date('Ymd', strtotime($_POST[user_birth])),
		'user_stat_profile_pesel' => $_POST[user_pesel],
		'user_stat_profile_adress' => $_POST[user_adress],
		'user_stat_profile_tel' => $_POST[user_tel],
		'user_stat_profile_research' => date('Ymd', strtotime($_POST[user_date_research])),


		/*1*/'user_stat_profile_where_noise' => $_POST[profile_where_noise],
		/*2*/'user_stat_profile_how_long_noise' => $_POST[profile_how_long_noise],
		/*3*/'user_stat_profile_noise_reason' => $_POST[profile_noise_reason] . ' ' . $_POST[profile_noise_reason2_1_2] . ' ' . $_POST[profile_noise_reason2_2_2],
		/*4*/'user_stat_profile_noise_changed' => $_POST[profile_noise_changed] . ' ' . $_POST[profile_noise_changed_descr],
		/*5*/'user_stat_profile_noise_periodic' => $_POST[profile_noise_periodic] . ' ' . $_POST[profile_noise_periodic_descr],
		/*6*/'user_stat_profile_noise_eval' => $_POST[profile_noise_eval],
		/*7*/'user_stat_profile_noise_situation' => $_POST[profile_noise_situation] . ' ' . $_POST[profile_noise_situation_descr],
		/*8*/'user_stat_profile_noise_percentage' => $_POST[profile_noise_percentage],
		/*9*/'user_stat_profile_noise_frequency' => $_POST[profile_noise_frequency],
		/*10*/'user_stat_profile_noise_volume' => $_POST[profile_noise_volume],
		/*11*/'user_stat_profile_noise_descr' => $_POST[profile_noise_descr_other] . ' '. $_POST[profile_noise_descr_other],
		/*12*/'user_stat_profile_bad_hearing' => $_POST[profile_bad_hearing],
		/*13*/'user_stat_profile_aerophone' => $_POST[profile_aerophone],
		/*14*/'user_stat_profile_noise_now' => $_POST[profile_noise_now],
		/*15*/'user_stat_profile_smoking' => $_POST[profile_smoking],
		/*16*/'user_stat_profile_drink' => $_POST[profile_drink],
		/*17*/'user_stat_profile_head_injury' => $_POST[profile_head_injury] . ' '. $_POST[profile_head_injury_descr],
		/*18*/'user_stat_profile_loud_sound' => $_POST[profile_loud_sound] . ' '. $_POST[profile_loud_sound_descr],
		/*19*/'user_stat_profile_ear_protection' => $_POST[profile_ear_protection],
		/*20*/'user_stat_profile_custom_ear_protection' => $_POST[profile_custom_ear_protection] . ' '. $_POST[profile_custom_ear_protection],
		/*21*/'user_stat_profile_ear_block_feel' => $_POST[profile_ear_block_feel] . ' '. $_POST[ profile_ear_block_feel_descr],
		/*22*/'user_stat_profile_vertigo' => $_POST[profile_vertigo] . '' .$_POST[profile_vertigo_descr],
		/*23*/'user_stat_profile_doctor' => $_POST[profile_doctor] . ' '. $_POST[profile_doctor_descr],
		/*24*/'user_stat_profile_medicine' => $_POST[profile_medicine] . ' '. $_POST[profile_doctor_medicine],
		/*25*/'user_stat_profile_additional_info' => $_POST[profile_additional_info]

	),
	array('%s',
		  '%s',
		  '%s',
		  '%d',
		  '%s',
		  '%s',
		  '%s',
		  /**/
		  /*1*/'%s',
		  /*2*/'%s',
		  /*3*/'%s',
		  /*4*/'%s',
		  /*5*/'%s',
		  /*6*/'%s',
		  /*7*/'%s',
		  /*8*/'%s',
		  /*9*/'%s',
		  /*10*/'%s',
		  /*11*/'%s',
		  /*12*/'%s',
		  /*13*/'%s',
		  /*14*/'%s',
		  /*15*/'%s',
		  /*16*/'%s',
		  /*17*/'%s',
		  /*18*/'%s',
		  /*19*/'%s',
		  /*20*/'%s',
		  /*21*/'%s',
		  /*22*/'%s',
		  /*23*/'%s',
		  /*24*/'%s',
		  /*25*/'%s')
	);
	header ('Location: ' . $_SERVER['REQUEST_URI']);
	exit();
}

get_header(); ?>
	<style>
		html {
			min-height: 100%;
			position: relative;
		}

		body {
			margin-bottom: 80px;
			background: #f2f6fc;			
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
		
		fieldset {
			background-color: #fff;
		}	

		fieldset>label:first-child {
			font-weight: bold;
			display: inline-block;
			margin-top: 5px;
			margin-bottom: 10px;
		}

		.profile-main-info label{
			font-weight: bold;
		}

		.profile-additional-info-area {
			
		}
	</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="fw-container user-profile-container">
				<h3><b>KWESTIONARIUSZ CHARAKTERYSTYKI SZUMU USZNEGO</b></h3>
				<form action="" method="post">
					<div class="form-group">
						<div class="fw-col-md-12">
							<fieldset id="profile-main-info" class="profile-main-info">
								<h4><b>DANE OSOBOWE</b></h4>
								<div>
									<label for="user_name">IMIĘ</label>
									<input type="text" name="user_name" value="">
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
			                      <input type="radio" name="profile_where_noise" id="profile_where_noise1" value="W obu uszach jednakowo">
			                      W obu uszach jednakowo
			                    </label>
			                    <br>
			                    <label class="radio-inline" for="profile_where_noise">
			                      <input type="radio" name="profile_where_noise" id="profile_where_noise2" value="W obu uszach, ale w każdym słyszę inny dźwięk">
			                      W obu uszach, ale w każdym słyszę inny dźwięk
			                    </label>
			                    <br>
			                    <label class="radio-inline" for="profile_where_noise">
			                      <input type="radio" name="profile_where_noise" id="profile_where_noise3" value="Tylko w lewym uchu">
			                      Tylko w lewym uchu
			                    </label>
			                    <br>
			                    <label class="radio-inline" for="profile_where_noise">
			                      <input type="radio" name="profile_where_noise" id="profile_where_noise4" value="Tylko w prawym uchu">
			                      Tylko w prawym uchu
			                    </label>
			                    <br>
			                    <label class="radio-inline" for="profile_where_noise">
			                      <input type="radio" name="profile_where_noise" id="profile_where_noise5" value="W głowie">
			                      W głowie
			                    </label>
			                    <br>
			                    <label class="radio-inline" for="profile_where_noise">
			                      <input type="radio" name="profile_where_noise" id="profile_where_noise6" value="Trudno powiedzieć, zdarza się, że słyszę szum w obu uszach, w jednym uchu, w głowie">
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
			                      <input type="radio" name="profile_noise_reason" id="profile_noise_reason1" value="Nie">
			                      Nie
			                    </label>
			                    <span class="additional-info-wrap">
			                        <label class="radio-inline" for="profile_noise_reason">
			                          <input type="radio" name="profile_noise_reason" id="profile_noise_reason2" value="Tak">
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
			                      <input type="radio" name="profile_noise_changed" id="profile_noise_changed1" value="Nie">
			                      Nie
			                    </label>
			                    <span class="additional-info-wrap">
			                        <label class="radio-inline" for="profile_noise_changed">
			                          <input type="radio" name="profile_noise_changed" id="profile_noise_changed2" value="Tak">
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
			                      <input type="radio" name="profile_noise_periodic" id="profile_noise_periodic1" value="Jest względnie stały, jednostajny">
			                      Jest względnie stały, jednostajny
			                    </label>
			                    <span class="additional-info-wrap">
			                        <label class="radio-inline" for="Radios_Other">
			                          <input type="radio" name="profile_noise_periodic" id="profile_noise_periodic2" value="Zmienia się w ciągu godziny/dnia">
			                          Zmienia się w ciągu godziny/dnia
			                        </label>
			                        <div class="additional-info hide">
			                              <textarea id="profile_noise_periodic3" name="profile_noise_periodic_descr" placeholder="Jeśli Pani/Pana szum uszny zmienia się, to jak często i jak bardzo? Proszę opisać" class="form-control" disabled=""></textarea>
			                        </div>
			                    </span>
		                    </fieldset>

		                    <fieldset id="profile_noise_eval">
		                    	<label for="profile_noise_eval">6. Proszę ocenić uporczywość Pani/Pana szumu usznego</label>
		                    	<select name="profile_noise_eval" id="">
		                    		<option value="">Prosze wybrać</option>
		                    		<option value="1 (Łagodny)">1 (Łagodny)</option>
		                    		<option value="2">2</option>
		                    		<option value="3">3</option>
		                    		<option value="4">4</option>
		                    		<option value="5">5</option>
		                    		<option value="6">6</option>
		                    		<option value="7">7</option>
		                    		<option value="8">8</option>
		                    		<option value="9">9</option>
		                    		<option value="10 (Bardzo uporczywy)">10 (Bardzo uporczywy)</option>
		                    	</select>
		                    </fieldset>

							<fieldset id="profile_noise_situation">
								<label for="profile_noise_situation">7. W których sytuacjach szum uszny szczególnie się nasila?</label>
								<br>
								<label class="checkbox-inline" for="profile_noise_situation">
			                      <input type="checkbox" name="profile_noise_situation" id="profile_noise_situation1" value="Zawsze słyszę go tak samo">
			                      Zawsze słyszę go tak samo
			                    </label>
			                    <br>
			                    <label class="checkbox-inline" for="profile_noise_situation">
			                      <input type="checkbox" name="profile_noise_situation" id="profile_noise_situation2" value="W dzień">
			                      W dzień
			                    </label>
			                    <br>
			                    <label class="checkbox-inline" for="profile_noise_situation">
			                      <input type="checkbox" name="profile_noise_situation" id="profile_noise_situation3" value="Pod wpływem stresu/kiedy jestem zdenerwowany(a)">
			                      Pod wpływem stresu/kiedy jestem zdenerwowany(a)
			                    </label>
			                    <br>
			                    <label class="checkbox-inline" for="profile_noise_situation">
			                      <input type="checkbox" name="profile_noise_situation" id="profile_noise_situation4" value="Po wypiciu kawy">
			                      Po wypiciu kawy
			                    </label>
			                    <br>
			                    <label class="checkbox-inline" for="profile_noise_situation">
			                      <input type="checkbox" name="profile_noise_situation" id="profile_noise_situation5" value="Po dłuższym przebywaniu w hałasie (np. na koncercie)">
			                      Po dłuższym przebywaniu w hałasie (np. na koncercie)
			                    </label>			                    
			                    <br>
			                    <label class="checkbox-inline" for="profile_noise_situation">
			                      <input type="checkbox" name="profile_noise_situation" id="profile_noise_situation6" value="W nocy, przed zaśnięciem">
			                      W nocy, przed zaśnięciem 
			                    </label>			                    
			                    <br>
			                    <label class="checkbox-inline" for="profile_noise_situation">
			                      <input type="checkbox" name="profile_noise_situation" id="profile_noise_situation7" value="Kiedy jestem zrelaksowany(a)">
			                      Kiedy jestem zrelaksowany(a) 
			                    </label>			                    
			                    <br>
			                    <label class="checkbox-inline" for="profile_noise_situation">
			                      <input type="checkbox" name="profile_noise_situation" id="profile_noise_situation8" value="Pod wpływem alkoholu">
			                      Pod wpływem alkoholu 
			                    </label>			                    
			                    <br>
			                    <label class="checkbox-inline" for="profile_noise_situation">
			                      <input type="checkbox" name="profile_noise_situation" id="profile_noise_situation9" value="Po zapaleniu papierosa">
			                      Po zapaleniu papierosa 
			                    </label>			                    
			                    <br>
			                    <label class="checkbox-inline" for="profile_noise_situation">
			                      <input type="checkbox" name="profile_noise_situation" id="profile_noise_situation10" value="Podczas i/lub po wysiłku fizycznym">
			                      Podczas i/lub po wysiłku fizycznym 
			                    </label>
			                    <br>
			                    <span class="additional-info-wrap">
			                        <label class="checkbox-inline" for="profile_noise_situation_descr">
			                          <input type="checkbox" name="profile_noise_situation_descr" id="" value="Podczas alergii na ">
			                          Podczas alergii na...
			                        </label>
			                        <div class="additional-info hide">
			                              <input type="text" id="" name="profile_noise_situation_descr" placeholder="proszę wymienić alergeny" class="form-control" disabled="">
			                        </div>
			                    </span>
			                    <br>
			                    <span class="additional-info-wrap">
			                        <label class="checkbox-inline" for="profile_noise_situation_descr">
			                          <input type="checkbox" name="profile_noise_situation_descr" id="" value="Po przyjęciu leków ">
			                          Po przyjęciu leków...
			                        </label>
			                        <div class="additional-info hide">
			                              <input type="text" id="" name="profile_noise_situation_descr" placeholder="proszę wymienić jakich" class="form-control" disabled="">
			                        </div>
			                    </span>			                    
			                    <br>
			                    <span class="additional-info-wrap">
			                        <label class="checkbox-inline" for="profile_noise_situation_descr">
			                          <input type="checkbox" name="profile_noise_situation_descr" id="" value="Po zjedzeniu/wypiciu ">
			                          Po zjedzeniu/wypiciu...
			                        </label>
			                        <div class="additional-info hide">
			                              <input type="text" id="" name="profile_noise_situation_descr" placeholder="proszę wpisać czego" class="form-control" disabled="">
			                        </div>
			                    </span>
			                    <br>
			                    <label class="checkbox-inline" for="profile_noise_situation">
			                      <input type="checkbox" name="profile_noise_situation" id="" value="Kiedy są niekorzystne warunki atmosferyczne, zmienia się pogoda">
			                      Kiedy są niekorzystne warunki atmosferyczne, zmienia się pogoda 
			                    </label>
			                    <br>		                    
			                    <label class="checkbox-inline" for="profile_noise_situation">
			                      <input type="checkbox" name="profile_noise_situation" id="" value="Kiedy mam skoki ciśnienia krwi">
			                      Kiedy mam skoki ciśnienia krwi 
			                    </label>			                    
			                    <br>		                    
			                    <label class="checkbox-inline" for="profile_noise_situation">
			                      <input type="checkbox" name="profile_noise_situation" id="" value="Kiedy wykonuję ruchy głowy, skręty szyi, zaciskam zęby">
			                      Kiedy wykonuję ruchy głowy, skręty szyi, zaciskam zęby 
			                    </label>
			                    <br>			                    
			                    <span class="additional-info-wrap">
			                        <label class="checkbox-inline" for="profile_noise_situation_descr">
			                          <input type="checkbox" name="profile_noise_situation_descr" id="" value="Inne: ">
			                          Inne
			                        </label>
			                        <div class="additional-info hide">
			                              <textarea name="profile_noise_situation_descr" id="" cols="30" rows="10" placeholder="Proszę opisać"></textarea>
			                        </div>
			                    </span>
							</fieldset>

							<fieldset id="profile_noise_percentage">
								<label for="profile_noise_percentage">8. Zakładając, że cały dzień (bez snu) to 100%, proszę podać przez średnio ile procent dnia jest Pan(i) świadomy/a obecności szumu</label>
								<textarea name="profile_noise_percentage" id="" cols="30" rows="10"></textarea>
							</fieldset>

							<fieldset id="profile_noise_frequency">
								<label for="">9. Czy potrafi Pan(i) oszacować częstotliwość (wysokość) dźwięku szumu usznego?  </label>
								<br>
								<label class="radio-inline" for="profile_noise_frequency">
			                      <input type="radio" name="profile_noise_frequency" id="profile_noise_frequency1" value="Nie">
			                      Nie
			                    </label>
								<span class="additional-info-wrap">
			                        <label class="radio-inline" for="profile_noise_frequency">
			                          <input type="radio" name="profile_noise_frequency" id="profile_noise_frequency2" value="Tak">
			                          Tak
			                        </label>
			                        <div class="additional-info hide">
			                        	<p>Jeśli tak, proszę oszacować wysokość dźwięku na skali. </p>
			                            <select name="profile_noise_frequency" id="">
			                            	<option value="">Prosze wybrać</option>
				                    		<option value="1">1 (niski)</option>
				                    		<option value="2">2</option>
				                    		<option value="3">3</option>
				                    		<option value="4">4</option>
				                    		<option value="5">5</option>
				                    		<option value="6">6</option>
				                    		<option value="7">7</option>
				                    		<option value="8">8</option>
				                    		<option value="9">9</option>
				                    		<option value="10">10 (wysoki)</option>
		                    			</select>
			                        </div>
			                    </span>
							</fieldset>
							
							<fieldset id="profile_noise_volume">
								<label for="profile_noise_volume">10. Czy głośność Pani/Pana szumu usznego jest stała?   </label>
								<br>
								<label class="radio-inline" for="profile_noise_volume">
			                      <input type="radio" name="profile_noise_volume" id="profile_noise_volume1" value="Nie">
			                      Nie
			                    </label>
			                    <label class="radio-inline" for="profile_noise_volume">
			                      <input type="radio" name="profile_noise_volume" id="profile_noise_volume2" value="Tak">
			                      Tak
			                    </label>
							</fieldset>

							<fieldset id="profile_noise_descr">
								<label for="profile_noise_descr">11. Proszę opisać dźwięk szumu usznego.</label>
								<br>
								<label class="checkbox-inline" for="profile_noise_descr">
			                      <input type="checkbox" name="profile_noise_descr" id="profile_noise_descr1" value="Gwizdanie">
			                      Gwizdanie
			                    </label>
			                    <br>
			                    <label class="checkbox-inline" for="profile_noise_descr">
			                      <input type="checkbox" name="profile_noise_descr" id="profile_noise_descr2" value="Syczenie">
			                      Syczenie
			                    </label>
			                    <br>
			                    <label class="checkbox-inline" for="profile_noise_descr">
			                      <input type="checkbox" name="profile_noise_descr" id="profile_noise_descr3" value="Dzwonienie">
			                      Dzwonienie
			                    </label>
			                    <br>
			                    <label class="checkbox-inline" for="profile_noise_descr">
			                      <input type="checkbox" name="profile_noise_descr" id="profile_noise_descr4" value="Pulsowanie/łomotanie">
			                      Pulsowanie/łomotanie
			                    </label>
			                    <br>
			                    <label class="checkbox-inline" for="profile_noise_descr">
			                      <input type="checkbox" name="profile_noise_descr" id="profile_noise_descr5" value="Świergotanie">
			                      Świergotanie
			                    </label>			                    
			                    <br>
			                    <label class="checkbox-inline" for="profile_noise_descr">
			                      <input type="checkbox" name="profile_noise_descr" id="profile_noise_descr7" value="Brzęczenie">
			                      Brzęczenie 
			                    </label>
			                    <br>
			                    <label class="checkbox-inline" for="profile_noise_descr">
			                      <input type="checkbox" name="profile_noise_descr" id="profile_noise_descr7" value="Szum">
			                      Szum 
			                    </label>
			                    <br>
			                    <label class="checkbox-inline" for="profile_noise_descr">
			                      <input type="checkbox" name="profile_noise_descr" id="profile_noise_descr7" value="Głosy">
			                      Głosy 
			                    </label>
			                    <br>			                    
			                    <span class="additional-info-wrap">
			                        <label class="checkbox-inline" for="profile_noise_descr_other">
			                          <input type="checkbox" name="profile_noise_descr_other" id="profile_noise_descr8" value="Inne: ">
			                          Inne
			                        </label>
			                        <div class="additional-info hide">
			                              <textarea name="profile_noise_descr_other" id="" cols="30" rows="10" placeholder="Proszę opisać"></textarea>
			                        </div>
			                    </span>
							</fieldset>

							<fieldset id="profile_bad_hearing">
								<label for="">12. Czy ma Pan(i) niedosłuch?</label>
								<br>
								<label class="radio-inline" for="profile_bad_hearing">
			                      <input type="radio" name="profile_bad_hearing" id="profile_bad_hearing1" value="Nie">
			                      Nie
			                    </label>
			                    <label class="radio-inline" for="profile_bad_hearing">
			                      <input type="radio" name="profile_bad_hearing" id="profile_bad_hearing2" value="Tak">
			                      Tak
			                    </label>
							</fieldset>

							<fieldset id="profile_aerophone">
								<label for="">13. Czy używa Pan(i) aparatu słuchowego?</label>
								<br>
								<label class="radio-inline" for="profile_aerophone">
			                      <input type="radio" name="profile_aerophone" id="profile_aerophone1" value="Nie">
			                      Nie
			                    </label>
			                    <label class="radio-inline" for="profile_aerophone">
			                      <input type="radio" name="profile_aerophone" id="profile_aerophone2" value="Tak">
			                      Tak
			                    </label>
							</fieldset>

							<fieldset id="profile_noise_now">
								<label for="">14. Czy w tej chwili słyszy Pan(i) szum uszny?</label>
								<br>
								<label class="radio-inline" for="profile_noise_now">
			                      <input type="radio" name="profile_noise_now" id="profile_noise_now1" value="Nie">
			                      Nie
			                    </label>
			                    <label class="radio-inline" for="profile_noise_now">
			                      <input type="radio" name="profile_noise_now" id="profile_noise_now2" value="Tak">
			                      Tak
			                    </label>								
							</fieldset>

							<fieldset id="profile_smoking">
								<label for="">15. Jak często Pan(i) pali?</label>
								<br>
								<label class="radio-inline" for="profile_smoking">
			                      <input type="radio" name="profile_smoking" id="" value="Nie palę">
			                      Nie palę
			                    </label>
			                    <label class="radio-inline" for="profile_smoking">
			                      <input type="radio" name="profile_smoking" id="" value="1-5 razy dzienne">
			                      1-5 razy dzienne
			                    </label>			                    
			                    <label class="radio-inline" for="profile_smoking">
			                      <input type="radio" name="profile_smoking" id="" value="Częściej niż 5 razy dziennie">
			                      Częściej niż 5 razy dziennie
			                    </label>								
							</fieldset>

							<fieldset id="profile_drink">
								<label for="">16. Jak często pije Pan(i) kawę, herbatę lub wodę gazowaną?</label>
								<br>
								<label class="radio-inline" for="profile_drink">
			                      <input type="radio" name="profile_drink" id="profile_drink1" value="0-1 raz dziennie">
			                      0-1 raz dziennie
			                    </label>
			                    <label class="radio-inline" for="profile_drink">
			                      <input type="radio" name="profile_drink" id="profile_drink2" value="2-3 razy dziennie">
			                      2-3 razy dziennie
			                    </label>			                    
			                    <label class="radio-inline" for="profile_drink">
			                      <input type="radio" name="profile_drink" id="profile_drink3" value="Częściej niż 2-3 razy dziennie">
			                      Częściej niż 2-3 razy dziennie
			                    </label>								
							</fieldset>

							<fieldset id="profile_head_injury">
								<label for="">17. Czy miał(a) Pan(i) kiedyś uraz głowy? </label>
								<br>
								<label class="radio-inline" for="profile_head_injury">
			                      <input type="radio" name="profile_head_injury" id="profile_head_injury1" value="Nie">
			                      Nie
			                    </label>
			                    <span class="additional-info-wrap">
			                        <label class="radio-inline" for="profile_head_injury">
			                          <input type="radio" name="profile_head_injury" id="profile_head_injury2" value="Tak, ">
			                          Tak
			                        </label>
			                        <div class="additional-info hide">
			                              <textarea id="profile_head_injury3" name="profile_head_injury_descr" placeholder="Proszę opisać jaki i kiedy miał miejsce" class="form-control" disabled=""></textarea>
			                        </div>
			                    </span>
							</fieldset>

							<fieldset id="profile_loud_sound">
								<label for="">18. Czy był(a) Pan(i) kiedyś narażony/narażona na hałas (tak głośny, że trzeba było krzyczeć do osoby, która stała w niewielkiej odległości?)</label>
								<br>
								<label class="radio-inline" for="profile_loud_sound">
			                      <input type="radio" name="profile_loud_sound" id="profile_loud_sound1" value="Nie">
			                      Nie
			                    </label>
			                    <span class="additional-info-wrap">
			                        <label class="radio-inline" for="profile_loud_sound">
			                          <input type="radio" name="profile_loud_sound" id="profile_loud_sound2" value="Tak, ">
			                          Tak
			                        </label>
			                        <div class="additional-info hide">
			                              <textarea id="profile_loud_sound3" name="profile_loud_sound_descr" placeholder="Proszę opisać jaki hałas  i kiedy miał miejsce" class="form-control" disabled=""></textarea>
			                        </div>
			                    </span>
							</fieldset>
	
							<fieldset id = "profile_ear_protection">
								<label for="">19. Czy chroni Pan(i) uszy przed głośnymi dźwiękami (np. stosując zatyczki do uszu)? </label>
								<br>							
								<label class="radio-inline" for="profile_ear_protection1">
			                      <input type="radio" name="profile_ear_protection" id="profile_ear_protection1" value="Nie">
			                      Nie
			                    </label>
			                    <label class="radio-inline" for="profile_ear_protection2">
			                      <input type="radio" name="profile_ear_protection" id="profile_ear_protection2" value="Tak">
			                      Tak
			                    </label>
							</fieldset>

							<fieldset id = "profile_custom_ear_protection">
								<label for="">20. Czy ma Pan(i) jakiś skuteczny sposób „wyciszania” szumu usznego?</label>
								<br>
								<label class="radio-inline" for="profile_custom_ear_protection">
			                      <input type="radio" name="profile_custom_ear_protection" id="profile_custom_ear_protection1" value="Nie">
			                      Nie
			                    </label>
			                    <span class="additional-info-wrap">
			                        <label class="radio-inline" for="profile_custom_ear_protection">
			                          <input type="radio" name="profile_custom_ear_protection" id="profile_custom_ear_protection2" value="Tak">
			                          Tak
			                        </label>
			                        <div class="additional-info hide">
			                              <textarea id="profile_custom_ear_protection3" name="profile_custom_ear_protection_descr" placeholder="Jeśli tak, proszę go opisać" class="form-control" disabled=""></textarea>
			                        </div>
			                    </span>
							</fieldset>

							<fieldset id="profile_ear_block_feel" class="profile-ear-block-feel">
								<label for="">21. Czy ma Pan(i) uczucie zatkanych uszu?</label>
								<br>
								 <span class="additional-info-wrap">
								 	<label class="radio-inline" for="profile_ear_block_feel">
			                      	<input type="radio" name="profile_ear_block_feel" id="profile_ear_block_feel1" value="Bardzo często">
			                      	Bardzo często
			                    	</label>
			                        <div class="additional-info hide">
			                             <p>Jeśli tak, czy wówczas zmienia się szum uszny?</p>
			                             <label class="radio-inline" for="profile_ear_block_feel_descr">
					                      <input type="radio" name="profile_ear_block_feel_descr" id="profile_ear_block_feel1_1_1" value="Nie">
					                      Nie
					                    </label>
					                    <label class="radio-inline" for="profile_ear_block_feel_descr">
					                      <input type="radio" name="profile_ear_block_feel_descr" id="profile_ear_block_feel1_1_2" value="Tak">
					                      Tak
					                    </label>
			                        </div>
			                    </span>								
			                    <br>
			                    <span class="additional-info-wrap">
									<label class="radio-inline" for="profile_ear_block_feel">
				                      <input type="radio" name="profile_ear_block_feel" id="profile_ear_block_feel2" value="Często">
				                      Często
				                    </label>
			                        <div class="additional-info hide">
			                             <p>Jeśli tak, czy wówczas zmienia się szum uszny?</p>
			                             <label class="radio-inline" for="profile_ear_block_feel_descr">
					                      <input type="radio" name="profile_ear_block_feel_descr" id="profile_ear_block_feel2_1_1" value="Nie">
					                      Nie
					                    </label>
					                    <label class="radio-inline" for="profile_ear_block_feel_descr">
					                      <input type="radio" name="profile_ear_block_feel_descr" id="profile_ear_block_feel2_1_2" value="Tak">
					                      Tak
					                    </label>
			                        </div>
			                    </span>			                    
			                    <br>
			                    <span class="additional-info-wrap">
									<label class="radio-inline" for="profile_ear_block_feel">
				                      <input type="radio" name="profile_ear_block_feel" id="profile_ear_block_feel3" value="Czasami">
				                      Czasami
				                    </label>
			                        <div class="additional-info hide">
			                             <p>Jeśli tak, czy wówczas zmienia się szum uszny?</p>
			                             <label class="radio-inline" for="profile_ear_block_feel_descr">
					                      <input type="radio" name="profile_ear_block_feel_descr" id="profile_ear_block_feel3_1_1" value="Nie">
					                      Nie
					                    </label>
					                    <label class="radio-inline" for="profile_ear_block_feel_descr">
					                      <input type="radio" name="profile_ear_block_feel_descr" id="profile_ear_block_feel3_1_2" value="Tak">
					                      Tak
					                    </label>
			                        </div>
			                    </span>			                    
			                    <br>
			                    <span class="additional-info-wrap">
									<label class="radio-inline" for="profile_ear_block_feel">
				                      <input type="radio" name="profile_ear_block_feel" id="profile_ear_block_feel4" value="Rzadko">
				                      Rzadko
				                    </label>
			                        <div class="additional-info hide">
			                             <p>Jeśli tak, czy wówczas zmienia się szum uszny?</p>
			                             <label class="radio-inline" for="profile_ear_block_feel_descr">
					                      <input type="radio" name="profile_ear_block_feel_descr" id="profile_ear_block_feel4_1_1" value="Nie">
					                      Nie
					                    </label>
					                    <label class="radio-inline" for="profile_ear_block_feel_descr">
					                      <input type="radio" name="profile_ear_block_feel_descr" id="profile_ear_block_feel4_1_2" value="Tak">
					                      Tak
					                    </label>
			                        </div>
			                    </span>			                    
			                    <br>
								<label class="radio-inline" for="profile_ear_block_feel">
			                      <input type="radio" name="profile_ear_block_feel" id="profile_ear_block_feel5" value="Nie zdarza się">
			                      Nie zdarza się
			                    </label>								
							</fieldset>

							<fieldset id="profile_vertigo" class="profile-vertigo">
								<label for="">22. Czy miewa Pan(i) zawroty głowy?</label>
								<br>
								 <span class="additional-info-wrap">
								 	<label class="radio-inline" for="profile_vertigo">
			                      	<input type="radio" name="profile_vertigo" id="profile_vertigo1" value="Bardzo często">
			                      	Bardzo często
			                    	</label>
			                        <div class="additional-info hide">
			                             <p>Jeśli tak, czy wówczas zmienia się szum uszny?</p>
			                             <label class="radio-inline" for="profile_vertigo_descr">
					                      <input type="radio" name="profile_vertigo_descr" id="profile_vertigo1_1_1" value="Nie">
					                      Nie
					                    </label>
					                    <label class="radio-inline" for="profile_vertigo_descr">
					                      <input type="radio" name="profile_vertigo_descr" id="profile_vertigo1_1_2" value="Tak">
					                      Tak
					                    </label>
			                        </div>
			                    </span>								
			                    <br>
			                    <span class="additional-info-wrap">
									<label class="radio-inline" for="profile_vertigo">
				                      <input type="radio" name="profile_vertigo" id="profile_vertigo2" value="Często">
				                      Często
				                    </label>
			                        <div class="additional-info hide">
			                             <p>Jeśli tak, czy wówczas zmienia się szum uszny?</p>
			                             <label class="radio-inline" for="profile_vertigo_descr">
					                      <input type="radio" name="profile_vertigo_descr" id="profile_vertigo2_1_1" value="Nie">
					                      Nie
					                    </label>
					                    <label class="radio-inline" for="profile_vertigo_descr">
					                      <input type="radio" name="profile_vertigo_descr" id="profile_vertigo2_1_2" value="Tak">
					                      Tak
					                    </label>
			                        </div>
			                    </span>			                    
			                    <br>
			                    <span class="additional-info-wrap">
									<label class="radio-inline" for="profile_vertigo">
				                      <input type="radio" name="profile_vertigo" id="profile_vertigo3" value="Czasami">
				                      Czasami
				                    </label>
			                        <div class="additional-info hide">
			                             <p>Jeśli tak, czy wówczas zmienia się szum uszny?</p>
			                             <label class="radio-inline" for="profile_vertigo_descr">
					                      <input type="radio" name="profile_vertigo_descr" id="profile_vertigo3_1_1" value="Nie">
					                      Nie
					                    </label>
					                    <label class="radio-inline" for="profile_vertigo_descr">
					                      <input type="radio" name="profile_vertigo_descr" id="profile_vertigo3_1_2" value="Tak">
					                      Tak
					                    </label>
			                        </div>
			                    </span>			                    
			                    <br>
			                    <span class="additional-info-wrap">
									<label class="radio-inline" for="profile_vertigo">
				                      <input type="radio" name="profile_vertigo" id="profile_vertigo4" value="Rzadko">
				                      Rzadko
				                    </label>
			                        <div class="additional-info hide">
			                             <p>Jeśli tak, czy wówczas zmienia się szum uszny?</p>
			                             <label class="radio-inline" for="profile_vertigo_descr">
					                      <input type="radio" name="profile_vertigo4_1" id="profile_vertigo4_1_1" value="Nie">
					                      Nie
					                    </label>
					                    <label class="radio-inline" for="profile_vertigo_descr">
					                      <input type="radio" name="profile_vertigo_descr" id="profile_vertigo4_1_2" value="Tak">
					                      Tak
					                    </label>
			                        </div>
			                    </span>			                    
			                    <br>
								<label class="radio-inline" for="profile_vertigo">
			                      <input type="radio" name="profile_vertigo" id="profile_vertigo5" value="Nie zdarza się">
			                      Nie zdarza się
			                    </label>								
							</fieldset>

							<fieldset id="profile_doctor">
								<label for="">23. Czy przebywa Pan(i) pod opieką lekarza specjalisty (poza IFPS)?</label>
								<br>
								<label class="radio-inline" for="profile_doctor1">
			                      <input type="radio" name="profile_doctor" id="profile_doctor1" value="Nie">
			                      Nie
			                    </label>
			                    <span class="additional-info-wrap">
			                        <label class="radio-inline" for="profile_doctor">
			                          <input type="radio" name="profile_doctor" id="profile_doctor2" value="Tak">
			                          Tak
			                        </label>
			                        <div class="additional-info hide">
			                              <textarea id="profile_doctor3" name="profile_doctor_descr" placeholder="Jeśli tak, proszę podać jakiego" class="form-control" disabled=""></textarea>
			                        </div>
			                    </span>
							</fieldset>

							<fieldset id="profile_medicine">
								<label for="">24. Czy bierze Pan(i) przewlekle leki?</label>
								<br>
								<label class="radio-inline" for="profile_medicine">
			                      <input type="radio" name="profile_medicine" id="profile_medicine1" value="Nie">
			                      Nie
			                    </label>
			                    <span class="additional-info-wrap">
			                        <label class="radio-inline" for="profile_medicine">
			                          <input type="radio" name="profile_medicine" id="profile_medicine2" value="Tak">
			                          Tak
			                        </label>
			                        <div class="additional-info hide">
			                              <textarea id="profile_medicine3" name="profile_medicine_descr" placeholder="Jeśli tak, proszę wymienić jakie:" class="form-control" disabled=""></textarea>
			                        </div>
			                    </span>
							</fieldset>

							<fieldset id="profile_additional_info" class="profile-additional-info">
								<label class="radio-inline" for="profile_additional_info">Uwagi</label>
								<textarea id="profile_additional_info1" name="profile_additional_info" placeholder="" class="form-control profile-additional-info-area"></textarea>
							</fieldset>

							<button type="submit" class="submit-usr-info" name="submitInfo">Submit</button>							

						</div>
					</div>
				</form>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_sidebar();
get_footer();