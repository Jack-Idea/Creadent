<template>
    <section class="header-section" uk-sticky="bottom: #offset">
        <div class="container">
            <div class="row">
                <div class="col-5" style="">
                    <a href="/" class="logo-wrap">
                        <img :src="logo" alt="" class="logo logo-animation">
                    </a>
                </div>
                <div class="col-5 col-lg-6 col-xl-5 d-flex ml-auto">
                    <nav id="navBar" class="nav-bar d-none d-lg-flex">
                        <a @click.prevent="servicesScroll('serv')" class="nav-bar__item">Услуги</a>
                        <a href="/about" class="nav-bar__item">О клинике</a>
                        <a href="/employees" class="nav-bar__item">Специалисты</a>
                        <a @click.prevent="servicesScroll('contacts')" class="nav-bar__item">Контакты</a>
                    </nav>
                    <nav class="mobile-menu-btn d-flex d-lg-none" uk-toggle="target: #offcanvas-flip">
                        <span class="mobile-menu-btn__item"></span>
                        <span class="mobile-menu-btn__item"></span>
                        <span class="mobile-menu-btn__item"></span>
                    </nav>
                    <div class="mobile-menu" id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
                        <div class="uk-offcanvas-bar">

                            <span class="uk-offcanvas-close" uk-icon="icon: close; ratio: 2;"></span>

                            <div class="mobile-menu-wrap">
                                <a @click.prevent="servicesScroll('serv')" class="nav-bar__item">Услуги</a>
                                <a href="/about" class="nav-bar__item">О клинике</a>
                                <a href="/employees" class="nav-bar__item">Специалисты</a>
                                <a @click.prevent="servicesScroll('contacts')" class="nav-bar__item">Контакты</a>
                                <a href="/" class="mobile-menu__logo">
                                    <img :src="logo" alt="" class="logo">
                                </a>
                                <h2 class="footer-title__item mobile-menu__logo-text">
                                    Архитектурно-строительный <br> комплекс &laquo;инвест&raquo;
                                </h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import logo from '/img/main-logo.png';
    export default {
        data() {
            return {
                preloader: true,
                logo,
            }
        },
        mounted() {
            console.log('Header mounted.')
        },
        methods: {
            servicesScroll(anchor) {
                let self = this
                let url = window.location.pathname.split('/')
                if (url[1] == "about" || url[1] == "employees" ) {
                    if (anchor == 'contacts') {
                        UIkit.scroll().scrollTo('#contacts');
                        UIkit.offcanvas('#offcanvas-flip').hide();
                    }
                    if (anchor == 'serv') {
                        window.location.href = '/#servicesSec'
                    }
                } else {
                    if (anchor == 'serv') {
                        UIkit.scroll().scrollTo('#servicesSec');
                        UIkit.offcanvas('#offcanvas-flip').hide();
                    }
                    if (anchor == 'contacts') {
                        UIkit.scroll().scrollTo('#contacts');
                        UIkit.offcanvas('#offcanvas-flip').hide();
                    }
                }
            }
        }
    }
</script>
