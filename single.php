<?php
get_header();
$category = wp_get_post_categories( get_the_ID() );
?>

    <section class="page-intro" style="background-image: url('<?php echo carbon_get_term_meta($category[0], 'crb_intro_single_bg'); ?>')">
        <h1 class="section__title"><?php the_title(); ?></h1>
    </section>
    <div class="news__item single">
        <div class="news__block">
            <header class="news__item-header"><img class="news__small-logo" src="../../assets/i/icons/small-logo.png"
                                                   alt="">
                <div class="news__item-data">
                    <h6 class="news__item-title">Prodinfo ONG</h6><img class="news__crown"
                                                                       src="../../assets/i/icons/crown.svg" alt=""
                                                                       title="admin">
                    <div class="news__item-time"><span class="news__item-date">3 Aug 2018</span> <span>2 min</span>
                    </div>
                </div>
            </header>
            <div class="news__item-text">
                <h2><a href="#">BERD și Guvernul Suediei continuă susținerea femeilor antreprenoare</a></h2>
                <p>Banca Europeană pentru Reconstrucție și Dezvoltare (BERD) își lărgește sprijinul pentru companiile
                    conduse de femei în Moldova cu ajutorul celor 2,5 milioane de euro, finanțare nerambursabilă oferită
                    de Guvernul Suediei. Fondurile vor impulsiona Programul „Femei în afaceri” al BERD, care susține
                    femeile antreprenoare în implementarea inovațiilor prin consultanță în afaceri, instruire, coaching
                    pe termen lung, mentorat și oportunități de networking și socializare.</p><img
                        src="../../assets/i/news/1.jpg" alt="">
                <p>Pentru a ajuta femeile să crească competitivitatea afacerilor, BERD le oferă acces la consultanți
                    internaționali și locali în domenii precum dezvoltarea strategică, marketingul, operațiunile,
                    managementul calității, eficiența energetică, managementul financiar și altele.</p>
                <p>Fondurile suedeze vor acoperi parțial costurile pe care le vor suporta companiile pentru astfel de
                    servicii de consultanță. Pe lîngă aceasta, BERD utilizează instruiri, mentorat și coaching pentru a
                    încuraja femeile să-și îmbunătățească abilitățile antreprenoriale și să-și consolideze încrederea în
                    sine.</p>
                <p>Începînd cu 2011, BERD a oferit asistență la peste 160 de femei antreprenoare prin intermediul
                    Programului „Femei în afaceri”, finanțat, de asemenea, de Suedia. O majoritate copleșitoare dintre
                    beneficiarele acestui program au înregistrat o creștere a vînzărilor, în medie cu 140 de procente,
                    în decursul unui an după încheierea proiectelor de consultanță.</p>
                <p>Mai mult de jumătate au mărit numărul de angajați, creînd, în total, aproape 500 de locuri noi de
                    muncă. Cele mai bune rezultate economice au fost atinse de companiile care au beneficiat atît de
                    consultanță în afaceri, cît și de activități de consolidare a capacităților. Începînd cu anul 2011,
                    guvernul suedez a finanțat programul cu 9 milioane de coroane suedeze sau echivalentul a 960.000 de
                    euro.</p>
                <p>În 2014, acesta și-a mărit sprijinul, oferind 47 de milioane de coroane suedeze (aproximativ 5,2 de
                    milioane de euro) pentru implementarea programului în șase țări ale Parteneriatului Estic: Armenia,
                    Azerbaidjan, Belarus, Georgia, Moldova și Ucraina. Signe Burgstaller, ambasadoarea Suediei în
                    Republica Moldova, a declarat că Suedia are o deosebită plăcere să continue sprijinul pentru
                    „Programul BERD „Femei în afaceri”, bazîndu-se pe rezultatele pozitive deja atinse.</p>
            </div>
            <div class="socials">
                <div class="socials__links"><a
                            href="http://www.facebook.com/sharer/sharer.php?u=https://www.prodinfo.md/blog/berd-%C8%99i-guvernul-suediei-continu%C4%83-sus%C8%9Binerea-femeilor-antreprenoare"><i
                                class="fab fa-facebook-f"></i></a><a
                            href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fwww.prodinfo.md%2Fblog%2Fberd-%C8%99i-guvernul-suediei-continu%C4%83-sus%C8%9Binerea-femeilor-antreprenoare&amp;original_referer=https%3A%2F%2Fsocial-blog.wix.com%2Fberd-%25C8%2599i-guvernul-suediei-continu%25C4%2583-sus%25C8%259Binerea-femeilor-antreprenoare%3FcacheKiller%3D1565781420225%26compId%3DTPASection_jrm43mo0%26currency%3DMDL%26dateNumberFormat%3Dro-ro%26deviceType%3Ddesktop%26height%3D480%26instance%3DZlTebwezVLv3mQZTMPSA05ckClDIAyVrhRsN3nseGkQ.eyJpbnN0YW5jZUlkIjoiNzY4MGYwM2YtZjdhZi00Mzc0LWI5ZmUtYjBkMDhhNmIzNThkIiwiYXBwRGVmSWQiOiIxNGJjZGVkNy0wMDY2LTdjMzUtMTRkNy00NjZjYjNmMDkxMDMiLCJtZXRhU2l0ZUlkIjoiM2IxZGNjZDEtYzY0Zi00YWUyLTgyNzgtMzE5MDU1ZTZhZmJkIiwic2lnbkRhdGUiOiIyMDE5LTA4LTE0VDExOjE2OjU0LjQwN1oiLCJ1aWQiOm51bGwsImlwQW5kUG9ydCI6IjE3OC4xNjguODEuMjIwLzQ2NzM0IiwidmVuZG9yUHJvZHVjdElkIjpudWxsLCJkZW1vTW9kZSI6ZmFsc2UsIm9yaWdpbkluc3RhbmNlSWQiOiJmMmUwZWFlYy0xMzE1LTQ1ZmMtOTEwYi1iY2JlNzcxMGUzYzIiLCJhaWQiOiIyNzQ3YTM2OC0xYzE3LTRjOGEtYTMwOC1kOWRlMmRhNjY1OTIiLCJiaVRva2VuIjoiNGQ5ZDNjZWUtMzFlMC0wOTk2LTNiODYtODE0MGRmOGQ5YTMwIiwic2l0ZU93bmVySWQiOiI3ZDc1MjA3ZS00Nzg4LTQwOWUtYmUxMS1jNmQ4ODI4Njk4MmIifQ%26isPrimaryLanguage%3Dtrue%26lang%3Dro%26locale%3Dro%26pageId%3Ddbm8s%26section-url%3Dhttps%253A%252F%252Fwww.prodinfo.md%252Fblog%252F%26siteRevision%3D717%26target%3D_top%26tz%3DEurope%252FChisinau%26viewMode%3Dsite%26vsi%3D23b86eed-0931-4223-b5b9-b5aebf8080ee%26width%3D980"><i
                                class="fab fa-twitter"></i></a><a href="https://www.linkedin.com/m/login/"><i
                                class="fab fa-linkedin-in"></i></a><a id="js-show-address-string" href="#"><i
                                class="fas fa-link"></i></a></div>
                <div class="socials__category">Stiri</div>
            </div>
            <div class="modal-link" id="js-modal-link">
                <header class="modal-link__header"><i class="fas fa-link"></i><span>Pastreaza linkul</span></header>
                <textarea class="modal-link__content"></textarea>
                <div class="modal-link__buttons">
                    <button class="modal-link-close">Anuleaza</button>
                    <button class="modal-link-copy">Copiaza linkul</button>
                </div>
            </div>
            <footer class="news__item-footer"><span class="news__show">13 afisare</span><a class="news__comment-link"
                                                                                           href="#">Scrie un
                    commentariu</a><span class="news__like"><span class="news__like-number"></span> <svg
                            xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 19 19" role="img"><path
                                d="M9.44985848,15.5291774 C9.43911371,15.5362849 9.42782916,15.5449227 9.41715267,15.5553324 L9.44985848,15.5291774 Z M9.44985848,15.5291774 L9.49370677,15.4941118 C9.15422701,15.7147757 10.2318883,15.0314406 10.7297038,14.6971183 C11.5633567,14.1372547 12.3827081,13.5410755 13.1475707,12.9201001 C14.3829188,11.9171478 15.3570936,10.9445466 15.9707237,10.0482572 C16.0768097,9.89330422 16.1713564,9.74160032 16.2509104,9.59910798 C17.0201658,8.17755699 17.2088969,6.78363112 16.7499013,5.65913129 C16.4604017,4.81092573 15.7231445,4.11008901 14.7401472,3.70936139 C13.1379564,3.11266008 11.0475663,3.84092251 9.89976068,5.36430396 L9.50799408,5.8842613 L9.10670536,5.37161711 C7.94954806,3.89335486 6.00516066,3.14638251 4.31830373,3.71958508 C3.36517186,4.00646284 2.65439601,4.72068063 2.23964629,5.77358234 C1.79050315,6.87166888 1.98214559,8.26476279 2.74015555,9.58185512 C2.94777753,9.93163559 3.23221417,10.3090129 3.5869453,10.7089994 C4.17752179,11.3749196 4.94653811,12.0862394 5.85617417,12.8273544 C7.11233096,13.8507929 9.65858244,15.6292133 9.58280954,15.555334 C9.53938013,15.5129899 9.48608859,15.5 9.50042471,15.5 C9.5105974,15.5 9.48275828,15.5074148 9.44985848,15.5291774 Z"></path></svg></span>
            </footer>
        </div>
    </div>
    <section class="last-posts">
        <header class="last-posts__header">
            <h4 class="last-posts__title">Postari recente</h4><a class="last-posts__link" href="#">Afiseaza-le pe
                toate</a>
        </header>
        <div class="last-posts-content">
            <div class="last-posts__item">
                <picture class="last-posts__img">
                    <source type="image/webp" srcset="../../assets/i/news/1.webp">
                    <img src="../../assets/i/news/1.webp" alt="">
                </picture>
                <div class="last-posts__text">
                    <h3>Fermierii au început să scoată la vânzare primele căpșuni c…</h3>
                    <footer class="news__item-footer"><span class="news__show"><i class="fas fa-eye"></i> 13</span><a
                                class="news__comment-link" href="#">Scrie un commentariu</a><span
                                class="news__like"><span class="news__like-number"></span> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 19 19" role="img"><path
                                        d="M9.44985848,15.5291774 C9.43911371,15.5362849 9.42782916,15.5449227 9.41715267,15.5553324 L9.44985848,15.5291774 Z M9.44985848,15.5291774 L9.49370677,15.4941118 C9.15422701,15.7147757 10.2318883,15.0314406 10.7297038,14.6971183 C11.5633567,14.1372547 12.3827081,13.5410755 13.1475707,12.9201001 C14.3829188,11.9171478 15.3570936,10.9445466 15.9707237,10.0482572 C16.0768097,9.89330422 16.1713564,9.74160032 16.2509104,9.59910798 C17.0201658,8.17755699 17.2088969,6.78363112 16.7499013,5.65913129 C16.4604017,4.81092573 15.7231445,4.11008901 14.7401472,3.70936139 C13.1379564,3.11266008 11.0475663,3.84092251 9.89976068,5.36430396 L9.50799408,5.8842613 L9.10670536,5.37161711 C7.94954806,3.89335486 6.00516066,3.14638251 4.31830373,3.71958508 C3.36517186,4.00646284 2.65439601,4.72068063 2.23964629,5.77358234 C1.79050315,6.87166888 1.98214559,8.26476279 2.74015555,9.58185512 C2.94777753,9.93163559 3.23221417,10.3090129 3.5869453,10.7089994 C4.17752179,11.3749196 4.94653811,12.0862394 5.85617417,12.8273544 C7.11233096,13.8507929 9.65858244,15.6292133 9.58280954,15.555334 C9.53938013,15.5129899 9.48608859,15.5 9.50042471,15.5 C9.5105974,15.5 9.48275828,15.5074148 9.44985848,15.5291774 Z"></path></svg></span>
                    </footer>
                </div>
            </div>
            <div class="last-posts__item">
                <picture class="last-posts__img">
                    <source type="image/webp" srcset="../../assets/i/news/1.webp">
                    <img src="../../assets/i/news/1.webp" alt="">
                </picture>
                <div class="last-posts__text">
                    <h3>Fermierii au început să scoată la vânzare primele căpșuni c…</h3>
                    <footer class="news__item-footer"><span class="news__show"><i class="fas fa-eye"></i> 13</span><a
                                class="news__comment-link" href="#">Scrie un commentariu</a><span
                                class="news__like"><span class="news__like-number"></span> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 19 19" role="img"><path
                                        d="M9.44985848,15.5291774 C9.43911371,15.5362849 9.42782916,15.5449227 9.41715267,15.5553324 L9.44985848,15.5291774 Z M9.44985848,15.5291774 L9.49370677,15.4941118 C9.15422701,15.7147757 10.2318883,15.0314406 10.7297038,14.6971183 C11.5633567,14.1372547 12.3827081,13.5410755 13.1475707,12.9201001 C14.3829188,11.9171478 15.3570936,10.9445466 15.9707237,10.0482572 C16.0768097,9.89330422 16.1713564,9.74160032 16.2509104,9.59910798 C17.0201658,8.17755699 17.2088969,6.78363112 16.7499013,5.65913129 C16.4604017,4.81092573 15.7231445,4.11008901 14.7401472,3.70936139 C13.1379564,3.11266008 11.0475663,3.84092251 9.89976068,5.36430396 L9.50799408,5.8842613 L9.10670536,5.37161711 C7.94954806,3.89335486 6.00516066,3.14638251 4.31830373,3.71958508 C3.36517186,4.00646284 2.65439601,4.72068063 2.23964629,5.77358234 C1.79050315,6.87166888 1.98214559,8.26476279 2.74015555,9.58185512 C2.94777753,9.93163559 3.23221417,10.3090129 3.5869453,10.7089994 C4.17752179,11.3749196 4.94653811,12.0862394 5.85617417,12.8273544 C7.11233096,13.8507929 9.65858244,15.6292133 9.58280954,15.555334 C9.53938013,15.5129899 9.48608859,15.5 9.50042471,15.5 C9.5105974,15.5 9.48275828,15.5074148 9.44985848,15.5291774 Z"></path></svg></span>
                    </footer>
                </div>
            </div>
            <div class="last-posts__item">
                <picture class="last-posts__img">
                    <source type="image/webp" srcset="../../assets/i/news/1.webp">
                    <img src="../../assets/i/news/1.webp" alt="">
                </picture>
                <div class="last-posts__text">
                    <h3>Fermierii au început să scoată la vânzare primele căpșuni c…</h3>
                    <footer class="news__item-footer"><span class="news__show"><i class="fas fa-eye"></i> 13</span><a
                                class="news__comment-link" href="#">Scrie un commentariu</a><span
                                class="news__like"><span class="news__like-number"></span> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 19 19" role="img"><path
                                        d="M9.44985848,15.5291774 C9.43911371,15.5362849 9.42782916,15.5449227 9.41715267,15.5553324 L9.44985848,15.5291774 Z M9.44985848,15.5291774 L9.49370677,15.4941118 C9.15422701,15.7147757 10.2318883,15.0314406 10.7297038,14.6971183 C11.5633567,14.1372547 12.3827081,13.5410755 13.1475707,12.9201001 C14.3829188,11.9171478 15.3570936,10.9445466 15.9707237,10.0482572 C16.0768097,9.89330422 16.1713564,9.74160032 16.2509104,9.59910798 C17.0201658,8.17755699 17.2088969,6.78363112 16.7499013,5.65913129 C16.4604017,4.81092573 15.7231445,4.11008901 14.7401472,3.70936139 C13.1379564,3.11266008 11.0475663,3.84092251 9.89976068,5.36430396 L9.50799408,5.8842613 L9.10670536,5.37161711 C7.94954806,3.89335486 6.00516066,3.14638251 4.31830373,3.71958508 C3.36517186,4.00646284 2.65439601,4.72068063 2.23964629,5.77358234 C1.79050315,6.87166888 1.98214559,8.26476279 2.74015555,9.58185512 C2.94777753,9.93163559 3.23221417,10.3090129 3.5869453,10.7089994 C4.17752179,11.3749196 4.94653811,12.0862394 5.85617417,12.8273544 C7.11233096,13.8507929 9.65858244,15.6292133 9.58280954,15.555334 C9.53938013,15.5129899 9.48608859,15.5 9.50042471,15.5 C9.5105974,15.5 9.48275828,15.5074148 9.44985848,15.5291774 Z"></path></svg></span>
                    </footer>
                </div>
            </div>
        </div>
    </section>
    <div class="register">
        <p><a href="#">Conecteaza-te </a> pentru a lasa un comentariu</p>
    </div>

<?php
get_footer();
