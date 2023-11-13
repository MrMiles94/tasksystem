<style>
select{
    padding: 2%;
}
</style>
<template>
    <select :name="name">
        <option 
        v-for="(option, i) in options" 
        :key="i" 
        :value="option"
        >
            {{option}}
        </option>
    </select>
</template>
<script>
    export default {
        data(){
            return{
            }
        },
        props:{
            options:Array,
            name:String,
        }
    }
</script>