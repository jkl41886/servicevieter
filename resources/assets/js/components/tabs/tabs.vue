<template>
   <div>           
    <div class="searchbar">
        <a id="nav2button" href="javascript:void(0);" class="icon" onclick="responsive_header2()">⏬</a>
        <div class="tab" role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">

                <li v-for="tab in tabs" :class="{'active' : tab.isActive}">
                    <a @click="selectTab(tab)"><i :class="tab.icon" style="width:auto"></i>{{tab.name}} </a>
                </li>
            </ul>
        </div>

        <div class="search-contain">
            <form action="">
                <div class="inner-addon left-addon">
                    <span><i class="fa fa-search"></i></span>
                    <input placeholder="Search.." name="search" type="text">
                </div>
            </form>
        </div>

    </div>

    <div class="tab-details">
        <slot></slot>
    </div>
</div>
</template>

<script>
export default {
    data()
    {
        return {
            tabs:[],
            refs:[]
        }
    },
    mounted() {
        this.tabs = this.$children;
    },
    methods:{
        selectTab(selectedTab)
        {
            this.tabs.forEach((tab)=>{
                if ( selectedTab.name == tab.name )
                {
                    tab.isActive=true;
                    document.getElementById(tab.id).style.display = 'block';
                }
                else
                {
                    tab.isActive=false;
                    document.getElementById(tab.id).style.display = 'none';
                }
            })
        }
    }
}
</script>
