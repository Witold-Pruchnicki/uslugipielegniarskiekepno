<?php get_header(); ?>
    <main>
        <section class=" section header-section" data-aos-anchor-placement="top-bottom"  data-aos="fade-left" data-aos-duration="2000">
            <div class="container" >
                <div class="section-wrapper">
                    <div class="section__text-wrapper">
                        <h1 class="section__title header-section__title">Usługi
                            Pielęgniarskie
                            Kępno</h1>
                        <p class="section__text">
                            Jeśli szukasz pielęgniarki w Kępnie, która zapewni opiekę zdrowotną w domu, kiedy, gdzie i
                            jak
                            tego potrzebujesz, jesteś w dobrym miejscu.
                        </p>
                        <a href="tel:697727251" class="btn header-section__btn">Umów wizytę</a>
                    </div>
                    <div class="section__image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-section__img.svg"
                             alt="" class="header-section__img">
                    </div>
                </div>
            </div>
        </section>
        <section class=" section aboutUs-section" id="aboutUs" data-aos="zoom-in" data-aos-duration="2000">
            <div class="container">
                <div class="section-wrapper">
                    <div class="section__image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/uslugipielegniarskiekepbo-o-nas.jpg"
                             alt="" class="aboutUs-section__img">
                    </div>
                    <div class="section__text-wrapper">
                        <h2 class="section__intro">O nas </h2>
                        <h3 class="section__title ">Wyspecjalizowane Pielęgniarki </h3>
                        <p class="section__text">Ponad 25 letni staż pracy na oddziale szpitalnym 10 letnie
                            doświadczenie w opiece domowej nad pacjentem ukończone studia pielęgniarskie, specjalizacja
                            opieki paliatywnej oraz liczne kursy specjalistyczne.</p>
                        <ul class="aboutUs__features-list">
                            <li class="feature"><img class="feature__img"
                                                     src="<?php echo get_template_directory_uri(); ?>/assets/images/feature.png"
                                                     alt="">Wyspecjalizowany i doświadczony personel
                            </li>
                            <li class="feature"><img class="feature__img"
                                                     src="<?php echo get_template_directory_uri(); ?>/assets/images/feature.png"
                                                     alt="">Wizyty w dogodnym terminie
                            </li>
                            <li class="feature"><img class="feature__img"
                                                     src="<?php echo get_template_directory_uri(); ?>/assets/images/feature.png"
                                                     alt="">Realizacja usługi w domu pacjenta
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </section>
        <section class="section section-services" id="services" data-aos="fade-up" data-aos-duration="2000">
            <div class="container">
                <h2 class="section__intro section__intro-services">Usługi </h2>
                <h3 class="section__title">Zakres Świadczonych Usług</h3>
                <div class="section-services__wrapper">
                    <div class="services__tiles">
                        <div class="service__tile active" >
                            <a href="#details" class="detail" data-id="kroplowki">
                                <div class="tile__circle" ><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/kroplowki.png"
                                            alt="" class="tile__img" data-id="kroplowki" ></div>
                                <div class="tile__text" data-id="kroplowki" >Kroplówki</div>
                            </a>
                        </div>
                        <div class="service__tile" >
                            <a href="#details" class="detail" data-id="zastrzyki">
                                <div class="tile__circle"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/zastrzyki.png"
                                            alt="" class="tile__img" data-id="zastrzyki" ></div>
                                <div class="tile__text" data-id="zastrzyki">Zastrzyki</div>
                            </a>
                        </div>
                        <div class="service__tile" >
                            <a href="#details" class="detail" data-id="cewnikowanie">
                                <div class="tile__circle"  ><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/cewnikowanie.png"
                                            alt="" class="tile__img" data-id="cewnikowanie" ></div>
                                <div class="tile__text" data-id="cewnikowanie" >Cewnikowanie</div>
                            </a>
                        </div>
                        <div class="service__tile" >
                            <a href="#details" class="detail" data-id="leczenie-odlezyn">
                            <div class="tile__circle"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/leczenie-odlezyn.png"
                                        alt="" class="tile__img" data-id="leczenie-odlezyn"></div>
                            <div class="tile__text" data-id="leczenie-odlezyn">Leczenie odleżyn</div>
                            </a>
                        </div>
                        <div class="service__tile" >
                            <a href="#details" class="detail" data-id="toaleta-w-lozku">
                            <div class="tile__circle"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/toaleta-w-lozku.png"
                                        alt="" class="tile__img" data-id="toaleta-w-lozku"></div>
                            <div class="tile__text" data-id="toaleta-w-lozku">Toaleta w łóżku</div>
                            </a>
                        </div>
                        <div class="service__tile" >
                            <a href="#details" class="detail" data-id="plukanie-portow">
                            <div class="tile__circle"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/plukanie-portow-naczyniowych.png"
                                        alt="" class="tile__img" data-id="plukanie-portow" ></div>
                            <div class="tile__text" data-id="plukanie-portow">Płukanie Portów naczyniowych</div>
                            </a>
                        </div>
                        <div class="service__tile" >
                            <a href="#details" class="detail" data-id="zdejmowanie-szwow">
                            <div class="tile__circle"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/zdejmowanie-szwow.png"
                                        alt="" class="tile__img" data-id="zdejmowanie-szwow"></div>
                            <div class="tile__text" data-id="zdejmowanie-szwow">Zdejmowanie szwów</div>
                            </a>
                        </div>
                        <div class="service__tile" >
                            <a href="#details" id="detail" data-id="pielegnacja-stomii">
                            <div class="tile__circle"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/pielegnacja-stomii.png"
                                        alt="" class="tile__img" data-id="pielegnacja-stomii"></div>
                            <div class="tile__text" data-id="pielegnacja-stomii">Pielęgnacja Stomii</div>
                            </a>
                        </div>
                        <div class="service__tile" >
                            <a href="#details" class="detail" data-id="stawianie-baniek">
                            <div class="tile__circle"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/stawianie-baniek.png"
                                        alt="" class="tile__img" data-id="stawianie-baniek"></div>
                            <div class="tile__text" data-id="stawianie-baniek">Stawianie baniek</div>
                            </a>
                        </div>
                        <div class="service__tile" >
                            <a href="#details" class="detail" data-id="uslugi-pielegniarskie">
                            <div class="tile__circle"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/uslugi-pielegniarskie.png"
                                        alt="" class="tile__img" data-id="uslugi-pielegniarskie"></div>
                            <div class="tile__text" data-id="uslugi-pielegniarskie">Usługi Pielęgniarskie</div>
                            </a>
                        </div>
                    </div>
                    <div class="serices__details" id="details" >
                        <div class="detail_wrapper" >
                            <div class="detail__text active swiper-slide" id="kroplowki">
                                <h3 class="detail__header">
                                    Kroplówki
                                </h3>
                                <p class="detail__paragraph ">
                                    Metoda podawania zleconych przez lekarza leków, preparatów odżywczych i innych
                                    płynów drogą dożylną. <br/> Domowe kroplówki zazwyczaj mają zasilać organizm w
                                    utracone
                                    płyny lub/i elektrolity. wymagane zlecenie od lekarza.
                                </p>
                            </div>
                            <div class="detail__text" id="zastrzyki">
                                <h3 class="detail__header">
                                    Zastrzyki
                                </h3>
                                <p class="detail__paragraph ">
                                    Podskórne, śródskórne, domięśniowe i dożylne. <br/> Zabieg polegający na
                                    wprowadzeniu za
                                    pomocą igły i strzykawki roztworu zawierającego odpowiednią substancję leczniczą do
                                    organizmu Pacjenta w celu osiągnięcia efektu terapeutycznego.
                                </p>
                            </div>
                            <div class="detail__text " id="cewnikowanie">
                                <h3 class="detail__header">
                                    Cewnikowanie
                                </h3>
                                <p class="detail__paragraph ">
                                    Zabieg polegający na zakładaniu cewnika urologicznego. <br/> Cewnikowanie umożliwia
                                    odprowadzanie moczu.
                                </p>
                            </div>
                            <div class="detail__text" id="leczenie-odlezyn">
                                <h3 class="detail__header">
                                    Leczenie odleżyn
                                </h3>
                                <p class="detail__paragraph ">
                                    Odleżyna to uszkodzenie tkanek, do którego powstania dochodzi w wyniku zaburzeń
                                    ukrwienia spowodowanych długotrwałym uciskiem na skórę i tkankę podskórną. <br/>
                                    Bardzo
                                    ważna jest profesjonalna profilaktyka i leczenie odleżyn.
                                </p>
                            </div>
                            <div class="detail__text" id="toaleta-w-lozku">
                                <h3 class="detail__header">
                                    Toaleta w łóżku
                                </h3>
                                <p class="detail__paragraph ">
                                    Toaleta osoby obłożnie chorej, higiena całego ciała i odpowiednia pielęgnacja skóry,
                                    jest jednym z podstawowych elementów opieki nad chorym. <br/> Jest częścią
                                    profilaktyki
                                    przeciwodleżynowej, zapobiega podrażnieniom i odparzeniom skóry.
                                </p>
                            </div>
                            <div class="detail__text" id="plukanie-portow">
                                <h3 class="detail__header">
                                    Płukanie portów naczyniowych
                                </h3>
                                <p class="detail__paragraph ">
                                    Płukanie portów naczyniowych powinno odbywać się co 6-8 tygodni. <br/> Nie musi być
                                    wykonane w ośrodku klinicznym, posiadamy uprawnienia do wykonania tej czynności.
                                </p>
                            </div>
                            <div class="detail__text" id="zdejmowanie-szwow">
                                <h3 class="detail__header">
                                    Zdejmowanie szwów
                                </h3>
                                <p class="detail__paragraph ">
                                    Zabieg polegający na usunięciu nici niewchłanialnej z rany. <br/> O terminie
                                    wykonania
                                    zabiegu decyduje sposób i tempo gojenia się rany.
                                </p>
                            </div>
                            <div class="detail__text" id="pielegnacja-stomii">
                                <h3 class="detail__header">
                                    Pielęgnacja Stomii
                                </h3>
                                <p class="detail__paragraph ">
                                    Wyłonienie stomii jest często zabiegiem ratującym życie lub bezpośrednio
                                    przyczyniającym się do poprawy jego stanu. <br/> Właściwa pielęgnacja stomii
                                    jelitowej
                                    pozwala na zmniejszenie ryzyka wystąpienia powikłań.
                                </p>
                            </div>
                            <div class="detail__text" id="stawianie-baniek">
                                <h3 class="detail__header">
                                    Stawianie Baniek
                                </h3>
                                <p class="detail__paragraph ">
                                    Zabieg stosowany na infekcje, przeziębienia, w celu polepszenia odporności. <br/>
                                    Bardzo
                                    stara metoda leczenia wielu chorób. <br/> Niegdyś była to powszechna metoda
                                    leczenia, lecz
                                    dziś zalicza się ją do medycyny alternatywnej.
                                </p>
                            </div>
                            <div class="detail__text" id="uslugi-pielegniarskie">
                                <h3 class="detail__header">
                                    Usługi Pielęgniarskie
                                </h3>
                                <p class="detail__paragraph ">
                                    Usługi polegające na zapewnieniu profesjonalnej opieki pielęgniarskiej nad pacjentem
                                    po przebytej operacji, zabiegu oraz w trakcie i po hospitalizacji.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

        </section>
        <section class="section section-personnel" id="personnel" data-aos="zoom-in" data-aos-duration="2000" >
            <div class="container">
                <h2 class="section__intro ">Personel</h2>
                <h3 class="section__title">Pielęgniarki</h3>
                <div class="personnel__wrapper">
                    <div class="person">
                        <div class="person__img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Renata-Pruchnicka.png" alt=""
                                 class="person__img">
                        </div>
                        <div class="person__details">
                            <h4 class="person__name">
                                mgr Renata Pruchnicka
                            </h4>
                            <a href="tel:697 727 251" class="person__phone">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-icon.svg"
                                     alt="" class="phone__icon"><span class="phone__number">697 727 251</span>
                            </a>
                        </div>
                    </div>
                    <div class="person">
                        <div class="person__img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Beata-Kubot.png" alt=""
                                 class="person__img">
                        </div>
                        <div class="person__details">
                            <h4 class="person__name">
                                lic Beata Kubot
                            </h4>
                            <a href="tel:606 878 616" class="person__phone">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-icon.svg"
                                     alt="" class="phone__icon"><span class="phone__number">606 878 616</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-experience" data-aos="fade-up" data-aos-duration="2000">
            <div class="experience__container">
                <div class="experience__item">
                    <div class="experience__circle">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience-years.png" alt=""
                             class="phone__icon" alt="" class="experience__icon">
                    </div>
                    <p class="experience__numbers">
                        25
                    </p>
                    <span class="experience__text">Lat doświadczenia w zawodzie</span>
                </div>
                <div class="experience__item">
                    <div class="experience__circle">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nurse.png" alt=""
                             class="experience__icon">
                    </div>
                    <p class="experience__numbers" >
                        10
                    </p>
                    <span class="experience__text">Lat doświadczenia w opiece domowej </span>
                </div>
                <div class="experience__item">
                    <div class="experience__circle">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/zadowoleni-klienci.png"
                             alt=""
                             class="phone__icon" alt="" class="experience__icon">
                    </div>
                    <p class="experience__numbers ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/infinity.png" alt=""
                             class="experience_infnity">
                    </p>
                    <span class="experience__text">Niezliczona liczba zadowolonych pacjentów</span>
                </div>
            </div>
        </section>
        <section class="section section-contact" id="contact" data-aos="zoom-in" data-aos-duration="2000">
            <div class="container">
                <div class="section-wrapper">
                    <div class="section__text-wrapper">
                        <h2 class="section__intro ">Kontakt </h2>
                        <div class="section-contact__person">
                            <h3 class="person__name">mgr Renata Pruchnicka</h3>
                            <a href="tel:697 727 251" class="btn btn-phone">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-icon.svg"
                                     alt="" class="phone__icon"><span class="phone__number">697 727 251</span>
                            </a>
                        </div>
                        <div class="section-contact__person">
                            <h3 class="person__name">lic Beata Kubot</h3>
                            <a href="tel:606 878 616" class="btn btn-phone">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-icon.svg"
                                     alt="" class="phone__icon"><span class="phone__number">606 878 616</span>
                            </a>
                        </div>

                    </div>
                    <div class="section__image-wrapper">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d39924.15509273376!2d17.987246853906257!3d51.28794487164102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2spl!4v1636459158235!5m2!1sen!2spl"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                </div>

            </div>
        </section>

    </main>

<?php get_footer(); ?>