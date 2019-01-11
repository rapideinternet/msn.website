<?php include('header.php')?>

<section class="container-fluid hero d-flex" id="home-top">
        <div class="row align-self-center w-100">
            <div class="col-12">
                <h2>Welkom in het</h2>
                <h3>Grenspark Maas-Swalm en Nette</h3>
            </div>
        </div>

</section>

<section class="container home-intro">
    <div class="row">
        <div class="col-12 col-md-4 col-lg-6 intro-logo">
            <img src="../img/Logo/NL.svg" alt="Logo" />
        </div>
        <div class="col-12 col-md-12 col-lg-6 justify-content-center align-self-center">
            <p>
                Met de app “Langs Sporen – biograe van een landschap” kunt u het Grenspark Maas-Swalm-Nette beleven aan de hand van ruim 350 bezienswaardigheden.
                Deze bezienswaardigheden worden in de app POI’s (Points of Interest) genoemd en zijn gekoppeld aan één of meerdere thema’s (zes in totaal).
            </p>

            <p>
                Aan de hand van deze thema’s kunt u gericht zoeken naar POI’s waarin u geïnteresseerd bent.
                Elk van de thema’s vormt een verhaallijn waardoor u meegenomen wordt in de historie van het gebied. Dit maakt uw bezoek niet alleen mooi, maar ook interessant!
            </p>
        </div>
    </div>
</section>

<section class="container-fluid home-grid" id="app-top">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="grid-block">
                    <img src="/img/grid/hoe-werkt-het.jpg" alt="picture" />
                    <h2>Hoe werkt het?</h2>
                    <p>
                        Deze website “Langs sporen” biedt de mogelijkheid de cultuurgeschiedenis, natuur en het landschap van het Duits-Nederlands Grenspark Maas-Swalm-Nette te ontdekken. Dit gebied is gelegen tussen de stedendriehoek Venlo, Roermond en Monchengladbach.
                    </p>
                    <span><a href="hoe-werkt-het.php">Ontdekken</a></span>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-8 grid-block-video mb-4">
                <iframe src="https://www.youtube.com/embed/QcdSx9h5Nxs" frameborder="0"  height="100%" width="100%" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="grid-block">
                    <img src="/img/grid/route-maken.jpg" alt="picture" />
                    <h2>Eigen Route maken</h2>
                    <p>
                        Stel hier met gemak een route samen. Wandelen, Kletsen of met de auto, het is allemaal mogelijk! Verbindt de POI’s op de kaart om een route te maken. Gebruik de filterfunctie om je wensen voor deze route te bepalen.
                    </p>
                    <span id="route-maken">Route maken</span>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="grid-block">
                    <img src="/img/grid/routes.jpg" alt="picture" />
                    <h2>Routes</h2>
                    <p>
                        Pak je fiets of trek je wandelschoenen aan en ontdek de prachtige routes door Grenspark Maas-Swalm-Nette. Deze routes zijn kant en klaar, je hoeft alleen nog maar te beginnen!
                    </p>
                    <span id="alle-routes">Alle routes</span>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="grid-block">
                    <img src="/img/grid/themas.jpg" alt="picture" />
                    <h2>Thema's</h2>
                    <p>
                        Maak hier een keuze uit één van de zes verschillende thema’s. Een thema bevat diverse Points of Interest en themaroutes. Deze themaroutes nemen je mee langs de POI’s die je meer kunnen vertellen over dit thema.
                    </p>
                    <span id="themas">Thema's bekijken</span>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 ">
                <div class="grid-block">
                    <img src="/img/grid/onthaalpunten.jpg" alt="picture" />
                    <h2>Onthaalpunten</h2>
                    <p>
                        Ontdek alle onthaalpunten waar je welkom wordt geheten in het gebied. Op deze plekken kan je onder andere je auto parkeren, een kopje koe drinken of toegang tot WiFi krijgen om de app te downloaden.
                    </p>
                    <span id="onthaalpunten">Ontdek onthaalpunten</span>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="grid-block">
                    <img src="/img/grid/pois.png" alt="picture" />
                    <h2>POI'S</h2>
                    <p>
                        Het gebied kent meer dan 350 bijzondere locaties, zogeheten Points of Interest. Ontdek deze locaties hier, variërend van kerken tot kastelen en van natuurgebieden tot molens.
                    </p>
                    <span id="pios">Alle poi's </span>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="grid-block">
                    <img src="/img/grid/activiteiten.png" alt="picture" />
                    <h2>Activiteiten</h2>
                    <p>
                        Het Grenspark Maas-Swalm-Nette organiseert allerlei activiteiten voor jong en oud. Ontdek hier wanneer je in het gebied moet zijn om niks te missen! Heb je een agenda bij de hand?
                    </p>
                    <span id="activiteiten"> Activiteiten bekijken</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="load-app" id="load-app">
    <div class="container" id="load-app-display">
        <div class="row">
            <div class="col-12">
                <iframe src="https://langssporen.nl/"></iframe>
            </div>
        </div>
    </div>
</section>



<section class="container home-partners py-5" id="partners-top">
    <div class="row justify-content-md-center">
        <div class="col-12 col-md-8">
            <h2>Partners</h2>
            <p>
                De app is ontwikkeld binnen het project Cultuurgeschiedenis digitaal. Dit project werd in het kader van het INTERREG-programma Deutschland-Nederland uitgevoerd en mede genancierd door de Europese Unie, de Provincie Limburg en het Ministerie WIDE van het Land Nordrhein-Westfalen.
            </p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-6 col-md-2">
            <img src="img/partners/interreg.jpg" />
        </div>

        <div class="col-6 col-md-4">
            <img src="img/partners/prov.jpg" />
        </div>
        <div class="col-6 col-md-4">
            <img src="img/partners/minist.jpg" />
        </div>
        <div class="col-6 col-md-2">
            <img src="img/partners/euregio.jpg" />
        </div>
    </div>
</section>

<?php include('footer.php')?>


