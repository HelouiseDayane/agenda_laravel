<template>
  
  
   
   <b-container class="bv-example-row mb-3">
  <b-row cols="1">
    <b-col>   
        <b-button v-b-modal.modal-1 variant="outline-primary">Novo Contato</b-button>

            <b-modal id="modal-1" title="BootstrapVue">
           <div class="row">
            <div class="col-6">

            </div>
            <div class="col-6">
                <input v-model="value" type="text" class="form-control" placeholder="Nome">
            </div>
            <div class="col-6">
                <input v-model="value" type="text" class="form-control" placeholder="Data de Nascimentp">
            </div>
            <div class="col-6">
                <input v-model="value" type="text" class="form-control" placeholder="Email">
            </div>
            <div class="col-6">
                <input v-model="value" type="text" class="form-control" placeholder="CPF">
            </div>
            <div class="col-6">
                <input v-model="value" type="text" class="form-control" placeholder="telefone">
            </div>
            <div class="col-6">
                <b-button @click="AddAgenda" variant="success">Salvar</b-button>
            </div>
           </div>
            </b-modal>
    </b-col>
    <b-col>    
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">CPF</th>
      <th scope="col">Telefone</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="agenda in listagem" :key="agenda.id">
      <th scope="row">{{agenda.nome}}</th>
      <td>{{agenda.email}}</td>
      <td>{{agenda.data_nasc}}</td>
      <td>{{agenda.cepf}}</td>
      <td>{{agenda.telefone}}</td>
      <td> 
        <b-button variant="danger">Apagar</b-button>
        <router-link :to="{name:'editar', params: 'agenda: agenda.agenda_id'}">
            <b-button variant="success">Editar</b-button>
        </router-link>
        
      </td>
    </tr>
   
  </tbody>
</table>
        
       </b-col>
  </b-row>
</b-container>
      
  </template>
  <script>
  export default {
    data() {
      return {
       listagem:[],
      };
    },
    methods: {
        adicionarListagem(){

    },
            AddAgenda(){
                this.listagem.push(
                    {nome: 'asasxa', email: 'sxasxa', data_nasc: 'xasx', cepf: 'axssaxa',telefone:'12121',agenda_id: '122'},
                    this.nome = '',
                    this.email = ''
                    )
            },
    },
    created(){
       var list = [
        {nome: 'Teste', email: 'teste@gmail.com', data_nasc: '09/03//98', cepf: '098.876.123-87', telefone: '87628374', agenda_id: '1'}
        
       ]
       this.listagem = list
    }
  
    }
  
    
  

  
</script>
