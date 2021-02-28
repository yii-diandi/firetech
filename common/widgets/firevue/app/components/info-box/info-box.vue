<template>
        <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">CPU Traffic</span>
                <span class="info-box-number">90<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
        </div>
</template>

<script>
export default {
    name:'infoBox',
    data() {
        return {

        };
    },
    created: function () {
        let that = this;
        console.log('info-box')
    },
    methods: {
      
    }
}
</script>
<style>
h3{
    font: optional;
}
</style>