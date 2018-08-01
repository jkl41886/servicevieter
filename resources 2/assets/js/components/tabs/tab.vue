<template>
    <div v-show="this.isActive">
     <slot></slot>
                
    </div>
</template>

<script>
export default {
   props:{
        name:{ required:true },
        selected: { default:false },
        icon: {required: true},
        id: {required:true}
   },
   data(){
        return {
            isActive:false
        }
   },
    mounted() {
        this.isActive = this.selected
        if (this.isActive) {
            document.getElementById(this.id).style.display = 'block';
        }
    }
}
</script>
