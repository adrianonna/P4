<template>
  <div>
    <navBar />
    <div class="container">
      <home-box />
    </div>
  </div>
</template>

<script>
// @ is an alias to /src
import NavBar from "../components/NavBar";
import HomeBox from "../components/HomeBox";

export default {
  name: "home",
  components: { NavBar, HomeBox }
};
</script>
<style>
body {
  background: url("../../static/happydog.jpg") no-repeat !important;
  background-size: cover !important;
  overflow: hidden;
}
</style>