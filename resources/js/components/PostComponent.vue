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
        <tr v-for="person in personsAgeMore">
            <th scope="row">{{ person.id }}</th>
            <td>{{ person.name }}</td>
            <td>{{ person.age }}</td>
        </tr>
        </tbody>
    </table>
</div>
</template>

<script>
export default {
    name:"PostComponent",

    data() {
        return {
            persons: [
                {
                id: 1,
                name: 'Vasya',
                age: 20,
                },
                {
                    id: 2,
                    name: 'Leha',
                    age: 35,
                },
                {
                    id: 3,
                    name: 'Elena',
                    age: 25,
                },
            ]
        }
    },
    methods: {
        sayHello() {
            console.log('Hello')
        }
    },

    computed: {
        personsAgeMore() {
            return this.persons.filter(function (person) {
                return person.age > 23
            })
        }
    },

    components: {
        TestComponent
    }
}
import TestComponent from "@/components/TestComponent.vue";
</script>

<style scoped>

</style>
