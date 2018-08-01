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
                                                        <select name="paypal_status" class="form-control">
                                                            <option selected="" value="What is the first and last name of your first boyfriend or girlfriend?">What is the first and last name of your first boyfriend or girlfriend?</option>
                                                            <option value="Which phone number do you remember most from your childhood?">Which phone number do you remember most from your childhood?</option>
                                                            <option value="What was your favorite place to visit as a child?">What was your favorite place to visit as a child?</option>
                                                            <option value="Who is your favorite actor, musician, or artist?">Who is your favorite actor, musician, or artist?</option>
                                                            <option value="What is the name of your favorite pet?">
                                                                What is the name of your favorite pet?
                                                            </option>
                                                            <option value="In what city were you born?">In what city were you born?</option>
                                                            <option value="What high school did you attend?">What high school did you attend?</option>
                                                            <option value="What is the name of your first school?">
                                                                What is the name of your first school?
                                                            </option>
                                                            <option value="What is your favorite movie?">What is your favorite movie?</option>
                                                            <option value="What is your mother's maiden name?">What is your mother's maiden name?&gt;</option>
                                                            <option value="What street did you grow up on?">What street did you grow up on?</option>
                                                            <option value="What was the make of your first car?">What was the make of your first car?</option>
                                                            <option value="When is your anniversary?">When is your anniversary?</option>
                                                            <option value="What is your favorite color?">What is your favorite color?</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6 form-value">
                                                        <span v-show="active" id="CompanyName">Ashish Sharma</span>
                                                        <input v-show="!active" type="text" class="form-control" name="CompanyName" id="CompanyName" value="Ashish Sharma">
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
export default {
    data:function(){
        return{
            active:true
        }
    },
    methods:{
        commit:function(){
            this.active=!this.active;
            console.log("conmitted!!!");
        },
        cancel:function(){
            this.active=!this.active;
            console.log("cancle!!!");
        }
    }
}
</script>
