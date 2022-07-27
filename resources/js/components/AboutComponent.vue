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
                                Клиника CREADENT предоставляет весь спектр стоматологических услуг.
                                Для каждого пациента мы подбираем индивидуальный комплексный план лечения зубов, с учетом всех имеющихся у пациента стоматологических патологий. Взаимодействие врачей стоматологов из разных специализаций, дают возможность проведения смежной консультации в одно посещение.
                            </p>
                            <p class="second-sec-text about-text">
                                В клинике CREADENT есть собственная зуботехническая лаборатория, которая позволяет сократить сроки при лечении.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 d-none d-lg-block ml-auto">
                        <img src="/img/about-img1.png" class="about-img" alt="">
                        <div class="interval-lines-wrap d-none d-lg-flex mt-5">
                            <span class="interval-line interval-line-one mr-5"></span>
                            <span class="interval-line interval-line-two"></span>
                        </div>
                        <img src="/img/about-img2.png" class="d-none d-lg-flex mt-3" alt="">
                    </div>
                </div>
                <div class="row mt-3 mt-lg-5">
                    <div class="col-12">
                        <img src="/img/about-page.jpg" alt="">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <h3 class="page-title">
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
    </section>
</template>

<script>
    export default {
        data() {
            return {
                preloader: true,
            }
        },
        mounted() {
            console.log('about mounted.')
        },
        methods: {
        }
    }
</script>
