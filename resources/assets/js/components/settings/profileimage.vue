<template>

    <div class="picprofile active" style="background-image:url('img/index.jpg');margin-top: 0px;">
        <div class="picgraycolor">
            <input id="imgupload" style="display:none" type="file">
            <i aria-hidden="true" class="fa fa-camera caproimg1" @click="$refs.fileInput.click()">
            </i>
        </div>
        <div class="imgusersa" style="">
            <div class="framesa" style="background-image:url('img/pro.jpg')">
                <div class="upload">
                    <input id="imgupload2" style="display:none;" ref="fileInput" type="file" @change="onImageChange">
                    <i aria-hidden="true" class="fa fa-camera caproimg" v-on:click="$refs.fileInput.click()">
                    </i>
                </div>
            </div>
        </div>
        <h2 class="card-title">

            Pamela Anderson
        </h2>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    mounted() {
        console.log('Component mounted.');
    },
    data() {
        return {
            name: '',
            image: '',
            success: '',
            avatar
         };
    },
    methods: {
        onImageChange(e){
            console.log(e.target.files[0]);
            this.image = e.target.files[0];
            let reader = new FileReader();
            reader.readAsDataURL(this.image);
            reader.onload = e => {
                console.log(e);
                this.avatar = e.target.result;
            };
            axios.post('/image', {'image':this.avatar})
                 .then((res) => {
                     console.log(res);
                 })
                 .catch((err) => {
                     console.log(err);
                 })
           },
        formSubmit(e) {
            e.preventDefault();
            let currentObj = this;

            const config = {
                headers: { 'content-type': 'multipart/form-data' }
            }

            let formData = new FormData();
            formData.append('image', this.image);

            axios.post('/image', formData, config)
            .then(function (response) {
                currentObj.success = response.data.success;
            })
            .catch(function (error) {
                currentObj.output = error;
            });
        }
    }
}
</script>