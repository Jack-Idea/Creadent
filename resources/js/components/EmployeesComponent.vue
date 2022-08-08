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
                    <div v-for="employ in employees" class="col-12 col-lg-4">
                        <div class="employ-wrap">
                            <img :src="employ.img" class="employ-img" alt="">
                            <div class="employ-info">
                                <div>
                                    <p class="employ-info__title">
                                        {{ employ.name }}
                                    </p>
                                    <p class="employ-info__name">
                                        {{ employ.jobTitle }}<template v-if="employ.speciality">,</template> {{ employ.speciality }}
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
                        speciality: 'стоматолог-ортопед, хирург, терапевт, имплантолог',
                        exp: 'более 15 лет',
                        img: '/img/main-dr3.jpg'
                    },
                    {
                        id: 2,
                        jobTitle: 'Ассистент врача-стоматолога',
                        name: 'Кузнецова Анна Алексеевна',
                        speciality: 'гигиенист',
                        exp: 'более 15 лет',
                        img: '/img/sestra3.jpg'
                    },
                    {
                        id: 3,
                        jobTitle: 'Администратор',
                        name: 'Селиванова Алина Александровна',
                        speciality: '',
                        exp: 'более 15 лет',
                        img: '/img/administrator3.jpg'
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
