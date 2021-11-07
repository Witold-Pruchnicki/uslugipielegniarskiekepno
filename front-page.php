<?php get_header(); ?>
    <main>
        <section class=" section header-section">
            <div class="container">
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
                        <a href="" class="header-section__btn">Umów wizytę</a>
                    </div>
                    <div class="section__image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-section__img.svg"
                             alt="" class="header-section__img">
                    </div>
                </div>
            </div>
        </section>
        <section class=" section aboutUs-section">
            <div class="container">
                <div class="section-wrapper">
                    <div class="section__image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/uslugipielegniarskiekepbo-o-nas.jpg"
                             alt="" class="aboutUs-section__img">
                    </div>
                    <div class="section__text-wrapper">
                        <h2 class="section__intro">O nas </h2>
                        <h3 class="section__title">Wyspecjalizowane Pielęgniarki </h3>
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
        <section class="section section-services">
            <div class="container">
                <h2 class="section__intro section__intro-services">Usługi </h2>
                <h3 class="section__title">Zakres Świadczonych Usług</h3>
                <div class="section-services__wrapper">
                    <div class="services__tiles">
                        <div class="service__tile active" data-id="kroplowki">
                            <div class="tile__circle" data-id="kroplowki"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/kroplowki.png"
                                        alt="" class="tile__img" data-id="kroplowki"></div>
                            <div class="tile__text" data-id="kroplowki">Kroplówki</div>
                        </div>
                        <div class="service__tile" data-id="zastrzyki">
                            <div class="tile__circle" data-id="zastrzyki"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/zastrzyki.png"
                                        alt="" class="tile__img" data-id="zastrzyki"></div>
                            <div class="tile__text" data-id="zastrzyki">Zastrzyki</div>
                        </div>
                        <div class="service__tile" data-id="cewnikowanie">
                            <div class="tile__circle" data-id="cewnikowanie"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/cewnikowanie.png"
                                        alt="" class="tile__img" data-id="cewnikowanie"></div>
                            <div class="tile__text" data-id="cewnikowanie">Cewnikowanie</div>
                        </div>
                        <div class="service__tile" data-id="leczenie-odlezyn">
                            <div class="tile__circle" data-id="leczenie-odlezyn"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/leczenie-odlezyn.png"
                                        alt="" class="tile__img" data-id="leczenie-odlezyn"></div>
                            <div class="tile__text" data-id="leczenie-odlezyn">Leczenie odleżyn</div>
                        </div>
                        <div class="service__tile" data-id="toaleta-w-lozku">
                            <div class="tile__circle" data-id="toaleta-w-lozku"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/toaleta-w-lozku.png"
                                        alt="" class="tile__img" data-id="toaleta-w-lozku"></div>
                            <div class="tile__text" data-id="toaleta-w-lozku">Toaleta w łóżku</div>
                        </div>
                        <div class="service__tile" data-id="plukanie-portow">
                            <div class="tile__circle" data-id="plukanie-portow"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/plukanie-portow-naczyniowych.png"
                                        alt="" class="tile__img" data-id="plukanie-portow"></div>
                            <div class="tile__text" data-id="plukanie-portow">Płukanie Portów naczyniowych</div>
                        </div>
                        <div class="service__tile" data-id="zdejmowanie-szwow">
                            <div class="tile__circle" data-id="zdejmowanie-szwow"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/zdejmowanie-szwow.png"
                                        alt="" class="tile__img" data-id="zdejmowanie-szwow"></div>
                            <div class="tile__text" data-id="zdejmowanie-szwow">Zdejmowanie szwów</div>
                        </div>
                        <div class="service__tile" data-id="pielegnacja-stomii">
                            <div class="tile__circle" data-id="pielegnacja-stomii"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/pielegnacja-stomii.png"
                                        alt="" class="tile__img" data-id="pielegnacja-stomii"></div>
                            <div class="tile__text" data-id="pielegnacja-stomii">Pielęgnacja Stomii</div>
                        </div>
                        <div class="service__tile" data-id="stawianie-baniek">
                            <div class="tile__circle" data-id="stawianie-baniek"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/stawianie-baniek.png"
                                        alt="" class="tile__img" data-id="stawianie-baniek"></div>
                            <div class="tile__text" data-id="stawianie-baniek">Stawianie baniek</div>
                        </div>
                        <div class="service__tile" data-id="uslugi-pielegniarskie">
                            <div class="tile__circle" data-id="uslugi-pielegniarskie"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/uslugi-pielegniarskie.png"
                                        alt="" class="tile__img" data-id="uslugi-pielegniarskie"></div>
                            <div class="tile__text" data-id="uslugi-pielegniarskie">Usługi Pielęgniarskie</div>
                        </div>
                    </div>
                    <div class="serices__details">
                        <div class="detail_wrapper">
                            <div class="detail__text active" id="kroplowki">
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
                            <div class="detail__text" id="cewnikowanie">
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
        <section class="section section-personnel">
            <div class="container">
                <h2 class="section__intro ">Personel</h2>
                <h3 class="section__title">Pielęgniarki</h3>
                <div class="personnel__wrapper">
                    <div class="person">
                        <div class="person__img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Renata.png" alt="" class="person__img">
                        </div>
                        <div class="person__details">
                            <h4 class="person__name">
                                mgr Renata Pruchnicka
                            </h4>
                            <a href="" class="person__phone" >
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-icon.svg" alt="" class="phone__icon"><span class="phone__number">697 727 251</span>
                            </a>
                        </div>
                    </div>
                    <div class="person">
                        <div class="person__img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Renata.png" alt=""
                            class="person__img">
                        </div>
                        <div class="person__details">
                            <h4 class="person__name">
                                mgr Renata Pruchnicka
                            </h4>
                            <a href="" class="person__phone" >
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-icon.svg" alt="" class="phone__icon"><span class="phone__number">697 727 251</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>