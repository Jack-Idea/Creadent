<template>
    <section id="sCompSec">
        <div class="row services-animation">
            <div class="col-12">
                <div class="services-wrap">
                    <div class="service-title">
                        {{ services.title }}
                    </div>
                    <div v-for="workTitle in services.workTitle" class="service-info">
                        <div class="service-info__title">
                            <p>{{ workTitle.name }}</p>
                        </div>
                        <div v-for="workDesk in workTitle.workDescription" class="service-info__description">
                            <p class="service-info__description__title">
                                {{ workDesk.name }}
                            </p>
                            <p class="service-info__description__price">
                                {{ workDesk.price }} руб
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        props: { servicesComp: '' },
        data() {
            return {
                sComp: this.servicesComp,
                preloader: false,
                services: []
            }
        },
        mounted() {
            this.openSec()
            this.getServices()
        },
        methods: {
            openSec() {
                UIkit.scroll().scrollTo('#servicesSec');
            },
            getServices() {
                let self = this
                axios
                    .get(self.sComp)
                    .then(function (response) {
                        self.services = response.data
                    })
            }
        }
    }
</script>
