<template>
  <div>
    <a v-if="criar" :href="criar">Criar</a>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th v-for="titulo of titulos">{{titulo}}</th>
          <th v-if="detalhe || editar || deletar">Ação</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item of itens">
          <td v-for="i of item">{{i}}</td>
          <td v-if="detalhe || editar || deletar">
            <form v-if="deletar && token" action="index.html" method="post">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" :value="token">

              <a v-if="detalhe" :href="detalhe">Detalhe |</a>
              <a v-if="editar" :href="editar"> Editar |</a>
              <a v-if="deletar" :href="deletar"> Deletar</a>
            </form>

            <a v-if="detalhe" :href="detalhe">Detalhe |</a>
            <a v-if="editar" :href="editar"> Editar |</a>
            <a v-if="deletar" :href="deletar"> Deletar</a>
          </td>
        </tr>

      </tbody>
    </table>
  </div>

</template>

<script>
  export default {
    props:[ 'titulos',
            'itens',
            'criar',
            'detalhe',
            'editar',
            'deletar',
            'token'
    ],
  }
</script>

<style scoped>

</style>