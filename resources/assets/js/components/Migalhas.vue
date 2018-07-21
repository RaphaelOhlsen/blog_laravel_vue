<template>
  <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="">Library</a></li>
    <li><a href="">Data</a></li>
  </ol>
</template>


<script>
  export default {
    props:['lista'],
    mounted: function() {
      console.log(this.lista);
    }
  }
</script>

<style scoped>

</style>