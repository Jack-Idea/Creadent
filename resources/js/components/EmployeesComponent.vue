<template>
    <section>
        <section class="about-section section-padding">
            <img src="/img/crea-bg-text.png" class="crea-bg-text eployees-bg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="page-title" style="color: var(--accent-color);">
                            Специалисты
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div v-for="employ in employees" class="col-12 col-lg-8 mb-5">
                        <div class="employ-wrap">
                            <img :src="employ.img" class="employ-img" alt="">
                            <div class="employ-info">
                                <img src="/img/big-tooth.png" class="employ-info__tooth" alt="">
                                <div>
                                    <p class="employ-info__title">
                                        {{ employ.jobTitle }}
                                    </p>
                                    <p class="employ-info__name">
                                        {{ employ.name }}
                                    </p>
                                </div>
                                <div>
                                    <p class="employ-info__subtitle">
                                        Специальность:
                                    </p>
                                    <p class="employ-info__name">
                                        {{ employ.speciality }}
                                    </p>
                                </div>
                                <div>
                                    <p class="employ-info__subtitle">
                                        Стаж:
                                    </p>
                                    <p class="employ-info__name">
                                        {{ employ.exp }}
                                    </p>
                                </div>
                            </div>
                        </div>
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
                employees: [
                    {
                        id: 1,
                        jobTitle: 'Генеральный директор',
                        name: 'Симиониди Иван Ставриевич',
                        speciality: 'стоматолог-хирург, имплантолог',
                        exp: 'более 15 лет',
                        img: '/img/main-dr2.jpg'
                    },
                    {
                        id: 2,
                        jobTitle: 'Медицинская сестра',
                        name: 'Кузнецова Анна Алексеевна',
                        speciality: 'стоматолог-хирург, имплантолог',
                        exp: 'более 15 лет',
                        img: '/img/sestra.jpg'
                    },
                    {
                        id: 3,
                        jobTitle: 'Администратор',
                        name: 'Селиванова Алина Александровна',
                        speciality: 'стоматолог-хирург, имплантолог',
                        exp: 'более 15 лет',
                        img: '/img/administrator.jpg'
                    }
                ]
            }
        },
        mounted() {
            console.log('employees mounted.')
        },
        methods: {
        }
    }
</script>
