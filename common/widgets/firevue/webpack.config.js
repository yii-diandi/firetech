const path = require('path');

const PATHS = {
    source: path.join(__dirname, 'app'),
    build: path.join(__dirname, 'src')
};
const VueLoaderPlugin = require('vue-loader/lib/plugin');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const UglifyJsPlugin=require('uglifyjs-webpack-plugin');

    
module.exports = {
    entry:{
        build:PATHS.source+'/app.js',//vue基础文件包
        require:PATHS.source+'/require.js',//vue基础文件包
        echarts:PATHS.source+'/echarts.js',//数据统计
        echartsThem:PATHS.source+'/echarts/echartsThem.js'
    },
    output: {
        path: PATHS.build,
        filename: '[name].js'
    },
    performance: {
        hints:'warning',
        //入口起点的最大体积
        maxEntrypointSize: 50000000,
        //生成文件的最大体积
        maxAssetSize: 30000000,
        //只给出 js 文件的性能提示
        assetFilter: function(assetFilename) {
            return assetFilename.endsWith('.js');
        }
    },
    module: {
        rules: [
            {test: /\.css$/, use:['style-loader','css-loader']},//配置处理.css文件的第三方处理规则
            {test: /\.less$/, use: ["style-loader",'css-loader','less-loader']},
            {test: /\.scss$/, use: ["style-loader",'css-loader','sass-loader']},
            {test: /\.(jpg|png|gif|bmp|jpeg)$/, use: "url-loader?limit=8000"},
            {test: /\.(tff|eot|svg|woff|woff2)$/, use: "url-loader"},
            // {test:/\.js$/, use:'babel-loader',exclude:/node_modules/},
            {test: /\.vue$/, use: 'vue-loader'}
        ]
    },
    resolve: {
        extensions: [
          '.vue', '.js'
        ],
        modules: ["node_modules"],
        alias: {
            'vue$': 'vue/dist/vue.min.js',
            '@app': path.join(__dirname, 'app'),
            '@utli': path.join(__dirname, 'app/utli'),
            '@components': path.join(__dirname, 'app/components'),
            '@src': path.join(__dirname, 'src'),
            '@api': path.join(__dirname, 'app/api'),
            '@styles': path.join(__dirname, 'app/styles')
        }
    },
    plugins:[
        new HtmlWebpackPlugin(),
        new VueLoaderPlugin()
    ],
    devServer: {
        historyApiFallback: {
          index: `app/App.vue`
        },
        host: '127.0.0.1',
        disableHostCheck: true
    },
    //压缩js
    optimization: {
            minimizer: [
                new UglifyJsPlugin({
                    uglifyOptions: {
                        compress: false
                    }
                })
            ]
    }
};
