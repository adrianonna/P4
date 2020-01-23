<template>
  <div class="bg-white p-5">
    <date-picker v-model="time1" range appendToBody :lang="lang" format="YYYY-MM-DD" confirm></date-picker>
    <p>{{time1}}</p>
  </div>
</template>

<script>
import DatePicker from "vue2-datepicker";
export default {
  components: { DatePicker },
  data() {
    return {
      time1: "",
      lang: {
        days: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
        months: [
          "Jan",
          "Feb",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec"
        ],
        placeholder: {
          date: "Select Date",
          dateRange: "Select Date Range"
        }
      }
    };
  },
  methods: {}
};
</script>
<style scoped>
</style>
