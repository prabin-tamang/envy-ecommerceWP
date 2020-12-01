    <!-- FOOTER start -->
    <footer class="footer">
        <div class="container">
            <div class="footer__wrapper">
                <section class="footer__contact">
                    <h3 class="footer__heading">Contact us</h3>
                    <p>Share store details, promotions, or brand content with your customers.</p>
                </section>
                <section class="footer__navigation">
                    <h3 class="footer__heading">Links</h3>
                    <!-- <ul class="footer-links">
                        <li class="footer-link"><a href="#">Home</a></li>
                        <li class="footer-link"><a href="#">Shop</a></li>
                        <li class="footer-link"><a href="#">About</a></li>
                        <li class="footer-link"><a href="#">Blog</a></li>
                        <li class="footer-link"><a href="#">FAQs</a></li>
                        <li class="footer-link"><a href="#">Contact</a></li>
                        <li class="footer-link"><a href="#">Theme Features</a></li>
                    </ul> -->


                    <!-- add class to ul and li -->

                         <?php 
                                wp_nav_menu(array(
                                    'theme_location' => 'footer_menu',
                                     'container' => false,
                                     'menu_class' => 'footer-links'
                                )
                            );
                            ?>

                </section>
                <section class="footer__mailing-list">
                    <h3 class="footer__heading">Join our mailing list</h3>
                    <div class="mailing-list-content">
                        <input type="text" placeholder="Enter email">
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px"
                                height="24px">
                                <path d="M0 0h24v24H0z" fill="none" />
                                <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" />
                            </svg>
                        </button>
                    </div>
                </section>
                <section class="footer__connected">
                    <h3 class="footer__heading">Get Connected</h3>
                    <ul class="header__social">
                        <li class="social-link">
                            <a href="#">
                                <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px"
                                    height="24px">
                                    <path
                                        d="M19,3H5C3.895,3,3,3.895,3,5v14c0,1.105,0.895,2,2,2h7.621v-6.961h-2.343v-2.725h2.343V9.309 c0-2.324,1.421-3.591,3.495-3.591c0.699-0.002,1.397,0.034,2.092,0.105v2.43h-1.428c-1.13,0-1.35,0.534-1.35,1.322v1.735h2.7 l-0.351,2.725h-2.365V21H19c1.105,0,2-0.895,2-2V5C21,3.895,20.105,3,19,3z" />
                                </svg>
                            </a>
                        </li>
                        <li class="social-link">
                            <a href=" #">
                                <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="24px"
                                    height="24px">
                                    <path
                                        d="M 16.5 5 C 10.16639 5 5 10.16639 5 16.5 L 5 31.5 C 5 37.832757 10.166209 43 16.5 43 L 31.5 43 C 37.832938 43 43 37.832938 43 31.5 L 43 16.5 C 43 10.166209 37.832757 5 31.5 5 L 16.5 5 z M 16.5 8 L 31.5 8 C 36.211243 8 40 11.787791 40 16.5 L 40 31.5 C 40 36.211062 36.211062 40 31.5 40 L 16.5 40 C 11.787791 40 8 36.211243 8 31.5 L 8 16.5 C 8 11.78761 11.78761 8 16.5 8 z M 34 12 C 32.895 12 32 12.895 32 14 C 32 15.105 32.895 16 34 16 C 35.105 16 36 15.105 36 14 C 36 12.895 35.105 12 34 12 z M 24 14 C 18.495178 14 14 18.495178 14 24 C 14 29.504822 18.495178 34 24 34 C 29.504822 34 34 29.504822 34 24 C 34 18.495178 29.504822 14 24 14 z M 24 17 C 27.883178 17 31 20.116822 31 24 C 31 27.883178 27.883178 31 24 31 C 20.116822 31 17 27.883178 17 24 C 17 20.116822 20.116822 17 24 17 z" />
                                </svg>
                            </a>
                        </li>
                        <li class="social-link">
                            <a href=" #">
                                <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px"
                                    height="24px">
                                    <path
                                        d="M12,2C6,2,6,8,6,8v1c0,0-0.023-0.001-0.063-0.001C5.597,8.999,4,9.069,4,10.395C4,11.94,5.697,12,5.965,12 C5.988,12,6,12,6,12c0,1-1.652,2.171-2.736,2.442c-1.01,0.392-1.251,1.061-1.264,1.568c-0.008,0.303,0.066,0.548,0.106,0.643 c0.377,0.885,1.497,1.342,2.594,1.342C4.738,19.434,5.776,20,6.471,20c0.794,0,1.634-0.388,1.634-0.388C8.146,19.646,9.425,21,12,21 s3.854-1.354,3.896-1.388c0,0,0.839,0.388,1.634,0.388c0.695,0,1.732-0.566,1.77-2.005c1.097,0,2.217-0.457,2.594-1.342 c0.04-0.095,0.114-0.34,0.106-0.643c-0.013-0.507-0.254-1.176-1.264-1.568C19.652,14.171,18,13,18,12c0,0,0.012,0,0.035,0 C18.303,12,20,11.94,20,10.395c0-1.326-1.597-1.396-1.937-1.396C18.023,8.999,18,9,18,9V8C18,8,18,2,12,2L12,2z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </section>
            </div>
            <!-- footer bottom section -->
            <div class="footer__bottom-section">
                <p><a href="#">© 2020 Envy - Copenhagen</a></p>
            </div>
        </div>
    </footer>
    <!-- FOOTER end -->
    <!-- <script src="./assets/js/lib/main.js"></script> -->
    <?php wp_footer(); ?>
</body>
</html>