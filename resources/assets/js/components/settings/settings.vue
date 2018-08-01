<template>
    <div class="tab-main-content">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <profile-image></profile-image>
                <div class="main-content">
                    <div class="tab-section">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class=" bhoechie-tab">
                                    <div class="bhoechie-tab-content active">
                                        <div>
                                            <ul style="background-color: white;" class="nav nav-tabs" role="tablist">
                                                <!-- <li v-for="content in sidebar_contents" v-bind:class="{'active': content.selected}" role="presentation">
                                                    <a :href="content.href" v-on:click="!content.selected" aria-controls="" aria-expanded="true" data-toggle="tab" role="tab">
                                                        <i aria-hidden="true" :class="content.iclass"></i>{{content.name}}
                                                    </a>
                                                </li> -->
                                                <li class="active" role="presentation">
                                                    <a aria-controls="" aria-expanded="true" data-toggle="tab" href="#myprofile" role="tab" @click.prevent="activeView='my-profile'">
                                                        <i aria-hidden="true" class="fa fa-id-card-o">
                                                        </i> My Profile
                                                    </a>
                                                </li>
                                                <li class="" role="presentation">
                                                    <a aria-controls="" aria-expanded="false" data-toggle="tab" href="#payment" role="tab" @click.prevent="activeView='payments'">
                                                        <i aria-hidden="true" class="fa fa-money">
                                                        </i> Payments
                                                    </a>
                                                </li>
                                                <li class="" role="presentation">
                                                    <a aria-controls="" aria-expanded="false" data-toggle="tab" href="#compsaswda" role="tab" @click.prevent="activeView='notification'">
                                                        <i aria-hidden="true" class="fa fa-industry">
                                                        </i> Notification
                                                    </a>
                                                </li>
                                                <li class="" role="presentation">
                                                    <a aria-controls="" aria-expanded="false" data-toggle="tab" href="#ownerinfo" role="tab" @click.prevent="activeView='social-login'">
                                                        <i aria-hidden="true" class="fa fa-facebook">
                                                        </i>Social Logins
                                                    </a>
                                                </li>
                                                <li class="" role="presentation">
                                                    <a aria-controls="" aria-expanded="false" data-toggle="tab" href="#Securityques" role="tab" @click.prevent="activeView='security-questions'">
                                                        <i aria-hidden="true" class="fa fa-shield">
                                                        </i> Security Questions
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <component :is="activeView"></component>
                                            </div>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ProfileImage from './profileimage'

import MyProfile from './myprofile'
import Payments from './payments'
import Notification from './notification'
import SocialLogin from './sociallogin'
import SecurityQuestions from './securityquestions'

export default {
    data:function(){
        return{
            activeView:"my-profile",
        }
    },
    components:{
        ProfileImage,
        MyProfile,
        Payments,
        Notification,
        SocialLogin,
        SecurityQuestions
    }
}
</script>

