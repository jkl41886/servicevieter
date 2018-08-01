<template>
 
</template>

<script>
export default {
    props:{
        name:{ required:true},
        href:{ required:true},
        selected:{default:false},
        icon:{required:true}
    },
    mounted() {
        // console.log(this.$children);
    }
}
</script>
