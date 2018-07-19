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
      <tr>
        <td>1</td>
        <td>Título</td>
        <td>Descrição</td>
        <td>Autor</td>
        <td>Data</td>
        <td>
          <a href="#">Editar</a> | <a href="#">Deletar</a>
        </td>
      </tr>
      <tr>
        <td>1</td>
        <td>Título</td>
        <td>Descrição</td>
        <td>Autor</td>
        <td>Data</td>
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
    props:['titulos'],
  }
</script>

<style scoped>

</style>