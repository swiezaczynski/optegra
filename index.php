<?php

	session_start();

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>Optegra</title>
	
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700&amp;subset=latin-ext" rel="stylesheet">

</head>
<body>
	<div id="container">
		<div class="naglowek">
			<div class="nag1">
				<div class="title">
					Pozbądź się wad wzroku w 24 sekundy!
				</div>
				<div>
					Sprawdź najnowsze metody laserowej korekcji wzroku w największej sieci klinik okulistycznych w Polsce.
				</div>
				<div class="korekcja">
					<h2>Korekcja wzroku</h2>
					<h4>już od 999 zł*</h4>
				</div>
				<div class="lasek">
					*Metodą Lasek - cena dla jednego oka
				</div>
			</div>
			<div class="nag2">
				<div class="form">
					<img src="img/logo.png" alt="brak zdjęcia" style="width: 150px; margin-top: 20px; margin-bottom: 15px;" />
					<br/>
					POBIERZ PROMOCYJNY <br><strong>VOUCHER NA WIZYTE</strong><br> W WYBRANEJ KLINICE.
					<br>
					<div style="color: red;">ZABIEG 7299 zł ZAMIAST 6900 zł.</div>
				<form action="form1.php" method="post">
  					<div>
  						<input type="text" name="email1" placeholder="email" onfocus="this.placeholder=''" onblur="this.placeholder='email'">
  						<div class="blad">
  						<?php
								if (isset($_SESSION['e_email']))
								{
									echo "podaj poprawny adres e-mail";
									unset($_SESSION['e_email']);
								}
						?>
						</div>
						<div class="blad">
								<?php
								if (isset($_SESSION['e_checkbox']))
								{
									echo "Musisz zaakceptować regulamin";
									unset($_SESSION['e_checkbox']);
								}
								?>
						</div>
						<div class="ok">
								<?php
								if (isset($_SESSION['potwierdzenie11']))
								{
									echo "Voucher zostanie wkrótce przesłany";
									unset($_SESSION['potwierdzenie11']);
								}
								?>
						</div>
  					</div>
  					<div>
						<div class="chec">
							<input type="checkbox" name="potwierdzenie1">
						</div>
						<div class="regulamin">Wyrażam dobrowolnie zgodę na przetwarzanie danych osobowych zawartych w niniejszym formularzu przez Optegra Polska Sp. z o.o. z siedzibą w Warszawie (Administrator danych), a także na ich przetwarzanie w celach marketingowych, w tym wysyłanie materiałów promocyjno-informacyjnych, oferowanie produktów i usług, zgodnie z Ustawą o ochronie danych osobowych. Zostałem poinformowany o przysługującym mi prawie dostępu do treści przekazanych danych oraz prawie ich poprawiania oraz odwołania zgody lub złożenia sprzeciwu wobec udostępnienia danych.
						</div>
						<div style="clear: both;"></div>
					</div>
  					<input type="submit" name="przycisk1" value="Pobierz">
				</form>
				</div>
			</div>
			<div style="clear: both"></div>
		</div>
		
		<div class="voucher">
			<div class="vouchernag">
				<img src="img/form.png"  alt="brak zdjęcia">
				<br/>
				MAM VOUCHER, CO DALEJ?
			</div>
			<div class="vouch" style="background-image: url(img/1.png);">
				<img src="img/ico1.png"  alt="brak zdjęcia"/>
				<div class="tekst2">
					Potwierdzasz wizytę
				</div>
				Umawiasz się na wizytę konsultacyjną w wybranej przez Ciebie klinice dzwoniąc pod numer 222 466 122 bądź umawiasz się online.
			</div>
			<div class="vouch" style="background-image: url(img/2.png);">
				<img src="img/ico2.png"  alt="brak zdjęcia">
				<div class="tekst2">
					Lekarz pomoże
				</div>
				Podczas kwalifikacji lekarz zdecyduje, który zabieg korekcji wzroku będzie dla Ciebie optymalny. Uzyskasz wszystkie informacje. 
			</div>
			<div class="vouch" style="background-image: url(img/3.png);">
				<img src="img/ico3.png" alt="brak zdjęcia">
				<div class="tekst2">
					Zabieg
				</div>
				Po potwierdzeniu terminu zabiegu jesteś już na ostatniej prostej do odzyskania sprawności widzenia. Sam zabieg trwa kilkadziesiąt  sekund, ale będziemy potrzebowali więcej czasu  aby przygotować Cię do zabiegu.
			</div>
			<div style="clear: both;"></div>
			<div class="voucherstop">
				<img src="img/ico4.png" alt="brak zdjęcia">
				<div class="tekst2">
					Na każdym etapie możesz korzystać zarówno z infolinii, systemu rezerwacji online oraz  recepcji w celu ustalenia poszczególnych terminów.
				</div>
				<div class="voucherprzycisk">
					<form>
						<input type="submit" value="UMÓW SIĘ ONLINE">
					</form>
				</div>
				<div class="voucherprzycisk">
					<form>
						<input type="submit" value="222 466 122">
					</form>
				</div>
				<div style="clear: both;"></div>
			</div>
		</div>
		
		<div class="standardy">
			<div class="standardynag">
				<img src="img/ico6.png" alt="brak zdjęcia">
				<br/>
				NAJWYŻSZE STANDARDY
				<br/>
				<div class="standard">
					<div class="tekst3">
						Przewaga dzieki 
						<br/>wiedzy i technologii
					</div>
					Optegra to międzynarodowa sieć klinik działająca w całej Europie. Pracujemy na najnowocześniejszym sprzęcie na świecie. Lekarze wykonujący zabiegi to najlepsi specjaliści na rynku. Jesteś w dobrych rękach.
				</div>
				<div class="standard">
					<div class="tekst3">
						Rozumiemy naszych pacjętów w mgnieniu oka
					</div>
					Wiemy, że możesz mieć pytania, dlatego  jesteśmy dla Ciebie. Nasz personel będzie 	służył Ci pomocą na każdym etapie. NIe musisz się o nic martwić.
				</div>
				<div style="clear: both;"></div>
				<div class="standard">
					<form>
						<input type="submit" class="standardprzycisk" value="Dowiedz się więcej">
					</form>
				</div>
				<div class="standard">
					<form>
						<input type="submit" class="standardprzycisk" value="Dowiedz się więcej">
					</form>
				</div>
				<div style="clear: both;"></div>
			</div>
		</div>
		
		<div class="lekarze">
			<div class="lekarzenag">
				<img src="img/ico7.png" alt="brak zdjęcia">
				<br/>
				NAJLEPSI LEKARZE
			</div>
			<div class="opislekarza1">
				Jeśmy <strong>liderem korekcji wad wzroku w Polsce</strong>. Od lat <br/>współpracujemy  z najlepszymi lekarzami chirurgami.
			</div>
			<div class="strzalka">
				<img src="img/wstecz.png" alt="brak zdjęcia">
				</div>
			<div class="lekarz">
				<img src="img/lek1.png" style="width: 170px;" alt="brak zdjęcia">
				<br/>
				dr n. med. <strong>Joanna Sempińska-Szewczyk</strong>
				<br/>
				<div class="opislekarza">
					lekarz okulista, operacje zaćmy
				</div>
			</div>
			<div class="lekarz">
				<img src="img/lek2.png" style="width: 170px;" alt="brak zdjęcia">
				<br/>
				lek. <strong>Marcin Smorawski</strong>
				<br/>
				<div class="opislekarza">
					lekarz okulista, laserowa korekcjawzroku/stożek rogówki
				</div>
			</div>
			<div class="lekarz">
				<img src="img/lek3.png" style="width: 170px;" alt="brak zdjęcia">
				<br/>
				lek. <strong>Magdalena Bielak</strong>
				<br/>
				<div class="opislekarza">
					lekarz okulista, laserowa korekcja wzroku
				</div>
			</div>
			<div class="strzalka">
				<img src="img/wprzod.png" alt="brak zdjęcia">
			</div>
			<div style="clear: both;"></div>
			<div class="strzalka"></div>
			<div class="lekarz">
				<form>
					<input type="submit" class="standardprzycisk1" value="Więcej">
				</form>
			</div>
			<div class="lekarz">
				<form>
					<input type="submit" class="standardprzycisk1" value="Więcej">
				</form>
			</div>
			<div class="lekarz">
				<form>
					<input type="submit" class="standardprzycisk1" value="Więcej">
				</form>
			</div>
			<div class="strzalka"></div>
			<div style="clear: both;"></div>
		</div>

		<div class="ceny">
			<img src="img/ico8.png" alt="brak zdjęcia">
			<div class="cenynag">
				CENY ZABIEGOW W PROMOCJI
			</div>
			Są to promocyjne ceny poszczególnych zabiegów okulistycznych<br/>
			 w przypadku <strong>posiadania vouchera zniżkowego.</strong>
			<strong>Wizyta kwalfikacyjna</strong>
			<div class="cenacena">
				169 zł
			</div>
			<div class="ram">
				<div class="ramka">
					<div class="gora">
						<div class="tekst4">
							Lentivu
						</div>
						dla pary oczu
					</div>
					<div class="dol">
						<div class="tekst4">
							7299zł
						</div>
					</div>
				</div>
				<div class="ramka">
					<div class="gora">
						<div class="tekst4">
							Femto
						</div>
						dla pary oczu
					</div>
					<div class="dol">
						<div class="tekst4">
							6199zł
						</div>
					</div>
				</div>
				<div class="ramka">
					<div class="gora">
						<div class="tekst4">
							Lasek
						</div>
						dla pary oczu
					</div>
					<div class="dol">
						<div class="tekst4">
							2998zł
						</div>
					</div>
				</div>
				<div class="ramka">
					<div class="gora">
						<div class="tekst4">
							Lasek
						</div>
						dla jednego oka
					</div>
					<div class="dol">
						<div class="tekst4">
							999zł
						</div>
					</div>
				</div>
				<div class="ramka">
					<div class="gora">
						<div class="tekst4">
							EBK
						</div>
						dla pary oczu
					</div>
					<div class="dol">
						<div class="tekst4">
							5399zł
						</div>
					</div>
				</div>
				<div style="clear: both;"></div>
			</div>
		</div>
		
		<div class="opinie">
			<div class="lekarzenag">
				<img src="img/ico9.png" alt="brak zdjęcia">
				<br/>
				OPINIE NASZYCH KLIENTÓW
			</div>
			<div class="opislekarza1">
				Dowiedz się co <strong>mówią nasi klienci</strong>.
			</div>
			<div class="opinie1">
				<div class="lekarz">
					<img src="img/klient1.png" style="width: 130px;" alt="brak zdjęcia"><br />
						<strong>Agnieszka Kaczmarek</strong>
					<div class="opislekarza">
						opinia FB
					</div>
					<div class="gwiazdy">
						<dir class="gwiazda">
							<img src="img/starr.png" alt="brak zdjęcia">
						</dir>
						<dir class="gwiazda">
							<img src="img/starr.png" alt="brak zdjęcia">
						</dir>
						<dir class="gwiazda">
							<img src="img/starr.png" alt="brak zdjęcia">
						</dir>
						<div style="clear: both;"></div>
					</div>
					<strong>Jestem zachwycona.</strong>
					<div class="opislekarza">
						Naprawdęwszystko sięzmieniło. Jestem zachwycona opiekąw klinice Optegra. Od samego początku doskanale się mnązaopiekowano. Najważniejsze jedna jest to, że rzeczywiście zabieg trwał dosłownie chwilę.
					</div>
				</div>
				<div class="lekarz">
					<img src="img/klient1.png" style="width: 130px;" alt="brak zdjęcia"><br />
					<strong>Magdalena Zawadzka</strong>
					<div class="opislekarza">
					aktorka
					</div>
					<div class="gwiazdy">
						<dir class="gwiazda">
							<img src="img/starr.png" alt="brak zdjęcia">
						</dir>
						<dir class="gwiazda">
							<img src="img/starr.png" alt="brak zdjęcia">
						</dir>
						<dir class="gwiazda">
							<img src="img/starr.png" alt="brak zdjęcia">
						</dir>
						<div style="clear: both;"></div>
					</div>
					<strong>Jestem zachwycona.</strong>
					<div class="opislekarza">
						Jestem zachwycona opieką okulistycznąw klinice OPTEGRA. Wszystko funkcjonuję w niej perfekcyjnie. Począwszy od umawiania wizyt.
					</div>
				</div>
				<div class="lekarz">
					<img src="img/klient3.png" style="width: 130px;" alt="brak zdjęcia"><br />
					<strong>Krystian Lurko</strong>
					<div class="opislekarza">
					opinia z forum
					</div>
					<div class="gwiazdy">
						<dir class="gwiazda">
							<img src="img/starr.png" alt="brak zdjęcia">
						</dir>
						<dir class="gwiazda">
							<img src="img/starr.png" alt="brak zdjęcia">
						</dir>
						<dir class="gwiazda">
							<img src="img/starr.png" alt="brak zdjęcia">
						</dir>
						<div style="clear: both;"></div>
					</div>
					<strong>Przedewszystkim to bezpieczne.</strong>
					<div class="opislekarza">
						Wzrok jest dla mnie najważniejszym zmysłem z uwagi na rodzaj pracy który wykonuję. Po zabiegu nie tylko lepiej wreszcie widzę, ale przede wszystkim wada już mnie nie ogranicza w codziennych czynnościach.
					</div>
				</div>
				<div style="clear: both;"></div>
			</div>
		</div>
		
		<a name="voucherstopka" />
		<div class="subskrycje">
			<div class="stopka1">
				<div class="opinienag">
					<img src="img/ico10.png" alt="brak zdjęcia"><br/>
					Do tej pory pobrano<br/>
					<strong>23221 VOUCHERÓW</strong>
				</div>
				<div class="form2">
					<div class="form22">
						<form action="form2.php" method="post">
							<div class="form22a">
							POBIERZ PROMOCYJNY <br><strong>VOUCHER NA WIZYTE</strong><br> W WYBRANEJ KLINICE.
							<input type="text" name="email2" placeholder="email" onfocus="this.placeholder=''" onblur="this.placeholder='email'">
  							<div class="blad">
  							<?php
								if (isset($_SESSION['e_email2']))
								{
									echo "podaj poprawny adres e-mail";
									unset($_SESSION['e_email2']);
								}
							?>
							</div>
							<input type="text" name="imie2" placeholder="Imię" onfocus="this.placeholder=''" onblur="this.placeholder='Imię'">
							<input type="text" name="nazwisko2" placeholder="Nazwisko" onfocus="this.placeholder=''" onblur="this.placeholder='Nazwisko'">
							<div class="blad">
									<?php
									if (isset($_SESSION['e_checkbox2']))
									{
										echo "Musisz zaakceptować regulamin";
										unset($_SESSION['e_checkbox2']);
									}
									?>
							</div>
							<div>
								<div class="chec">
									<input type="checkbox" name="potwierdzenie2">
								</div>
								<div class="regulamin">Wyrażam dobrowolnie zgodę na przetwarzanie danych osobowych zawartych w niniejszym formularzu przez Optegra Polska Sp. z o.o. z siedzibą w Warszawie (Administrator danych), a także na ich przetwarzanie w celach marketingowych, w tym wysyłanie materiałów promocyjno-informacyjnych, oferowanie produktów i usług, zgodnie z Ustawą o ochronie danych osobowych. Zostałem poinformowany o przysługującym mi prawie dostępu do treści przekazanych danych oraz prawie ich poprawiania oraz odwołania zgody lub złożenia sprzeciwu wobec udostępnienia danych.
								</div>
								<div style="clear: both;"></div>
							</div>
						</div>
						<div class="form22a">
							<img src="img/ico11.png" alt="brak zdjęcia">
							<div class="stopkatekst1">
								Skorzystaj z promocyjnej zniżki!
							</div>
							<div class="stopkatekst2">
								Zabieg 7299zł zamiast 9600zł.
							</div>
							<div class="ok">
								<?php
								if (isset($_SESSION['potwierdzenie22']))
								{
									echo "Voucher zostanie wkrótce przesłany";
									unset($_SESSION['potwierdzenie22']);
								}
								?>
							</div>
							<input type="submit" value="POBIERZ VOUCHER">
						</div>
						<div style="clear: both"></div>
						</form>
					</div>
				</div>
			</div>
			<div class="stopka">
				<div style="width: 1250px; height: 120px;"></div>
				<div class="logo">
					<img src="img/logo.png" style="width: 120px;" alt="brak zdjęcia">
				</div>
				<div class="sto">
					<div class="sto1">
						<strong>Klliniki okulistyczne Opegra</strong><br/> Warszawa, Kraków, Poznań Wrocław, Szczecin.
					</div>
					<div class="sto2">
						<img src="img/fb.png" alt="brak zdjęcia"><br/>
						kontakt@optegra.com.pl <br/> infolinia: 
						<div style="color: #33E0B1;">
							222 466 111 <br/> www.optegra.com.pl
						</div>
					</div>
					<div class="sto1">
						<form>
							<input type="submit" class="stopkaprzycisk" value="UMÓWIENIE WIZYTY ONLINE">
						</form>
					</div>
					<div style="clear: both;"></div>
				</div>
				<div class="sto3">
					<div class="sto31">
						Polityka prywatności
					</div>
					<div class="sto31">
						Regulamin
					</div>
					<div class="sto31">
						Cookies
					</div>
					<div style="clear: both;">
				</div>
			</div>
		</div>
	</div>
	</div>
</body>
</html>