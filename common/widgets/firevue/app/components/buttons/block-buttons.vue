<template>

        <div class="box-body">
              <button type="button" class="btn btn-default btn-block">.btn-block</button>
              <button type="button" class="btn btn-default btn-block btn-flat">.btn-block .btn-flat</button>
              <button type="button" class="btn btn-default btn-block btn-sm">.btn-block .btn-sm</button>
        </div>


</template>

<script>
export default {
    name:'blockButtons',
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