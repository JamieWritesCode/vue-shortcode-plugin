<template>
  <p>Hello World</p>
</template>

<style lang="scss"></style>

<script>
export default {
  props: ["atts"],
  mounted() {
    console.log("Vue Shortcode Plugin works!", this.atts);
  }
};
</script>
