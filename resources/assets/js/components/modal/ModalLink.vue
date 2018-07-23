<template>
  <span>
    <button v-if="!tipo || (tipo != 'button' && tipo !='link')"
            :class="css || 'btn btn-primary'" data-toggle="modal"
            :data-target="'#' + nome">{{titulo}}</button>
    <button v-if="tipo === 'button'" type="button" :class="css || 'btn btn-primary'" data-toggle="modal"
            :data-target="'#' + nome">{{titulo}}</button>
    <a v-if="tipo === 'link'" href="#" :class="css || ''" data-toggle="modal"
       :data-target="'#' + nome">{{titulo}}</a>
  </span>

</template>

<script>
  export default {
    props:['tipo','nome','titulo','css']
  }
</script>

<style scoped>

</style>