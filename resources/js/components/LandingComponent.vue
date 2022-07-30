<template>
    <div style="position: relative;">
        <section id="mainSec" class="hero" :style="'height:'+heroH+'px; max-height: 950px; position: relative;'">
<!--            <span style="position: fixed; color: black;">{{ screenWidth }}</span>-->
            <div class="container hero-section">
                <div class="row">
                    <div class="col-12">
                        <div class="main-offer">
                            <h1 class="main-offer__title">
                                Стоматологическая <br> клиника <span>creadent</span>
                            </h1>
                            <h3 class="main-offer__description">
                                Доверьте нам вашу улыбку
                            </h3>
                            <div uk-toggle="target: #modal-send" class="main-offer__btn d-none d-lg-flex">
                                Записаться на прием
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-main-btn d-flex d-lg-none" uk-toggle="target: #modal-send">
                <div class="main-offer__btn">
                    Записаться на прием
                </div>
            </div>
            <img src="/img/heroteeth.png" class="interval-img d-none d-lg-flex" alt="">
            <img src="/img/points.png" class="points-img d-none d-lg-flex" alt="">
        </section>
        <section class="second-section section-padding pb-0 pb-5">
            <div class="container second-sec-cont">
                <div class="row second-sec-row">
                    <img src="/img/crea-bg-text.png" class="crea-bg-text our-bg" alt="">
                    <div class="col-12 col-lg-5 order-2 order-lg-1">
                        <img src="/img/second-sec2.jpg" alt="">
                    </div>
                    <div class="col-12 col-lg-7 order-1 order-lg-2">
                        <div class="second-sec-text-wrap">
                            <p class="second-sec-text second-sec-text-mobile">
                                Наша клиника обеспечивает комфорт пациента во время стоматологических процедур, заботясь о каждом пациенте. Светлые кабинеты, приятная обстановка, отличный сервис, а главное вы забудете, что находитесь в стоматологии и сможете расслабиться.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--   SERVICES     -->
        <section id="servicesSec" class="third-section section-padding">
            <img src="/img/services-bg.png" class="services-bg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="page-title" style="color: #fff; margin-bottom: 25px;">
                            Услуги
                        </h3>
                    </div>
                </div>
                <div v-show="servicesComp" class="row mb-3">
                    <div class="col-12">
                        <div @click.prevent="servicesComp = ''" class="back-btn">
                            <span uk-icon="icon: reply;" class="d-flex mr-2"></span>
                            <span class="back-btn__text">Назад</span>
                        </div>
                    </div>
                </div>
                <Transition>
                    <div v-show="!servicesComp" class="row">
                        <div @click.prevent="selectService(service.dataPath)" v-for="service in services" class="col-12 col-lg-6 col-xl-4">
                            <div class="service-card">
                                <img :src="service.img" class="service-card__bg" alt="">
                                <h3 class="service-card__text">{{ service.title }}</h3>
                                <span class="service-card__btn"><span uk-icon="icon: chevron-right; ratio: 1.3;"></span></span>
                            </div>
                        </div>
                    </div>
                </Transition>
                <services-component :servicesComp="servicesComp" v-if="servicesComp" class="uk-animation-scale-up"></services-component>
            </div>
            <img src="/img/services-points1.png" class="services-bg services-points" alt="">
        </section>
        <!--    ABOUT SEC    -->
        <section class="about-section section-padding">
            <img src="/img/services-points2.png" class="services-bg services-points_blue" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="page-title">
                            О нас
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="about-text-wrap">
                            <p class="second-sec-text about-text">
                                Клиника CREADENT предоставляет весь спектр стоматологических услуг.
                                Для каждого пациента мы подбираем индивидуальный комплексный план лечения зубов, с учетом всех имеющихся у пациента стоматологических патологий. Взаимодействие врачей стоматологов из разных специализаций, дают возможность проведения смежной консультации в одно посещение.
                            </p>
                            <p class="second-sec-text about-text">
                                В клинике CREADENT есть собственная зуботехническая лаборатория, которая позволяет сократить сроки при лечении.
                            </p>
                            <div class="interval-lines-wrap mt-0">
                                <span class="interval-line interval-line-one ml-5"></span>
                                <span class="interval-line interval-line-two ml-0"></span>
                            </div>
                            <a href="/about" class="main-offer__btn d-none d-lg-flex">
                                Подробнее
                            </a>
                            <div class="mobile-main-btn d-flex d-lg-none mt-1 mb-5">
                                <a href="/about" class="main-offer__btn">
                                    Подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 ml-auto">
                        <img src="/img/second-sec.jpg" class="about-img d-flex ml-auto" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!--    EMPLOYEES SEC    -->
        <section class="about-section section-padding pt-0">
            <img src="/img/emplees-points.png" class="services-bg employees-points" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="page-title">
                            Специалисты
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <img src="/img/employees.jpg" style="position: relative; z-index: 10;" alt="">
                    </div>
                    <div class="col-12 col-lg-6 ml-auto">
                        <div class="about-text-wrap justify-content-center mt-3 mt-lg-0">
                            <p class="second-sec-text about-text">
                                В клинике CREADENT работают высококвалифицированные специалисты, которые окажут вам лучшее лечение и сервис в городе. Мы используем комплексный подход, основанный на составлении индивидуального плана лечения для каждого пациента.
                            </p>
                            <div class="interval-lines-wrap mt-3 mt-lg-4">
                                <span class="interval-line interval-line-one ml-0"></span>
                                <span class="interval-line interval-line-two ml-5 mb-0"></span>
                            </div>
                            <a href="/employees" class="main-offer__btn d-none d-lg-flex mt-5">
                                Подробнее
                            </a>
                            <div class="mobile-main-btn d-flex d-lg-none mt-5 mb-5">
                                <a href="/employees" class="main-offer__btn">
                                    Подробнее
                                </a>
                            </div>
                            <img src="/img/crea-bg-text.png" class="crea-bg-text eployees-bg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- MODAL SEND -->
        <div id="modal-send" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <img src="/img/instruments.png" class="modal-instruments" alt="">
                <img src="/img/instrument1.png" class="modal-instruments-mobile instrument-one d-lg-none" alt="">
                <img src="/img/instrument2.png" class="modal-instruments-mobile instrument-two d-lg-none" alt="">
                <div class="uk-modal-close-default" uk-close></div>
                <div v-if="!form" class="form-wrap">
                    <h4 class="uk-modal-title">Записаться на прием</h4>
                    <div class="form-group">
                        <label for="name">Имя, Фамилия</label>
                        <input v-model="name" type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="phone">Телефон</label>
                        <input v-model="phone" v-mask="'+7 (###) ###-##-##'" type="tel" class="form-control" id="phone">
                    </div>
                    <div class="form-group">
                        <label for="date">Дата</label>
                        <input v-model="date" type="date" class="form-control" id="date">
                    </div>
                    <div class="form-group">
                        <label for="time">Время</label>
                        <input v-model="time" type="time" class="form-control" id="time">
                    </div>
                    <div class="form-group">
                        <label for=""></label>
                        <div v-if="!preloader" @click.prevent="sendForm" class="send-btn">
                            Отправить
                        </div>
                        <div v-if="preloader" class="send-btn">
                            <div class="spinner-grow" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div v-if="form === 'error'" class="modal-error">
                    Упс... Что-то пошло не так, Вы можете связаться с нами по телефону <br>
                    <a href="tel:+79180818181">+7 (918) 081-81-81</a> <br>
                    и записаться на прием.
                </div>
                <div v-if="form === 'send'" class="modal-error">
                    Спасибо! Администратор свяжется с Вами в ближайшее время для уточнения деталей.
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import ServicesComponent from './ServicesComponent.vue'
    import VueTheMask from 'vue-the-mask'
    Vue.use(VueTheMask)
    export default {
        data() {
            return {
                components: {
                    ServicesComponent
                },
                preloader: false,
                startAnimation: false,
                form: false,
                heroH: '',
                screenWidth: 0,
                servicesComp: false,
                name: '',
                phone: '+7',
                date: '',
                time: '',
                services: [
                    {
                        id: 1,
                        title: 'Терапия',
                        dataPath: '/js/terapy.json',
                        img: '/img/terapy2.png'
                    },
                    {
                        id: 2,
                        title: 'Детская стоматология',
                        dataPath: '/js/kids.json',
                        img: '/img/kids2.png'
                    },
                    {
                        id: 3,
                        title: 'Имплантация',
                        dataPath: '/js/implantation.json',
                        img: '/img/implantation2.png'
                    },
                    {
                        id: 4,
                        title: 'Хирургия',
                        dataPath: '/js/surgery.json',
                        img: '/img/surgery2.png'
                    },
                    {
                        id: 5,
                        title: 'Ортодонтия',
                        dataPath: '/js/orthodontics.json',
                        img: '/img/orthodontics2.png'
                    },
                    {
                        id: 6,
                        title: 'Протезирование',
                        dataPath: '/js/prosthetics.json',
                        img: '/img/prosthetics2.png'
                    }
                ],
                selectedService: ''
            }
        },
        mounted() {
            this.loadAnimation()
        },
        methods: {
            selectService(service) {
                this.selectedService = service
                this.servicesComp = service
            },
            sendForm() {
                let self = this
                self.preloader = true
                axios
                    .post('/send-booking', {
                        'name': self.name,
                        'phone': self.phone,
                        'date': self.date,
                        'time': self.time
                    })
                    .then(function (response) {
                        self.form = 'send'
                        console.log(response.data)
                        setTimeout(function () {
                            UIkit.modal('#modal-send').hide()
                            self.preloader = false
                        }, 5000)
                    })
                    .catch(function (error) {
                        self.form = 'error'
                    })
            },
            loadAnimation() {
                document.addEventListener('DOMContentLoaded', () => {
                    if (this.heroH !== 0) {
                        this.startAnimation = true
                    }
                })
            }
        },
        computed: {
            heroHeight() {
                document.addEventListener('DOMContentLoaded', () => {
                    let H = window.innerHeight
                    this.heroH = H
                    this.screenWidth = window.innerWidth
                })
            }
        },
        watch: {
            heroHeight() {
                document.addEventListener('DOMContentLoaded', () => {
                })
            }
        }
    }
</script>
