<template>
  <div>
    <div class="form-inline">
      <a v-if="criar" :href="criar">Criar</a>
      <div class="form-group pull-right">
        <input class="form-control" type="search" placeholder="Buscar" v-model="buscar">{{buscar}}
      </div>
    </div>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th style="cursor: pointer;" @click="ordenaColuna(index)" v-for="(titulo,index) of titulos">{{titulo}}</th>
          <th v-if="detalhe || editar || deletar">Ação</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(item,index) of lista">
          <td v-for="i of item">{{i}}</td>
          <td v-if="detalhe || editar || deletar">
            <form :id="index" v-if="deletar && token" :action="deletar" method="post">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" :value="token">

              <a v-if="detalhe" :href="detalhe">Detalhe |</a>
              <a v-if="editar" :href="editar"> Editar |</a>
              <a href="#" @click="executaForm(index)"> Deletar</a>
            </form>
            <span v-if="!token">
              <a v-if="detalhe" :href="detalhe">Detalhe |</a>
              <a v-if="editar" :href="editar"> Editar |</a>
              <a v-if="deletar" :href="deletar"> Deletar</a>
            </span>
            <span v-if="token && !deletar">
              <a v-if="detalhe" :href="detalhe">Detalhe |</a>
              <a v-if="editar" :href="editar"> Editar |</a>
            </span>

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
            'ordem',
            'ordemcol',
            'criar',
            'detalhe',
            'editar',
            'deletar',
            'token'
    ],
    data: function() {
      return {
        buscar:'',
        ordemAux: this.ordem || "asc",
        ordemAuxcol: this.ordemcol || 0
      }
    },
    methods:{
      executaForm: function (index) {
        document.getElementById(index).submit();
      },
      ordenaColuna: function(coluna) {
        this.ordemAuxcol = coluna;
        if(this.ordemAux.toLowerCase() === 'asc')
          this.ordemAux = 'desc';
        else
          this.ordemAux = 'asc';
      }
    },
    computed:{
      lista: function() {

        let ordem = this.ordemAux,
            ordemcol = this.ordemAuxcol;
        ordem = ordem.toLowerCase();
        ordemcol = parseInt(ordemcol);

        if(ordem === "asc"){
          this.itens.sort(function(a,b){
            if (Object.values(a)[ordemcol] > Object.values(b)[ordemcol]) {return 1;}
            if (Object.values(a)[ordemcol] < Object.values(b)[ordemcol]) {return -1;}
            return 0;
          });
        } else {
          this.itens.sort(function (a,b) {
            if (Object.values(a)[ordemcol] < Object.values(b)[ordemcol]) {return 1;}
            if (Object.values(a)[ordemcol] > Object.values(b)[ordemcol]) {return -1;}
            return 0;
          });
        }

        if(this.buscar) {
          return this.itens.filter(res => {
            for(let k = 0; k < res.length; k++) {
              if((res[k]).toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0)
                return true;
            }
            return false;
          });
        }
        return this.itens;
      }
    }
  }
</script>

<style scoped>

</style>