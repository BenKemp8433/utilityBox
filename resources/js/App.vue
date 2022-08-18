<template>
    <v-clockButton
        @log="logTime()"

        :clocked-in="clockedIn"
    />

    <v-timeLogTable
        :timeLogs="timeLogs"
    />

    <v-weeksTable />
</template>

<script>
    export default {
        name: "App",

        data() {
            return {
                clockedIn: false,
                log: Object,
                timeLogs: Object
            }
        },

        mounted() {
            this.getLatestTimeLog();

            this.getAllLogs()
        },

        methods: {
            logTime() {
                if (!this.log) {
                    this.createNewLog();
                    return;
                }

                axios.post(route('api.latestLog', {log: this.log}))
                    .then(() => this.clockedIn = !this.clockedIn);

                this.getAllLogs();
            },

            getLatestTimeLog() {
                axios.get(route('api.latestLog'))
                    .then((response) => this.log = response.data);

                if (this.log) {
                    this.clockedIn = true;
                }
            },

            createNewLog() {
                axios.get(route('api.newLog'))
                    .then((response) => this.log = response.data)
                    .then(() => this.clockedIn = !this.clockedIn);
            },

            getAllLogs() {
                axios.get(route('api.allLogs'))
                    .then((response) => this.timeLogs = response.data);
            }
        }
    }
</script>
