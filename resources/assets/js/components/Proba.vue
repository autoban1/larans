<template>
    <div class="test-klasa">
    <h1>Proba Naslov</h1>
    broj A: {{a}} <br>
        broj b: {{b}}<br>

        broj a+b: {{a+b}}<br>

        funkcija matematika: {{sabiranje}}
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                a: 5,
                b: 8,
                c: ''
            }
        },
        methods: {

            sabiranje() {
                d = this a + this b;
return d;

            }


        }
    }

</script>

<style scoped>

    .test-klasa {
        color: blueviolet;
    }


</style>