<template>
    <div class="tags" id="TaggedMembers">
        Tags: <i v-for="(tag, i) in props.tags" :key="i">{{tag}}</i>
    </div>
</template>
<script setup>
    const props = defineProps({
        tags:Array
    })
</script>
<style scoped>
span{
   
}
i{
    margin: 1%;
    font-size: smaller;
    padding-right: 1%;
    font-style: normal;
    font-weight: normal;
}
i::before{
    content: "|";
    margin-right: 2%;
}
i:first-child::before{
    display: none;
}
#TaggedMembers{
    width:50%;
    padding-top: .2%;
    font-weight: bold;
    margin-left: 2%;
    font-size: smaller; 
    display: flex;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}
</style>