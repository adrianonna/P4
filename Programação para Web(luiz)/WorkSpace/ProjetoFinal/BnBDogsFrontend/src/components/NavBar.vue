<template>
  <b-navbar toggleable="lg" type="light" variant="faded">
    <b-navbar-brand href="#">Bnb Dogs</b-navbar-brand>
    <b-navbar-nav class="ml-auto">
      <div class="top-right links">
        <router-link to="/">
          <b-button variant="outline-dark">Home</b-button>
        </router-link>

        <router-link to="/about">
          <b-button variant="outline-dark">About</b-button>
        </router-link>

        <b-button variant="outline-dark" href="Login">Login</b-button>
        <b-button variant="outline-dark" href="register">register</b-button>
      </div>
    </b-navbar-nav>
  </b-navbar>
</template>