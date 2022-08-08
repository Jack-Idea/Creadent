<template>
    <section>
        <section class="about-section section-padding">
            <img src="/img/crea-bg-text.png" class="crea-bg-text" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="about-text-wrap">
                            <h3 class="page-title" style="color: var(--accent-color);">
                                О нас
                            </h3>
                            <p class="second-sec-text about-text">
                                Клиника CREADENT оснащена самым современным и технологически новым оборудованием. Мы постоянно следим за инновациями в сфере стоматологических услуг и инвестируем в новейшие технологии для удобства наших пациентов.
                            </p>
<!--                            <div class="interval-lines-wrap mt-auto">-->
<!--                                <span class="interval-line interval-line-one ml-5"></span>-->
<!--                                <span class="interval-line interval-line-two ml-0"></span>-->
<!--                            </div>-->
                            <p class="second-sec-text about-text mt-auto">
                                CREADENT поддерживает международный стандарт обслуживания. В первую очередь пациент для нас друг-партнёр. Клиника удовлетворяет все потребности своих клиентов и обеспечивает комфортное лечение. Мы фокусируемся на выстраивании долгосрочных отношений, поэтому забота о наших пациентах является нашим единственным приоритетом.
                            </p>
                            <div uk-toggle="target: #modal-send" class="main-offer__btn mt-auto mb-5 mb-lg-0">
                                Записаться на прием
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 ml-auto">
                        <img src="/img/second-sec2.jpg" class="d-flex ml-auto" alt="">
                        <img src="/img/about-page.jpg" class="d-flex ml-auto mt-3" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="about-page-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="page-title about-title">
                            Применяем цифровые технологии
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <p class="second-sec-text about-text mt-4 mt-lg-0">
                            Наши специалисты повышают свою квалификацию, посещают различные обучения, участвуют в тренингах и семинарах.
                        </p>
                        <p class="second-sec-text about-text mt-5">
                            Клиника оборудована 3D сканером Cerec, радиовизиографом, который позволяет провести точную диагностику уже на первой консультации.
                        </p>
                    </div>
                    <div class="col-12 offset-lg-2 col-lg-5">
                        <p class="second-sec-text about-text mt-5 mt-lg-0">
                            Одна из лучших технологий CAD/CAM создает компьютерное моделирование и дает неограниченные возможности в протезировании, позволяя получить максимально точный и качественный результат.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="mb-5">
            <img src="/img/clinic.jpg" alt="">
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
    </section>
</template>

<script>
    import VueTheMask from 'vue-the-mask'
    Vue.use(VueTheMask)
    export default {
        data() {
            return {
                preloader: false,
                form: false,
                name: '',
                phone: '+7',
                date: '',
                time: '',
            }
        },
        mounted() {
            console.log('about mounted.')
        },
        methods: {
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
            }
        }
    }
</script>
