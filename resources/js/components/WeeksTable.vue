<template>
    <h3>Hours</h3>
    <table>
        <tbody>
            <tr v-for="week in weeks">
                <td>{{week.number}}</td>
                <td>{{week.hours}}</td>
            </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    name: "WeeksTable",

    data() {
        return {
            weeks: Object
        }
    },
}
</script>
