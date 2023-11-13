<template>
    <div id="SingleTask" class="task" @click="this.$router.push(`/tasks${props.task.id}`)">
        <span class="heads">
            <span class="title"><b>{{props.task.title}}</b></span>
            <TaggedMembers :tags="props.task.tags" />
            <em class="delete-task fa-solid fa-x"></em>
        </span>
        <p>
            {{props.task.description}}
        </p>
        <div class="subs">
            <b>By: </b>{{props.task.composer}}
            <b>Department:</b>{{props.task.department}}
            <i>Timestamp</i>
        </div>
</div>
</template>
<script setup>
    import TaggedMembers from './TagedMembers.vue';
    const props = defineProps({
        task:Object
    })
</script>
<style scoped>
.title{
    text-transform: capitalize;
}
p{
    margin-top: auto;
    overflow-x: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.task{
    height: auto;
    border-bottom: 1px solid #fbfafa;
    margin: 2% 0px;
    width: 94%;
    margin: auto;
    padding-top: 2%;
}
.heads{
    width: 98%;
    display: flex;
    flex-direction: row;
    padding-right: 2%;
}
em{
    text-align: right;
    margin-left:auto;
    margin-right: 0%;
    padding:1%;
    color: red;
}

.subs{
    width: 95%;
    padding: 0 2%;
    display:flex;
    margin-bottom: 2%;
    font-size: 11px;
}
.subs>b{
    margin: 0% 0.3% 0% 2%;
}
.subs>i{
    margin-left: auto;
}
</style>