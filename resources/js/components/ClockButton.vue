<template>
    <button class="" @click="log">
        {{!clockedIn ? 'Clock In' : 'Clock Out'}}
    </button>
</template>

<script>
export default {
    name: "ClockButton",

    props: [
        'clockedIn'
    ],

    methods: {
        log() {
            this.$emit('log');
        }
    }
}
</script>
