<template>
  <span>
    <span v-if="item">
      <button @click="preencheFormulario()" v-if="!tipo || (tipo != 'button' && tipo !='link')"
              :class="css || 'btn btn-primary'" data-toggle="modal"
              :data-target="'#' + nome">{{titulo}}</button>
      <button @click="preencheFormulario()" v-if="tipo === 'button'" type="button" :class="css || 'btn btn-primary'" data-toggle="modal"
            :data-target="'#' + nome">{{titulo}}</button>
      <a @click="preencheFormulario()" v-if="tipo === 'link'" href="#" :class="css || ''" data-toggle="modal"
       :data-target="'#' + nome">{{titulo}}</a>
    </span>

    <span v-if="!item">
      <button v-if="!tipo || (tipo != 'button' && tipo !='link')"
              :class="css || 'btn btn-primary'" data-toggle="modal"
              :data-target="'#' + nome">{{titulo}}</button>
    <button v-if="tipo == 'button'" type="button" :class="css || 'btn btn-primary'" data-toggle="modal"
            :data-target="'#' + nome">{{titulo}}</button>
    <a v-if="tipo == 'link'" href="#" :class="css || ''" data-toggle="modal"
       :data-target="'#' + nome">{{titulo}}</a>
    </span>

  </span>

</template>

<script>
  export default {
    props:['tipo','nome','titulo','css','item'],
    methods: {
      preencheFormulario: function() {
        this.$store.commit('setItem', this.item);
      }
    }
  }
</script>

<style scoped>

</style>