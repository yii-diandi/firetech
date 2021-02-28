<template>

  <div class="box-body">
              <div class="row margin">
                <div class="col-sm-6">
                  <span class="irs js-irs-0"><span class="irs"><span class="irs-line" tabindex="-1"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min" style="visibility: visible;">$0</span><span class="irs-max" style="visibility: visible;">$5 000</span><span class="irs-from" style="visibility: visible; left: 38.1541%;">$2 047</span><span class="irs-to" style="visibility: visible; left: 75.5246%;">$3 967</span><span class="irs-single" style="visibility: hidden; left: 53.2124%;">$2 047 — $3 967</span></span><span class="irs-grid"></span><span class="irs-bar" style="left: 41.1982%; width: 37.3057%;"></span><span class="irs-shadow shadow-from" style="display: none;"></span><span class="irs-shadow shadow-to" style="display: none;"></span><span class="irs-slider from" style="left: 39.7733%;"></span><span class="irs-slider to type_last" style="left: 77.079%;"></span></span><input id="range_1" type="text" name="range_1" value="" class="irs-hidden-input" readonly="">
                </div>

                <div class="col-sm-6">
                  <input id="range_2" type="text" name="range_2" value="1000;100000" data-type="double" data-step="500" data-postfix=" €" data-from="30000" data-to="90000" data-hasgrid="true">
                </div>
              </div>
              <div class="row margin">
                <div class="col-sm-6">
                  <input id="range_5" type="text" name="range_5" value="">
                </div>
                <div class="col-sm-6">
                  <input id="range_6" type="text" name="range_6" value="">
                </div>
              </div>
              <div class="row margin">
                <div class="col-sm-12">
                  <input id="range_4" type="text" name="range_4" value="10000;100000">
                </div>
              </div>
            </div>

</template>

<script>
export default {
    name:'ionSlider',
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