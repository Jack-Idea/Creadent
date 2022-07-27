<template>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <v-date-picker v-model="date"></v-date-picker>
<!--                {{ date | moment('H:mm') }}-->
<!--                <input type="time" v-model="time">-->
<!--                <span @click.prevent="test">book</span>-->
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 col-lg-6">
                <span class="d-block">Утро 09:00 - 12:00</span>
                <div class="timelist">
                    <span v-for="time in times" v-if="!time.book && time.morning" class="timelist__hour" :class="{ book: time.book}"><span>{{ time.defTime }}</span></span>
                </div>
                <span class="d-block">День 12:00 - 16:00</span>
                <div class="timelist">
                    <span v-for="time in times" v-if="!time.book && time.day" class="timelist__hour" :class="{ book: time.book}"><span>{{ time.defTime }}</span></span>
                </div>
                <span class="d-block">Вечер 16:00 - 18:00</span>
                <div class="timelist">
                    <span v-for="time in times" v-if="!time.book && time.evening" class="timelist__hour" :class="{ book: time.book}"><span>{{ time.defTime }}</span></span>
<!--                    <span class="timelist__hour"><span>09:00</span></span>-->
<!--                    <span class="timelist__hour"><span>10:00</span></span>-->
<!--                    <span class="timelist__hour"><span>11:00</span></span>-->
<!--                    <span class="timelist__hour"><span>12:00</span></span>-->
<!--                    <span class="timelist__hour"><span>13:00</span></span>-->
<!--                    <span class="timelist__hour" :class="{ book: bookEnd && bookEnd >= '15:00'}">-->
<!--                        <span v-if="bookStart != '14:00' || bookEnd >= '15:00'">14:00</span>-->
<!--                        <span v-if="bookStart == '14:00' && bookEnd < '15:00'">{{ bookEnd }}</span>-->
<!--                    </span>-->
<!--                    <span class="timelist__hour"><span>15:00</span></span>-->
<!--                    <span class="timelist__hour"><span>16:00</span></span>-->
<!--                    <span class="timelist__hour"><span>17:00</span></span>-->
<!--                    <span class="timelist__hour"><span>18:00</span></span>-->
                </div>
            </div>
        </div>
        <div class="row">
        </div>
    </div>
</template>

<script>
    Vue.use(require('vue-moment'));
    import moment from 'moment';
    import Vue from 'vue';
    import VCalendar from 'v-calendar';
    Vue.use(VCalendar, {
        componentPrefix: 'vc'
    });
    export default {
        data() {
            const date = new Date();
            const year = date.getFullYear();
            const month = date.getMonth();
            return {
                date: '',
                time: '',
                bookDate: '',
                bookStart: '',
                bookEnd: '',
                books: [],
                // times: [
                //    {'defTime': '09:00', 'start': '', 'end': '', 'book': 0 },
                //    {'defTime': '10:00', 'start': '', 'end': '', 'book': 0 },
                //    {'defTime': '11:00', 'start': '', 'end': '', 'book': 0 },
                //    {'defTime': '12:00', 'start': '', 'end': '', 'book': 0 },
                //    {'defTime': '13:00', 'start': '', 'end': '', 'book': 0 },
                //    {'defTime': '14:00', 'start': '', 'end': '', 'book': 0 },
                //    {'defTime': '15:00', 'start': '', 'end': '', 'book': 0 },
                //    {'defTime': '16:00', 'start': '', 'end': '', 'book': 0 },
                //    {'defTime': '17:00', 'start': '', 'end': '', 'book': 0 },
                //    {'defTime': '18:00', 'start': '', 'end': '', 'book': 0 }
                // ],
                times: [
                   {'defTime': '09:00', 'start': '', 'end': '', 'book': 0, 'morning': 1 },
                   {'defTime': '09:20', 'start': '', 'end': '', 'book': 0, 'morning': 1 },
                   {'defTime': '09:40', 'start': '', 'end': '', 'book': 0, 'morning': 1 },
                   {'defTime': '10:00', 'start': '', 'end': '', 'book': 0, 'morning': 1 },
                   {'defTime': '10:20', 'start': '', 'end': '', 'book': 0, 'morning': 1 },
                   {'defTime': '10:40', 'start': '', 'end': '', 'book': 0, 'morning': 1 },
                   {'defTime': '11:00', 'start': '', 'end': '', 'book': 0, 'morning': 1 },
                   {'defTime': '11:20', 'start': '', 'end': '', 'book': 0, 'morning': 1 },
                   {'defTime': '11:40', 'start': '', 'end': '', 'book': 0, 'morning': 1 },
                   {'defTime': '12:00', 'start': '', 'end': '', 'book': 0, 'day': 1 },
                   {'defTime': '12:20', 'start': '', 'end': '', 'book': 0, 'day': 1 },
                   {'defTime': '12:40', 'start': '', 'end': '', 'book': 0, 'day': 1 },
                   {'defTime': '13:00', 'start': '', 'end': '', 'book': 0, 'day': 1 },
                   {'defTime': '13:20', 'start': '', 'end': '', 'book': 0, 'day': 1 },
                   {'defTime': '13:40', 'start': '', 'end': '', 'book': 0, 'day': 1 },
                   {'defTime': '14:00', 'start': '', 'end': '', 'book': 0, 'day': 1 },
                   {'defTime': '14:20', 'start': '', 'end': '', 'book': 0, 'day': 1 },
                   {'defTime': '14:40', 'start': '', 'end': '', 'book': 0, 'day': 1 },
                   {'defTime': '15:00', 'start': '', 'end': '', 'book': 0, 'day': 1 },
                   {'defTime': '15:20', 'start': '', 'end': '', 'book': 0, 'day': 1 },
                   {'defTime': '15:40', 'start': '', 'end': '', 'book': 0, 'day': 1 },
                   {'defTime': '16:00', 'start': '', 'end': '', 'book': 0, 'evening': 1 },
                   {'defTime': '16:20', 'start': '', 'end': '', 'book': 0, 'evening': 1 },
                   {'defTime': '16:40', 'start': '', 'end': '', 'book': 0, 'evening': 1 },
                   {'defTime': '17:00', 'start': '', 'end': '', 'book': 0, 'evening': 1 },
                   {'defTime': '17:20', 'start': '', 'end': '', 'book': 0, 'evening': 1 },
                   {'defTime': '17:40', 'start': '', 'end': '', 'book': 0, 'evening': 1 },
                   {'defTime': '18:00', 'start': '', 'end': '', 'book': 0, 'evening': 1 }
                ],
                // times: [
                //     {'defTime': '09:00', 'start': '', 'end': '', 'book': ''},
                //     {'defTime': '10:00', 'start': '', 'end': '', 'book': ''},
                //    '11:00',
                //    '12:00',
                //    '13:00',
                //    '14:00',
                //    '15:00',
                //    '16:00',
                //    '17:00',
                //    '18:00'
                // ],
                bookTimes: []
            }
        },
        mounted() {
            this.date = new Date()
            console.log(this.date)
        },
        methods: {
            test() {
                let self = this
                axios
                    .post('/cal', {
                        'book_date': self.date
                    })
                    .then( function (response) {
                        // self.bookDate = response.data.book_date
                        // self.bookStart = response.data.book_time
                        // self.bookEnd = response.data.book_end
                        // self.books = response.data.book_times
                        self.books = response.data.times
                        setTimeout(function () {
                            self.checkBooks()
                        }, 1000)
                        console.log(response.data.times)
                    })
            },
            checkBooks() {
                let self = this
                // self.times.forEach( function (valueTime, indexTime) {
                //     self.books.forEach( function (valueBook, indexBook) {
                //         if (valueBook.start == valueTime.defTime) {
                //             self.times[indexTime].book = 1
                //             self.times[indexTime].start = valueBook.start
                //             self.times[indexTime].end = valueBook.end
                //         }
                //     })
                // })
                self.times.forEach( function (valueTime, indexTime) {
                    self.books.forEach( function (valueBook, indexBook) {
                        if (valueBook == valueTime.defTime) {
                            self.times[indexTime].book = 1
                        }
                    })
                })
            }
        },
        watch: {
            watchTime() {
                let date = this.date.toString()
                let time = date.split(" ");
                // console.log(time)
            }
        },
        computed: {
            watchTime() {
                let date = this.date.toString()
                let time = date.split(" ");
                // console.log(time)
            }
        }
    }
</script>
