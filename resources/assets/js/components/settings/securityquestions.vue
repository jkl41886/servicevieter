<template>
    <div class="tab-panel active" id="Securityques" role="tabpanel">
        <div class="col-lg-12">
            <div class="col-lg-1"></div>
            <div class="col-lg-10"><br>
                <div id="Security" role="tabpanel" class="tab-pane">
                    <div class="tab-main-content row">
                        <div style="background: #f3f3f3f3;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="editabl">
                                <div class="edittable-title">
                                    <h2>
                                        Security Question
                                    </h2>
                                </div>
                                <div class="editable password password-fields">
                                    <div class="formbox">
                                        <a class="edit" v-show="active" @click="active = !active" >Edit</a>
                                        
                                        <div class="sc_btn">
                                            <a class="save" v-show="!active" @click="commit()" >Save</a>
                                            <a class="exit" v-show="!active" @click="cancel()" >Exit</a>
                                        </div>

                                        <ul class="personal-info">
                                            <li>
                                                <div class="form-group">
                                                    <label class="col-md-12 col-sm-12 col-xs-12 control-label" style="text-align:left;">
                                                        Security Questions
                                                        <sup class="text-danger">
                                                            *
                                                        </sup>
                                                    </label>
                                                    <div class="clearfix"></div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6 form-value">
                                                        <select name="paypal_status" ref="questions" class="form-control">
                                                            <option :selected="question.id == answer.security_question_id" v-for="question in questions" v-bind:value="question.id" :key="question.id">
                                                                {{question.question}}
                                                            </option>
                                                            
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6 form-value">
                                                        <span v-show="active" id="CompanyName">{{answer.security_question_answer}}</span>
                                                        <input v-show="!active" type="text" ref="answer" class="form-control" name="CompanyName" id="CompanyName" v-bind:value="answer.security_question_answer">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
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
import axios from 'axios';
export default {
    data:function(){
        return{
            active:true,
            questions:[],
            answer:{}
        }
    },
    created : function () {
        let url = "/security_questions";
        axios.post(url).then((response)=>{
            this.questions = response.data[1];
            this.answer = response.data[0];
        })
    },
    methods:{
        commit:function(){
            let url = "/security_questions/save";
            console.log(this.$refs.answer.value);
            axios.post(url,{question:this.$refs.questions.value, answer:this.$refs.answer.value})
            .then((response)=>{
                this.answer.security_question_id = this.$refs.questions.value;
                this.answer.security_question_answer = this.$refs.answer.value;
                this.active=!this.active;
            })
            
        },
        cancel:function(){
            this.active=!this.active;
            console.log("cancle!!!");
        }
    }
}
</script>
<style>
    .formbox {
        cursor: pointer;
    }
</style>
