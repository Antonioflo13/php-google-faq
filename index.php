<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://img.icons8.com/color/452/google-logo.png">
    <link rel="stylesheet" href="css/style.css">
    <title>Domande frequenti - Privacy e termini - Google</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <!-- php -->
    <?php 
    $links = [
        "Introduzione",
        "Norme sulla privacy",
        "Termini e condizioni",
        "Tecnologie",
        "Domande frequenti"
    ]; 
    $faqs = [
        "Q&A" => [
            "answer" => "Come state implementando la recente  <a>decisione della Corte di giustizia dell'Unione europea</a> (CGUE) relativa al diritto all'oblio?",
            "question" => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi. <br>

            Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.
            
            Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.
            
            Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.
            
            Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.",
        ],
    ];
    ?>
    
    <!-- header -->
    <header>
        <!-- nav -->
        <nav>

            <!-- nav-top -->
            <div class="nav-top">
                <div class="nav-left">
                    <img src="https://pics.freeicons.io/uploads/icons/png/13946100361580378262-512.png" alt="logo">
                    <h3>Privacy e termini</h3>
                </div>

                <div class="nav-right">
                    <i class="fas fa-th"></i>
                    <img src="https://thumbs.dreamstime.com/b/immagine-di-profilo-dell-avatar-del-bambino-cappello-d-uso-aviatore-ragazzo-con-il-ritratto-personaggio-dei-cartoni-animati-vetro-149138397.jpg" alt="avatar">
                </div>
            </div>
            <!--/ nav-top -->

            <!-- nav-bottom -->
            <div class="nav-bottom">
                <ul class="list-inline">
                    <?php 
                    foreach ($links as $link) {
                    ?>
                        <li><a href="#"><?=$link?></a></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <!--/ nav-bottom -->

        </nav>
        <!-- /nav -->

    </header>
    <!-- /header -->

    <!-- main -->
    <main>
        
        <?php 
        foreach ($faqs as $faq) {
        ?>
            <h4><?=$faq["answer"]?></h4>
            <?php
            
        }   
        ?>
            
        
    </main>
    <!-- /main -->

</body>
</html>