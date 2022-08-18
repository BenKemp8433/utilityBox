<template>
    <p v-for="log in timeLogs">{{diffHours(log.startTime, log.endTime)}}</p>
</template>

<script>
export default {
    name: "TimeLogTable",

    props: [
        'timeLogs'
    ],

    methods: {
        diffHours(startTime, endTime) {
            return Math.round((new Date(endTime) - new Date(startTime)) / 3600000 * 10) / 10;
        }
    }
}
</script>
