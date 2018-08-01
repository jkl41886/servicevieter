<template>
    <div class="picprofile active" style="background-image:url('img/index.jpg');margin-top: 0px;">
        <div class="picgraycolor">
            <input id="imgupload" style="display:none" type="file">
            <i aria-hidden="true" class="fa fa-camera caproimg1" onclick="$('#imgupload').trigger('click'); return false;">
            </i>
        </div>
        <div class="imgusersa" style="">
            <div class="framesa" style="background-image:url('img/pro.jpg')">
                <div class="upload">
                    <input id="imgupload2" style="display:none" type="file">
                    <i aria-hidden="true" class="fa fa-camera caproimg" onclick="$('#imgupload2').trigger('click'); return false;">
                    </i>
                </div>
            </div>
        </div>
        <h2 class="card-title">
            Pamela Anderson
        </h2>
    </div>
</template>
