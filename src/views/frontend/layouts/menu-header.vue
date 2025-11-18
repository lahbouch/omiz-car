<template>
  <ul class="main-nav">
    <li v-for="item in HeaderData" :key="item.tittle">
      <router-link :to="item.route || '/'">
        {{ $t(item.tittle) }}
      </router-link>
    </li>
  </ul>
</template>

<script>
import HeaderData from "@/assets/json/header-menu.json";

export default {
  data() {
    return {
      HeaderData: HeaderData,
    };
  },
};
</script>