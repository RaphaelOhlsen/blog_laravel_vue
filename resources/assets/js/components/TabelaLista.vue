<template>
  <div>
    <a href="#">Criar</a>
    <table class="table table-striped table-hover">
      <thead>
      <tr>
        <th v-for="titulo of titulos">{{titulo}}</th>
        <th>Ação</th>
      </tr>
      </thead>
      <tbody>
      <tr v-for="item of itens">
        <td v-for="i of item">{{i}}</td>
        <td>
          <a href="#">Editar</a> | <a href="#">Deletar</a>
        </td>
      </tr>

      </tbody>
    </table>
  </div>

</template>

<script>
  export default {
    props:['titulos','itens'],
  }
</script>

<style scoped>

</style>