<template>
<div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="person in persons">
            <th scope="row">{{ person.id }}</th>
            <td>{{ person.name }}</td>
            <td>{{ person.age }}</td>
        </tr>
        </tbody>
    </table>
</div>
</template>

<script>
import axios from "axios";

export default {
    name:"PostComponent",

    data() {
        return {
            persons: null
        }
    },

    mounted() {
        this.getPersons()
    },

    methods: {
      getPersons(){
          axios.get('/persons')
              .then(res => {
                  this.persons = res.data
              })
      }
    },


    components: {
    }
}
</script>

<style scoped>

</style>
