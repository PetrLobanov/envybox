<template>
    <div class="container">

        <form v-on:submit.prevent>

            <div v-for="item in form" class="mt-3 mb-3">
                <input v-bind:type="item.type" class="form-control"
                v-bind:name="item.name" v-bind:placeholder="item.placeholder"
                       v-model="formData[item.name]">
            </div>


            <div class="mt-3 mb-3">{{this.message}}</div>

            <input type="submit" class="btn btn-success" value="Отправить"
                   @click="clickBtn();">
        </form>

    </div>
</template>

<script>
    export default {

        methods: {

            clickBtn: function () {

                axios.post('/public/', {
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'X-Requested-With': 'XMLHttpRequest',
                    },

                    formData: this.formData,

                }).then( response => {

                    this.message = response.data;

                })

            }

        },

        props: ['data'],
        data: function () {

            return {

                formData: {},
                message: '',

                form: this.data,

            }

        }
    }
</script>
