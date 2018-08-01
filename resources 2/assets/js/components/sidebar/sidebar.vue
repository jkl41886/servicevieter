<template>
 <div>           
    <ul class="nav" style="margin-top: 74px;">

     <li v-for="item in sidebar_items" :class="{'active': item.selected}">
        <a :href="item.href" arial-controls="">
            <span class="icon-btn">
                <i :class="item.icon"></i>
            </span>
            <p v-text="item.name"></p>
        </a>
    </li>
    
</ul>

<div class="sidebar-details">
    <slot></slot>
</div>
</div>
</template>

<script>
export default {
    data()
    {
        return {
            sidebar_items:[]
        }
    },
    mounted() {
        this.sidebar_items = this.$children
    }
}
</script>
